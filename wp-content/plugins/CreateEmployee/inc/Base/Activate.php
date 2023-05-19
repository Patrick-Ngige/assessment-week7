<?php
/**
 * @package CreateEmployeePlugin
 */

 namespace Inc\Base;
 class Activate{
    static function activate(){
        // CreateEmployee::CreateEmployee();
        flush_rewrite_rules();
    }
 }