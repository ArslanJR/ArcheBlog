<?php

    session_start();
    require_once 'connector.php';

    $full_name = filter_var($_POST['full_name'], FILTER_SANITIZE_STRING);
    $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
    $password_confirm = filter_var($_POST['password_confirm'], FILTER_SANITIZE_STRING);

    if(trim($full_name) == "" && trim($username) == "" && trim($email) == "" && trim($password) == "" && trim($password_confirm) == ""){
        $_SESSION['message'] = "Enter all data";
        header('Location: ../pages/register.php');
    }else if( trim($full_name) == "" ){
        $_SESSION['message'] = "You did not enter your name!";
        header('Location: ../pages/register.php');
    }else if( strlen( trim($full_name) ) < 3 ){
        $_SESSION['message'] = "Username must have at least 3(three) characters!";
        header('Location: ../pages/register.php');
    }else if( trim($username) == "" ){
        $_SESSION['message'] = "You did not enter your username!";
        header('Location: ../pages/register.php');
    }else if(trim($email) == ""){
        $_SESSION['message'] = "You did not enter your email!";
        header('Location: ../pages/register.php');
    }else if( trim($password) == "" ){
        $_SESSION['message'] = "You did not enter a password!";
        header('Location: ../pages/register.php');
    }else if( strlen( trim($password) ) < 8){
        $_SESSION['message'] = "The password must consist of at least 8(eight) characters!";
        header('Location: ../pages/register.php');
    }else if($password === $password_confirm){
        $password = md5($password);

            mysqli_query($connect, "INSERT INTO `users` (`id`, `full_name`, `username`, `email`, `password`) VALUES (NULL, '$full_name', '$username', '$email', '$password') ");
            $connect->close();

            $_SESSION['message'] = "Registration completed successfully !";
            header('Location: ../pages/login.php');
    }else{
        $_SESSION['message'] = "Password mismatch!";
        header('Location: ../pages/register.php');
    }
