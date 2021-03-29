<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include("../../Connection.php");
    include("Navbar.php");
    $fetch = "select * from assignment";
    $run = mysqli_query($con,$fetch);
    $result = mysqli_fetch_array($run);

    ?>
    <form action="" method="post" enctype="multipart/form-data">
<div class="position-relative form-group">
    <label>Assignment Name</label>
    <input name="assname" type="text" class="form-control" value="<?php echo $result['AssName']?>"></div>
    <label for="">Select Assignment File</label>
    <br>
    <input type="file" id="file" name="file" class="form-control-file">
    <br>
    <button type="submit" name="btn">Send Assignment</button>
    </form>
    <?php
    include("../../Connection.php"); 
    if(isset($_POST['btn'])){

    $name = $_POST["assname"];
    $date = date('d / m / y');

    $filename = $_FILES["file"]["name"];
    $fileexten = $_FILES["file"]["type"];
    $filesize = $_FILES["file"]["size"];
    $filetemp = $_FILES["file"]["tmp_name"];
    if(strtolower($fileexten) == "application/pdf"){
        if($filesize <= 1073741824)
        {
            $folder = "../SubmitAssignment/" . $filename;
            $insert = "insert into submitassignment(AssignmentName,SubmisionDate,File) values('$name','$date','$folder')";
            $run = mysqli_query($con,$insert);
            move_uploaded_file($filetemp,$folder);
        }
        else
        {
            echo "<script>alert('Size Not Valid')</script>";
        } 
    }
    else
    {
        echo "<script>alert('Extension Not Valid')</script>";
    }
}
    include("Footer.php")
    ?>
</body>
</html>