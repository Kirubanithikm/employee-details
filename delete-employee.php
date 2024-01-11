<?php

include "config/config.php";
$employee_id = $_GET['id'];

if (isset($database_connection) && isset($employee_id)) {
    $status = mysqli_query($database_connection, "DELETE FROM employee WHERE `id` = {$employee_id}");
    header("Location: index.php");
}
