<?php

/**
 * @package $CreateEmployeePlugin
 */

namespace Inc\Pages;

use \Inc\Base\BaseController;
use \Inc\Api\SettingsApi;

use \Inc\Api\CallBacks\AdminCallbacks;

class AdminPage extends BaseController
{

    public $settings;

    public $ticket_id;

    public $callbacks;

    public $pages;

    public $subpages;

    function register()
    {
        $this->settings = new SettingsApi();

        $this->callbacks = new AdminCallbacks();

        $this->setPages();

        $this->setSubPages();

        $this->setPages();

        $this->settings->AddPages($this->pages)->HasSubPage('')->addSubPages($this->subpages)->register();
    }

    public function setPages()
    {
        $this->pages = [
            [
                'page_title' => 'Employees',
                'menu_title' => 'Employees',
                'capability' => 'manage_options',
                'menu_slug' => 'employees',
                'callback' => [$this->callbacks, 'createEmployee'],
                'icon_url' => 'dashicons-database-add',
                'position' => 200
            ]
        ];
    }
    public function setSubPages()
    {

        $this->subpages = [
            [
                'parent_slug' => 'employees',
                'page_title' => 'Create Employee',
                'menu_title' => 'Create Employee',
                'capability' => 'manage_options',
                'menu_slug' => 'create_employee',
                'callback' => [$this->callbacks, 'createEmployee'],

            ],
            [
                'parent_slug' => 'employees',
                'page_title' => 'View Employee',
                'menu_title' => 'View Employee',
                'capability' => 'manage_options',
                'menu_slug' => 'view_employees',
                'callback' => [$this->callbacks, 'viewEmployees'],
            ]
        ];
    }


}