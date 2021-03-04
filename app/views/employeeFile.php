
<?php
$employee = $data[0];

$name = $employee['name'];

echo "<div class='card employee-file'>
    <img src='https://avatars.dicebear.com/api/avataaars/$name.svg?m=4&b=%23282828&style=circle&topChance=100&eyes[]=default&eyebrow[]=default&mouth[]=smile' class='card-img-top' alt='...'>
    <form action='../controllers/employeeFile.php' class='card-body'>";
foreach ($employee as $index => $row) {
    $isString = gettype($index) == 'string';

    if ($isString && $index !== 'avatar' && $index !== 'admin') {
        echo "<label for='$index'>$index</label>";
        if ($index === 'id') {
            echo "<input class='card-title' name='$index' value='$row' readonly></input>";
        } else {
            echo "<input class='card-title' name='$index' value='$row' $admin required></input>";
        }
    }
}
if ($employees[$_SESSION['userId'] - 1]['admin']) {
    if ($action === 'edit') {
        echo "<a href='../../employeeDashboard/table/all' class='btn btn-warning'>Back</a>";
        echo "<a href='../$action/$employee[id]' class='btn btn-primary'>Edit</a>";
    } else {
        echo "<a href='../show/$employee[id]' class='btn btn-warning'>Back</a>";
        echo "<input type='submit' class='btn btn-success'></input>";
    }
    echo "<a href='../delete/$employee[id]' class='btn btn-danger'>DELETE</a>";
} else {
    echo "<a href='../../employeeDashboard/table/all' class='btn btn-warning'>Back</a>";
}
echo "</form>
</div>";
