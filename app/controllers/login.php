<?php

// requires
require_once 'app/config/constants.php';
require_once CLASS_CONTROLLER;
require_once DB_CONSTANTS;


class LoginController extends Controller
{
    public function show()
    {
        require_once CLASS_VIEW;
        $view = new View($this->name, $this->data);
    }
    public function checkUser()
    {
        require_once MODELS . $this->name . '.php';
        $loginModel = new LoginModel('employees');

        $user = $loginModel->getByParameters(['email' => $_REQUEST['userEmail']])[0];

        if (
            $user['email'] ===  $_REQUEST['userEmail'] &&
            $user['name'] === $_REQUEST['userPassword']
        ) {
            require_once 'app/helpers/loginTimeOutSession.php';
            require_once 'lib/Router.php';

            $access = new Router;
            $_SESSION['sessionTimer'] = time();
            $_SESSION['userId'] = $user['id'];
            $_SESSION['userName'] = $user['name'];
            $access->setRoute('../employeeDashboard/table/all');
        } else {
            require_once 'app/helpers/loginTimeOutSession.php';
            require_once 'lib/Router.php';

            $access = new Router;
            $access->setRoute('../login/show');
        }
    }
    public function logout()
    {
        // destroying SESSION
        require_once 'app/helpers/loginTimeOutSession.php';
        require_once 'lib/Router.php';
        $access = new Router;

        session_destroy();
        $access->setRoute('../login/show');
    }
    public function error()
    {
    }
}
