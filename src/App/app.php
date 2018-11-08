<?php

try {
    require VENDOR_PATH . '/autoload.php';
    $config_path = CONFIG_PATH . "/".ENVIRONMENT;

    $settings = require "{$config_path}/settings.php";
    $app = new \Slim\App($settings);

    require "{$config_path}/routes.php";
    $app->run();

} catch (\Exception $e) {
    die("This website is under maintenance.<br>Please retry later");
}