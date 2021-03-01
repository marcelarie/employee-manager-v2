<?php

echo 'employeeDashboard controller';
echo '<br>';

// requires
require_once 'app/config/constants.php';
require_once CLASS_CONTROLLER;
require_once DB_CONSTANTS;

class EmployeeDashboardController extends Controller
{
    public function __construct($name)
    {
        parent::__construct($name);
        $this->load(MODELS);
        $this->load(VIEWS);
    }
    // function
    // $loginModel = new EmployeeDashboardController('employees');

}
