<?php
include_once("connection.php");

if(isset($_POST['id']) && isset($_POST['status'])) {
    $id = $_POST['id'];
    $status = $_POST['status'];

    $query = "UPDATE dt_akad SET status='$status' WHERE id=$id";
    $result = mysqli_query($conn, $query);

    if($result) {
        echo "success";
    } else {
        echo "error";
    }
} else {
    echo "error";
}
?>
