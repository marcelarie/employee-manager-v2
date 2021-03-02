<?php

// requires
require_once 'app/config/constants.php';
require_once CLASS_CONTROLLER;
require_once DB_CONSTANTS;


class LoginController extends Controller
{
    public function checkUser()
    {
        $loginModel = new LoginModel('employees');

        $user = $loginModel->getByParameters([ 'email' => $_REQUEST['userEmail']]);

        if ($user['email'] ===  $_REQUEST['userEmail'] &&
             $user['name'] === $_REQUEST['userPassword']) {
            require_once 'app/helpers/loginTimeOutSession.php';
            require_once 'lib/Router.php';

            $access = new Router;
            $_SESSION['sessionTimer'] = time();
            $_SESSION['userId'] = $user['id'];
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
