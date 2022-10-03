<?php

namespace Includes;

final class init
{
    static function get_services()
    {
        return [
            Pages\Admin::class,
            Base\enqueue::class,
            Base\PluginSettings::class
        ];
    }
    static function register_services()
    {
        foreach (self::get_services() as $class) {
            $service = self::instantiate($class);
            if (method_exists($service, 'register')) {
                $service->register();
            }
        }
    }
    /**
    @param class $class from services array
    @return new instance of class
     */
    private static function instantiate($class)
    {
        $service = new $class();

        return $service;
    }
}