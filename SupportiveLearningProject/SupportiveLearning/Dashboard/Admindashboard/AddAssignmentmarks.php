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
              <h4 class="card-title text-center"><?php echo $data[1] ?></h4>
              <!--Text-->
            
              <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
       <?php  echo   "<button type='button' class='btn btn-light-blue btn-md'><a href='FacultyViewAssignment.php?Assignment=$data[1]'>View Student</a></button>"
       
   
   
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
 echo "<div class='alert alert-danger' role='alert'>
    No Assignment
  </div>";
}
include("Footer.php");
?>
</table>