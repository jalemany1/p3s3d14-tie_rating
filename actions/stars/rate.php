<?php

$guid = get_input('guid', false);
$entity = get_entity($guid);

if (!elgg_instanceof($entity)) {
	register_error(elgg_echo('stars:rate:error'));
	forward(REFERER);
}

$owner = elgg_get_logged_in_user_entity();

$annotation_name = 'starrating';
$annotation_value = get_input($annotation_name);

if (elgg_annotation_exists($guid, $annotation_name, $owner->guid)) {
	$annotation = elgg_get_annotations(array(
		'annotation_name' => $annotation_name,
		'annotation_owner_guid' => $owner->guid,
		'wheres' => array("n_table.entity_guid = $guid"),
	))[0];
	$id = update_annotation($annotation->id, $annotation_name, (float) $annotation_value, '', $owner->guid, ACCESS_PRIVATE);
} else {
	$id = create_annotation($guid, $annotation_name, (float) $annotation_value, '', $owner->guid, ACCESS_PRIVATE);
}

if ($id) {
	system_message(elgg_echo('stars:rate:success'));
} else {
	register_error(elgg_echo('stars:rate:error'));
}

forward(REFERER);