<?php 
require_once('dbcon.php');
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    try{
        $stmt= $con->prepare("DELETE FROM tb_students WHERE student_id=?");
        $stmt->execute(array($id));
        header('Location:inscription.php');
    }catch(PDOException $ex) {
        echo $ex->getMessage();
    }
}
?>