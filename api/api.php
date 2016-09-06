<?php

require_once('api/class/Config.php');
spl_autoload_register(function ($class) {

    // Si on appelle une class
    $file = 'api/class/' . $class . '.class.php';
    if (file_exists($file)) require($file);

    // Si on appelle un controller
    if(Utils::contains($class, 'Controller')) {
        $class = str_replace('Controller', '', $class);
        $file = 'api/class/' . $class . '.controller.php';
        if (file_exists($file)) require($file);
    }
});

$api = new Api();
if($api->isApi()) {
    session_start();
    $api->handler();
}
else {
    Response::setStatusCode(403);
}