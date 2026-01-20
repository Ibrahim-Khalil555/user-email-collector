<?php

class UEC_Activator {

    public static function activate() {
        UEC_DB::create_table();
    }
}
