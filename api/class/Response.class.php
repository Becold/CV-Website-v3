<?php

class Response
{

    public static function view($view) {
        echo $view;
    }

    public static function setStatusCode($code) {
        http_response_code($code);
    }

}