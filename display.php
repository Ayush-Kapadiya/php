<?php
$conn=mysqli_connect("localhost","root","","test");

$result=mysqli_query($conn,"SELECT * FROM users");
?>

<!DOCTYPE html>
<html>
<head>

<title>Display Users</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container mt-5">

<h2 class="text-center mb-4">User Details</h2>

<a href="create.php" class="btn btn-primary mb-3">Add User</a>

<table class="table table-bordered table-hover">

<thead class="table-dark">

<tr>

<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Mobile</th>
<th>Action</th>

</tr>

</thead>

<tbody>

<?php
while($row=mysqli_fetch_assoc($result))
{
?>

<tr>

<td><?php echo $row['id']; ?></td>

<td><?php echo $row['name']; ?></td>

<td><?php echo $row['email']; ?></td>

<td><?php echo $row['mobile']; ?></td>

<td>

<a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm">
Edit
</a>

</td>

</tr>

<?php
}
?>

</tbody>

</table>

</div>

</body>
</html>