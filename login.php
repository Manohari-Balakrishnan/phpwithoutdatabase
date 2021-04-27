<?php 
if ( ! isset( $_POST['submitted'] ) ) 
header('Location: ' . $_SERVER['HTTP_REFERER']); 

// Sample Email and password for demo 
// Email: 'test@example.com' 
// Password: labrador19 

$credentials = [ 
  'email' => 'test@example.com', 
  'password' => 'labrador19' 
]; 

if ( $credentials['email'] !== $_POST['email'] OR $credentials['password'] !== $_POST['password'] ) { 
   header('Location: ' . $_SERVER['HTTP_REFERER']); 
    exit(); 
} 

session_start(); 

// Storing session data 
$_SESSION["isLogged"] = "1"; 

// login successful - redirect user to any page you want // replace 'home.php' with your landing page url 

header('Location:' . '../PHPvisualstudioCode/home.php'); 

exit();
