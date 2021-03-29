<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include("Navbar.php");
$Id = $_GET['Id'];
$fetch = "SELECT * from studentmarks where id = $Id";
$result = mysqli_query($con,$fetch);
$row = mysqli_fetch_array($result);
?>  

<form method="post" action="EditMarks2.php?Id=<?php echo $row['id'] ?>">
<select name="name" value="<?php echo $data['id']?>">
<?php
$insert = "SELECT * from student";
$result = mysqli_query($con,$insert);
while($data = mysqli_fetch_array($result)){
    ?>
}
<option <?php if($row ['Name'] == $data['StudentName']){echo "selected";}?>><?php echo $data['StudentName'];?></option>

<?php
}
?>
</select>
<br>
<input type="text" name="marks" value="<?php echo $row['Marks'] ?>">
<br>
<input type="submit" value="Edit Marks">
</form>
<?php
include("Footer.php");
?>
</body>
</html>