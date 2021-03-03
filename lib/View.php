<?php

class View
{
    public $name;
    public $data;
    public function __construct($name)
    {
        $this->name = $name;
        // echo 'hey';
        require_once VIEWS . $name . '.php';
    }
}
