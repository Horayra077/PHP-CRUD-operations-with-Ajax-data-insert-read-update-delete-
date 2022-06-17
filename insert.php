<?php include "db.php"; ?>

<?php

global $connection;

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

if ($name != '' && $email != '' && $password != '') {

    $query = "INSERT INTO user (name, email, password)";
    $query .= "VALUES ('$name', '$email','$password') ";

    $result = mysqli_query($connection, $query);

    if ($result) {
        echo "Inserted Successfully";
    } else {
        echo "Insert Uusccessfull";
    }
}
