<?php
require_once 'app/helpers/constants.php';
class Router
{
    public $url;
    public $controller;
    public function __construct()
    {
        if (isset($_GET['url'])) {
            $this->url = explode('/', rtrim($_GET['url'], '/'));
            $this->callController($this->url);
            if ( sizeof($this->url) === 2 ) {
                $action = $this->url[1];
                $this->controller->$action($this->url[0]);
            }else if(sizeof($this->url) >= 3 ){
                $action = $this->url[1];
                $this->controller->$action($this->url[2]);
            }
        }else{
            $this->setRoute();
        }
        echo '<pre>';
        print_r($this->url);
        echo '</pre>';
    }

    public function setRoute($route = 'login')
    {
        header("Location:{$route}");
    }

    public function callController($url)
    {
        require_once CONTROLLERS . $url[0] . ".php";
        $hole = $url[0] . 'Controller';
        $this->controller = new $hole( $url[0]) ;

    }
}
