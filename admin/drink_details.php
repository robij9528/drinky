<?php 

require_once('includes/init.php');

if(isset($_GET['id'])){
	$tbl = "tbl_drink";
	$col = "drink_id";
	$id = $_GET['id'];
	$getSingle = getSingle($tbl, $col, $id);
}

 ?>

<html>
<head>
	<title>Drink Details</title>
<link rel="stylesheet" href="../css/foundation.min.css"/>
<link href="../css/reset.css" rel="stylesheet" type="text/css" media="screen">
<link href="../css/main.css" rel="stylesheet" type="text/css" media="screen">
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
                  <li><a href="../index.php">Home</a></li>
                  <li><a href="../product.php">Products</a></li>
                  <li><a href="../about.php">About</a></li>
            </ul>
          </section>
        </nav>
      </div>
    </div>
	
<header class="topBar">
	<div class="row">
		<div class="small-3 large-2 columns">
			<img class="logoSmall" src="../images/drinky_logo_word.svg" alt="logo">
		</div>
		<nav class="show-for-medium-up large-5 columns">
			<ul>
				<li><a href="../index.php">Home</a></li>
				<li><a href="../product.php">Products</a></li>
				<li><a href="../about.php">About</a></li>								
			</ul>	
		</nav>
		<div class="small-9 large-3 columns log">
			<ul>
				<li><a href="../signin.php">Sign In</a></li>
				<li><a href="../signup.php">Sign Up</a></li>
				<li><a href="">Cart (0)</a></li>
			</ul>
		</div>
		<div class="small-12 large-2 columns headSearch">
			<input placeholder="search"  type="search">
		</div>

	</div>
</header>

<div class="row details">

	<?php 

	if(!is_string($getSingle)){
		$row = mysqli_fetch_array($getSingle);
		echo "<img class=\"small-12 large-2 columns\" src=\"../images/{$row['drink_img']}\" alt=\"{$row['drink_title']}\">
		<div class=\"small-12 large-8 columns\">
			<h2>{$row['drink_title']}</h2>";
		echo "<p>";			
		echo nl2br("{$row['drink_info']}");
		echo "</p></div>";
		echo "<div class=\"small-12 large-2 end columns  priceInfo\">
				<h3>$ {$row['drink_price']} <br><span>a case</span></h3>
				<select>
					<option>Qty</option>
					<option>1</option>
					<option>2</option>			
					<option>3</option>			
					<option>4</option>			
					<option>5</option>											
				</select>
				<input class=\"buttEdit\" type=\"button\" value=\"Add to Cart\">	
			</div>";

	}


	 ?>

</div>

<div class="row">
	<div class="small-12 large-12 columns back">
	 <a href="../product.php">Back</a>
	</div>
</div>


<section class="footer footerHelp">
	
	<footer>Drinky &copy; 2016</footer>

</section>
</body>
</html>