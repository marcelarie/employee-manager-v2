<?php

class View
{
    public $view;
    public function __construct($view)
    {
        $this->view = $view;
        $this->render($view);
    }
    public function render($html)
    {
        echo "
        <head>
        <title>Employee Manager</title>
        </head>
        <body> 
            {$html} 
        </body>";
    }
}
