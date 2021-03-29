<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
</head>
<body>
           
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
<!-- Card -->
</body>
</html>


<?php

include("../../Connection.php");
include("Navbar.php");
$fetch = "select * from FAQS";
$run = mysqli_query($con,$fetch);
if(mysqli_num_rows($run) !=0)
{
  
    while($data = mysqli_fetch_array($run))
    {?>
    <!--Accordion wrapper-->
<div class="accordion md-accordion accordion-1" id="accordionEx23" role="tablist">
  <div class="card">
    <div class="card-header blue lighten-3 z-depth-1" role="tab" id="heading96">
      <h5 class="text-uppercase mb-0 py-1">
        <a class="white-text font-weight-bold" data-toggle="collapse" href="#collapse96" aria-expanded="true"
          aria-controls="collapse96">
         <?php  echo $data[1] ?>
        </a>
      </h5>
    </div>
    <div id="collapse96" class="collapse show" role="tabpanel" aria-labelledby="heading96"
      data-parent="#accordionEx23">
      <div class="card-body">
        <div class="row my-4">
          <div class="col-md-8">
            <h2 class="font-weight-bold mb-3 black-text"></h2>
            <p class=""></p>
            <p class="mb-0"><?php  echo $data[2] ?></p>
          </div>
          <div class="col-md-4 mt-3 pt-2">
            <div class="view z-depth-1">
              <img src="https://michiganvirtual.org/wp-content/uploads/2020/08/iStock-1137617609-1024x1024.jpg" alt="" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
<!--Accordion wrapper-->
    <?php
    
    }
     
}

?>
</table>