<?php
require('../../Connection.php');
if(!isset($_SESSION['IS_LOGIN'])){
    //header('location:ViewStudent.php');
}

$Id = $_GET['Id'];
if($Id==0){
    header('location:StudentMarks.php');
    die();
}
$query = "DELETE FROM studentmarks WHERE id = $Id";
mysqli_query($con,$query);
header('location:StudentMarks.php');
?>