<?php

/**
 * Entity rating form
 */

$eguid = get_input('eguid', null);
$vars['entity'] = get_entity($eguid);

echo elgg_view_form('stars/rate', [], $vars);