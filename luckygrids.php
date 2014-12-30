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
  return '<script src="//luckygrids.io/grids/'.$id.'.js" async="true"></script><div id="luckygrid'.$id.'"></div>';
}

function luckygrids_shortcode_atts($atts) {
  $supported = array(
    'id' => '0'
  );
  return shortcode_atts($supported, $atts);
}

function luckygrids_shortcode($atts) {
  $atts = luckygrids_shortcode_atts($atts);
  return luckygrids_embed_code($atts['id']);
}

add_shortcode('luckygrid', 'luckygrids_shortcode');
add_shortcode('luckygrids', 'luckygrids_shortcode');
