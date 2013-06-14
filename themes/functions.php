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
  if(isset($ly->config['debug']['display-leroy']) && $ly->config['debug']['display-leroy']) {
    $html = "<hr><h3>Debuginformation</h3><p>The content of CLeroy:</p><pre>" . htmlent(print_r($ly, true)) . "</pre>";
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
 * Prepend the theme_url, which is the url to the current theme directory.
 */
function theme_url($url) {
  $ly = CLeroy::Instance();
  return "{$ly->request->base_url}themes/{$ly->config['theme']['name']}/{$url}";
}


/**
 * Return the current url.
 */
function current_url() {
  return CLeroy::Instance()->request->current_url;
}

/**
* Render all views.
*/
function render_views() {
  return CLeroy::Instance()->views->Render();
}