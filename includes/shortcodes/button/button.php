<?php

function _themename_button($atts = [], $content = null, $tag = '') {
  extract(shortcode_atts([
    'color'  => 'red',
    'text'  => 'Press Me!'
  ], $atts, $tag));

  return '<button class="_themename-button" style="background-color: ' . esc_attr($color) . '">' . do_shortcode($content) . '</button>';
}

add_shortcode('_themename_button', '_themename_button');