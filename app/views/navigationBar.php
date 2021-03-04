
<nav>
    <h1><a href="../../employeeDashboard/table/all" >Employee Manager</a></h1>
    <ul class="navigation-links" >
        <li><a href="../../employeeDashboard/table/all" >Dashboard</a></li>
    </ul>
    <ul class="admin-panel" >
<?php
    if ($employees[$_SESSION['userId'] - 1]['admin']) {
        echo "<li class='navigation-control'><a href='../../adminPanel/table/all'> Control Panel</a></li>";
    }
?>
<?php
    $name = $_SESSION['userName'];
    $id = $_SESSION['userId'];
    echo "<div class='navigation-container'>";
    echo "<p class='navigation-user'><a href='../../employeeFile/show/$id'>$name</a></p>";
    echo "<button class='navigation-logout btn btn-success'><a href='../../login/logout'>Logout</a></button>";
    echo "</div>";
?>
    </ul>
</nav>
