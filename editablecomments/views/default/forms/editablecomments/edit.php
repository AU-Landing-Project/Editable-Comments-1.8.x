<?php

echo "<label>" . elgg_echo('comment:edit') . "</label><br>";
echo elgg_view('input/longtext', array('name' => 'postComment', 'value' => $vars['annotation']->value));
echo elgg_view('input/submit', array('name' => 'submit', 'value' => elgg_echo('save')));
echo elgg_view('input/hidden', array('name' => 'annotation_id', 'value' => $vars['annotation']->id));
