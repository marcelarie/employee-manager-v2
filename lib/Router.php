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
            $this->callController($this->url);
            if (sizeof($this->url) === 2) {
                $action = $this->url[1];
                $this->controller->$action($this->url[0]);
            } elseif (sizeof($this->url) >= 3) {
                $action = $this->url[1];
                $this->controller->$action($this->url[2]);
            }
        } else {
            $this->setRoute('login');
        }
        echo '<pre>';
        print_r($this->url);
        echo '</pre>';
    }

    public function setRoute($route = 'login')
    {
        header("Location:" . $route);
    }

    public function callController($url)
    {
        if ($url[0] == 'login') {
            require_once CONTROLLERS . $url[0] . ".php";
            $hole = $url[0] . 'Controller';
            $this->controller = new $hole($url[0]);
        } else {
            if (sessionCheck()) {
                require_once CONTROLLERS . $url[0] . ".php";
                $hole = $url[0] . 'Controller';
                $this->controller = new $hole($url[0]);
            } else {
                header("Location: login");
            }
        }
    }
}
