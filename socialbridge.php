<?php

/*
Plugin Name: Social Bridge Plugin
Plugin URI:  https://developer.wordpress.org/plugins/the-basics/
Description: Social Bridge CPT with custom roles and rest API support
Version:     1.0
Author:      Sourabh Dudakiya
Author URI:  
Text Domain: socialbridge
Domain Path: /languages
License:     GPL3
 
Social Bridge is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
Social Bridge is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with Social Bridge. If not, see http://www.gnu.org/licenses/gpl-3.0.html.
*/


/*
* Register Social Bridge post type
*/
require_once plugin_dir_path( __FILE__ ) . 'includes/posttypes.php';
register_activation_hook( __FILE__, 'socialbridge_rewrite_flush' );

/*
* Register Social Bridge logger role
*/
require_once plugin_dir_path( __FILE__ ) . 'includes/roles.php';
register_activation_hook( __FILE__, 'socialbridge_register_role' );
register_deactivation_hook( __FILE__, 'socialbridge_remove_role' );

/**
 * Add Capabilities for Social-bridge
 */
register_activation_hook( __FILE__, 'socialbridge_add_capabilities' );
register_deactivation_hook( __FILE__, 'socialbridge_remove_capabilities' );

/*
* Add in CMB2 for new fields
*/
require_once plugin_dir_path( __FILE__ ) . 'includes/example-functions.php';
