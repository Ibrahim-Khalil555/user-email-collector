<?php

class UEC_Admin {

    public function __construct() {
        add_action( 'admin_menu', [ $this, 'menu' ] );
    }

    public function menu() {
        add_menu_page(
            'User Emails',
            'User Emails',
            'manage_options',
            'uec-emails',
            [ $this, 'page' ]
        );
    }

    public function page() {
        $emails = UEC_DB::get_emails();
        include UEC_PATH . 'admin/views/email-list-page.php';
    }
}
