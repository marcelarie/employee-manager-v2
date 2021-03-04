<?php
require_once 'app/config/constants.php';
require_once CLASS_CONTROLLER;
require_once DB_CONSTANTS;

class EmployeeFileController extends Controller
{
    public function __construct($name, $action, $parameter)
    {
        parent::__construct($name, $action, $parameter);
        if ($_REQUEST['name'] &&
        $_REQUEST['url'] === 'employeeFile/controllers/employeeFile.php') {
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
        $action = 'edit';

        require_once VIEWS . $this->name . '.php';
    }
    public function message($id)
    {
        require_once MODELS . $this->name . '.php';

        $employeeFileModel = new EmployeeFileModel('employees');
        $data = $employeeFileModel->getByParameters(['id' => $id]);
        $employees = $employeeFileModel->get();
        $message = true;
        $admin = 'disabled';
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
        $action = 'save';

        require_once VIEWS . $this->name . '.php';
    }

    public function save($data)
    {
        require_once MODELS . $this->name . '.php';
        require_once 'lib/Router.php';

        extract($data);
        $employeeFileModel = new EmployeeFileModel('employees');
        $employeeFileModel->update($data);
        
        $access = new Router;
        $access->setRoute("../show/$id");
    }
    public function delete($id)
    {
        require_once MODELS . $this->name . '.php';
        require_once 'lib/Router.php';

        // extract($data);
        $employeeFileModel = new EmployeeFileModel('employees');
        $employeeFileModel->delete($id);
        
        $access = new Router;
        $access->setRoute("../../employeeDashboard/table/all");
    }
}
