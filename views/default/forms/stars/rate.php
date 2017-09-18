<?php

/**
 * Entity rating form
 */
$entity = elgg_extract('entity', $vars, false);
$annotation_name = 'starrating';

if (!elgg_instanceof($entity)) {
	return;
}

$subject_link = elgg_view('output/url', array(
	'href' => $entity->getURL(),
	'text' => $entity->name,
	'is_trusted' => true,
));

echo elgg_view_field(array(
	'#type' => 'stars',
	'name' => $annotation_name,
	'value' => 0,
	'#label' => elgg_echo('rating_name:starrating', array($subject_link)),
	'#help' => elgg_echo('rating_name:starrating:help'),
	'class' => 'elgg-stars-rating-input',
	'data-guid' => $entity->guid,
));

echo elgg_view_field(array(
	'#type' => 'hidden',
	'name' => 'guid',
	'value' => $entity->guid,
));