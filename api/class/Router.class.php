<?php

class Router
{
    /*
     * 'controller/action' => [method, controller, action]
     * '
     */
    private static $SERVICES = [
        'contact/send' => [
                'method' => 'post',
                'controller' => 'contact',
                'action' => 'send'
            ],
        'contact/getEmail/:id' => [
                'method' => 'get',
                'controller' => 'contact',
                'action' => 'getEmail'
            ]
    ];

    public function __construct() {

    }

    public function handler($req) {
        $method = $req['method'];
        $url = $req['url'];

        $tmp = str_replace(API_URL, '', $url);
        $parts = explode('/', $tmp);
        $service = $parts[0] . "/" . $parts[1];

        switch($method) {
            case 'GET':
                $this->get($service, $req['data']);
                break;
            case 'POST':
                $this->post($service, $req['data']);
                break;
            case 'PUT':
                $this->put($service, $req['data']);
                break;
            case 'DELETE':
                $this->delete($service, $req['data']);
                break;
            default:
                $this->call($method, $service, $req['data']);
        }
    }

    public function call($method, $service, $data) {
        $parts = explode('/', $service);
        $module = $parts[0];
        $action = $parts[1];

        if(file_exists(CLASS_FOLDER_PATH . $module . '.controller.php')) {
            $controller = $module . 'Controller';
            $controller::$action();
        }
        else {
            Response::view('Ce module n\'existe pas');
        }
    }

    public function get($service, $data) {
        self::call('get', $service, $data);
    }

    public function post($service, $data) {
        self::call('post', $service, $data);
    }

    public function put($service, $data) {
        self::call('put', $service, $data);
    }

    public function delete($service, $data) {
        self::call('delete', $service, $data);
    }

}