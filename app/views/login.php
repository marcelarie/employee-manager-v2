
<?php
require_once CLASS_VIEW;

if (isset($message)) {
    echo $message;
}
$login = new View("
<div class='input-group flex-nowrap absolute-center'>
    <form action='login/checkUser' method='POST'>
      <input type='text' name='userEmail' class='form-control' placeholder='Username' aria-label='Username' aria-describedby='addon-wrapping'>
      <input type='text' name='userPassword' class='form-control' placeholder='********' aria-label='Password' aria-describedby='addon-wrapping'>
      <input type='submit' class='btn btn-dark' value='Login'></input>
    </form>
</div>
");
