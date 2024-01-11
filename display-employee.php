<?php

include "config/config.php";

if (isset($database_connection)) {
    $query = mysqli_query($database_connection, "SELECT * FROM `employee`");
    if (!empty($query)) {
?>
        <div class="display-table">
            <table class="table">
                <thead>
                    <tr>
                        <th>Employee name</th>
                        <th>Employee Department</th>
                        <th>Employee designation</th>
                        <th>Employee Email</th>
                        <th>Employee Phone number</th>
                        <th>Operations</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($data = mysqli_fetch_assoc($query)) {
                    ?>
                        <tr>
                            <td><?php echo $data['name']; ?></td>
                            <td><?php echo $data['department']; ?></td>
                            <td><?php echo $data['designation']; ?></td>
                            <td><?php echo $data['email']; ?></td>
                            <td><?php echo $data['phone_number']; ?></td>
                            <td> <a class="update" href="update-employee.php?id=<?php echo $data['id'] ?>">Edit</a>&nbsp <a class="delete" href="delete-employee.php?id=<?php echo $data['id'] ?>">Delete</a> </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
<?php
    }
}
?>