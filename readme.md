# Underpin Menu Loader

Loader That assists with addming navigation menus to a WordPress website.

## Installation

### Using Composer

`composer require underpin/menu-loader`

### Manually

This plugin uses a built-in autoloader, so as long as it is required _before_
Underpin, it should work as-expected.

`require_once(__DIR__ . '/underpin-menus/menus.php');`

## Setup

1. Install Underpin. See [Underpin Docs](https://www.github.com/underpin-wp/underpin)
1. Register new menus menus as-needed.

## Example

A very basic example could look something like this.

```php
// Register menu
underpin()->menus()->add( 'example-menu', [
	'name'        => __( 'translate-able name', 'domain' ), // required. Fills "description" in register_nav_menu
	'location'    => 'example-menu'                         // Required. See register_nav_menu
] );
```

Alternatively, you can extend `Menu` and reference the extended class directly, like so:

```php
underpin()->menus()->add('menu-key','Namespace\To\Class');
```