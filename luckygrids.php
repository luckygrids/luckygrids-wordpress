<?php
/*
 * Plugin Name: LuckyGrids
 * Version: 0.1.0
 * Plugin URI: http://luckygrids.io/wordpress
 * Description: Embed LuckyGrids using a shortcode.
 * Author: Ryan Burnette
 * Author URI: http://ryanburnette.com
 * Requires at least: 2.5
 * Tested up to: 4.0.1
 */

function luckygrids_embed_code($id) {
  return '<script src="//luckygrids.io/grids/'+$id+'.js" async="true"></script><div id="luckygrid'+$id+'"></div>';
}

function luckygrids_shortcode($atts) {
  $defaults = array();
  $a = shortcode_atts($defaults, $atts);
  $id = $a['id'];
  return luckygrids_embed_code($id);
}

add_shortcode('luckygrid', 'luckygrids_shortcode');
add_shortcode('luckygrids', 'luckygrids_shortcode');

