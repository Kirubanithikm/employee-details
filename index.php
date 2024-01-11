<!DOCTYPE html>
<html lang="en">

<head>
    <title>Employee Management</title>
    <link rel='stylesheet' type='text/css' href='asset/style.css' />
</head>

<div class="form">
    <h1>Employee details</h1>
    <form action="add-employee.php" method="POST">
        <div class="content">
            <div class="inputs">
                <label>Employee name :
                    <input name="name" type="text">
                </label>
            </div>
            <div class="inputs">
                <label for="department">Department :</label>
                <select name="department" id="department">
                    <option value="software_engineer">Software Engineer</option>
                    <option value="software_testing">Software Testing</option>
                    <option value="product_support">Product Support</option>
                    <option value="content_writing">Content Writing</option>
                </select>
            </div>
            <div class="inputs">
                <label>Designation :
                    <input name="designation" type="text">
                </label>
            </div>
            <div class="inputs">
                <label>Email :
                    <input name="email" type="text">
                </label>
            </div>
            <div class="inputs">
                <label>Phone number :
                    <input name="phone_number" type="number">
                </label>
            </div>
        </div>
        <br>
        <input type="submit" name="submit-employee-details">
    </form>
</div>

<?php include "display-employee.php";

?>