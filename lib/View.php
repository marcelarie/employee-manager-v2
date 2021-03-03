<?php

class View
{
    public $name;
    public $data;
    public function __construct($name, $data)
    {
        $this->name = $name;
        $this->data = $data;
        // echo 'hey';
        require_once VIEWS . $name . '.php';
    }
}
