<?php
include("Connection.php");
session_start();
$a = $_SESSION["name"];
if($_SESSION["role"] == "Admin" || $_SESSION["role"] == "Faculty"){
    header("location:FacultyLogin/Login.html");
}else{
    header("location:Dashboard/AdminDashboard/StudentLogin/StudentLogin.html");
}
session_destroy();




?>