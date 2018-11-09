<!DOCTYPE html>
<html lang="en">
    <head>
   <meta charset="UTF-8">
        <title>Game of Ohms</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Retail Web Project">
        <meta name="author" content="Riley-Casaldi">
        <link rel="stylesheet" href="./css/bootstrap.min.css"/>
		<script src="./js/jquery2.js"></script>
		<script src="./js/bootstrap.min.js"></script>
		<script src="main.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic'>
  <link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css'>
  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.cs'>
  <link rel="stylesheet" href="./css/styles.css">
    </head>
    <body>
        
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collasped" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only"> navigation toggle</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="./home.php">Game of Ohms</a>
    </div>
    <div class="collapse navbar-collapse" id="#bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="./home.php">Home</a></li>
        <li><a href="./index.php">E-Juice</a></li>
        <li><a href="./mods.php">Mods</a></li>
        <li><a href="./tanks.php">Tanks</a></li>
        <li><a href="./contact.php">Contact</a></li>
      </ul>
      <form class="navbar-form navbar-left">
		        <div class="form-group">
		          <input type="text" class="form-control" placeholder="Search" id="search">
		        </div>
		        <button type="submit" class="btn btn-primary" id="search_btn"><span class="glyphicon glyphicon-search"></span></button>
      </form>
      <ul class="nav navbar-nav navbar-right">
              <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>Cart<span class="badge">0</span></a>
                  <div class="dropdown-menu" style="width:400px;">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <div class="row">
                                    <div class="col-md-3">Cart Item Number</div>
                                    <div class="col-md-3">Product Image</div>
                                    <div class="col-md-3">Product Name</div>
                                    <div class="col-md-3">Price Amount</div>
                                </div>
                            </div>
                               <div class="panel-body">
								<div id="cart_product">
								<!--<div class="row">
									<div class="col-md-3">Sl.No</div>
									<div class="col-md-3">Product Image</div>
									<div class="col-md-3">Product Name</div>
									<div class="col-md-3">Price in $.</div>
								</div>-->
								</div>
							</div>
							<div class="panel-footer"></div>     
                        </div>
                     </div>
                </li>
          <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>Sign In</a>
            <ul class="dropdown-menu">
						<div style="width:300px;">
							<div class="panel panel-primary">
								<div class="panel-heading">Log In</div>
								<div class="panel-heading">
									<form onsubmit="return false" id="login">
										<label for="email">Email</label>
										<input type="email" class="form-control" name="email" id="email" required/>
										<label for="email">Password</label>
										<input type="password" class="form-control" name="password" id="password" required/>
										<p><br/></p>
										<a href="#" style="color:white; list-style:none;">Forgotten Password</a><input type="submit" class="btn btn-success" style="float:right;">
									</form>
                                </div>
							</div>
						</div>
					</ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
</body>
</html>









