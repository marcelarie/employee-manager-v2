<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl' crossorigin='anonymous'>
<?php
if (isset($message)) {
    echo $message;
}
?>

<div class='input-group flex-nowrap absolute-center'>
    <form action='login/checkUser' method='POST'>
      <input type='text' name='userEmail' class='form-control' placeholder='Username' aria-label='Username' aria-describedby='addon-wrapping'>
      <input type='text' name='userPassword' class='form-control' placeholder='********' aria-label='Password' aria-describedby='addon-wrapping'>
      <input type='submit' class='btn btn-dark' value='Login'></input>
    </form>
</div>
