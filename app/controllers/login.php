<?php

// requires
require_once 'app/config/constants.php';
require_once CLASS_CONTROLLER;
require_once DB_CONSTANTS;


class LoginController extends Controller
{
    public function __construct($name)
    {
        parent::__construct($name);
        $this->load(MODELS);
        $this->load(VIEWS);
    }
    public function checkUser()
    {
        $loginModel = new Loginmodel('employees');
        echo 'checking user';
        $user = $loginModel->getByParameters([ 'email' => $_REQUEST['userEmail']]);
        if ($user['email'] ==  $_REQUEST['userEmail'] && $user['name'] == $_REQUEST['userPassword']) {
            require_once 'app/helpers/loginTimeOutSession.php';
            require_once 'lib/Router.php';
            $access = new Router;
            $_SESSION['sessionTimer'] = time();
            $access->setRoute('../employeeDashboard');
        } else {
            require_once 'app/helpers/loginTimeOutSession.php';
            require_once 'lib/Router.php';
            $access = new Router;
            $access->setRoute('../login');
        }
    }
    public function logout()
    {
        // destroying SESSION
        require_once 'app/helpers/loginTimeOutSession.php';
        session_destroy();
    }
    public function error()
    {
    }
}
