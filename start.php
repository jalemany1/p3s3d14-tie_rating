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

	/* Rate friends */
	//  - Register action
	elgg_register_action('stars/rate', __DIR__ . '/actions/stars/rate.php');
	//  - Register menu action
	//elgg_register_plugin_hook_handler('register', 'menu:user_hover', 'add_rate_menu');
	// 	- Stars JS and CSS
	elgg_define_js('jquery.rateit', array(
		'src' => __DIR__ . '/vendors/rateit/jquery.rateit.min.js',
		'deps' => array('jquery'),
	));
	elgg_require_js('stars/init');
	elgg_require_js('events');
	elgg_extend_view('css/elgg', 'stars/css');
	elgg_register_ajax_view('popup/rate-user');

}