<?php 
require_once('dbcon.php');
require_once('navbar.php');
 if(isset($_POST['insertdata']))
 {
     $nom = $_POST['nom'];
     $age = $_POST['age'];
     $ecole = $_POST['ecole'];
     $classe = $_POST['classe'];
     if(!empty($nom)) {
         try {
             $stmt = $con->prepare("INSERT INTO membres (nom, age, ecole, classe) VALUES (:nom, :age, :ecole, :classe)");
             $stmt->execute(array(':nom'=>$nom, ':age'=>$age, ':ecole'=>$ecole, ':classe'=>$classe));
         }catch(PDOException $ex){
             echo $ex->getMessage();
         }
     }
    else{
        echo "INPUT NAME";
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
    <title>Php crud with modal</title>
</head>
<body>
<form action="" method="POST">
<!--Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Ajouter aux membre</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">

<div class="form-group">
<label>Nom</label>
<input type="text" class="form-control" name="nom">
</div>
<div class="form-group">
<label>Age</label>
<input type="text" class="form-control" name="age">
</div>
<div class="form-group">
<label>Ecole</label>
<input type="text" class="form-control" name="ecole">
</div>
<div class="form-group">
<label>classe</label>
<input type="text" class="form-control" name="classe">
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-trash"></i></button>
<button type="submit" class="btn btn-primary" name="insertdata"><i class="fa fa-check"></i></button>
</form>
</div>
</div>
</div>
</div>
    <div class="container pt-4">
    <div class="jumbotron">
    <div class="card">
    <h2>Php Crud with modal</h2>
    </div>
    <div class="card">
    <div class="card-body">
    
    <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i></button>
    <br>
    <table class="table table-striped">
    <tbody>
    <tr>
    <th>Nom</th>
    <th>Age</th>
    <th>Ecole</th>
    <th>Classe</th>
    <th>Action</th>
    </tr>
   
    <tr>
    <?php 
    $stmt = $con->prepare("SELECT * FROM membres ORDER BY id ASC");
    $stmt->execute();
    $results = $stmt->fetchAll();
    foreach($results as $row) {
        ?>
        <tr>
        <td><?=$row['nom'];?></td>
        <td><?=$row['age'];?></td>
        <td><?=$row['ecole'];?></td>
        <td><?=$row['classe'];?></td>
        <td>
        <a class="btn btn-success btn-sm"><i class="fa fa-pen"></i></a>
    <a class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
    
    </td>
        </tr>
        <?php
    }
    ?>
   
    </table>
    </div>
    </div>
    </div>
    </div>

    <script src="bootstrap/jquery/jquery.min.js"></script>
    <script src="bootstrap/bootstrap/bootstrap.min.js"></script>
</body>
</html>