<?php

/**
 * Tie Rating
 *
 * @author Jose Alemany Bordera <jalemany1@dsic.upv.es>
 * @copyright Copyright (c) 2017, J. Alemany
 */
require_once __DIR__ . '/autoloader.php';

elgg_register_event_handler('init', 'system', 'tie_rating_init');

/**
 * Initialize the plugin
 * @return void
 */
function tie_rating_init() {

	elgg_register_simplecache_view('stars/lib.js');

	elgg_extend_view('css/elgg', 'stars/css');

	//  - Register action
	elgg_register_action('stars/rate', __DIR__ . '/actions/stars/rate.php');

	//  - Register menu action
	//elgg_register_plugin_hook_handler('register', 'menu:user_hover', 'add_rate_menu');
	
	elgg_require_js('events');
	elgg_register_ajax_view('popup/rate-user');

	elgg_extend_view('input/stars', 'stars/require');

}