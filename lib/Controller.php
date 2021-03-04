<?php
require_once 'app/config/constants.php';
require_once DB_CONSTANTS;

abstract class Controller
{
    public $name;
    public $action;
    public $parameter;

    public function __construct($name, $action = false, $parameter = false)
    {
        $this->name = $name;
        $this->action = $action;
        $this->parameter = $parameter;
    }
}
