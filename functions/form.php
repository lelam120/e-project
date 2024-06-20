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

 
    $cac = contact_sub($name, $email, $address, $telephone, $message);


    header('Location: /thankyou.php');
    exit;
}
?>