<?php

/**
 *
 * @wordpress-plugin
 * Plugin Name:       Magic Wand
 * Plugin URI:        https://wiz.farm
 * Description:       Exploit the limitless potentials of Wordpress, add dynamic content on all your pages with the semplicity of Twig placeholders.
 * Version:           1.0.1
 * Author:            Wiz Farm
 * Author URI:        https://wand.wiz.farm/
 * Text Domain:       magic-wand
 * License:           GPL-3.0
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 *
 * Magic Wand is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * any later version.
 *
 * Magic Wand is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 */

// If this file is called directly, abort.
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

define('_URL', plugins_url(DIRECTORY_SEPARATOR, __FILE__));
define('MAGIC_WAND_PATH', str_replace('/', DIRECTORY_SEPARATOR, plugin_dir_path(__FILE__)));

/**
 * Load plugin
 *
 * @since 1.0.1
 */
add_action('plugins_loaded', function () {
    // Load localization file
    load_plugin_textdomain('magic-wand');
    
    // Require the main plugin file
    require_once( __DIR__ . DIRECTORY_SEPARATOR . 'core' . DIRECTORY_SEPARATOR . 'plugin.php' );
    $plugin = \MagicWand\Plugin::instance();
    do_action('magic-wand/loaded');
});


/*
$wp_uploads_dir = wp_get_upload_dir();
$autoload = $wp_uploads_dir['basedir'].DIRECTORY_SEPARATOR.'blocks'.DIRECTORY_SEPARATOR.'autoload.php';
$autoload = str_replace('/', DIRECTORY_SEPARATOR, $autoload);
include_once($autoload);
*/