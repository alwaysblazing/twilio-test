<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test - Twilio</title>
</head>
<body>
<div>
    <form action="controller.php" method=post>
    <h1>These is a Twilio test Appp</h1>
    <label for="phoneNumber">Phone Number:</label>
    <input type="text" name="phoneNumber" id="phoneNumber">
    <input type="submit" value="Submit">   
    </form>
    <?php
    if(isset($_SESSION["sucess"])){
        echo "<p>".$_SESSION["sucess"]."<p>";
    }
    if(isset($_SESSION["failure"])){
        echo "<p>".$_SESSION["failure"]."<p>";
    }
    if(isset($_SESSION["error"])){
        echo "<p>".$_SESSION["error"]."<p>";
    }
    if(isset($_SESSION["isset"])){
        echo "<p>".$_SESSION["isset"]."<p>";
    }
    session_destroy();
    ?>
</div>
</body>
</html>
