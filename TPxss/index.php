<?php
    
    
    session_start();
    if(empty($_SESSION['username'])){
        header('location: http://localhost/TPxss/login.php');
    }


    if(isset($_POST['logout'])){
        session_unset();
        session_destroy();
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
    <a href="http://localhost/TPxss/posterform.php" class=" btn btn-primary">create posts</a>
    <form action="logout.php" method="POST" >
      <button class="btn btn-outline-success" name="logout" type="submit">LOGOUT</button>
    </form>
  </div>
</nav>
<br/><br/><br/><br/><br/><br/>
<div class="container bg-light">
<h1> this site is vulnerable to XSS</h1>
</div>
<?php 
    require('connection.php');
    $get = "SELECT * FROM posters;";
    $query=mysqli_query($database,$get);


    while($array = mysqli_fetch_array($query)){
?>
        <div class="container bg-light">
            <a href='http://localhost/TPxss/showposters.php?name=<?php echo $array['topic'];?>' ><?php echo $array['poster']; ?></a>
        </div>
<?php }
?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>


