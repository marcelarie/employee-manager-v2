<?php
require_once 'app/config/constants.php';
require_once CLASS_CONTROLLER;
require_once DB_CONSTANTS;

class EmployeeFileController extends Controller
{
    public function show($id)
    {
        require_once MODELS . $this->name . '.php';

        $employeeFileModel = new EmployeeFileModel('employees');
        $data = $employeeFileModel->getByParameters(['id' => $id]);
        $employees = $employeeFileModel->get();
        $admin = 'disabled';

        require_once VIEWS . $this->name . '.php';
    }
    public function edit($id)
    {
        require_once MODELS . $this->name . '.php';

        $employeeFileModel = new EmployeeFileModel('employees');
        $data = $employeeFileModel->getByParameters(['id' => $id]);
        $employees = $employeeFileModel->get();
        $admin = '';


        require_once VIEWS . $this->name . '.php';
    }
}
