<?php

if(isset($_POST['name'])) {

    $id = $_POST['id'];
    $data = file_get_contents('../../resources/employees.json');
    $dataArray = json_decode($data, true);

    $employeeArray = $_POST;
    $employeeJson = json_encode($employeeArray);

    $i = 0;
    $employeeData;
    while ($dataArray[$i]['id'] != $id){
        $i++;
        if ($dataArray[$i]['id'] == $id) {
            $employeeData = $dataArray[$i];
        }
    }

    $replacement = array($i => $employeeArray);
    $finalArray = array_replace($dataArray, $replacement);
    $finalJson = json_encode($finalArray);
    file_put_contents('../../resources/employees.json', $finalJson);
    print_r($dataArray);
    print_r($i);
    print_r($employeeArray);
    print_r($finalJson);
}
