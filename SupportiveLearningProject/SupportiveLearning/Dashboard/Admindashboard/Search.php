<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <input type="text" name="search" value="Search">
    <input type="submit" value="Submit" name="btn">
</body>
</html>
<?php
include("../../Connection.php");
include("Navbar.php");
$fetch = "select * from signup";
$run = mysqli_query($con,$fetch);
echo "<table class='table table-bordered'>
        <tr>
            <th>Id</th>
            <th>F_Name</th>
            <th>L_Name</th>
            <th>Date of Birth</th>
            <th>Gender</th>
            <th>Email</th>
            <th>Password</th>
            <th>Role</th>
        </tr>";
    while($data = mysqli_fetch_array($run)){
      echo  "<tr>
            <td>$data[0]</td>
            <td>$data[1]</td>
            <td>$data[2]</td>
            <td>$data[3]</td>
            <td>$data[4]</td>
            <td>$data[5]</td>
            <td>$data[6]</td>
            <td>$data[7]</td>
        </tr>";
    }
    include("Footer.php");
?>
</table>