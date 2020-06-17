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

function _themename__pluginname_clean_p_tags($content) {
  return preg_replace('#<p>(\s|&nbsp;)*+(<br\s*/*>)*(\s|&nbsp;)*</p>#i', '', force_balance_tags($content));
}

add_filter( 'the_content', '_themename__pluginname_clean_p_tags', 20, 1 );

function _themename__pluginname_init() {
  require_once 'includes/shortcodes/button/button.php';
  require_once 'includes/shortcodes/slider/slider.php';
}

add_action( 'init', '_themename__pluginname_init');

require_once 'includes/enqueue-assets.php';