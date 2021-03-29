<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
include("Navbar.php");
?>
<div class="tab-content">
    <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
        <div class="row">
            <div class="col-md-6">
                <div class="main-card mb-3 card">
                    <div class="card-body"><h5 class="card-title">Change Password</h5>
                        <form method="POST" action="">
                            <div class="position-relative form-group"><label>Please Enter Old Password</label>
                            <input name="opswd" placeholder="Old Password" type="password" class="form-control" required></div>

                            <div class="position-relative form-group"><label>Enter New Password</label>
                            <input name="npswd" placeholder="New Password" class="form-control" type="password" required></div>

                            <div class="position-relative form-group"><label>Enter Confirm Password</label>
                            <input name="cpswd" placeholder="Confirm Password" class="form-control" type="password" required></div>
                            

                            </div>
                            <button class="mt-1 btn btn-primary" type="submit" name="btn">Change Password</button>
                        </form>
                    </div>
                </div>
            </div> 
</body>
<?php
include("Footer.php");
?>
</html>
<?php

include("../../Connection.php");
if(isset($_POST["btn"]))
{
    
        $email = $_SESSION['email'];
        $fetch_query = "SELECT * from student where Email = '$email'";
        $execute = mysqli_query($con,$fetch_query);
        $data = mysqli_fetch_assoc($execute);
        $id = $data['id'];
        $pswd = $data['Password'];

        $oldpswd = $_POST['opswd'];
        $newpswd = $_POST['npswd'];
        $conpswd = $_POST['cpswd'];

        if($oldpswd == $pswd){
           if ($newpswd == $conpswd) {
            $update = "UPDATE student SET Password = '$newpswd' where id = $id";  
            $run = mysqli_query($con,$update);
            echo "<script>alert('Password Changed Successfully')</script>";
               # code...
           } else {
            echo "<script>alert('New Password and Confirm Password Must be same')</script>";
               # code...
           }
           
        }
        else
        {
           echo "<script>alert('Password Does Not Match')</script>";
        }
    }



?>
