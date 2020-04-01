<?php
/**
 * @package Huuguu
 */
/**
Plugin Name: Share Huuguu
Plugin URI: https://huuguu.com
Description: Share Huuguu - Para compartilhar links nas redes sociais, o famoso Share.
Version: 1.0.0
Author: Hugo Santos
Author URI: https://huuguu.com
License: GPLv2
Text Domain: huuguu-share
*/

if ( ! defined('ABSPATH') ) {
exit;
}

	// Loads the language file.
	load_plugin_textdomain('huuguu-backtotop', false, dirname(plugin_basename(__FILE__)) . '/languages');

	add_action('admin_menu', 'huuguu_share_submenu', 11 );	
	function huuguu_share_submenu() {
		add_submenu_page(
			'admin-site-compacto',  
			'Share', 
			'Share', 
			'manage_options', 
			'huuguu_share_manutencao',
			'menu_huuguu_share_rotina_callback'
		);
	}
	
  require( plugin_dir_path( __FILE__ ) . 'huuguu-share.php');	
	
	function current_location(){
	if (isset($_SERVER['HTTPS']) &&
	($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) ||
	isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&
	$_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
	$protocol = 'https://';
	} else {
	$protocol = 'http://';
	}
	return $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
	}
