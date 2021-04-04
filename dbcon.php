<?php 
 $con = new PDO('mysql:host=localhost; dbname=membre', 'root', '');
 $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 $con->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
?>
