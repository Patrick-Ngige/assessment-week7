<?php
/**
 * @package CreateEmployeePlugin
 */
namespace Inc\Base;
class Deactivate{
    static function deactivate(){
        flush_rewrite_rules();
    }
}