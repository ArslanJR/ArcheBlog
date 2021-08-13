<?php

    session_start();
    require_once 'connector.php';

    $full_name = $_POST['full_name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    if($password === $password_confirm){
        $path = 'uploads/'. time().$_FILES['img']['name'];
        if(!move_uploaded_file($_FILES['img']['tmp_name'], '../'.$path)){
            $_SESSION['message'] = "Error while loading image!";
            header('Location: ../pages/register.php');

            mysqli_query($connect, "INSERT INTO `test` (`id`, `full_name`, `username`, `email`, `password`, `img`) VALUES (NULL, '$full_name', '$username', '$email', '$password', '$path') ");

            header('Location: ../pages/login.php');
        }
    }else{
        $_SESSION['message'] = "Password mismatch!";
        header('Location: ../pages/register.php');
    }
