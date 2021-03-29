<?php
session_start();

include("../../../Connection.php");
if(isset($_POST["btn"]))
{
    $email = $_POST["enroll"];
    $pswd = $_POST["pswd"];

    $fetch = "select * from student where Email = '$email' and Password = '$pswd'";
    $run = mysqli_query($con,$fetch);
    $check = mysqli_num_rows($run);
    if($check == 1)
    {
    $data = mysqli_fetch_array($run);
    $_SESSION["name"] = $data[0];
    $_SESSION["role"] = $data[6];
    $_SESSION["email"] = $data[1];
    $_SESSION["batch_code"] = $data[3];
    header("location:../index.php");
    }
    else{
        echo "Invalid Credentials";
    }
}

?>