<?php

define('APP_TIMEZONE', 'Asia/Jakarta');
define('APP_CONFIG_DIR' , '..' . DS . 'app' . DS . 'Config' . DS);

define('SITE_ENV', 'development');

switch (SITE_ENV)
{
    case 'production':
        define('DEBUG_MODE', false);
        break;

    case 'development':
    default:
        define('DEBUG_MODE', true);
        break;
}
