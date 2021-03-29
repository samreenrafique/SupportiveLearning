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
$fetch = "select * from Student";
$run = mysqli_query($con,$fetch);
?>

<table id="userTable" class="table table-bordered">
    <thead>
        <tr>
        <th>Student Name</th>
        <th>Student Email</th>
        <th>Student Password</th>
        <th>Student Batch_Code</th>
        <th>Student Year</th>
        <th>Student Semester</th>
        <th>Role</th>
        <th>Operations</th>
        </tr>
    </thead>
    <tbody>    
    <?php while($data = mysqli_fetch_array($run)){?>
    <tr>
        <td><?php echo $data[0]?></td>
        <td><?php echo $data[1]?></td>
        <td><?php echo $data[2]?></td>
        <td><?php echo $data[3]?></td>
        <td><?php echo $data[4]?></td>
        <td><?php echo $data[5]?></td>
        <td><?php echo $data[6]?></td>
        <td colspan="3"><a href='AddStudent.php'>Create Student</a>&nbsp
        <a href='Edit.php?Id=<?php echo $data['id']?>'>Edit</a>&nbsp
        <a href='StudentDelete.php?Id=<?php echo $data['id']?>'>Delete</a></td>
    </tr>
    <?php
}

?>
</table>
<?php
include("Footer.php");
?>

</body>
<script>
$(document).ready(function() {
    $('#userTable').DataTable();
});
</script>
</html>