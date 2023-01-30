<?php
//site name
define('SITE_NAME', 'YSHOP');

//App Root
//define('APP_ROOT', dirname(dirname(__FILE__)));
//define('URL_ROOT', '/');
//define('URL_SUBFOLDER', '');

//DB Params
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'yshop');
define('DB', new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS));