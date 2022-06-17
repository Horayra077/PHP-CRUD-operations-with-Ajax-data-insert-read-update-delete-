<?php include "db.php"; ?>

<?php

global $connection;

$query = "SELECT * FROM user";
$result = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $id = $row['id'];
    $name = $row['name'];
    $email = $row['email'];
    $password = $row['password']; ?>

    <tr>
        <td><?php echo $id ?></td>
        <td><?php echo $name ?></td>
        <td><?php echo $email ?></td>
        <td><?php echo $password ?></td>
        <td><button class="btn btn-secondary" onclick="Edit(<?php echo $id ?>)">Edit</button></td>
        <td><button class="btn btn-danger" onclick="Delete(<?php echo $id ?>)">Delete</button></td>
    </tr>

<?php }
