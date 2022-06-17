<?php include "db.php"; ?>

<?php

global $connection;

$id = $_POST['userId'];

$query = "DELETE FROM user ";
$query .= "WHERE id = $id ";

$result = mysqli_query($connection, $query);

if ($result) {
    echo "Record Deleted";
} else {
    echo "Record Not Deleted";
}
