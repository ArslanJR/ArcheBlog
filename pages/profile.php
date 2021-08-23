<?php
    session_start();

    if(!$_SESSION['user']){
        header('Location: profile.php');
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="../img/A_icon.jpg">
    <title>Profile</title>
</head>
<body>
    <div>
        <h3><?= $_SESSION['user']['full_name'] ?></h3>
        <a href="../includes/logout.php">Out</a>
    </div>
</body>
</html>
