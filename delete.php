<?php
include("connect.php");

if(isset($_GET["deleteID"])){
    $id = $_GET["deleteID"];

    $sql = "DELETE from `crud` WHERE id=$id";

    $result = mysqli_query($conn, $sql);
    if($result) {
        header("location:display.php");
    } else {
        die(mysqli_error($conn));
    }
}

?>