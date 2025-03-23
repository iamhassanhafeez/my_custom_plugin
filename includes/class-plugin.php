<?php
class MyPlugin {
    public function __construct() {
        add_action('init', [$this, 'custom_init']);
    }

    public function custom_init() {
        error_log('Plugin Initialized');
    }
}
?>