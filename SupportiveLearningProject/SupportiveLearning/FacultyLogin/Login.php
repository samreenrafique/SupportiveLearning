<?php
session_start();
include("../Connection.php");
if(isset($_POST["btn"]))
{
    $email = $_POST["email"];
    $pswd = $_POST["pswd"];

    $fetch = "select * from SignUp where Email = '$email' and Password = '$pswd'";
    $run = mysqli_query($con,$fetch);
    $check = mysqli_num_rows($run);
    if($check == 1)
    {
        $data = mysqli_fetch_array($run);
        $_SESSION["name"] = $data[2];
        $_SESSION["role"] = $data[7];
        $_SESSION["email"] = $data[5];
        
        
            header("location:../Dashboard/Admindashboard/index.php");

    }
    else{
        echo "Invalid Credentials";
    }
}

?>