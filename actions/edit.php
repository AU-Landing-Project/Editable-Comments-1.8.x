<?php

//get the required variables
$annotation_id = get_input("annotation_id");
$post_comment = get_input("postComment");
$annotation = get_annotation($annotation_id);
$commentOwner = $annotation->owner_guid;
$access_id = $annotation->access_id;
		
if($annotation &&
   $annotation->canEdit() &&
   elgg_trigger_plugin_hook('editablecomments:canedit', 'comment', array('annotation' => $annotation), true)){
  //can edit? Either the comment owner or admin can
  $result = update_annotation($annotation_id, "generic_comment", $post_comment, "",$commentOwner, $access_id);
  
  if($result){
	system_message(elgg_echo("comment:edited"));
	forward($annotation->getEntity()->getURL());
  }   		
}
else{
  system_message(elgg_echo("comment:error"));
}
		
forward(REFERER); 
