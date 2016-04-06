<?php 

require_once('includes/init.php');

if(isset($_GET['id'])){
	$tbl = "tbl_supplier";
	$col = "supplier_id";
	$id = $_GET['id'];
	$getSingle = getSingle($tbl, $col, $id);
}

 ?>

<html>
<head>
	<title>Supplier Details</title>
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
		echo "<img class=\"small-12 large-3 columns\" src=\"../images/{$row['supplier_img']}\" alt=\"{$row['supplier_name']}\">
		<div class=\"small-12 large-9 columns\">
			<h2>{$row['supplier_name']}</h2>
			<p>";

		echo nl2br($row['supplier_info']);

		echo "</p>
		<p class=\"agent\">Agents</p>
		<ul class=\"square\">
			{$row['supplier_agent']}
		</ul>	
		</div>";

	}


	 ?>

</div>

<div class="row">
	<div class="small-12 large-12 columns back">
	 <a href="../index.php">Back</a>
	</div>
</div>


<section class="footer">
	
	<footer>Drinky &copy; 2016</footer>

</section>
</body>
</html>