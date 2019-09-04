<?php

namespace ishop;

use ishop\TSingletone;

class Registry
{
    use TSingletone;

    public static $properties = [];

    public function setProperty($name, $value)
    {
        self::$properties[$name] = $value;
    }

    public function getProperty($name)
    {
        if (self::$properties[$name]) {
            return self::$properties[$name];
        }
        return null;
    }

    public function getProperties()
    {
        return self::$properties;
    }
}
