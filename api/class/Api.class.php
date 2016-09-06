<?php

class Api {

    private $reqProtocol; // string: 'http' or 'https'
    private $reqMethod; // string: 'get', 'post', 'put' or 'delete'
    private $reqUrl; // string: 'www.site.com/folder'
    private $reqBody; // array: post or get

    public function __construct() {
        $this->reqProtocol = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') ? 'http' : 'https';
        $this->reqMethod = $_SERVER['REQUEST_METHOD'];
        $this->reqUrl = $this->reqProtocol . '://' . $_SERVER['HTTP_HOST'] . '/' . basename($_SERVER['REQUEST_URI']);
        $this->reqUrl = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        $this->reqBody = $_REQUEST;
    }

    public function isApi() {
        return Utils::startWith($this->reqUrl, API_URL);
    }

    public function handler() {
        $router = new Router();
        $router->handler($this->getRequest());
    }

    private function getRequest() {
        return $req = [
            'protocol' => $this->reqProtocol,
            'method' => $this->reqMethod,
            'url' => $this->reqUrl,
            'data' => $this->reqBody
        ];
    }
}