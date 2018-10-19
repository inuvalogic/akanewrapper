<?php

define('APP_CONFIG_DIR' , '..' . DS . 'app' . DS . 'Config' . DS);

define('SITE_ENV', 'development');

switch (SITE_ENV)
{
    case 'production':
        error_reporting(0);
        ini_set('display_errors', 0);
        break;

    case 'development':
    default:
        error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);
        ini_set('display_errors', 1);
        break;
}
