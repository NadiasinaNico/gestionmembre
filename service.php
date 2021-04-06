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
<label>Titre</label>
<input type="text" class="form-control" name="titre">
</div>
<div class="form-group">
<label>Auteur</label>
<input type="text" class="form-control" name="auteur">
</div>
<div class="form-group">
<label>Prix</label>
<input type="text" class="form-control" name="prix">
</div>
<div class="form-group">
<label>page</label>
<input type="text" class="form-control" name="page">
</div>
<div class="form-group">
<label>document</label>
<input type="file" class="form-control" name="document">
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
    <h2>Liste des services AJID Mada</h2>
    </div>
    <div class="card">
    <div class="card-body">
    
    <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i></button>
    
<form method="post">

<label>Search</label>
<input type="text" name="search" >
<button type="submit" name="submit" class="btn btn-primary btn-sm"><i class="fa fa-search"></i>Search</button>

    <br>
    <table class="table table-striped">
    <tbody>
    <tr>
    <th>titre</th>
    <th>Auteur</th>
    <th>prix</th>
    <th>page</th>
    <th>documents</th>
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