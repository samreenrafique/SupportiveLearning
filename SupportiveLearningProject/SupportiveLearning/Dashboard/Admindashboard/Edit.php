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
$Id = $_GET['Id'];
$fetch = "SELECT * from Student where id = $Id";
$result = mysqli_query($con,$fetch);
$row = mysqli_fetch_array($result);
?>

<div class="tab-content">
    <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
        <div class="row">
            <div class="col-md-6">
                <div class="main-card mb-3 card">
                    <div class="card-body"><h5 class="card-title">Update Student Form</h5>
                        <form method="POST" enctype="multipart/form-data" action="Edit2.php?Id=<?php echo $row['id'] ?>">
                        
                            <div class="position-relative form-group" ><label>Student Name</label>
                            <input name="sname" placeholder="Student Name"  type="text" class="form-control" value="<?php echo $row['StudentName'] ?>" required></div>
                            
                            <div class="position-relative form-group"><label for="exampleText" class="">Student Email</label>
                            <input name="email" placeholder="Student Email" class="form-control"  required value="<?php echo $row['Email'] ?>"></div>

                            <div class="position-relative form-group"><label>Password</label>
                            <input name="pswd"  placeholder="Password" type="password" class="form-control" required value="<?php echo $row['Password'] ?>"></div>
                    
                            <div class="position-relative form-group"><label for="exampleText" class="">Batch Code</label>
                            <input name="batch_code" placeholder="Student Batch_Code" class="form-control" required value="<?php echo $row['Batch_Code'] ?>"></div>

                            <div class="position-relative form-group"><label>Year</label>
                            <input name="year" placeholder="Student Year" class="form-control" type="text" required value="<?php echo $row['Year'] ?>"></div>

                            <div class="position-relative form-group"><label>Semester</label>
                            <input name="semester" placeholder="Semester" class="form-control" required value="<?php echo $row['Semester'] ?>"></div>
                            

                            </div>
                            <button class="mt-1 btn btn-primary" type="submit" name="btn">Update Student</button>
                        </form>
                    </div>
                </div>
            </div> 
            <?php
            include("Footer.php");
            ?>
</body>

</html>
