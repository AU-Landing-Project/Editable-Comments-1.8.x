<?php


// if the user looking at the comment can edit, show the delete link
if ($vars['annotation']->canEdit()) {
                   
  //display an edit link that will open up an edit area                                                   
  echo "<a class=\"editablecomments_toggle\" onclick=\"javascript:$('#editablecomments_form_{$vars['annotation']->id}').slideToggle('fast');\">".elgg_echo('comment:edit')."</a>";

  echo "<div class=\"editablecomments_form\" id=\"editablecomments_form_{$vars['annotation']->id}\">";
  echo elgg_view_form('editablecomments/edit', array(), array('annotation' => $vars['annotation']));
  echo "</div>";

} //end of can edit if statement
