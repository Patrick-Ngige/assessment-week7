<?php
/**
 * @package CreateEmployeePlugin
 */

/*
    Plugin Name:  Create Employee
    Plugin URI: http://assessment7.org
    Description: A plugin to add and view employees 
    Version: 1.0.0
    Author: PK
    Author URI: http://pk.org
    Licence: GPLv2 
*/

// security check
defined('ABSPATH') or die('Security Breach!!!');


// Checking if composer exists
if(file_exists(dirname(__FILE__).'/vendor/autoload.php')){
    require_once(dirname(__FILE__).'/vendor/autoload.php');

}

function activate_CreateEmployeePlugin(){
    Inc\Base\Activate::activate();
}

function deactivate_CreateEmployeePlugin(){
    Inc\Base\Deactivate::deactivate();
}

register_activation_hook(__FILE__, 'activate_CreateEmployeePlugin');

register_deactivation_hook(__FILE__, 'deactivate_CreateEmployeePlugin');
//class as a service
if(class_exists('Inc\\Init')){
    Inc\Init::register_services(); 
}