<?php

/* Database Configuration Here */

switch (SITE_ENV) {
    case 'production':
        define('DB_HOSTNAME', 'localhost');
        define('DB_USERNAME', 'root');
        define('DB_PASSWORD', '');
        define('DB_NAME', 'akane3');
        
        break;

    case 'development':
    default:
        define('DB_HOSTNAME', 'localhost');
        define('DB_USERNAME', 'root');
        define('DB_PASSWORD', '');
        define('DB_NAME', 'akane3');
        
        break;
}
