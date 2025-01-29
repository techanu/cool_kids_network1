<?php
/**
 * Plugin Name: Cool Kids Network
 * Description: A custom user management system for the Cool Kids Network.
 * Version: 1.0.0
 * Author: ANURAG
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

require_once plugin_dir_path(__FILE__) . 'includes/class-cool-kids-network.php';

function ckn_activate_plugin() {
    require_once plugin_dir_path(__FILE__) . 'includes/class-cool-kids-network.php';
    Cool_Kids_Network::activate();
}
register_activation_hook(__FILE__, 'ckn_activate_plugin');

function ckn_deactivate_plugin() {
    require_once plugin_dir_path(__FILE__) . 'includes/class-cool-kids-network.php';
    Cool_Kids_Network::deactivate();
}
register_deactivation_hook(__FILE__, 'ckn_deactivate_plugin');

function ckn_init_plugin() {
    new Cool_Kids_Network();
}
add_action('plugins_loaded', 'ckn_init_plugin');
