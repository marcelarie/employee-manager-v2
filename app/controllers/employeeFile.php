<?php
require_once 'app/config/constants.php';
require_once CLASS_CONTROLLER;
require_once DB_CONSTANTS;

class EmployeeFileController extends Controller
{
    public function __construct($name, $action, $parameter)
    {
        parent::__construct($name, $action, $parameter);
        if ($_REQUEST['url'] === 'employeeFile/controllers/employeeFile.php') {
            $data = $_REQUEST;
            $this->save($data);
        }
    }
    
    public function show($id)
    {
        require_once MODELS . $this->name . '.php';

        $employeeFileModel = new EmployeeFileModel('employees');
        $data = $employeeFileModel->getByParameters(['id' => $id]);
        $employees = $employeeFileModel->get();
        $admin = 'disabled';
        $button = 'EDIT';
        $action = 'edit';

        require_once VIEWS . $this->name . '.php';
    }
    public function edit($id)
    {
        require_once MODELS . $this->name . '.php';

        $employeeFileModel = new EmployeeFileModel('employees');
        $data = $employeeFileModel->getByParameters(['id' => $id]);
        $employees = $employeeFileModel->get();
        $admin = '';
        $button = 'SAVE';
        $action = 'save';

        require_once VIEWS . $this->name . '.php';
    }

    public function save($data)
    {
        require_once 'lib/Router.php';
        require_once MODELS . $this->name . '.php';
        $access = new Router;
        $employeeFileModel = new EmployeeFileModel('employees');

        $employees = $employeeFileModel->update($data);
        
        $access->setRoute('../show/'.$data['id']);
        // $update = $employeeFileModel->update();
    }
}
