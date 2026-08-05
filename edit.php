<?php

$conn=mysqli_connect("localhost","root","","test");

$id=$_GET['id'];

$result=mysqli_query($conn,"SELECT * FROM users WHERE id=$id");

$row=mysqli_fetch_assoc($result);

if(isset($_POST['update']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];

mysqli_query($conn,"UPDATE users SET

name='$name',
email='$email',
mobile='$mobile'

WHERE id=$id");

header("Location: display.php");

}

?>

<!DOCTYPE html>
<html>
<head>

<title>Edit User</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container mt-5">

<div class="card">

<div class="card-header bg-warning">

<h3>Edit User</h3>

</div>

<div class="card-body">

<form method="post">

<div class="mb-3">

<label>Name</label>

<input type="text" name="name" class="form-control"
value="<?php echo $row['name']; ?>">

</div>

<div class="mb-3">

<label>Email</label>

<input type="email" name="email" class="form-control"
value="<?php echo $row['email']; ?>">

</div>

<div class="mb-3">

<label>Mobile</label>

<input type="text" name="mobile" class="form-control"
value="<?php echo $row['mobile']; ?>">

</div>

<input type="submit" name="update"
value="Update"
class="btn btn-success">

<a href="display.php" class="btn btn-secondary">Back</a>

</form>

</div>

</div>

</div>

</body>
</html>