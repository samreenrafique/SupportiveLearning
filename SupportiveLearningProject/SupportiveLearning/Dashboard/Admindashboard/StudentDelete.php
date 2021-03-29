<?php
require('../../Connection.php');
if(!isset($_SESSION['IS_LOGIN'])){
    //header('location:ViewStudent.php');
}

$Id = $_GET['Id'];
if($Id==0){
    header('location:ViewStudent.php');
    die();
}
$query = "DELETE FROM student WHERE id = $Id";
mysqli_query($con,$query);
header('location:ViewStudent.php');
?>