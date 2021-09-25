<?php 

    require('connection.php');

    if(isset($_POST['register'])){
        if(!empty($_POST['username'])&&!empty($_POST['password'])){
            $username=$_POST['username'];
            $pw =$_POST['password'];
            $register = "INSERT INTO user VALUES(NULL,'$username','$pw');";
            $query = mysqli_query($database,$register);
            header('Location: http://localhost/TPxss/signup.php');
        }
    else{
        header('Location: http://localhost/TPxss/signup.php');
    }
    }