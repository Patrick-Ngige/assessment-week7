<?php
/**
 * @package CreateEmployeePlugin
 */

namespace Inc\Pages;

class CreateEmployee
{
    public function register()
    {
        $this->create_table_to_db();
        $this->add_employee_to_db();
    }

    //CREATING THE TABLE IN DATABASE
    function create_table_to_db()
    {
        global $wpdb;

        $table_name = $wpdb->prefix . 'employees';

        $employee_details = "CREATE TABLE IF NOT EXISTS " . $table_name . "(
            id int NOT NULL ,
            name text NOT NULL,
            phone_number  text NOT NULL,
            email text NOT NULL,
            PRIMARY KEY (id) 
        );";

        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($employee_details);
    }

    function add_employee_to_db()
    {

        global $wpdb;
        

        $addmsg = false;
        $errormsg = false;

        $table_name = $wpdb->prefix . 'employees';

        if (isset($_POST['createbtn'])) {
            $data = [
                'id' => $_POST['id'],
                'name' => $_POST['name'],
                'phone_number' => $_POST['phone_number'],
                'email' => $_POST['email']
                
            ];

            global $wpdb;   

            global $successmessage;
            global $errormessage;

            $successmessage = false;
            $errormessage = false;

            $results = $wpdb->insert($table_name, $data, $format = NULL);

           
        }
    }

      
}