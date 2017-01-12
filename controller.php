<?php 
session_start();
include("use.php");

//check post for input
if(isset($_POST["phoneNumber"])){
    $a = $_POST["phoneNumber"];
    
    //check if input are numbers
    if (ctype_digit($a)) {
        $msg = new Message;
        $alert = $msg->sendMessage($a);
        //if message sent
        if($alert == 8){
        $_SESSION["sucess"] = "Message Sent.";
        header('location: home.php');
        exit();
        }
        else{
            //else message did not send
            $_SESSION["failure"] = "Message failed to send.";
            header('location: home.php');
            exit();
        }
    }
    //else input contains letter
    else{
        $_SESSION["error"] = "The input contains some letters.";
        header('location: home.php');
        exit();
    }
}
//if isset is false
else{
    $_SESSION["isset"] = "There is no input";
    header('location: home.php');  
    exit();
}
?>