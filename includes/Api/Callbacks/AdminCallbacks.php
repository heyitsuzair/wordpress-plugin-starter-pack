<?php

namespace Includes\Api\Callbacks;

use Includes\Base\BaseController;

class AdminCallbacks extends BaseController
{
    public function adminDashboard()
    {
        return require_once($this->plugin_path . '/templates/admin.php');
    }

    // please use the following function to add a new template to any submenu or parent page
    /** 
     @functionNameHere This is the name that you will pass in 'callback' => array($this->callbacks, 'adminDashboard'), in Admin.php, you will replace "adminDashboard" with the name you will set below for your function
     */
    // public function functionNameHere ()
    // {
    //     return require_once($this->plugin_path . '/templates/admin.php');
    // }
}