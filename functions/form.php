<?php 

require_once("product.php");

$name = $_POST['Name'];
$email = $_POST['Email'];
$address = $_POST['address']; // Assuming this field captures country/region
$telephone = $_POST['telephone'];
$message = $_POST['message'];



$cac = contact_sub($name,$email,$address,$telephone,$message);

header('Location:/thankyou.php');