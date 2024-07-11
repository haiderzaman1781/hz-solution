<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Include SweetAlert CSS and JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.17/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.17/dist/sweetalert2.all.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .effect {
            background-color: gray;
            color: black;
        }

        .effect:hover {
            transition: all 1s;
            color: gray;
            opacity: 90%;
            /* background-color: gray; */
            border:1px solid gray;
        }

        .bgc {
            background-color: red;
            color: white;
        }

        .bgc:hover {
            transition: all .5s;
            color: gray;
            background-color: transparent;
            border: 1px solid black;
        }

        .bgc1 {
            background-color: #F5F500;
            color: black;
        }

        .bgc1:hover {
            transition: all .5s;
            color: gray;
            background-color: transparent;
            border: 1px solid black;
        }
    </style>
<?php
include ('include/connection.php');

// Fetch the data based on the ID passed in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $select = "SELECT * FROM `getdata` WHERE `id` = '$id'";
    $run = mysqli_query($conn, $select);
    $row = mysqli_fetch_array($run);
}

// Handle form submission to update the record
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $password = $_POST['password'];

    $query = "UPDATE `getdata` SET `firstname` = '$fname', `lastname` = '$lname', `email` = '$email', `age` = '$age', `password` = '$password' WHERE `id` = '$id'";
    $runing = mysqli_query($conn, $query);
    if ($runing) {
        // Deleted successfully, redirect with success message
        echo "<script>
                Swal.fire({
                    icon: 'success',
                    title: 'Record Deleted',
                    text: 'The record has been successfully deleted.'
                }).then(function() {
                    window.location = 'viewdata.php';
                });
             </script>";
    } else {
        // Deletion failed, redirect with error message
        echo "<script>
        console.log('error');
        </script>";
    }
}
?>



<body>
    <main>
        <div class="table-responsive m-5">
            <table class="table table-striped table-hover table-border table-secondary align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Age</th>
                        <th>Password</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM getdata";
                    $run = mysqli_query($conn, $sql);
                    if ($run) {
                        while ($data = mysqli_fetch_array($run)) {
                            ?>
                            <tr>
                                <td><?php echo $data['firstname']; ?></td>
                                <td><?php echo $data['lastname']; ?></td>
                                <td><?php echo $data['email']; ?></td>
                                <td><?php echo $data['age']; ?></td>
                                <td><?php echo $data['password']; ?></td>
                                <td>
                                    <button type="button" class="btn bgc" data-bs-toggle="modal"
                                        data-bs-target="#updateModal<?php echo $data['id']; ?>">Update</button>
                                </td>
                                <td>
                                    <a href="delete.php?id=<?php echo $data['id']; ?>" class="btn bgc1">Delete</a>
                                </td>
                            </tr>

                            <!-- Modal for Update -->
                            <div class="modal fade" id="updateModal<?php echo $data['id']; ?>" tabindex="-1"
                                aria-labelledby="updateModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="updateModalLabel">Update Records</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form id="update-form" method="POST" action="">
                                                <input type="hidden" autocomplete="#" name="id" value="<?php echo $data['id']; ?>">
                                                <div class="mb-3">
                                                    <label for="fname" class="form-label">First Name</label>
                                                    <input type="text" autocomplete="#" class="form-control" id="fname" name="fname"
                                                        value="<?php echo $data['firstname']; ?>" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="lname" class="form-label">Last Name</label>
                                                    <input type="text" autocomplete="#" class="form-control" id="lname" name="lname"
                                                        value="<?php echo $data['lastname']; ?>" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="email" class="form-label">Email</label>
                                                    <input type="email" autocomplete="#" class="form-control" id="email" name="email"
                                                        value="<?php echo $data['email']; ?>" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="age" class="form-label">Age</label>
                                                    <input type="number" autocomplete="#" class="form-control" id="age" name="age"
                                                        value="<?php echo $data['age']; ?>" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="password" class="form-label">Password</label>
                                                    <input type="password" autocomplete="#" class="form-control" id="password" name="password"
                                                        value="<?php echo $data['password']; ?>" required>
                                                </div>
                                                <div class="text-center">
                                                <button type="submit" class="btn btn-secondary" name="submit">Update</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="container text-center">
            <a href="insertforn.php"><button class="btn px-5 effect">Insert Customer Data</button></a>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>