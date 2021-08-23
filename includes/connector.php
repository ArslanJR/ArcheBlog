<?php
    $connect = mysqli_connect('localhost', 'admin', 'admin', 'ArcheBlog_db');
    $connect->query("SET NAMES 'utf8'");

    /*if(!$connect){
        die("error connect");
    }else{
        echo "ok";
    }*/
