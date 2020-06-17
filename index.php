<?php

/*
Plugin Name: _themename _pluginname
Plugin URI:
Author: Paul Brighton
Author URI: http://www.yummypixels.co.uk/
Description: Adding Shortcodes for _themename
Version: 1.0.0
License: GNU General Public License version 3.0 & Envato Regular/Extended License
License URI: http://www.gnu.org/licenses/gpl-3.0.html & http://themeforest.net/licenses
Text Domain: _themename-_pluginname
Domain Path: /languages
*/

if( !defined('WPINC')) {
  die;
}

function _themename__pluginname_init() {
  require_once 'includes/shortcodes/button/button.php';
}

add_action( 'init', '_themename__pluginname_init');

require_once 'includes/enqueue-assets.php';