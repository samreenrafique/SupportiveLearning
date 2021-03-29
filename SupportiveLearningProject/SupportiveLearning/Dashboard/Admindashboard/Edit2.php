<?php
include("../../Connection.php");
$Id = $_GET['Id'];
$sname = $_POST['sname'];
$email = $_POST['email'];
$pswd = $_POST['pswd'];
$batch = $_POST['batch_code'];
$year = $_POST['year'];
$sem = $_POST['semester'];
if(isset($_POST['btn'])){
    if($_POST['sname'] == "" || $_POST['email'] == "" || $_POST['pswd'] == "" || $_POST['batch_code'] == "" || $_POST['year'] == "" || $_POST['semester'] == ""){
        echo "<script>alert('Please Fill all fields')</script>";
    }
    $query = "UPDATE student SET StudentName = '$sname',Email = '$email',Password = '$pswd',Batch_Code ='$batch',Year = '$year',Semester = '$sem' WHERE id = '$Id'";
    $run = mysqli_query($con,$query)or die("Don't Run Query");
   echo "<script>window.location.href='ViewStudent.php'</script>"; 
}


?>