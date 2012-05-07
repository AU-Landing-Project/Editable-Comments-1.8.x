<?php


function editable_comments_init() {
  // add in our own css
  elgg_extend_view('css/elgg', 'editablecomments/css');
  
  // extend the comment view with our form
  elgg_extend_view('annotation/generic_comment', 'editablecomments/generic_comment');
  
  // register our update action
  elgg_register_action('editablecomments/edit', elgg_get_plugins_path() . "editablecomments/actions/edit.php");
}

register_elgg_event_handler('init','system','editable_comments_init');
