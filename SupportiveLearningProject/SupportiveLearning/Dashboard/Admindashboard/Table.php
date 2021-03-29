<?php
include("../../Connection.php");
include("Navbar.php");
$fetch = "select * from FAQS";
$run = mysqli_query($con,$fetch);
echo "<table class='table table-bordered'>
    <tr>
        <th>Id</th>
        <th>Question</th>
    </tr>";
while($data = mysqli_fetch_array($run)){
    echo "<tr>
        <td>$data[0]</td>
        <td>$data[1]</td>
        <td><a href='Reply.php?id=$data[0]'>Answer</a></td>
    </tr>";
}
?>
</table>
<?php
include("Footer.php");
?>