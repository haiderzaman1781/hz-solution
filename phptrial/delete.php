<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Data</title>
    <!-- Include SweetAlert CSS and JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.17/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.17/dist/sweetalert2.all.min.js"></script>
</head>
<body>
<?php
include 'include/connection.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $del = "DELETE FROM `getdata` WHERE `id`='$id'";
    $run = mysqli_query($conn, $del);

    if ($run) {
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
</body>
</html>
