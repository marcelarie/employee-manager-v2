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
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl' crossorigin='anonymous'>
        </head>
        <body> 
            {$html} 
        </body>";
    }
}
