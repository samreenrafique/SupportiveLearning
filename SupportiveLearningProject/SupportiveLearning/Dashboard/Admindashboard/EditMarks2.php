<?php
include("../../Connection.php");
$Id = $_GET['Id'];
$drname = $_POST['name'];
$mar = $_POST['marks'];

if(isset($_POST['btn'])){
    if($_POST['name'] == "" || $_POST['marks'] == ""){
      echo "<script>alert(Please Fill this fields)</script>";
    }
    $query = "UPDATE studentmarks SET Name = '$drname', Marks = '$mar' WHERE id = '$Id'";
    $run = mysqli_query($con,$query);
    echo "<script>window.location.href='StudentMarks.php'</script>";
}
?>