<?php

// requires
require_once 'app/config/constants.php';
require_once CLASS_CONTROLLER;
require_once DB_CONSTANTS;

class EmployeeDashboardController extends Controller
{
    public function __construct($name)
    {
        parent::__construct($name);
        require_once MODELS . $name . '.php';
        require_once VIEWS . $name . '.php';
    }
}
