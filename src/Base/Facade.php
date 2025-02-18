<?php

namespace LucasFreitas\ServiceContainer\Base;

class Facade
{
    public static function __callStatic($method, $arguments)
    {
        $container = Container::getContainer();
        $service = $container->get(static::getFacadeAccessor());
        return $service->$method(...$arguments);
    }

    protected static function getFacadeAccessor() : string
    {
        return  '';
    }
}