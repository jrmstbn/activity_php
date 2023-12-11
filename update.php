<?php
include('connect.php');

$id = $_GET['updateID'];
$sql = "SELECT * from `crud` WHERE id=$id";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);
$firstname = $row["fname"];
$lastname = $row["lname"];
$email = $row["email"];
$contact = $row["contact"];
$password = $row["password"];

if(isset($_POST['submit'])) {
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $contact = $_POST['contact'];
  $password = $_POST['password'];

  $sql = "UPDATE `crud` set fname='$firstname', lname='$lastname', email='$email', contact='$contact', password='$password' WHERE id=$id";

  $result = mysqli_query($conn, $sql);

  if($result) {
    header("location:display.php");
  }else {
    echo "Hello World";
    die(mysqli_error($conn));
  }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Activity</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="container my-5">
      <form method="post">
        <div class="mb-3">
          <label class="form-label">First name</label>
          <input type="text" class="form-control" name="firstname" value="<?php echo $firstname; ?>" placeholder="Enter your first name">
        </div>
        <div class="mb-3">
          <label class="form-label">Last name</label>
          <input type="text" class="form-control" name="lastname" value="<?php echo $lastname; ?>" placeholder="Enter your last name">
        </div>
        <div class="mb-3">
          <label class="form-label">Email address</label>
          <input type="email" class="form-control" name="email" value="<?php echo $email; ?>" placeholder="Enter your email address">
        </div>
        <div class="mb-3">
          <label class="form-label">Contact number</label>
          <input type="text" class="form-control" name="contact" value="<?php echo $contact; ?>" placeholder="Enter your contact number">
        </div>
        <div class="mb-3">
          <label class="form-label">Password</label>
          <input type="password" class="form-control" name="password" value="<?php echo $password; ?>" placeholder="Enter your password">
        </div>
        
        <button name="submit" type="submit" class="btn btn-primary">Update</button>
      </form>
    </div>
  </body>
</html>
