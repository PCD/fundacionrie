<?php
function rie_alpha_preprocess_html(&$vars) {
  // custom functionality here
  if ( drupal_is_front_page() ) {
    // Add some custom css and javascript
    drupal_add_js(drupal_get_path('theme', 'rie') . '/js/jcarousel/lib/jquery.jcarousel.js');
    drupal_add_css(drupal_get_path('theme', 'rie') . '/css/home-carrucel.css');
    drupal_add_js(drupal_get_path('theme', 'rie') . '/js/home-carrucel.js');
  }
}