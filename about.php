<?php 
require_once('admin/includes/init.php');
$tbl = "tbl_staff";
$getstaff = getAll($tbl);

 ?>

<html>
<head>
	<meta charset="utf-8">
	<title>About</title>
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


<section class="row about">
	<h2 class="hidden">About</h2>
	<h2 class="small-12 large-12 columns">About</h2>
	<div class="small-12 large-12 columns">
		<h3>Welcome to the future of alcohol sales in Canada!</h3>
		<p>Drinky is a Canadian-based web portal designed to bring you all of the wine, spirits and beer products that are NOT listed with your local liquor board or retailer.

	In Canada and abroad, the world of artisan, boutique and craft producers of alcohol products is booming and we built Drinky as a unique platform for these companies and their representatives to engage in sale and distribution directly to YOU!

	Drinky is a family-run, Canadian small business. The owners are entrepreneurs, industry experts and have extensive experience with different alcohol suppliers. We decided a while ago that we'd like to work more closely with small suppliers in Canada and Drinky was ultimately the best way to do this.</p>
		<h3>Why Are We Doing This?</h3>
		<p>The basic goal of Drinky.ca and its owners is to vastly expand the range of options and selection of alcohol products in Canada, enable faster and greater distribution, all the while maintaining an air of social responsibility.</p>
		<h3>Our Focus</h3>
		<p>Our primary focus is on introducing Canadians to the suppliers and makers in their own backyards, but also to the millions of unique alcohol products that are made around the world, all from the convenience of their own home.</p>
		<h3>What Are Our Views on Alcohol and Social Responsibility?</h3>
		<p>All kidding aside, we take alcohol seriously. When it comes to social issues related to alcohol, here are just a few of our views:</p>
		<ul class="disc">
			<li>We have an initial screening for age of majority.</li>
			<li>Suppliers and agents are asked to screen for potential abuse issues when delivering.</li>
			<li>Suppliers and agents are required to have someone age of majority sign for project on delivery.</li>
			<li>We have a strict zero tolerance policy with respect to drinking and driving. That include zero percent blood alcohol levels in the body when someone drives any vehicle.</li>
			<li>We ask anyone who abuses alcohol to seek help and, more importantly, ask those around them to be brave and intervene and ask their loved ones to take care of themselves.</li>
		</ul>
	</div>
</section>

<section class="row about">
	<h2 class="hidden">Who are we</h2>
	<h2 class="small-12 large-12 columns">Who We Are</h2>


	<?php 
	if(!is_string($getstaff)){
		while ($row = mysqli_fetch_array($getstaff)) {
			echo "
				<div class=\"small-12 large-12 columns\">
					<div class=\"row\">
						<img class=\"small-3 large-3 columns small-centered large-uncentered\" src=\"images/{$row['staff_img']}\" alt=\"{$row['staff_name']}\">
						<div class=\"small-9 large-9 columns profile\">
							<h3>{$row['staff_name']}</h3>
							<p>{$row['staff_info']}</p>			
						</div>
					</div>
				</div>";
		}
	}


	 ?>

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