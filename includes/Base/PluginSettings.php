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
        $links[] = '<a href="admin.php?page=uzair_plugin">Settings</a>';
        return $links;
    }
}