<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Form Controls - Wide selection of forms controls, using the Bootstrap 4 code base, but built with React.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="Wide selection of forms controls, using the Bootstrap 4 code base, but built with React.">
    <meta name="msapplication-tap-highlight" content="no">
    <!--
    =========================================================
    * ArchitectUI HTML Theme Dashboard - v1.0.0
    =========================================================
    * Product Page: https://dashboardpack.com
    * Copyright 2019 DashboardPack (https://dashboardpack.com)
    * Licensed under MIT (https://github.com/DashboardPack/architectui-html-theme-free/blob/master/LICENSE)
    =========================================================
    * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
    -->
<link href="./main.css" rel="stylesheet"></head>
<body>
<?php include("Navbar.php")?>

                        <div class="tab-content">
                            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body"><h5 class="card-title">Assignment</h5>
                                                <form method="POST" enctype="multipart/form-data">
                                                    <div class="position-relative form-group"><label>Assignment Name</label><input name="assname" placeholder="Assignment Name" type="text" class="form-control"></div>
                                                    <div class="position-relative form-group"><label>Batch Code</label>
                                                    <select name="drop" id="<" class="form-control">
                                                        <option disabled selected>Select Batch</option>
                                                   <?php
                                                    $run = mysqli_query($con,"select * from Batch_Code");
                                                    while($data = mysqli_fetch_array($run)){
                                                        
                                                  
                                                 echo "<option value = '$data[1]'>$data[1]</option>";
                                                     } ?>
                                                  </select>
                                                    </div>
                                                    <div class="position-relative form-group"><label>Subject</label>
                                                    <select name="sub" id="" class="form-control">
                                                        <option disabled selected>Select Subject</option>
                                                   <?php
                                                    $run = mysqli_query($con,"select * from Subject");
                                                    while($data = mysqli_fetch_array($run)){
                                                        
                                                  
                                                 echo "<option value = '$data[1]'>$data[1]</option>";
                                                     } ?>
                                                    </select>
                                                </div>
                                                <br>
                                                    <div class="position-relative form-group"><label>Assignment End Date</label><input name="edate"  placeholder="Assignment End Date" type="date" class="form-control"></div>
                                            
                                                    <div class="position-relative form-group"><label for="exampleText" class="">Description</label><textarea name="description" class="form-control"></textarea></div>
                                                    <div class="position-relative form-group"><label for="exampleFile" class="">File</label><input name="file" type="file" class="form-control-file">
                                                    </div>
                                                    <button class="mt-1 btn btn-primary" name="btn">Send Assignment</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>            
                    <?php include("Footer.php")?>
                    <?php include("../../Connection.php");
     if(isset($_POST["btn"]))
     {
       $fname = $_SESSION["name"];
       $a = $_POST["assname"];
       $b = date('d/ m / Y');
       $c = $_POST["edate"];
       $d = $_POST["description"];
       $e = $_POST["drop"];
       $f = $_POST["sub"];

       $filename = $_FILES["file"]["name"];
       $fileexten = $_FILES["file"]["type"];
       $filesize = $_FILES["file"]["size"];
       $filetemp = $_FILES["file"]["tmp_name"];

       if(strtolower($fileexten) == "image/jpg" || strtolower($fileexten) == "image/jpeg" || strtolower($fileexten) == "image/png" || strtolower($fileexten) == "application/pdf")
       {
          if($filesize <= 1073741824)
          {
            $folder = "../AssFiles/" . $filename;
            $insert = "insert into assignment(AssName,AssStartDate,AssEndDate,AssDescription,AssFile,Batch_Code,Subject,Upload) values('$a','$b','$c','$d','$folder','$e','$f','$fname')";
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
     include("Footer.php");
     ?>
                   </body>
</html>
