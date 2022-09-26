<?php


namespace wfm;


trait TSingleton
{

    private static ?self $instance = null;

    public static function getInstance(): static
    {
        return static::$instance ?? static::$instance = new static();
    }

}