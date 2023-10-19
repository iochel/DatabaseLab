<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h3>Users</h3>
    <p>
        <?php
        if (isset($_GET['save-success'])) {
            echo "Successfully saved";
            echo '<script>alert("Successfully saved");</script>';
        }

        if (isset($_GET['update-success'])) {
            echo "Successfully Update";
            echo '<script>alert("Successfully Update");</script>';
        }
        if (isset($_GET['delete-success'])) {
            echo "Successfully Delete";
            echo '<script>alert("Successfully Delete");</script>';
            
        }

        ?>
    </p>
    <div>
        <a href="user/create.php">Add User</a>
    </div>
    <table>
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php
            require('php/user/users.php'); // Include the database connection or query file here

             // Check if $result is set before using it   if (isset($result)) { 
                while ($row = $result->fetch_assoc()) {
            ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td>
                        <?php echo $row['first_name'] . ' ' . $row['last_name']; ?>
                    </td>
                    <td class="capitalize"><?php echo $row['gender']; ?></td>
                    <td>
                        <a href="user/edit.php?id=<?php echo $row['id']; ?>">
                            EDIT
                        </a>
                        <a href="php/user/delete.php?id=<?php echo $row['id']; ?>">
                            DELETE
                        </a>
                    </td>
                </tr>
            <?php
                }
            
            ?>
        </tbody>
    </table>
</body>
</html>
