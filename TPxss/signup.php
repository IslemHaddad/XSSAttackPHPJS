<?php
 session_start();
 if(!empty($_SESSION['username'])){
     header('location: http://localhost/TPxss/index.php');
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<body>

<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <p></p>
    <form class="d-flex">
      <a class="btn btn-primary" href="http://localhost/TPxss/login.php">LOGIN</a>
    </form>
  </div>
</nav>

<div class="container bg-light" style="width:500px;margin-top:100px;">
        <form method="POST" action="formsignup.php">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Username :</label>
            <input type="username" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password :</label>
            <input type="password" name="password"class="form-control" id="exampleInputPassword1" required>
        </div>
        <div class="mb-3 form-check">
        </div>
        <div class="position-absolute top-75 start-50 translate-middle">
        <button type="submit" name="register" class="btn btn-danger ">Register</button>
        </div>
        </form>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

<?php
    if(isset($_POST['logout'])){
        session_destroy();
        header('location: http://localhost/TPxss/login.php');
    }

?>

</body>
</html>