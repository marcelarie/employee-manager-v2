<?php
echo 'login controller';
echo '<br>';

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
        $user = $loginModel->getById($_REQUEST['userEmail']);
        if ($user['email'] ==  $_REQUEST['userEmail'] && $user['name'] == $_REQUEST['userPassword']) {
            require_once 'app/helpers/loginTimeOutSession.php';
            $_SESSION['sessionTimer'] = time();
            echo '<script>
            window.location.href = "../employeeDashboard"
            </script>';
        } else {
            echo '<script>
            alert("User not found")
            window.location.href = "../index.php"
            </script>';
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
