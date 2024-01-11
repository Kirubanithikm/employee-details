<?php
include "config/config.php";

if (isset($_POST['submit-employee-details'])) {
    $name = $_POST["name"];
    $department =  $_POST["department"];
    $designation =  $_POST["designation"];
    $email =  $_POST["email"];
    $phone_number =  $_POST["phone_number"];

    $sql = "INSERT INTO `employee`(`name`, `department`, `designation`, `email`, `phone_number`) VALUES (?, ?, ?, ?, ?)";

    $database_statement = $database_connection->prepare($sql);
    $database_statement->bind_param("sssss", $name, $department, $designation, $email, $phone_number);
    $status = $database_statement->execute();

    if ($status) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($database_connection);
    }
}
