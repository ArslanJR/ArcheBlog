<?php

    session_start();
    require_once 'connector.php';

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `username` = '$username' AND `password` = '$password' ");

    if(mysqli_num_rows($check_user) > 0){
        $user = mysqli_fetch_assoc($check_user);

        $_SESSION['user'] = [
                "id" => $user['id'],
                "full_name" => $user['full_name'],
                "email" => $user['email'],
        ];

        $connect->close();

        header('Location: ../pages/profile.php');
    }else{
        $_SESSION['message'] = "Incorrect username or password!";
        header('Location: ../pages/login.php');
    }
