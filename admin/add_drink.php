<?php 

require_once("includes/init.php");

$tbl = "tbl_catD";
$catQuery = getAll($tbl);

if(isset($_POST['submit'])) {
	$img = trim($_FILES['image']['name']);
	$title = trim($_POST['product']);
	$size = trim($_POST['bsize']);
	$case = trim($_POST['qcase']);
	$price = trim($_POST['price']);
	$comp = trim($_POST['comp']);
	$cat = trim($_POST['cat']);
	$info = trim($_POST['info']);
	$uploadDrink = addDrink($img, $title, $size, $case, $price, $comp, $cat, $info);
	$message = $uploadDrink;
}



 ?>



<html>
<head>
	<meta charset="utf-8">
	<title>Welcome</title>
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

<section class="row account">
	<h2 class="hidden">Welcome</h2>
	<h3 class="small-12 large-9 columns">Welcome User to your account</h3>
	<a class="small-12 large-3 columns" href="#">Sign out</a>
</section>

<form action="add_drink.php" enctype="multipart/form-data" method="post"  class="row add">
	<h2 class="hidden">Add Product</h2>
	<h2>Add Product</h2>
	<div class="small-12 large-6 columns">
		<label>Product Name</label>
		<input type="text" name="product" placeholder="product">
	</div>
	<div class="small-6 large-3 columns">
		<label>Bottle Size</label>
		<input type="text" name="bsize" placeholder="bottle size">	
	</div>
	<div class="small-6 large-3 columns">
		<label>Qty In Case</label>
		<input type="text" name="qcase" placeholder="Quantity">	
	</div>
	<div class="small-6 large-6 columns">
		<label>Price</label>
		<input type="text" name="price" placeholder="price">	
	</div>
	<div class="small-6 large-6 columns">
		<label>Company</label>
		<input type="text" name="comp" placeholder="Company">	
	</div>
	<div class="small-12 large-12 columns">
		<label>Type</label>
		<select name="cat">
			<option>Select Type</option>
			<?php 

				while($row = mysqli_fetch_array($catQuery)){
					echo "<option value=\"{$row['catD_name']}\">{$row['catD_name']}</option>";
				}

			 ?>
		</select>	
	</div>
	<div class="small-12 large-12 end columns">
		<label>Information</label>
		<textarea name="info"></textarea>	
	</div>

	<input class="small-12 large-3  columns" name="image" type="file" value="Add Image">
	<input class="small-12 large-3  columns addButt" name="submit" type="submit" value="Add Product">						
</form>












<section class="footer footerhelp">
	
	<footer>Drinky &copy; 2016</footer>

</section>


<script src="../js/main.js"></script>	
<script src="../js/vendor/jquery.js"></script>
<script src="../js/foundation.min.js"></script>
<script>
      $(document).foundation();
</script>
</body>
</html>