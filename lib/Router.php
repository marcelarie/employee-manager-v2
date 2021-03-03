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

            print_r($this->url);
            $controller = $this->url[0] . 'Controller';

            $this->callController($this->url);

            if (sizeof($this->url) === 2) {
                // print_r($this->controller);

                $action = $this->url[1];
                $this->controller->$action($this->url[0]);
            } elseif (sizeof($this->url) >= 3) {
                print_r($this->controller);

                $action = $this->url[1];
                $this->$controller->$action($this->url[0], $this->url[2]);
            }
        } else {
            $this->setRoute('login');
        }
    }

    public function setRoute($route = 'login')
    {
        header("Location:" . $route);
    }

    public function callController($url)
    {
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
                header("Location: login");
            }
        }
    }
}
