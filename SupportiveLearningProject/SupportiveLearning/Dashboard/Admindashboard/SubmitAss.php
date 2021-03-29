<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    
    .form-control{
    border: 1.px;
    border: solid;
    border: color-blue;    
    }</style>
</head>
<body>
    <?php
    include("Navbar.php");
    $id = $_GET["id"];
    $fetch = mysqli_query($con,"select * from assignment where Id=$id");
    $data = mysqli_fetch_array($fetch);

    ?>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="container">
            <div class="row">
        
        <label style="font:solid; font-size:larger">Name</label>
        <br>
        <input type="text" class="form-control" value="<?php echo $data[1] ?>">
        <br>
        <br>
        <input type="text"  class="form-control" value="<?php echo $data[3] ?>">
        <br>
        </div>
        <input type="file" name="file">
        <br>
        <input type="submit" value="Submit" name="btn">
</div>
    </form>



    <?php
     
        if(isset($_POST["btn"]))
        {
            $name = $data[1] ;
            $submissiondate = date('d/ m / Y');
            $lastdate = $data[3];
            $sname = $_SESSION["name"];
            $dateTimestamp1 = strtotime($submissiondate); 
            $dateTimestamp2 = strtotime($lastdate);
            if ($dateTimestamp1 <= $dateTimestamp2) {
                $filename = $_FILES["file"]["name"];
                $fileexten = $_FILES["file"]["type"];
                $filesize = $_FILES["file"]["size"];
                $filetemp = $_FILES["file"]["tmp_name"];
         
                if(strtolower($fileexten) == "application/pdf")
                {
                   if($filesize <= 1073741824)
                   {
                     $folder = "../SubmitAssignment/" . $filename;
                     $insert = "insert into submitassignment(StudentName,AssignmentName, SubmisionDate, File) VALUES ('$sname','$name','$submissiondate','$folder')";
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
            else{
                echo "<script>
                alert('Assignment Date has been Expired');
                </script>";
            }
        }
        include("Footer.php");

    ?>
</body>
</html>