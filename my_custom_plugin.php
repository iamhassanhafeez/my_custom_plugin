<?php
/** 
 * Plugin Name: My Custom Plugin 
 * Plugin URI: mailto:iamhassanhafeez@gmail.com 
 * Author: Hassan Hafeez
 * Description: A plugin created for test purpose. 
 * Version: 1.0.0 
 * License: GPL2 
 */


if (!defined('ABSPATH')) exit;

require_once plugin_dir_path(__FILE__) . 'includes/class-plugin.php';

function my_plugin_init() {
    new MyPlugin();
}
add_action('plugins_loaded', 'my_plugin_init');

try{
    if(!file_exists('config.php')){
    throw new Exception('Config file is missing');
}
}

catch(Exception $e){
    error_log($e->getMessage());
}
?>