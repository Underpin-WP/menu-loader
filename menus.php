<?php

use Underpin\Abstracts\Underpin;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Add this loader.
Underpin::attach( 'setup', new \Underpin\Factories\Observer( 'menus', [
	'update' => function ( Underpin $plugin ) {
	require_once( plugin_dir_path( __FILE__ ) . 'Menu.php' );
	require_once( plugin_dir_path( __FILE__ ) . 'Menu_Instance.php' );
	$plugin->loaders()->add( 'menus', [
		'instance' => 'Underpin_Menus\Abstracts\Menu',
		'default'  => 'Underpin_Menus\Factories\Menu_Instance',
	] );
	},
] ) );