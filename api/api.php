<?php
require_once(CLASS_FOLDER_PATH . 'Config.php');
spl_autoload_register(function ($class) {
    $file = CLASS_FOLDER_PATH . $class . '.class.php';
    if (file_exists($file)) require($file);

    if(Utils::contains($class, 'Controller')) {
        $class = str_replace('Controller', '', $class);
        $file = CLASS_FOLDER_PATH . $class . '.controller.php';
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