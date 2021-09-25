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
    <a href="http://localhost/TPxss/index.php" class=" btn btn-primary">GO TO SEE POSTS</a>
    <form class="d-flex" method='POST' action="logout.php">
      <button class="btn btn-outline-success" name="logout">LOGOUT</button>
    </form>
  </div>
</nav>

<div class="container bg-light" style="width:500px;margin-top:100px;">
    <form method="POST" action="http://localhost/TPxss/posterform.php">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">TOPIC :</label>
            <input type="username" name="topic" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
        </div>
        <div class="form-floating">
    <textarea class="form-control" placeholder="Leave a comment here" name="text" id="floatingTextarea"></textarea>
    <label for="floatingTextarea">POSTS</label>
    <div class="position-absolute top-100 start-50 translate-middle">
    <br/><br/><br/>
        <button type="submit" name="post" class="btn btn-danger ">make POST</button>
        </div>
    </div>
</div>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>
</html>


<?php 

    require('connection.php');

    if(isset($_POST['post'])){
        if(!empty($_POST['text'])&&!empty($_POST['topic'])){
            $topic = $_POST['topic'];
            $text = $_POST['text'];
            $create = "INSERT INTO posters VALUES(NULL,'$text','$topic')";
            $query = mysqli_query($database,$create);
        }
    }


?>