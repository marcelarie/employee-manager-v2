<?php
require_once 'app/config/constants.php';
require_once 'app/helpers/loginTimeOutSession.php';

class Router
{
    public $url;
    public $controller;
    public function __construct()
    {
        // $this->readRequest($_REQUEST['url']);
    }

    public function readRequest($url)
    {
        if (isset($url)) {
            $this->url = explode('/', rtrim($url, '/'));
            $name = $this->url[0];
            // print_r($this->url);
            $controller = $name . 'Controller';
            $this->callController($this->url);
            if (sizeof($this->url) === 2) {
                $action = $this->url[1];
                $this->controller->$action($name);
            } elseif (sizeof($this->url) >= 3) {
                $action = $this->url[1];
                $parameters = $this->url[2];
                $this->controller->$action($parameters);
            }
        } else {
            $this->setRoute();
        }
    }

    public function setRoute($route = 'login/show')
    {
        header("Location:" . $route);
    }

    public function callController($url)
    {
        if (!isset($url[2])) {
            $url[2] = '';
        }
        if ($url[0] == 'login') {
            require_once CONTROLLERS . $url[0] . ".php";
            $controller = $url[0] . 'Controller';
            $this->controller = new $controller($url[0], $url[1], $url[2]);
        } else {
            if (sessionCheck()) {
                require_once CONTROLLERS . $url[0] . ".php";
                $controller = $url[0] . 'Controller';
                $this->controller = new $controller($url[0], $url[1], $url[2]);
            } else {
                header("Location: login/show");
            }
        }
    }
}
