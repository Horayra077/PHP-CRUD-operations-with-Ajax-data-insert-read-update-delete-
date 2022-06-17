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
                    <h1 class="text-center">Create</h1>
                    <hr class="border border-primary border-2">

                    <div class="form-group">
                        <lable for="name">Name</lable>
                        <input type="text" id="name" class="form-control" value="">
                    </div>

                    <div class="form-group pt-3">
                        <lable for="email">Email</lable>
                        <input type="email" id="email" class="form-control" value="">
                    </div>

                    <div class="form-group pt-3">
                        <lable for="password">Password</lable>
                        <input type="password" id="password" class="form-control" value="">
                    </div>

                    <div class="d-flex gap-4 mt-4">
                        <input id="create" class="btn btn-primary" type="submit" name="submit" value="CREATE">
                        <input class="btn btn-primary" type="submit" onclick="Home()" value="Home">
                    </div>


                    <div class="d-flex justify-content-between mt-5">
                        <h1 class="text-center">Read</h1>
                        <div>
                            <input id="read" type="submit" class="btn btn-success" value="READ">
                        </div>
                    </div>
                    <hr class="border border-primary border-2">

                    <table class=" table">
                        <thead>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        <tbody id="tbody">

                        </tbody>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="custom.js"></script>
</body>

</html>