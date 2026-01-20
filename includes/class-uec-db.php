<?php

class UEC_DB {

    public static function create_table() {
        global $wpdb;

        $table = $wpdb->prefix . 'uec_emails';

        $sql = "CREATE TABLE IF NOT EXISTS $table (
            id INT AUTO_INCREMENT PRIMARY KEY,
            email VARCHAR(255) NOT NULL,
            created_at DATETIME DEFAULT CURRENT_TIMESTAMP
        )";

        require_once ABSPATH . 'wp-admin/includes/upgrade.php';
        dbDelta( $sql );
    }

    public static function insert_email( $email ) {
        global $wpdb;

        $wpdb->insert(
            $wpdb->prefix . 'uec_emails',
            [ 'email' => sanitize_email( $email ) ]
        );
    }

    public static function get_emails() {
        global $wpdb;

        return $wpdb->get_results( "SELECT * FROM {$wpdb->prefix}uec_emails ORDER BY created_at DESC" );
    }
}
