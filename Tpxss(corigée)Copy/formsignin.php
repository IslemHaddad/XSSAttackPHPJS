<?php
    require('connection.php');

    if(isset($_POST['btn'])){
        if(!empty($_POST['username'])&&!empty($_POST['password'])){
            $user = $_POST['username'];
            $pw = $_POST['password'];
            $login = "SELECT FROM user WHERE username = '$user' AND password = '$pw' ";
            $TestOfTruth = mysqli_query($database,$login);
            session_start();
            $_SESSION['username']= $user;
                
        

        }
    }

    header('location: http://localhost/TPxss/login.php');