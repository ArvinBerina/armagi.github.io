<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Armagi eShopping</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap-4.4.1.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-yellow fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="images/logo.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="categoryDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories</a>
				<div class="dropdown-menu" aria-labelledby="categoryDropdown">
                <a class="dropdown-item" href="electronics.php">Electronic Devices</a>
                <a class="dropdown-item" href="Home&Living.php">Home & Living</a>
				<a class="dropdown-item" href="WomensFashion.php">Women's Fashion</a>
				<a class="dropdown-item" href="MensFashion.php">Men's Fashion</a>
				<a class="dropdown-item" href="FashionAccesories.php">Fashion Accessories</a>
                
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="orderDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Orders</a>
              <div class="dropdown-menu" aria-labelledby="orderDropdown">
                <a class="dropdown-item" href="#">Order1</a>
                <a class="dropdown-item" href="#">Order1</a>
                
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Cart</a>
            </li>
          </ul>
        </div>
		<ul class="navbar-nav">
			<li class="nav-item dropdown">  
        		<a class="nav-link dropdown-toggle" href="#"id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/user.png"></a>
				<div class="dropdown-menu" aria-labelledby="orderDropdown">
                <a class="dropdown-item" href="login.html">Sign in</a>
                <a class="dropdown-item" href="login.html">Login</a>
			</li>
		</ul>
      </div>
		
    </nav>S
<div class="black-bg">
	  <br>
	  <br>
<div class="main">
  <div class="container mt-3">
		<div class ="container-fluid">
	  	  <form class="input-group md-form form-sm form-1 pl-0">
		  
			<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
			<button class="btn-grad" type="submit">Search</button>
			  
          </form>
		</div>
		<br>
      <div class="row">
        <div class="col-12">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleControls" data-slide-to="1"></li>
              <li data-target="#carouselExampleControls" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="images/SLIDE.png" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="images/SLIDE2.png" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="images/SLIDE3.png" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
      <hr>
    </div>

<h2 class="text-center">Men's Fashion</h2>
    <hr>
    <div class="container">
      <div class="row text-center">
        <div class="col-md-4 pb-1 pb-md-0">
          <div class="card">
            <img class="card-img-top" src="images/x1.png" alt="Card image cap">
            <div class="card-body">
			  <h4 class="card-price">Php 256</h4>
              <h5 class="card-title">Polo Shirt</h5>
              <p class="card-text">Polo Shirt for Men tees t shirt shirts mens poloshirt tops Classic Style with collar.</p>
              <a href="#" class="btn-grad">Add to Cart</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 pb-1 pb-md-0">
          <div class="card">
            <img class="card-img-top" src="images/x2.png" alt="Card image cap">
            <div class="card-body">
			  <h4 class="card-price">Php 179</h4>
              <h5 class="card-title">Balck Pants</h5>
              <p class="card-text">Mens Fashion Slim Fit Black Slacks Formal Suit Pant-Fashion Jeans-Seven.</p>
              <a href="#" class="btn-grad">Add to Cart</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 pb-1 pb-md-0">
          <div class="card">
            <img class="card-img-top" src="images/x7.png" alt="Card image cap">
            <div class="card-body">
			  <h4 class="card-price">Php 98</h4>
              <h5 class="card-title">Jogger Pants</h5>
              <p class="card-text">JF09 New Fashionable 4 Pockets Jogger Pants Cotton Daily OutFit For Men Cod.</p>
              <a href="#" class="btn-grad">Add to Cart</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row text-center mt-4">
        <div class="col-md-4 pb-1 pb-md-0">
          <div class="card">
            <img class="card-img-top" src="images/x4.png" alt="Card image cap">
            <div class="card-body">
			  <h4 class="card-price">Php 180</h4>
              <h5 class="card-title">Korean Over sized Shirt</h5>
              <p class="card-text">cotton unisex t shirt for men korean fashion loose teen oversized plus size tops on sale printed graphic.</p>
              <a href="#" class="btn-grad">Add to Cart</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 pb-1 pb-md-0">
          <div class="card">
             <img class="card-img-top" src="images/x3.png" alt="Card image cap">
            <div class="card-body">
			  <h4 class="card-price">Php 120</h4>
              <h5 class="card-title">Longsleeves</h5>
              <br>
              <p class="card-text">King James23 Unisex Plain Cotton Long Sleeve Sweater Jacket.</p>
              <a href="#" class="btn-grad">Add to Cart</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 pb-1 pb-md-0">
          <div class="card">
             <img class="card-img-top" src="images/x6.png" alt="Card image cap">
            <div class="card-body">
			  <h4 class="card-price">Php 139</h4>
              <h5 class="card-title">Jacket Hoddie</h5>
              <br>
              <p class="card-text">Design Hoodie Jacket Unisex Trending Design Casual Gym Summer Fashion Jacker.</p>
              <a href="#" class="btn-grad">Add to Cart</a>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
</div>
<hr>
    <div class="container text-white bg-dark p-4 bg-yellow">
      <div class="row">
        <div class="col-6 col-md-8 col-lg-7">
          <div class="row text-center">
            <div class="col-sm-6 col-md-4 col-lg-4 col-12">
              <ul class="list-unstyled">
                <li class="btn-link"> <strong><a>Customer Care</a></strong> </li>
                <li class="btn-link"> <a>Questions?</a> </li>
                <li class="btn-link"> <a>Contact Us</a> </li>
                <li class="btn-link"> <a>About Armagi</a> </li>
                <li class="btn-link"> <a>Affiliate Program</a> </li>
                <li class="btn-link"> <a>LAffiliate Academy</a> </li>
              </ul>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-12">
              <ul class="list-unstyled">
              <li class="btn-link"> <strong><a>Armagi</a></strong> </li>
                <li class="btn-link"> <a>Help Center</a> </li>
                <li class="btn-link"> <a>How to Buy</a> </li>
                <li class="btn-link"> <a>Shipping and Delivery</a> </li>
                <li class="btn-link"> <a>International Product Policy</a> </li>
                <li class="btn-link"> <a>How to Retrun</a> </li>
              </ul>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-12">
              <ul class="list-unstyled">
                <li class="btn-link"> <a>Careers</a> </li>
                <li class="btn-link"> <a>Terms and Conditions</a> </li>
                <li class="btn-link"> <a>Privacy Policy</a> </li>
                <li class="btn-link"> <a>Press and Media</a> </li>
                <li class="btn-link"> <a>Campaign Terms and Conditions</a> </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-lg-5 col-6">
          <address>
            <strong>Armagi EShopping, Inc.</strong><br>
            Lucena City, Quezon<br>
            Brgy. Isabang <br>
            <abbr title="Phone">P:</abbr> (123) 456-7890
          </address>
          <address>
            <strong>Full Name</strong><br>
            <a href="mailto:#">armagi@gmail.com</a>
          </address>
        </div>
      </div>
    </div>
    <footer class="text-center">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <p>Copyright ©  Armagi Website. All rights reserved.</p>
          </div>
        </div>
      </div>
    </footer>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-4.4.1.js"></script>
  </body>
</html>