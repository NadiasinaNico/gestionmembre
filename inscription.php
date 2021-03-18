<?php 
require_once('dbcon.php');
require_once('navbar.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Inscription</title>
</head>
<body>
<div class="container">
<button class="btn btn-success"><a href="add.php"><i class="fa fa-plus"></i></a></button>

<table class="table table-striped mt-4">
<tr>
<th>ID</th>
<th>Student Name</th>
<th>Age</th>
<th>Email</th>
<th>Action</th>
</tr>
<?php 
$stmt = $con->prepare("SELECT * FROM tb_students ORDER BY student_id ASC");
$stmt->execute();
$results = $stmt->fetchAll();
foreach($results as $row) {


?>
<tr>
<td><?=$row['student_id']; ?></td>
<td><?=$row['student_name']; ?></td>
<td><?=$row['age']; ?></td>
<td><?=$row['email']; ?></td>
<td>
<a href="edit.php?id=<?=$row['student_id'];?>" class="btn btn-primary btn-sm"><i class="fa fa-pen"></i></a>
<a href="delete.php?id=<?=$row['student_id'];?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
</td>
</tr>
<?php 
}
?>
</table>

</div>
    
</body>
</html>