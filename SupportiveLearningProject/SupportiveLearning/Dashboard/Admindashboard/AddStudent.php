<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include("Navbar.php")?>

<div class="tab-content">
    <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
        <div class="row">
            <div class="col-md-6">
                <div class="main-card mb-3 card">
                    <div class="card-body"><h5 class="card-title">New Student Form</h5>
                        <form method="POST" enctype="multipart/form-data">
                            <div class="position-relative form-group"><label>Student Name</label>
                            <input name="sname" placeholder="Student Name" type="text" class="form-control" required></div>

                            <div class="position-relative form-group"><label for="exampleText" class="">Student Email</label>
                            <input name="email" placeholder="Student Email" class="form-control" required></div>

                            <div class="position-relative form-group"><label>Password</label>
                            <input name="pswd"  placeholder="Password" type="password" class="form-control" required></div>
                    
                            <div class="position-relative form-group"><label for="exampleText" class="">Batch Code</label>
                            <br>
                            <select name="drop" id="<" class="form-control">
                            <option disabled selected>Select Batch</option>
                            <?php
                            $run = mysqli_query($con,"select * from Batch_Code");
                            while($data = mysqli_fetch_array($run)){       
                            echo "<option value = '$data[1]'>$data[1]</option>";
                            } ?>
                          </select>

                            <div class="position-relative form-group"><label>Year</label>
                            <input name="year" placeholder="Student Year" class="form-control" type="text" required></div>

                            <div class="position-relative form-group"><label>Semester</label>
                            <input name="semester" placeholder="Semester" class="form-control" required></div>
                            

                            </div>
                            <button class="mt-1 btn btn-primary" type="submit" name="btn">Add New Student</button>
                        </form>
                    </div>
                </div>
            </div> 
</body>
</html>
<?php
include("../../Connection.php");
if(isset($_POST["btn"]))
{
    $a = $_POST["sname"];
    $b = $_POST["email"];
    $c = $_POST["pswd"];
    $d = $_POST["drop"];
    $e = $_POST["year"];
    $f = $_POST["semester"];
    $EnrolmentNo = $a."B".$d."Y".$e;

    $query = mysqli_query($con, "select * from Student Where Email = '$b' "); 
    if(mysqli_num_rows($query)!=0){     
        echo "<script>alert('Email Already Exist');       
        window.location.href = 'AddStudent.php';
        </script>"; 
  
              
    }
else{
    $insert = "insert into Student(StudentName,Email,Password,Batch_Code,Year,Semester,Role,EnrollmentNo) values('$a','$b','$c','$d','$e','$f','Student','$EnrolmentNo')";
    $run = mysqli_query($con,$insert);
    echo "<script>alert('New Student Added');
    window.location.href = 'Addstudent.php';
    </script>"; 

    
}
  
}
include("Footer.php");
?>
