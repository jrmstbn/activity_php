<?php

$conn = new mysqli('localhost', 'root', '', 'activity_php_crud');


if (!$conn) {
    die(mysqli_error($conn));
}


?>