<?php

use Underpin\Abstracts\Underpin;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Add this loader.
Underpin::attach( 'setup', new \Underpin\Factories\Observers\Loader( 'menus', [
	'abstraction_class' => 'Underpin\Menus\Abstracts\Menu',
	'default_factory'  => 'Underpin\Menus\Factories\Menu_Instance',
] ) );