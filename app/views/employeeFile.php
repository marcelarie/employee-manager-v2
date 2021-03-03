<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl' crossorigin='anonymous'>

<?php
$employee = $data;

echo "<div class='card' style='width: 18rem;'>
    <img src=$employee[avatar] class='card-img-top' alt='...'>
    <form class='card-body'>";
foreach ($employee as $index => $row) {
    $isString = gettype($index) == 'string';

    if ($isString && $index !== 'avatar' && $index !== 'admin') {
        echo "<label for='$index'>$index</label>";
        echo "<br>";
        echo "<input class='card-title' name='$index' value='$row' $admin></input>";
    }
}
if ($employees[$_SESSION['userId'] - 1]['admin']) {
    echo "<a href='../edit/" . $employee['id'] . "' class='btn btn-success'>EDIT</a>";
}
echo "</form>
</div>";
