<?php
    session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/form.css">
    <link rel="icon" href="../img/A_icon.webp">
    <title>Registration</title>
</head>
<body>
    <!--Registration form-->

    <form action="../includes/signup.php" method="post" enctype="multipart/form-data">
        <h2>Register</h2>
        <label>Name and last name <br>
        <input type="text" name="full_name" placeholder="Enter your name and last name">
        </label>
        <label>Username<br>
        <input type="text" name="username" placeholder="Enter your username">
        </label>
        <label>Email<br>
        <input type="email" name="email" placeholder="Enter your email">
        </label>
        <label>Profile photo<br>
        <input type="file" name="img" placeholder="Upload your profile photo ">
        </label>
        <label>Password<br>
        <input type="password" name="password" placeholder="Create password">
        </label>
        <label>Confirm the password<br>
        <input type="password" name="password_confirm" placeholder="Confirm the password ">
        </label>
        <button>Log in</button>
        <p>Do you have an account? - <a href="login.php">Log in</a>!</p>
        <?php
            if($_SESSION['message']){
                echo '<p class="msg">'. $_SESSION['message'] .'</p>';
            }
            unset($_SESSION['message']);
        ?>
    </form>
</body>
</html>
