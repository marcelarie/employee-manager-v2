
<div id="employees-dashboard" class="employees-dashboard">
    <table class="table table-striped table-hover">
        <thead class="">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Last name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Age</th>
                <th>City</th>
                <th>
                    <!-- empty on purpose -->
                </th>
            </tr>
        <tbody>
            <form action="../../adminPanel/table/all" id="add-employee" method="POST">
                <tr>
                    <td>
                        <!-- empty on purpose -->
                        <input name="admin" type="hidden" class="none form-control" id="add-employee__admin" form="add-employee" placeholder="" value="1" required>
                    </td>
                    <td>
                        <input name="name" type="text" class="form-control" id="add-employee__name" form="add-employee" placeholder="" required>
                    </td>
                    <td>
                        <input name="lastName" type="text" class="form-control" id="add-employee__last-name" form="add-employee" placeholder="" required>
                    </td>
                    <td>
                        <input name="email" type="email" class="form-control" id="add-employee__email" form="add-employee" placeholder="name@example.com" required>
                    </td>
                    <td>
                        <select name="gender" type="text" class="form-control dashboard-select" id="add-employee__gender" form="add-employee" placeholder="" required>
                            <option value="male">male</option>
                            <option value="female">female</option>
                        </select>
                    </td>
                    <td>
                        <input name="age" type="number" class="form-control" id="add-employee__age" form="add-employee" placeholder="" required>
                    </td>
                    <td>
                        <input name="city" type="text" class="form-control" id="add-employee__city" form="add-employee" placeholder="" required>
                    </td>
                    <td>
                        <input class="btn btn-success" form="add-employee" type="submit"></input>
                    </td>
                </tr>
            </form>
 <?php
$employees = $data['employees'];
foreach ($employees as $employee) {
    echo '<tr>';
    echo '<td>' . $employee['id'] . '</td>';
    echo '<td>' . $employee['name'] . '</td>';
    echo '<td>' . $employee['lastName'] . '</td>';
    echo '<td>' . $employee['email'] . '</td>';
    echo '<td>' . $employee['gender'] . '</td>';
    echo '<td>' . $employee['age'] . '</td>';
    echo '<td>' . $employee['city'] . '</td>';
    echo "<td><a class='btn btn-info' href='../../employeeFile/show/" . $employee['id'] . "'>Profile</a></td>";
    echo '</tr>';
}
?>
        </tbody>
    </table>
</div>
