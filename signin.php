<?php

require_once('admin/includes/init.php');

if (isset($_POST['submit'])) {
	$username = trim($_POST['username']);
	$password = trim($_POST['password']);
	if($username !="" && $password !="") {
		$log_res = logIn($username, $password);
		$message = $log_res;
	}
}else{
	$message = "plaese fill in the required fields";
}


 ?>


<html>
<head>
	<meta charset="utf-8">
	<title>Sign In</title>
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
		<?php if (!empty($message))
			{ echo $message;} 
		?>
		<form action="signin.php" method="post" class="small-12 large-7 columns login">
			<h2>Login</h2>
			<label>Username</label>
			<input type="text" name="username" value="username">
			<label>Password</label>
			<input type="password" name="password" value="password">
			<input name="submit" type="submit" value="Submit" class="buttEdit">
		</form>
	</div>
</section>

<section class="footer noMarg">
	
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