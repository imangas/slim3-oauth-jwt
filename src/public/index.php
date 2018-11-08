<?php

define('ENVIRONMENT', getenv("ENVIRONMENT"));
define('ROOT_PATH', dirname(__DIR__));
define('CONFIG_PATH', ROOT_PATH."/Config");
define('VENDOR_PATH', dirname(ROOT_PATH)."/vendor");
define('SECRET_JWT', getenv("SECRET_JWT"));

require ROOT_PATH. '/App/app.php';