<?php
require_once("product.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['Name']);
    $email = trim($_POST['Email']);
    $address = trim($_POST['address']); 
    $telephone = trim($_POST['telephone']);
    $message = trim($_POST['message']);


    if ($name == '' || $email == '' || $address == '' || $message == '') {
        header('Location: /404.php');
        exit; 
    }

 
   


    $to_email = "kien2005kiensn@gmail.com";


    $subject = "Test email using PHP";


    $message = "Thông tin liên hệ:\n\n";
    $message .= "Name: $name\n";
    $message .= "Address: $address\n";
    $message .= "Telephone: $telephone\n\n";
    $message .= "Messiger:\n$message\n";

   
    $from_email = $email;

  
    $headers = "From: $from_email";


    if (mail($to_email, $subject, $message, $headers)) {
        $cac = contact_sub($name, $email, $address, $telephone, $message);
        header('Location: /thankyou.php');
        exit;
    } else {
        
        header('Location: /404.php');
        // echo "Email sending failed... Error: " . error_get_last()['message'];
        exit;
    }
    }
?>