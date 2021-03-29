<?php
include("../../Connection.php");
include("Navbar.php");
$batch = $_GET["Batch"];
$fetch = "select * from assignment where Batch_Code like '%$batch%'";
$run = mysqli_query($con,$fetch);
if(mysqli_num_rows($run) !=0){
echo "<div class='row'>";
    while($data = mysqli_fetch_array($run)){?>
    <div class="col-sm-3">
        <!-- Card deck -->
        <div class="card-deck">
        
          <!-- Card -->
          <div class="card mb-4">
        
            <!--Card image-->
            <div class="view overlay">
              
              <a href="#!">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>
        
            <!--Card content-->
            <div class="card-body">
        
              <!--Title-->
              <h2 class="card-title text-center">Title : <?php echo $data[1] ?></h2>
              <h5 class="card-title text-center text-primary">Post Date :<?php echo $data[2] ?></h5>
              <h5 class="card-title text-center text-danger">Deadline : <?php echo $data[3] ?></h5>
              <h6 class="card-title text-center">Description : <?php echo $data[4] ?></h6>

              <!--Text-->
            
              <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->

       
   
   

    
            </div>
        
          </div>
          <!-- Card -->
        </div>
          <!-- Card -->
          </div>
     <?php  
    }
echo "</div>";
}
else {
 echo "<div class='alert alert-danger' role='alert'>
    No Assignment
  </div>";
}
include("Footer.php");
?>
</table>