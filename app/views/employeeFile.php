<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl' crossorigin='anonymous'>

<?php
$employee = $data;
$name = $employee['name'];

echo "<div class='card' style='width: 18rem;'>
    <!-- <img src='https://avatars.dicebear.com/api/identicon/$name.svg' class='card-img-top' alt='...'> -->
    <img src='https://avatars.dicebear.com/api/avataaars/$name.svg?m=4&b=%23282828&style=circle&topChance=100' class='card-img-top' alt='...'>
    <form action='../controllers/employeeFile.php' class='card-body'>";
foreach ($employee as $index => $row) {
    $isString = gettype($index) == 'string';

    if ($isString && $index !== 'avatar' && $index !== 'admin') {
        echo "<label for='$index'>$index</label>";
        echo "<br>";
        echo "<input class='card-title' name='$index' value='$row' $admin></input>";
    }
}
if ($employees[$_SESSION['userId'] - 1]['admin']) {
    echo "<a href='../$action/" . $employee['id'] . "' type='submit' class='btn btn-success'>$button</a>";
    echo "<input type='submit' class='btn btn-success'></input>";
}
echo "</form>
</div>";
