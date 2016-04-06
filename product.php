<?php 
require_once('admin/includes/init.php');


if (isset($_POST['search'])){
	$search_term = trim($_POST['searchBox']);
	$getDrink = search($search_term);
}

else if (isset($_GET['filter'])) {
	$filter = $_GET['filter'];
	$getDrink = filterDrink($filter);
}

else{
	$tbl = "tbl_drink";
	$getDrink = getAll($tbl);
}


 ?>


<html>
<head>
<meta charset="utf-8">	
	<title>Products</title>
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

<section class="row productTitle">
	<h2 class="hidden">products</h2>
	<h2 class="small-12 large-12 columns">Products</h2>
	<div class="small-12 large-12 columns">
		<div class="row product" data-equalizer>
			<!-- Side Bar -->
			<div class="small-12 large-3 columns filterBar" data-equalizer-watch>
				<h3>Search</h3>
				<form method="post" action="product.php">
					<input type="search" name="searchBox" placeholder="search">
					<input type="submit" name="search" value="search" class="buttEdit">
				</form>
				
				<p>Type of products</p>
				<ul>
					<li><a href="product.php">All</a></li>
					<li><a href="product.php?filter=Wine">Wine</a></li>
					<li><a href="product.php?filter=Spirits">Spirits</a></li>
					<li><a href="product.php?filter=Beer">Beer</a></li>
					<li><a href="product.php?filter=Cider">Cider</a></li>					
				</ul>	
			</div>
			<!-- Content -->

		<div class="small-12 large-9 columns prodCon" data-equalizer-watch>


			<?php 

			if(!is_string($getDrink)){
				while($row = mysqli_fetch_array($getDrink)){
					$str = "{$row['drink_info']}";

					$pos = strpos($str, ' ', 100);

					echo "
					<div class=\"row\">
						<div class=\"conPad\">
							<div class=\"small-2 large-2 columns prodImage\">
								<img src=\"images/{$row['drink_img']}\"alt=\"{$row['drink_title']}\">
							</div>
							<div class=\"small-9 large-7 columns prodInfo\">
								<h3 class=\"prodName\">{$row['drink_title']}</h3>
								<p>{$row['drink_amount']} bottle</p>
								<p>{$row['drink_case']} Bottles</p>
								<p>{$row['drink_comp']}</p>
								<div class=\"type\">
									<h3>{$row['drink_type']}</h3>
								</div><p>";
								if ($pos !== false){
									echo substr($str, 0, $pos);
								}

								echo "...</p>";
								echo "<a href=\"admin/drink_details.php?id={$row['drink_id']}\">More</a>";
								// echo "
								// <p>{$row['drink_info']}</p>";
						echo "
							</div>
							<div class=\"small-12 large-2 end columns  priceInfo\">
								<h3>$ {$row['drink_price']} <br><span>a case</span></h3>
								<select>
									<option>Qty</option>
									<option>1</option>
									<option>2</option>			
									<option>3</option>			
									<option>4</option>			
									<option>5</option>											
								</select>
								<a href=\"admin/drink_details.php?id={$row['drink_id']}\"><input class=\"buttEdit\" type=\"button\" value=\"More Info\"></a>
								<input class=\"buttEdit\" type=\"button\" value=\"Add to Cart\">	
							</div>
						</div>
					</div>";
				}
			}else{
				echo "{$getDrink}";
			}


			 ?>



			</div>

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