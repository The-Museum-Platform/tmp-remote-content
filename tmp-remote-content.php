<?php
/**
 * Plugin Name: The Museum Platform Remote Content shortcode
 * Plugin URI: https://themuseumplatform.com/
 * Description: Functionality to pull in WordPress content into any WordPress site with a shortcode. We like it best if it's pulling in TMP content but hey, whatever works for you!
 * Version: 0.1
 * Author: Jeremy Ottevanger / The Museum Platform
 * 
 * created with inspiration and code from 
 *      https://codeart.studio/fetch-and-display-remote-posts-via-wordpress-rest-api/
 *      Remote Content Shortcode (http://www.doublesharp.com)
 *      https://braadmartin.com/saving-shortcode-data-in-meta-in-wordpress/
 * plus some independent thought
 */
require_once('tmp-remote-content.class.php');
$tmpRC = new TmpRestContent();
$tmpRC->add_shortcode();

 
?>