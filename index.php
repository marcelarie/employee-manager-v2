<?php

$parameters = [
 'key1' => 'value',
 'key2' => 'value',
 'key3' => 'value',
 'key4' => 'value',
  ];

function getByParameters($parameters)
{
    function query($parameter, $key)
    {
        return 'WHERE \'' . $key . '\' = \'' . $parameter . '\'';
    }
    
    $result = array_map('query', $parameters, array_keys($parameters));
    echo 'SELECT * FROM employees '. implode(' AND ', $result);
    echo '<br>';
}

getByParameters($parameters);

echo '<br>';
require 'app/router/router.php';
