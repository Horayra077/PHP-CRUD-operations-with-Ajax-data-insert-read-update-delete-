<?php include "db.php"; ?>

<?php

global $connection;

$name = $_GET['name'];
$email = $_GET['email'];
$password = $_GET['password'];
$id = $_GET['userId'];

$query = "UPDATE user SET ";
$query .= "name = '$name', ";
$query .= "email = '$email', ";
$query .= "password = '$password' ";
$query .= "WHERE id = $id ";

$result = mysqli_query($connection, $query);

if ($result) {
    echo "Record Updated";
} else {

    die("QUERY FAIELD!!!" . mysqli_error($connection));
}
