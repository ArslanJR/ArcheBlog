<?php
    $connect = mysqli_connect('localhost', 'admin', 'admin', 'ArcheBlog_db');

    if(!$connect){
        die("error connect");
    }else{
        echo "ok";
    }
