<?php

require_once CLASS_MODEL;
require_once MODELS . 'employeeDashboard.php';

class EmployeeDashboardModel extends Model
{
}

$employeeDashboardModel = new EmployeeDashboardModel('employees');

$employees = $employeeDashboardModel->get();
