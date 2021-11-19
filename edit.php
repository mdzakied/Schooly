<!-- Edit -->
<?php
    // include database connection file
    include_once("./src/script/connection.php");

    // Get id from URL to delete that user
    $id = $_GET['id'];

    // Delete user row from table based on given id
    $result = mysqli_query($konek, "UPDATE psb2021 SET status='Diterima' WHERE id=$id");

    header("Location:psb_2021_admin.php");
?>