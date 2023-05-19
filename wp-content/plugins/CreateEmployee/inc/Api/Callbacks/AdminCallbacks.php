<?php
/**
 * @package CreateEmployeePlugin
 */

namespace Inc\Api\CallBacks;

use Inc\Base\BaseController;

class AdminCallbacks extends BaseController{

    public function viewEmployees(){
        return require_once $this->plugin_path.'templates/viewemployee.php'; 
    }

    public function createEmployee(){
        return require_once $this->plugin_path.'templates/createemployee.php';
    }


}