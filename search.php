<?php 
 $con = new PDO("mysql:host=localhost;dbname=testing", 'root', '');
 if (isset($_POST["submit"])) {
     $str = $_POST["search"];
     $sth = $con->prepare("SELECT * FROM `users` WHERE username = '$str'");
     $sth->setFetchMode(PDO:: FETCH_OBJ);
     $sth-> execute();
     if($row = $sth->fetch()) {
         ?>
         <br><br><br>
         <table class="table table-striped">
         <tr>
         <th>Username</th>
         <th>Password</th>
         </tr>
         <tr>
         <td><?php echo $row->username; ?></td>
         <td><?php echo $row->password; ?></td>
         </tr>
         </table>
         <?php 
     }
   
     else {
         echo "Name Does not exist";
     }
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/fontawesome-free/css/all.css">
    <title>Search</title>
</head>
<body>
<div class="container mt-4">
<form method="post">
<label>Search</label>
<input type="text" name="search">
<button type="submit" name="submit" class="btn btn-primary btn-sm"><i class="fa fa-search"></i>Search</button>
    </div>
</body>
</html>