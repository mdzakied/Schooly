<!-- Delete -->
<?php
// include database connection file
include_once("./src/script/connection.php");

// Get id from URL to delete that user
$id = $_GET['id'];

// Delete user row from table based on given id
$result = mysqli_query($konek, "DELETE FROM psb2021 WHERE id=$id");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:psb_2021_admin.php");