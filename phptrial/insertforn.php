<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.5/dist/sweetalert2.min.css">
    <style>
        .btn1{
            transition: all 1s;
            background: gray;
            padding:2px 10px;
            border:1px solid gray;
            border-radius:5px
        }
        .btn1:hover{
            background-color: transparent;

        }
    </style>
</head>
<?php
include 'include/nav.php';
?>
<body>
<main>
    <?php
    include ('include/connection.php');
    if (isset($_POST['submit'])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $age = $_POST['age'];
        $password = $_POST['password'];
    }
    if (empty($fname) || empty($lname) || empty($email) || empty($age) || empty($password)) {
        // echo ();
    } else {
        $exe = "INSERT into  `getdata`(`firstname`,`lastname`,`email`,`age`,`password`)VALUES('$fname','$lname','$email','$age','$password')";
        $run = mysqli_query($conn, $exe);
        if ($run) {
            // Deleted successfully, redirect with success message
            echo "<script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Record Inserted',
                        text: 'The record has been successfully Inserted.'
                    }).then(function() {
                        window.location = 'insertforn.php';
                    });
                 </script>";
        } else {
           echo("not Inserted");
                }
    } 
    ?>
    <div class="container col-md-7  py-3 height">
        <form action="" method="post">
            <fieldset>
                <legend class="text-center">
                    <h2>Registration Form</h2>
                </legend>
                <input class="form-control " type="text" name="fname" placeholder="first name"><br>
                <input class="form-control " type="text" name="lname" placeholder="last name"><br>
                <input class="form-control " type="email" name="email" placeholder="email"><br>
                <input class="form-control " type="number" name="age" placeholder="age"><br>
                <input class="form-control " type="password" name="password" placeholder="password"><br>
                <div class="text-center">
                    <button class="btn1" type="submit" name="submit">submit</button>
                    <a href="viewdata.php"><button type="button" id="clickableElement" class="btn1 ">View
                            Record's</button></a>
                </div>
            </fieldset>
        </form>
    </div>
</main>

<?php
include 'include/footer.php';
?>

</html>