<?php

class View
{
    public $name;
    public $data;
    public function __construct($name, $data)
    {
        $this->name = $name;
        require_once VIEWS . $name . '.php';
    }
}
