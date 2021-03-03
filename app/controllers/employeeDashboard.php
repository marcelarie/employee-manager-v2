<?php

// requires
require_once 'app/config/constants.php';
require_once CLASS_CONTROLLER;
require_once DB_CONSTANTS;

class EmployeeDashboardController extends Controller
{
    public function __construct($name, $action, $parameter)
    {
        parent::__construct($name, $action, $parameter);

        if ($_REQUEST['name'] &&
         $_REQUEST['url'] === 'employeeDashboard/table/all') {
            $data = $_REQUEST;
            $this->add($data);
        }
    }

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
    public function add($data)
    {
        require_once MODELS . $this->name . '.php';
        // require_once 'lib/Router.php';

        extract($data);
        $employeeDashboardModel= new EmployeeDashboardModel('employees');
        $employeeDashboardModel->add($data);
        
        // $access = new Router;
        // $access->setRoute("../../../employeeDashboard/table/all");
    }
}
