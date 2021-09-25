<?php


$data=mysqli_connect('localhost','root','','cookies');

if(!empty($_GET['cookie'])){
    $cookie = $_GET['cookie'];
    $insert = "INSERT INTO cookies VALUES(NULL,'$cookie');";
    $query = mysqli_query($data,$insert);

}
header("Location: http://localhost/TPxss/index.php");