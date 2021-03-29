<?php
  include("../../Connection.php");
  include("Navbar.php");
  $id = $_GET["id"]??"";
  $run = mysqli_query($con,"select * from submitassignment where Id = $id");
  $data = mysqli_fetch_array($run);
?>
<form action="" method="post">
<label>Name</label>
<br>
<input class="form-control" type="text" name="mar" value="<?php echo $data[1] ?>" readonly>

<label>Submit On</label>
<br>
<input class="form-control" type="text" name="date" value="<?php echo $data[3] ?>" readonly>
<label>Marks</label>
<br>
<input class="form-control" type="number" name="marks" id="">
<br><br>
<input type="submit" value="Send Marks" name="btn">
</form>
<?php
if(isset($_POST['btn'])){

    $assignmentname =$data[2];

    $m = $_POST["marks"];
    
    $query = mysqli_query($con,"update submitassignment set Marks = '$m' where Id = $id" ); 
    if($query){
        echo "<script>alert('Student Marks Added');
        window.location.href = 'FacultyViewAssignment.php';
        </script>";         
    }
    else{
      echo "<script>alert('Student Marks Not Added');
      window.location.href = 'FacultyViewAssignment.php';
      </script>";         
    }
}
include("Footer.php");

?>