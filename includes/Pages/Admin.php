<?php

namespace Includes\Pages;

use \Includes\Api\Callbacks\AdminCallbacks;
use \Includes\Base\BaseController;
use \Includes\Api\SettingsApi;

class Admin extends BaseController
{
    public $settings;
    public $pages;
    public $subpages;
    public $callbacks;

    public function register()
    {
        $this->settings = new SettingsApi();
        $this->callbacks = new AdminCallbacks();

        $this->setPages();
        $this->setSubPages();

        $this->settings->AddPages($this->pages)->withSubPage('Dashboard')->addSubPages($this->subpages)->register();
    }

    // to add new pages to wordpress admin panel
    public function setPages()
    {
        $this->pages = [
            [
                'page_title' => 'My Plugin', // replace it according to your needs
                'menu_title' => 'My Plugin',  // replace it according to your needs
                'capability' => 'manage_options',
                'menu_slug' => 'my_plugin', // replace it according to your needs
                'callback' => array($this->callbacks, 'adminDashboard'), // replace it according to your needs (You can create a new function in "Api/Callbacks/AdminCallbacks.php file to include template")
                'icon_url' => 'dashicons-store', // replace it according to your needs
                'position' => 110 // replace it according to your needs
            ],
            // [
            //     'page_title' => 'My Plugin', 
            //     'menu_title' => 'My Plugin',
            //     'capability' => 'manage_options',
            //     'menu_slug' => 'my_plugin',
            //     'callback' => array($this->callbacks, 'adminDashboard'),
            //     'icon_url' => 'dashicons-store',
            //     'position' => 110
            // ],
        ];
    }

    public function setSubPages()
    {
        $this->subpages = [
            [
                'parent_slug' => 'my_plugin', // replace it according to your needs
                'page_title' => 'Custom Post Type', // replace it according to your needs
                'menu_title' => 'Custom Post Types', // replace it according to your needs
                'capability' => 'manage_options', // replace it according to your needs
                'menu_slug' => 'uzair_cpt', // replace it according to your needs
                'callback' => array($this->callbacks, 'adminDashboard'), // replace it according to your needs (You can create a new function in "Api/Callbacks/AdminCallbacks.php file to include template")
            ],
            // [
            //     'parent_slug' => 'my_plugin',
            //     'page_title' => 'Widget Page',
            //     'menu_title' => 'Widget',
            //     'capability' => 'manage_options',
            //     'menu_slug' => 'uzair_widget',
            //     'callback' => array($this->callbacks, 'adminDashboard'),
            // ]
        ];
    }
}