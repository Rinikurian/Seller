<?php

/* 12/08/17
 * Liyo Paul
 */

define('SSL', false);
define('SHK', 'dsfdsfsflwrjowsdmc,mdfjweilru234');
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
if (SSL) {
    $realProtocol = 'https://';
} else {
    $realProtocol = 'http://';
}


if (strpos($_SERVER['HTTP_HOST'], 'localhost') !== FALSE) {

    /** /// DATABASE /// */
    define('DB_TYPE', 'mysql');
    define('DB_HOST', 'localhost');
    define('DB_NAME', 'seller');
    define('DB_USER', 'root');
    define('DB_PASS', '');
} else if (strpos($_SERVER['HTTP_HOST'], 'tns') !== FALSE) {

    /** /// DATABASE /// */
    define('DB_TYPE', 'mysql');
    define('DB_HOST', 'localhost');
    define('DB_NAME', 'seller');
    define('DB_USER', 'root');
    define('DB_PASS', '');
} else if (strpos($_SERVER['HTTP_HOST'], '192.168.1.100') !== FALSE) {

    /** /// DATABASE /// */
    define('DB_TYPE', 'mysql');
    define('DB_HOST', 'localhost');
    define('DB_NAME', 'seller');
    define('DB_USER', 'root');
    define('DB_PASS', '');
}

   
