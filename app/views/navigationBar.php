
<nav>
    <h1>Employee Manager</h1>
    <ul class="navigation-links" >
        <li><a href="../../employeeDashboard/table/all" >Dashboard</a></li>
    </ul>
    <ul class="admin-panel" >
<?php
    if ($employees[$_SESSION['userId'] - 1]['admin']) {
        echo "<li><a href='../../adminPanel/table/all'> Control Panel⚙️</a></li>";
    }
?>
<?php
    $name = $_SESSION['userName'];
    $id = $_SESSION['userId'];
    echo "<p><a href='../../employeeFile/show/$id'>$name</a></p>";
?>
    </ul>
</nav>
