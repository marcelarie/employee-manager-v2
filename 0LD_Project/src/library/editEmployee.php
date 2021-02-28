<?php

if(isset($_POST['id'])) {
    $id = $_POST['id'];
    $id -= 1;
    $data = file_get_contents('../../resources/employees.json');
    $dataArray = json_decode($data);

    $employeeArray = $dataArray[$id];
    $employeeJson = json_encode($employeeArray);
    print_r($employeeJson);
}
