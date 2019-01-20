<?php
require("classes/init.php");
$session->unset_user();
if(isset($_POST['submit']))
{
    $calldata->uemail=trim($_POST['email']);$calldata->upass=trim($_POST['pwd']);
    $calldata->uname=trim($_POST['name']);$calldata->ucontact=trim($_POST['contact']);
    $calldata->ucity=trim($_POST['city']);$calldata->ugender=trim($_POST['gender']);
    $calldata->uage=trim($_POST['age']);
    $calldata->create_user();
}
else if(isset($_POST['login']))
{
     $calldata->uemail=trim($_POST['email']);$calldata->upass=trim($_POST['pwd']);
      print $calldata->check_login();
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h2>Registration Form</h2>
  <form action="#" method="post">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" required="" id="email"  name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" required="" id="pwd"  name="pwd">
    </div>
    <div class="form-group">
      <label for="pwd">User Name:</label>
      <input type="text" class="form-control" id="name" required="" name="name">
    </div>
    <div class="form-group">
      <label for="pwd">Contact:</label>
      <input type="text" class="form-control" id="contact" required="" name="contact">
    </div>
    <div class="form-group">
      <label for="pwd">City:</label>
      <input type="text" class="form-control" id="city" required="" name="city">
    </div>
    <div class="form-group">
      <label for="pwd">Gender:</label>
      <select name="gender" class="form-control"> <option value="">Select</option><option value="Female">Female</option><option value="Male">Male</option></select>
    </div>
    <div class="form-group">
      <label for="pwd">Age:</label>
      <input type="text" class="form-control" id="age" required="" name="age">
    </div>
    <button type="submit" name="submit" class="btn btn-default">Submit</button>
  </form>
  
  <hr />
  <h2>Login</h2>
  <form action="#" method="post">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" required="" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" required="" name="pwd">
    </div>
    <button type="submit" name="login" class="btn btn-default">Submit</button>
  </form>
</div>
</body>
</html>
