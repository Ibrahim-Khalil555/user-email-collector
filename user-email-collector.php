<?php
/**
 * Plugin Name: User Email Collector
 * Description: Collects email addresses of users via a simple form.
 * Version: 1.0.0
 * Author: Ibrahim Khalil
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'UEC_PATH', plugin_dir_path( __FILE__ ) );

require_once UEC_PATH . 'includes/class-uec-activator.php';
require_once UEC_PATH . 'includes/class-uec-db.php';
require_once UEC_PATH . 'includes/class-uec-form.php';
require_once UEC_PATH . 'includes/class-uec-admin.php';

register_activation_hook( __FILE__, [ 'UEC_Activator', 'activate' ] );

new UEC_Form();
new UEC_Admin();
