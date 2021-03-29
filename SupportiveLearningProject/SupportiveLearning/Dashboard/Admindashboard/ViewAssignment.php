<?php
include("../../Connection.php");
include("Navbar.php");

$fetch = "select * from assignment";
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
              <h4 class="card-title"><?php echo $data[1] ?></h4>
              <!--Text-->
              <p class="card-text"><?php echo $data[4]?></p>
              <p class="text-danger">Deadline : <?php echo $data[3]?></p>
              <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
       <?php  echo   "<button type='button' class='btn btn-warning btn-md'><a href='$data[5]'>Download Assignment</a></button>";
      echo "<br><br>";
     echo "<button type='submit' class='btn btn-warning btn-md'><a href='submitass.php?id=$data[0]'>Submit Assignment</a></button>";
   
   
   ?>    
    
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
    echo "Word file are not applicable";
}
include("Footer.php");
?>
</table>