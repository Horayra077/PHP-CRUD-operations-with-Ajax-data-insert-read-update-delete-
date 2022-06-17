<?php include "db.php"; ?>

<?php

global $connection;

$id = $_GET['userId'];

$select_query = "SELECT * FROM user WHERE id = $id";
$select_result = mysqli_query($connection, $select_query);
$row = mysqli_fetch_assoc($select_result);

$name = $row['name'];
$email = $row['email'];
$password = $row['password'];

// $query = "UPDATE user SET ";
// $query .= "name = '$name', ";
// $query .= "email = '$email', ";
// $query .= "password = '$password' ";
// $query .= "WHERE id = $id ";

// $result = mysqli_query($connection, $query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD AJAX</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h1 class="text-center">Edit</h1>
                    <hr class="border border-primary border-2">

                    <div class="form-group">
                        <lable for="name">Name</lable>
                        <input type="text" id="name" class="form-control" value="<?php echo $name ?>">
                    </div>

                    <div class="form-group pt-3">
                        <lable for="email">Email</lable>
                        <input type="email" id="email" class="form-control" value="<?php echo $email ?>">
                    </div>

                    <div class="form-group pt-3">
                        <lable for="password">Password</lable>
                        <input type="password" id="password" class="form-control" value="<?php echo $password ?>">
                    </div>
                    <div class="d-flex gap-4 mt-4">
                        <input id="update" class="btn btn-warning " type="submit" onclick="UPDATE_DATA(<?php echo $row['id'] ?>)" value="Edit">
                        <input class="btn btn-primary" type="submit" onclick="Home()" value="Home">
                    </div>

                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="custom.js"></script>
</body>

</html>