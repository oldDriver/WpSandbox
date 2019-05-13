<?php
/**
 * @wordpress-plugin
 * Plugin Name: Sandbox
 * Plugin URI: http://plugins.local
 * Decsription: Sandbox for plugin
 * Version: 0.0.1
 * Author: Alex Yemelyanov
 */
namespace Sandbox;

use Sandbox\Includes\Spy;
use Sandbox\Includes\Dolly;

if(!defined('WPINC')) {
    return;
}
/**
 * Autoloader for classes in the plugin by namespaces
 */
spl_autoload_extensions(".php");
spl_autoload_register(function($class) {
    $file = dirname(__DIR__) . '/'. strtolower(str_replace('\\', '/', $class)).'.php';
    if (file_exists($file)) {
        require_once $file;
    }
});

/**
 * @author aymelyanov
 * This is dummy class plugin to test namespaces and templates
 */
class Sanbox
{
    public function dolly()
    {
        $dolly = new Dolly();
        $dolly->hello();
    }

    public function adminMenu()
    {
        $spy = new Spy();
        $spy->sayHello('Alex');
    }
}

// This is test line

add_action('admin_menu', [new Sanbox(), 'adminMenu']);
add_action('admin_notices', [new Sanbox(), 'dolly']);
