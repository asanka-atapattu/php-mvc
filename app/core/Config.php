<?php

class Config
{

    public function __construct()
    {

    }

    public static function getUrl()
    {
        print(sprintf(
            "%s://%s",
            isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
            $_SERVER['SERVER_NAME']
        ));
    }

    public static function getRootUrl()
    {
        print(sprintf(
            "%s://%s%s",
            isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
            $_SERVER['SERVER_NAME'],
            '/public'
        ));
    }

}