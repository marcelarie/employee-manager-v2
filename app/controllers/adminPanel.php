
<?php

// requires
require_once 'app/config/constants.php';
require_once CLASS_CONTROLLER;
require_once DB_CONSTANTS;

class AdminPanelController extends Controller
{
    public function __construct($name, $action, $parameter)
    {
        parent::__construct($name, $action, $parameter);


        if ($_REQUEST['admin'] &&
         $_REQUEST['url'] === 'adminPanel/table/all') {
            $data = $_REQUEST;
            $this->add($data);
        }
    }
    public function table($all)
    {
        require_once MODELS . $this->name . '.php';
        $modelName = $this->name . 'Model';
        $model = new $modelName($this->name);

        $adminPanelModel = new AdminPanelModel('employees');

        $employees = $adminPanelModel->getByParameters([ 'admin' => 1 ]);

        $data = ['employees' => $employees];

        require_once CLASS_VIEW;
        $view = new View($this->name, $data);
    }
    public function add($data)
    {
        require_once MODELS . $this->name . '.php';

        $adminPanelDashboard = new AdminPanelModel('employees');
        $adminPanelDashboard->add($data);
    }
}
