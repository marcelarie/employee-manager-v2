<?php
session_start();
function sessionCheck()
{
    $rest =  time() - $_SESSION['sessionTimer'];
    if ($rest < 10) {
        return true;
    } else {
        session_destroy();
        return false;
    }
}
