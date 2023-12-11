<?php
include("connect.php");

?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible"content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Display</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add user</a></button>
        <table class="table table-hover table-striped table-dark" id="display-table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Contact</th>
                <th scope="col">Password</th>
                <th scope="col">Commands</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $sql = "SELECT * from `crud`";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row["id"];
                        $fname = $row["fname"];
                        $lname = $row["lname"];
                        $email = $row["email"];
                        $contact = $row["contact"];
                        $password = $row["password"];

                        echo "<tr>
                                <th scope='row'>" . $id . "</th>
                                <td>" . $lname . ", " . $fname . "</td>
                                <td>" . $email . "</td>
                                <td>" . $contact . "</td>
                                <td>" . $password . "</td>
                                <td>
                                    <button class='btn btn-warning text-light'><a href='update.php?updateID=" . $id . "'>Update</a></button>
                                    <button class='btn btn-danger text-light'><a href='delete.php?deleteID=" . $id . "'>Delete</a></button>
                                </td>
                            </tr>";
                    }
                }


                ?>
            </tbody>
        </table>
    </div>
</html>
