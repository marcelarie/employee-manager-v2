<?php

// requires
require_once 'app/config/constants.php';
require_once CLASS_CONTROLLER;
require_once DB_CONSTANTS;

class EmployeeDashboardController extends Controller
{
    public function table($all)
    {
        require_once MODELS . $this->name . '.php';
        $modelName = $this->name . 'Model';
        $model = new $modelName($this->name);

        $employeeDashboardModel = new EmployeeDashboardModel('employees');

        $employees = $employeeDashboardModel->get();

        $data = ['employees' => $employees];

        require_once CLASS_VIEW;
        $view = new View($this->name, $data);
    }
}
