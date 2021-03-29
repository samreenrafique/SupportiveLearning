<?php
include("../Connection.php");
if(isset($_POST["btn"]))
{
    $a = $_POST["first_name"];
    $b = $_POST["last_name"];
    $c = $_POST["dob"];
    $d = $_POST["gender"];
    $e = $_POST["email"];
    $f = $_POST["pswd"];
    $g = $_POST["dropdown"];

    $query = mysqli_query($con, "select * from SignUp Where Email = '$e' "); 
    if(mysqli_num_rows($query)!=0){
        echo "<script>alert('Email Already Exist');
        window.location.href = 'FacultyReg.html';
        </script>"; 
              
    }
else{
    $insert = "insert into SignUp(FirstName,LastName,DOB,Gender,Email,Password,Role) values('$a','$b','$c','$d','$e','$f','Faculty')";
    $run = mysqli_query($con,$insert);
    echo "<script>alert('Data Saved Successfully');
    window.location.href = 'FacultyReg.html';
    </script>"; 
}
  
}


?>