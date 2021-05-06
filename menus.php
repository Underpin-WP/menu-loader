<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Add this loader.
add_action( 'underpin/before_setup', function ( $file, $class ) {
	require_once( plugin_dir_path( __FILE__ ) . 'Menu.php' );
	require_once( plugin_dir_path( __FILE__ ) . 'Menu_Instance.php' );
	Underpin\underpin()->get( $file, $class )->loaders()->add( 'menus', [
		'instance' => 'Underpin_Menus\Abstracts\Menu',
		'default'  => 'Underpin_Menus\Factories\Menu_Instance',
	] );
}, 10, 2 );