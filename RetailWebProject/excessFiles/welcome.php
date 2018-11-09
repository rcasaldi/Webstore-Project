<!DOCTYPE html>
<html lang="en">
<head>
  <title>Game of Ohms</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Retail Web Project">
<meta name="author" content="Riley-Casaldi">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic'>
<link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.cs'>
    <link rel="stylesheet" href="./css/form.css">
</head>
    <body>
        <!-- Navigation -->
    <?php include('nav.php'); ?>
    <?php include('db.php'); ?>
<div class="body content">
    <div class="container-fluid">
        <div class="row">
            
    <div class="welcome">
        <div class="alert alert-success"><?= $_SESSION['message'] ?></div>
        <img src="<?= $_SESSION['avatar'] ?>"><br />
        Welcome <span class="user"><?= $_SESSION['Username'] ?></span>
        <?php
        $mysqli = new mysqli("localhost", "root", "root", "website");
        //Select queries return a resultset
        $sql = "SELECT Username, avatar FROM users";
        $result = $mysqli->query($sql); //$result = mysqli_result object
        //var_dump($result);
        ?>
        <div id='registered'>
        <span>All registered users:</span>
        <?php
        while($row = $result->fetch_assoc()){ //returns associative array of fetched row
            //echo '<pre>';
            //print_r($row);
            //echo '</pre>';
            echo "<div class='userlist'><span>$row[Username]</span><br />";
            echo "<img src='$row[avatar]'></div>";
        }
        ?>  
        </div>
        </div>
    </div>
</div>
    </div>
</body>
    <footer class="container-fluid text-center">
  <p>Copyright &copy; Game of Ohms Vapors 2018</p>  
  <form class="form-inline">Get deals:
    <input type="email" class="form-control" size="50" placeholder="Email Address">
    <button type="button" class="btn btn-danger">Sign Up</button>
  </form>
</footer>
</html>