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
    ?>
    <h4>Question</h4>
    <form action="" method="post">
        <textarea name="txt" cols="40" rows="5"></textarea>
        <br>
        <button class="btn btn-primary" type="submit" name="btn">Post a Query</button>
    </form>
    <?php
    if(isset($_POST['btn']))
    {
        $a = $_POST["txt"];
        $run = mysqli_query($con,"insert into FAQS(Question) values('$a')");
        
    }
    include("Footer.php");
    ?>
</body>
</html>