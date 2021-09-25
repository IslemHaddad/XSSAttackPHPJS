<?php
 session_start();
 if(empty($_SESSION['username'])){
     header('location: http://localhost/TPxss/login.php');
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
  <a href="http://localhost/TPxss/index.php" class=" btn btn-primary">go to main</a>
    <a href="http://localhost/TPxss/posterform.php" class=" btn btn-primary">create posts</a>
    <form class="d-flex" method='POST' action='logout.php'>
      <button class="btn btn-outline-success" name="logout" type="submit">LOGOUT</button>
    </form>
  </div>
</nav>

<?php 
    require('connection.php');
    $topic = $_GET['name'];
    $select = "SELECT * from posters where topic = '$topic' ";
    $query = mysqli_query($database,$select);
    while($array = mysqli_fetch_array($query)){ 
            ?><h1><?php echo htmlspecialchars($_GET['name'],ENT_QUOTES | ENT_HTML401,'UTF-8');?></h1>
            <h3><?php    echo $array['poster'];      ?> </h1> <?php
    }
?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>
</html>