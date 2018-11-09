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
    <link rel="stylesheet" href="./css/styles.css">
    
</head>
<body>

    <!-- Heading -->
    <?php include('heading.php'); ?>

    <!-- Navigation -->
    <?php include('nav.php'); ?>
    
<br>
 <a name="juices"></a>
    
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-2 col-xs-12">
				<div id="get_category">
				</div>
				<!--<div class="nav nav-pills nav-stacked">
					<li class="active"><a href="#"><h4>Categories</h4></a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
				</div> -->
				<div id="get_brand">
				</div>
				<!--<div class="nav nav-pills nav-stacked">
					<li class="active"><a href="#"><h4>Brand</h4></a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
				</div> -->
			</div>
			<div class="col-md-8 col-xs-12">
				<div class="row">
					<div class="col-md-12 col-xs-12" id="product_msg">
					</div>
				</div>
				<div class="panel panel-info">
					<div class="panel-heading">Products</div>
					<div class="panel-body">
						<div id="get_product">
							<!--Here we get product jquery Ajax Request-->
						</div>
						<!--<div class="col-md-4">
							<div class="panel panel-info">
								<div class="panel-heading">Samsung Galaxy</div>
								<div class="panel-body">
									<img src="product_images/images.JPG"/>
								</div>
								<div class="panel-heading">$.500.00
									<button style="float:right;" class="btn btn-danger btn-xs">AddToCart</button>
								</div>
							</div>
						</div> -->
					</div>
					<div class="panel-footer">&copy; 2016</div>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
        <div class="row">
			<div class="col-md-12">
				<center>
					<ul class="pagination" id="pageno">
						<li><a href="#">1</a></li>
					</ul>
				</center>
			</div>
		</div>
	</div>
    <!-- 
<div class="container">    
  <div class="row">
      
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Drogonfruit 30 mL by Game Of Ohms Vapor </div>
        <div class="panel-body"><img src="https://cdn.shopify.com/s/files/1/1275/7687/products/Drogonfruit_by_Game_Of_Ohms_Vapor_eJuice_1024x1024.jpg?v=1509003535" class="img-responsive" style="width:100%" alt="Drogonfruit"></div>
        <div class="panel-footer">Tangerine and Dragonfruit blend together for a mythical combination of flavor.</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">Jon Snow Cone 30 mL by Game Of Ohms Vapor </div>
        <div class="panel-body"><img src="https://cdn.shopify.com/s/files/1/1275/7687/products/Jon_Snow_Cone_by_Game_Of_Ohms_Vapor_eJuice_1024x1024.jpg?v=1509003534" class="img-responsive" style="width:100%" alt="Jon Snow"></div>
        <div class="panel-footer">Strawberries, peach, and mangos come together for the ultimate sherbet ice cream flavor.</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">Knights King 30 mL by Game Of Ohms Vapor </div>
        <div class="panel-body"><img src="https://cdn.shopify.com/s/files/1/1275/7687/products/Knights_King_by_Game_Of_Ohms_Vapor_eJuice_1024x1024.jpg?v=1509003533" class="img-responsive" style="width:100%" alt="Knights King"></div>
        <div class="panel-footer">Winter is coming... in the form of blue raspberry menthol. </div>
      </div>
    </div>
  </div>
</div><br>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Chocolate Walkers 30 mL by Game Of Ohms Vapor</div>
        <div class="panel-body"><img src="https://cdn.shopify.com/s/files/1/1275/7687/products/White_Chocolate_Walkers_by_Game_Of_Ohms_Vapor_eJuice_1024x1024.jpg?v=1509003532" class="img-responsive" style="width:100%" alt="Walkers"></div>
        <div class="panel-footer">White chocolate and coffee make the best vape to wake up to.</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">Wildfire 30 mL by Game Of Ohms Vapor </div>
        <div class="panel-body"><img src="https://cdn.shopify.com/s/files/1/1275/7687/products/Wildfire_by_Game_Of_Ohms_Vapor_eJuice_1024x1024.jpg?v=1509003530" class="img-responsive" style="width:100%" alt="Wildfire"></div>
        <div class="panel-footer">Cucumber melon menthol is a wildfire flavor created as a sign that winter has finally come.</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">Red Wedding 30 mL by Game of Ohms Vapor </div>
        <div class="panel-body"><img src="https://static.wixstatic.com/media/4c86c0_eaf85ad9303448519c2c1267ddc09141.jpg/v1/fill/w_420,h_560,al_c,q_80,usm_0.66_1.00_0.01/4c86c0_eaf85ad9303448519c2c1267ddc09141.webp" class="img-responsive" style="width:80%" style="height:330px" alt="Red Wedding"></div>
        <div class="panel-footer">A delicious strawberry and blueberry cupcake.</div>
      </div>
    </div>
      <div class="col-md-1"></div>
  </div>
</div>-->

<br><br>

<footer class="container-fluid text-center">
  <p>Copyright &copy; Game of Ohms Vapors 2018</p>  
  <form class="form-inline">Get deals:
    <input type="email" class="form-control" size="50" placeholder="Email Address">
    <button type="button" class="btn btn-danger">Sign Up</button>
  </form>
</footer>

</body>
</html>
