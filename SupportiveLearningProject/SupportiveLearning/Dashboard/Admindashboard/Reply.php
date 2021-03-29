<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include("../../Connection.php");
    include("Navbar.php");
    $id = $_GET["id"];
    $fetch = "select * from FAQS where id = $id";
    $run = mysqli_query($con,$fetch);
    $data = mysqli_fetch_array($run);
    ?>
    <form action="" method="post">
        <p>Question</p>
        <textarea class="form-control w-25 border border-primary" name="txt" cols="5" rows="5" readonly> <?php echo $data[1] ?></textarea>
        <br>
        <p>Answer</p>
        <textarea class="form-control w-25 border border-primary" name="txt2" cols="5" rows="5"></textarea>
        <br>
        <input type="submit" value="Answer" name="btn" class="btn btn-primary">
    </form>
<?php
if(isset($_POST['btn']))
{
    $a = $_POST["txt"];
    $b = $_POST["txt2"];
    $run = mysqli_query($con, "update FAQS set Question = '$a', Answer = '$b' where id = $id");
    
}
include("Footer.php");
?>
</body>
</html>