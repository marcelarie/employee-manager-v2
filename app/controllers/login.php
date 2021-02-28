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
            echo 'user found';
        } else {
            echo '<script>
            alert("user not found");
            window.location.href = "../index.php"
            </script>';
        }
    }
    public function logout()
    {
        // deslogearse
    }
    public function error()
    {
    }
}
