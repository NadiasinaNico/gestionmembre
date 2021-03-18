<?php 
 require_once('dbcon.php');
 require_once('navbar.php');
 if(isset($_POST['btn_submit'])) {
     $id = $_POST['txt_id'];
     $name = $_POST['txt_student_name'];
     $age = $_POST['txt_age'];
     $email = $_POST['txt_email'];
     if(!empty($name)) {
         try {
             $stmt = $con->prepare("UPDATE tb_students set student_name= :name, age = :age, email = :email WHERE
             student_id = :id"); 
             $stmt->execute(array(':name'=>$name, ':age'=>$age, 'email'=>$email, ':id'=>$id));
             if($stmt){
             header('Location: inscription.php');
             }
         }catch (PDOException $ex) {
             echo $ex->getMessage();
            }
         }else {
             echo '<div class="alert alert-danger">le champ obligatoire</div>';
         }
         
     }
     $student_id = 0;
         $name = '';
         $age = 0;
         $email = '';
         if(isset($_GET['id'])) {
             $id = $_GET['id'];
             $stmt = $con->prepare('SELECT * FROM tb_students WHERE student_id = :id');
             $stmt->execute(array(':id'=>$id));
             $row = $stmt->fetch();
             $student_id = $row['student_id'];
            $name = $row['student_name'];
            $age = $row['age'];
            $email = $row['email'];
         }
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
    <h2> Add New Student</h2>
    <div class="row">
    <div class="col-8">
    <form action="" method="POST">
    <div class="form-group">
    <label>Student Name</label>
    <input type="text" name="txt_student_name" class="form-control" value="<?=$name;?>">
    </div>
    <div class="form-group">
    <label>Age</label>
    <input type="number" name="txt_age" class="form-control" value="<?=$age;?>">
    </div>
    <div class="form-group">
    <label>Email</label>
    <input type="email" name="txt_email" class="form-control" value="<?=$email;?>">
    </div>
    <div class="form-group">
   
    <button type="submit" name="btn_submit" class="btn btn-success btn-sm"><i class="fa fa-check"></i></button>
    </div>
    </div>
    </div>
    </div>
    </form>
    </body>
    </html>
