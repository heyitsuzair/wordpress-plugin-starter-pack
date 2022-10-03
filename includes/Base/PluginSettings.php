<?php

namespace Includes\Base;

use Includes\Base\BaseController;

class PluginSettings extends BaseController
{
    public function register()
    {
        add_filter('plugin_action_links_' . $this->plugin_basename, array($this, 'settings_link'));
    }
    public function settings_link($links)
    {
        /**
         @links: Change The Page Parameter To "parent_slug" Of Your Parant Page or "menu_slug" of Your Sub Menu Page. You Can Add Or Find Your Pages And Sub Pages In "includes/Pages/Admin.php" in "setPages" and "setSubPages" function
         */
        $links[] = '<a href="admin.php?page=uzair_plugin">Settings</a>';
        return $links;
    }
}