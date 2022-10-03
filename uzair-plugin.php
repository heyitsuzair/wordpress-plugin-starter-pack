<?php

/**
 * Plugin Name:       My Basics Plugin
 * Plugin URI:        https://github.com/heyitsuzair
 * Description:       First Plugin
 * Version:           1.1
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Muhammad Uzair
 * Author URI:        https://github.com/heyitsuzair
 * Text Domain:       my-basics-plugin
 * License:           GPL v2 or later
 * Text Domain:       uzair-plugin
 */


// if (!defined('ABSPATH')) {
//     die;
// }

defined('ABSPATH') or die('You Sneaky Developer. What Are You Doin Here?');

if (file_exists(dirname(__FILE__) . '/vendor/autoload.php')) {
    require_once dirname(__FILE__) . '/vendor/autoload.php';
}


// code that run when plugin is activated
function activate_plugin()
{
    Includes\Base\activation::activate();
}
// code that run when plugin is deactivated
function deactivate_plugin()
{
    Includes\Base\deactivation::deactivate();
}
register_activation_hook(__FILE__, 'activate_plugin');
register_deactivation_hook(__FILE__, 'deactivate_plugin');

if (class_exists('Includes\init')) {
    Includes\init::register_services();
}