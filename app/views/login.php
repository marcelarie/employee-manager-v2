<?php
require_once CLASS_VIEW;
if (isset($message)) {
    echo $message;
}
$login = new View("
<div>
    <form action='login/checkUser' method='POST'>
        <input type='text' name='userEmail'></input>
        <input type='text' name='userPassword'></input>
        <input type='submit'>Log In</input>
    </form>
</div>
");