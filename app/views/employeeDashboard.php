<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<div id="employees-dashboard" class="employees-dashboard">
    <table class="table table-striped table-hover">
        <thead class="">
            <tr>
                <?php
                $employees = $data['employees'];
                if ($employees[$_SESSION['userId'] - 1]['admin']) {
                    echo "<th>ID</th>";
                }
                ?>
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
        </thead>
        <tbody>
            <form action="../../employeeDashboard/table/all" id="add-patient" method="POST">
                <tr>
                    <?php
                    if ($employees[$_SESSION['userId'] - 1]['admin']) {
                        echo "<td></td>";
                    }
                    ?>
                    <td>
                        <input name="name" type="text" class="form-control" id="add-patient__name" form="add-patient" placeholder="" required>
                    </td>
                    <td>
                        <input name="lastName" type="text" class="form-control" id="add-patient__last-name" form="add-patient" placeholder="" required>
                    </td>
                    <td>
                        <input name="email" type="email" class="form-control" id="add-patient__email" form="add-patient" placeholder="name@example.com" required>
                    </td>
                    <td>
                        <select name="gender" type="text" class="form-control dashboard-select" id="add-patient__gender" form="add-patient" placeholder="" required>
                            <option value="male">male</option>
                            <option value="female">female</option>
                        </select>
                    </td>
                    <td>
                        <input name="age" type="number" class="form-control" id="add-patient__age" form="add-patient" placeholder="" required>
                    </td>
                    <td>
                        <input name="city" type="text" class="form-control" id="add-patient__city" form="add-patient" placeholder="" required>
                    </td>
                    <td>
                        <input class="btn btn-success" form="add-patient" type="submit"></input>
                    </td>
                </tr>
            </form>
            <?php
            foreach ($employees as $employee) {
                echo '<tr>';
                if ($employees[$_SESSION['userId'] - 1]['admin']) {
                    echo '<td>' . $employee['id'] . '</td>';
                }
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
