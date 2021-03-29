<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css"/>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
</head>

<body>
<?php
include("../../Connection.php");
include("Navbar.php");
if(isset($_SESSION['IS_LOGIN'])){
    header('location:AddStudent.php');
    die();
}
$fetch = "select * from submitassignment";
$run = mysqli_query($con,$fetch);
?>

<table id="userTable" class="table table-bordered">
    <thead>
        <tr>
        <th>Id</th>
        <th>Student Name</th>
        <th>Student Marks</th>

        </tr>
    </thead>
    <tbody>    
    <?php while($data = mysqli_fetch_array($run)){?>
    <tr>
        <td><?php echo $data[0]?></td>
        <td><?php echo $data[1]?></td>
        <td><?php echo $data[5]?></td>


    </tr>
    <?php
}

?>
</table>
</body>
<?php
include("Footer.php");
?>
<script>
$(document).ready(function() {
    $('#userTable').DataTable();
});
</script>
</html>