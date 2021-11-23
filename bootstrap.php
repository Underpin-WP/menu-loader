<?php

use Underpin\Abstracts\Underpin;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Add this loader.
Underpin::attach( 'setup', new \Underpin\Factories\Observers\Loader( 'menus', [
	'instance' => 'Underpin\Menus\Abstracts\Menu',
	'default'  => 'Underpin\Menus\Factories\Menu_Instance',
] ) );