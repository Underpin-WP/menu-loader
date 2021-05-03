<?php

namespace Underpin_Menus\Factories;

use Underpin\Traits\Instance_Setter;
use Underpin_Menus\Abstracts\Menu;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Menu_Instance extends Menu {
	use Instance_Setter;

	public function __construct( $args ) {
		$this->set_values( $args );
	}

}