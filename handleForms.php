<?php 

session_start();

// Check if there is existing username
if(isset($_SESSION['firstName'])){

    // If there is existing username, it will create an error prompt
    $_SESSION['error'] = "is still logged in. Wait for to logout first";
    header('Location: index.php');
    exit();
}

// Check if loginBtn exists
if(isset($_POST['loginBtn'])) {

    // Get the username
    $firstName = $_POST['firstName'];

    // Get the password from the input field
    $password = md5($_POST['password']);

    // Set the session variables
    $_SESSION['firstName'] = $firstName;
    $_SESSION['password'] = $password;

    // Go back to index.php
    header('Location: index.php');
    exit();
}

?>