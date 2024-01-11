<!DOCTYPE html>
<html lang="en">

<head>
    <title>Employee Management</title>
    <link rel='stylesheet' type='text/css' href='asset/style.css' />
</head>
<?php

include "config/config.php";
$employee_id = $_GET['id'];

if (isset($database_connection) && isset($employee_id)) {
    $value = mysqli_query($database_connection, "SELECT * FROM `employee` WHERE `id`={$employee_id}");
    if (!empty($value)) {
        $data = mysqli_fetch_assoc($value);
    }
}

if (isset($_POST['update-employee-details'])) {
    $employee_id = $_GET['id'];
    $name = $_POST["name"];
    $department =  $_POST["department"];
    $designation =  $_POST["designation"];
    $email =  $_POST["email"];
    $phone_number =  $_POST["phone_number"];

    $sql = "UPDATE `employee` SET `name` = '{$name}', `department` = '{$department}', `designation` = '{$designation}', `email` = '{$email}', `phone_number` = '{$phone_number}' WHERE `employee`.`id` = {$employee_id};";

    if (isset($database_connection)) {
        $result = $database_connection->query($sql);
        echo $result;
        if ($result) {
            header("Location: index.php");
        }
        $database_connection->close();
    }
}
?>

<div class="form">
    <h1>Employee details</h1>
    <form action="#" method="POST">
        <div class="content">
            <div class="inputs">
                <label>Employee name :
                    <input name="name" type="text" value="<?php echo !empty($data['name']) ? $data['name'] : '' ?>">
                </label>
            </div>

            <div class="inputs">
                <label>Department :
                    <input name="department" type="text" value="<?php echo !empty($data['department']) ? $data['department'] : '' ?>">
                </label>
            </div>
            <div class="inputs">
                <label for="department">Department :</label>
                <select name="department" id="department">
                    <option value="software_engineer" <?php echo !empty($data['department']) && $data['department'] == "software_engineer" ? "selected" : '' ?>>Software Engineer</option>
                    <option value="software_testing" <?php echo !empty($data['department']) && $data['department'] == "software_testing" ? "selected" : '' ?>>Software Testing</option>
                    <option value="product_support" <?php echo !empty($data['department']) && $data['department'] == "product_support" ? "selected" : '' ?>>Product Support</option>
                    <option value="content_writing" <?php echo !empty($data['department']) && $data['department'] == "content_writing" ? "selected" : '' ?>>Content Writing</option>
                </select>
            </div>
            <div class="inputs">
                <label>Designation :
                    <input name="designation" type="text" value="<?php echo !empty($data['designation']) ? $data['designation'] : '' ?>">
                </label>
            </div>
            <div class="inputs">
                <label>Email :
                    <input name="email" type="text" value="<?php echo !empty($data['email']) ? $data['email'] : '' ?>">
                </label>
            </div>
            <div class="inputs">
                <label>Phone number :
                    <input name="phone_number" type="number" value="<?php echo !empty($data['phone_number']) ? $data['phone_number'] : '' ?>">
                </label>
            </div>
        </div>
        <br>
        <input type="submit" name="update-employee-details">
    </form>
</div>