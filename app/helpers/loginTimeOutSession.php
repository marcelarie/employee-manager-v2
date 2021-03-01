<?php
session_start();
function sessionCheck()
{
    $rest =  time() - $_SESSION['sessionTimer'];
    if ($rest < 1000000000000000000000000000000000000000000000000000000000000) {
        return true;
    } else {
        session_destroy();
        return false;
    }
}
