<?php
$conn = mysqli_connect("localhost","root","","test");

if(isset($_POST['save']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];

    mysqli_query($conn,"INSERT INTO users(name,email,mobile)
    VALUES('$name','$email','$mobile')");

    header("Location: display.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Create User</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container mt-5">

<div class="card">
<div class="card-header bg-primary text-white">
<h3>Add User</h3>
</div>

<div class="card-body">

<form method="post">

<div class="mb-3">
<label>Name</label>
<input type="text" name="name" class="form-control" required>
</div>

<div class="mb-3">
<label>Email</label>
<input type="email" name="email" class="form-control" required>
</div>

<div class="mb-3">
<label>Mobile</label>
<input type="text" name="mobile" class="form-control" required>
</div>

<input type="submit" name="save" value="Save" class="btn btn-success">

<a href="display.php" class="btn btn-secondary">View Users</a>

</form>

</div>
</div>

</div>

</body>
</html>