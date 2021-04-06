<?php
require_once 'navbar.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Document</title>
</head>
<body> 
<div class="container mr-8 col-md-5 mt-5 " >
<h1 style="font-size: 30px;">Inscrivez vos sur membre AJID Mada</h1>
<form method="POST" action="">
<div class="form-group">
<label>Username</label>
<input type="text" class="form-control" name="username">
</div>
<div class="form-group">
<label>Email</label>
<input type="email" class="form-control" name="email">
</div>
<div class="form-group">
<label>Password</label>
<input type="password" class="form-control" name="password">
</div>
<div class="form-group">
<label>Confirmer le password</label>
<input type="password" class="form-control" name="confirm">
</div>
<div class="form-group">
<button class="btn btn-success btn-sm"><i class="fas fa-check"></i>envoyer</button>
<button class="btn btn-warning btn-sm"><i class="fas fa-plus"></i><a href="index.php">Annuler</a></button>
</div>
</form>

</div>
</div>
</div>
    
</body>
</html>