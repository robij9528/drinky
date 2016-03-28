<html>
<head>
	<meta charset="utf-8">
	<title>Sign Up</title>
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
		<div class="small-12 large-7 columns login">
			<h2>Sign Up</h2>
			<div class="row">
				<div class="small-12 large-6 columns">
					<label>First Name</label>
					<input type="text" name="fname" value="first name">
				</div>
				<div class="small-12 large-6 columns">
					<label>Last Name</label>
					<input type="text" name="lname" value="last name">
				</div>
				<div class="small-12 large-6 columns">
					<label>Email</label>
					<input type="text" name="email" value="email">
				</div>
				<div class="small-12 large-6 columns">
					<label>Password</label>
					<input type="text" name="password" value="password">
				</div>
				<div class="small-12 large-6 columns end">
					<label>Date of Birth</label>
					<input type="text" name="dob" value="dob">
				</div>										
			</div>
			<input type="button" value="submit" class="buttEdit">

		</div>
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