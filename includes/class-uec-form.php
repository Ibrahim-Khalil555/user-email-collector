<?php

class UEC_Form {

    public function __construct() {
        add_shortcode( 'uec_form', [ $this, 'render_form' ] );
        add_action( 'init', [ $this, 'handle_submission' ] );
    }

    public function render_form() {
        ob_start();
        ?>
        <form method="post">
            <input type="email" name="uec_email" placeholder="Enter your email" required>
            <input type="submit" name="uec_submit" value="Submit">
        </form>
        <?php
        return ob_get_clean();
    }

    public function handle_submission() {
        if ( isset( $_POST['uec_submit'] ) && ! empty( $_POST['uec_email'] ) ) {
            UEC_DB::insert_email( $_POST['uec_email'] );
        }
    }
}
