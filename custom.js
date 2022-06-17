// Insert

$("#create").click(function () {
    var name = $("#name").val();
    var email = $("#email").val();
    var password = $("#password").val();

    $.ajax({
        method: "POST",
        url: "insert.php",
        data: { name: name, email: email, password: password },
        success: function (data) {
            alert(data)
        }
    });
});

// Read

$("#read").click(function () {
    var read = "";
    $.ajax({
        url: "read.php",
        method: "POST",
        data: { read: read },
        success: function (data) {
            $("#tbody").html(data)
        }
    });
});

// Read/Reload
function read() {
    var read = "";
    $.ajax({
        url: "read.php",
        method: "POST",
        data: { read: read },
        success: function (data) {
            $("#tbody").html(data)
        }
    });
}

// Delete

function Delete(userId) {
    $con = confirm("are you sure?");
    if ($con == true) {
        $.ajax({
            url: "delete.php",
            method: "POST",
            data: { userId: userId },
            success: function () {
                read()
            }
        })
    }
}

// Edit

function Edit(userId) {

    $.ajax({
        url: "edit.php",
        method: "GET",
        data: { userId: userId },
        success: function (data) {
            $("body").html(data);
        }
    })
}

// Update

function UPDATE_DATA(userId) {
    var name = $("#name").val();
    var email = $("#email").val();
    var password = $("#password").val();

    $.ajax({

        url: "update.php",
        method: "GET",
        data: { name: name, email: email, password: password, userId: userId },
        success: function (data) {
            alert(data)
        }
    });
}

// Home

function Home() {

    var read = "";
    $.ajax({
        url: "index.php",
        method: "POST",
        data: { read: read },
        success: function (data) {
            $("body").html(data);
        }
    })
}