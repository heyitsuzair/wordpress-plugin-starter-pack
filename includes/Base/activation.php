<?php

namespace Includes\Base;

class activation
{
    public static function activate()
    {
        flush_rewrite_rules();
    }
}