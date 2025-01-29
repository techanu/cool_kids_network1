<?php

class Cool_Kids_Network {
    public function __construct() {
        add_action('init', [$this, 'register_custom_roles']);
    }

    public static function activate() {
        self::register_custom_roles();
    }

    public static function deactivate() {
        remove_role('cool_kid');
        remove_role('cooler_kid');
        remove_role('coolest_kid');
    }

    public function register_custom_roles() {
        add_role('cool_kid', 'Cool Kid', ['read' => true]);
        add_role('cooler_kid', 'Cooler Kid', ['read' => true]);
        add_role('coolest_kid', 'Coolest Kid', ['read' => true]);
    }
}
