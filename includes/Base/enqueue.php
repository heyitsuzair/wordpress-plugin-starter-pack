<?php

namespace Includes\Base;

use Includes\Base\BaseController;

class enqueue extends BaseController
{
    public function register()
    {
        add_action('admin_enqueue_scripts', array($this, 'enqueue'));
    }
    function enqueue()
    {

        // To add css file duplicate following one line code and change the path according to your needs. You Can Also create sub folders in assets folder that is available in root directory.

        wp_enqueue_style('mypluginstyle', $this->plugin_url . '/assets/index.css');

        // To add js file duplicate following one line code and change the path according to your needs. You Can Also create sub folders in assets folder that is available in root directory.

        wp_enqueue_script('mypluginscript', $this->plugin_url . '/assets/index.js');
    }
}