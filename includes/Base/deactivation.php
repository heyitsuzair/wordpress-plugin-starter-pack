<?php

namespace Includes\Base;

class deactivation
{
    public static function deactivate()
    {
        flush_rewrite_rules();
    }
}