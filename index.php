<?php 
require_once('admin/includes/init.php');
$tbl = "tbl_supplier";
$getSupp = getAll($tbl);

 ?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Drinky</title>
<link rel="stylesheet" href="css/foundation.min.css"/>
<link href="css/reset.css" rel="stylesheet" type="text/css" media="screen">
<link href="css/main.css" rel="stylesheet" type="text/css" media="screen">
<link href='https://fonts.googleapis.com/css?family=Passion+One:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css'>

</head>

<body>

        <!-- Mobile Nav-->
    <div class="row">
      <div class="contain-to-grid show-for-small-only mobilebarEdit ">
        <nav class="top-bar" data-topbar>
           <ul class="title-area">
                <li class="name"></li>
                <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
           </ul>
          <section class="top-bar-section">
            <ul class="right">
                  <li><a href="index.php">Home</a></li>
                  <li><a href="product.php">Products</a></li>
                  <li><a href="about.php">About</a></li>
            </ul>
          </section>
        </nav>
      </div>
    </div>




<header class="topBar">
	<div class="row">
		<div class="small-3 large-2 columns">
			<img class="logoSmall" src="images/drinky_logo_word.svg" alt="logo">
		</div>
		<nav class="show-for-medium-up large-5 columns">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="product.php">Products</a></li>
				<li><a href="about.php">About</a></li>								
			</ul>	
		</nav>
		<div class="small-9 large-3 columns log">
			<ul>
				<li><a href="signin.php">Sign In</a></li>
				<li><a href="signup.php">Sign Up</a></li>
				<li><a href="">Cart (0)</a></li>
			</ul>
		</div>
		<div class="small-12 large-2 columns headSearch">
			<input placeholder="search"  type="search">
		</div>
	</div>
</header>

<section data-interchange="[images/bg_mobile.jpg, (default)], [images/bg.jpg, (large)]" class="bg">
	<h2 class="hidden">Front Image</h2>
	<div class="row">
		<div class="small-10 large-4 columns small-centered logo">
			<img src="images/drinky_logo.svg" alt="drinky logo">
			<h2 class="text-center">At your service</h2>
		</div>
	</div>
</section>

<section class="row productTitle">
	<h2 class="hidden">Products</h2>
	<h2 class="small-12 large-12 columns">Products</h2>
		<div class="small-6 large-3 columns ">
			<div class="prodbox">
				<h3><a href="product.php?filter=Wine">Wine</a></h3>
				<img src="images/wine.svg" alt='wine outline'>
				<p>Find top rated, exotic <br> and distinctive wines</p>
			</div>
		</div>

		<div class="small-6 large-3 columns ">
			<div class="prodbox">
				<h3><a href="product.php?filter=Spirits">Spirits</a></h3>
				<img src="images/martini.svg" alt='spirits outline'>
				<p>Explore refined and <br> consummated spirits</p>
			</div>
		</div>

		<div class="small-6 large-3 columns ">
			<div class="prodbox">
				<h3><a href="product.php?filter=Beer">Beer</a></h3>
				<img src="images/beer.svg" alt='beer outline'>
				<p>Delicious, refreshing, <br> tasty, heavenly</p>
			</div>
		</div>

		<div class="small-6 large-3 columns ">
			<div class="prodbox ciderHelp">
				<h3><a href="product.php?filter=Cider">Cider</a></h3>
				<img src="images/cider.svg" alt='cider outline'>
				<p>Crisp and Sweet</p>
			</div>
		</div>						
</section>

<section class="row suppTitle">
	<h2 class="hidden">Suppliers</h2>
	<h2 class="small-12 large-12 columns">Suppliers</h2>

	<iframe class="small-12 large-12 columns" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d11681.521846400687!2d-81.28491615!3d42.9491862!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1454291291257" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>


	<div class=" small-12 large-12 columns">
	
		<ul class="suppilers small-block-grid-4 large-block-grid-6">
			<?php 
				if(!is_string($getSupp)){
					while($row = mysqli_fetch_array($getSupp)){
						echo "<li>
							<img src=\"images/{$row['supplier_img']}\" alt=\"{$row['supplier_name']}\">
							<a class=\"supplierLink\" href=\"{$row['supplier_url']}\">{$row['supplier_name']}</a>
						</li>";
					}
				}

			 ?>
		</ul>

	</div>
	
</section>

<section class="row conTitle">
	<h2 class="hidden">Contact</h2>	
	<div class="small-12 large-6 columns">
		<div class="row">
			<h2 class="small-12 large-12 columns">Contact</h2>
			<div class="small-12 large-12 columns contact">
				<label>Name</label>
				<input type="text" placeholder="Name">
				<label>Email</label>
				<input type="text" placeholder="Name">
				<label>Message</label>
				<textarea></textarea>
				<input class="addButt text-center" value="Submit">								
			</div>	
		</div>				
	</div>
	<div class="small-12 large-6 columns">
		<div class="row questions">
			<h2 class="small-12 large-12 columns">Questions?</h2>
			<div class="small-12 large-12 columns">
				<label>Looking for answers? Let's see if we can help you with things.</label>
				<input type="search" placeholder="search term">
			</div>
			<h3 class="small-12 large-12 columns">Call Us</h3>
			<p class="small-12 large-12 columns">1-866-4 DRINKY<br>
			1-866-437-4659<br>
			1-844-4 GR8 WINE<br>
			1-844-447-8946</p>	
		</div>
		<div class="row social">
			<a href="#"><img class="small-2 large-2 columns" src="images/fb.png" alt="facebook icon"></a>
			<a href="#"><img class="small-2 large-2 columns" src="images/twitter.png" alt="twitter icon"></a>
		</div>
	</div>
</section>

<section class="footer">
	
	<footer>Drinky &copy; 2016</footer>

</section>




<script src="js/main.js"></script>	
<script src="js/vendor/jquery.js"></script>
<script src="js/foundation.min.js"></script>
<script>
      $(document).foundation();
</script>
</body>



</html>
