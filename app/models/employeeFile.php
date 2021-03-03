<?php

require_once CLASS_MODEL;
// require_once MODELS . 'employeeFile.php';

class EmployeeFileModel extends Model
{
}

$employeeFileModel = new EmployeeFileModel('employees');

$data = $employeeFileModel->getByParameters([ 'id' => 1 ]);
