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
    include("../../Connection.php");

    $fetch = "select * from Batch_Code";
    $run = mysqli_query($con,$fetch);
echo "<table class='table table-bordered'>
    <tr>
        <th>Id</th>
        <th>Batch</th>
        <th>Total Student</th>
    </tr>";
while($data = mysqli_fetch_array($run)){
    echo "<tr>
        <td>$data[0]</td>
        <td><a href='AddAssignmentMarks.php?Batch=$data[1]'>$data[1]</a></td>
        <td>$data[2]</td>
    </tr>";
}
?>
</table>
<?php
    include("Footer.php");
    ?>
</body>
</html>