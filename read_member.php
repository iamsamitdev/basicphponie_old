<?php
include "connect_mysql.php";
// require "connect_mysql.php";
// require_once "connect_mysql.php";

$sql = "SELECT * FROM members";
$query = mysqli_query($connect, $sql);

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Members</title>
</head>
<body>
    <h1>รายชื่อสมาชิก</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Fullname</th>
                <th>Email</th>
                <th>Tel</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
                // อ่านข้อมูลจาก Query
                while($row = mysqli_fetch_assoc($query)){ 
            ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['fullname']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['tel']; ?></td>
                    <td><?php echo $row['status']; ?></td>
                </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
</body>
</html>