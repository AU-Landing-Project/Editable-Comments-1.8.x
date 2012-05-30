<?php


// if the user looking at the comment can edit, show the edit form.
// allow other plugins to cancel this (e.g. if the comment is over a certain age)
if (elgg_trigger_plugin_hook('editablecomments:canedit', 'comment', array('annotation' => $vars['annotation']), true)
    && $vars['annotation']->canEdit()
) {
                   
  //display an edit link that will open up an edit area                                                   
  echo "<a class=\"editablecomments_toggle\" onclick=\"javascript:$('#editablecomments_form_{$vars['annotation']->id}').slideToggle('fast');\">".elgg_echo('comment:edit')."</a>";

  echo "<div class=\"editablecomments_form\" id=\"editablecomments_form_{$vars['annotation']->id}\">";
  echo elgg_view_form('editablecomments/edit', array(), array('annotation' => $vars['annotation']));
  echo "</div>";

} //end of can edit if statement
