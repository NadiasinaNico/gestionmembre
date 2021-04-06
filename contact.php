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
<div class="container">
  
    <div class="row">
    <div class="col-md-6">
    <form method="POST" action="">
    <div class="form-group">
    <input type="text" class="form-control" placeholder="First Name">
    </div>
    <div class="form-group">
    <input type="text" class="form-control" placeholder="Last Name">
    </div>
    <div class="form-group">
    <input type="email" class="form-control" placeholder="Email">
    </div>
    <div class="form-group">
    <input type="text" class="form-control" placeholder="Subject">
    </div>
    <div class="form-group">
    <textarea type="text"   class="form-control" placeholder="Message"></textarea>
    </div>
    <div class="form-group">
   <button class="btn btn-primary btn-sm"><i class="fa fa-check"></i>Send</button>
   </div>
  
   </div>
   </div>
   </div>
    </div>
    </form>
   </div>
   
    
</body>
</html>