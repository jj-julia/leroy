<?php
/**
 * Helpers for theming, available for all themes in their template files and functions.php.
 * This file is included right before the themes own functions.php
 */
 

/**
 * Print debuginformation from the framework.
 */
function get_debug() {
  $ly = CLeroy::Instance();
  $html = null;
  if(isset($ly->config['debug']['display-leroy'])) {
    $html = "<hr><h3>Debug Information</h3><p>The content of CLeroy:</p><pre>" . htmlent(print_r($ly, true)) . "</pre>";
  }    
  return $html;
}


/**
 * Prepend the base_url.
 */
function base_url($url) {
  return CLeroy::Instance()->request->base_url . trim($url, '/');
}


/**
 * Return the current url.
 */
function current_url() {
  return CLeroy::Instance()->request->current_url;
}
