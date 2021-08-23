<?php
    session_start();

    if($_SESSION['user']){
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
    <link rel="stylesheet" href="../css/form.css">
    <link rel="icon" href="../img/A_icon.jpg">
    <title>Log in</title>
</head>
<body>
    <!--Authorization form -->

     <form action="../includes/signin.php" method="post">
         <h2>Log in</h2>
         <label>Username<br>
         <input type="text" name="username" placeholder="Enter your username">
         </label>
         <label>Password<br>
         <input type="password" name="password" placeholder="Enter your password">
         </label>
         <button type="submit">Log in</button>
         <p>You don`t have an account? - <a href="register.php">Sign up</a>!</p>
         <?php
             if($_SESSION['message']){
                 echo '<p class="msg">'. $_SESSION['message'] .'</p>';
             }
             unset($_SESSION['message']);
         ?>
     </form>
</body>
</html>
