<?php 

require_once("includes/init.php");

$tbl = "tbl_staff";
$staff = getAll($tbl);

if(isset($_POST['addStaff'])) {
	$img = trim($_FILES['staffImage']['name']);
	$name = trim($_POST['staffName']);
	$info = trim($_POST['staffInfo']);
	$uploadStaff = addStaff($img, $name, $info);
	$message = $uploadStaff;
}



 ?>



<html>
<head>
	<meta charset="utf-8">
	<title>Add Staff</title>
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
	<a class="small-12 large-3 columns" href="includes/caller.php?caller_id=logout">Sign out</a>
</section>

<div class="row add">
<h2 class="hidden">Edit Staff</h2>
<h2>Edit Staff</h2>
</div>

<div class="row add">
	<div class="small-12 large-6 columns">
		<form action="add_staff.php" enctype="multipart/form-data" method="post" >	
			<label>Staff Name &amp; Title</label>
			<input name="staffName" value="">
			<label>Staff Info</label>
			<textarea name="staffInfo" value=""></textarea>
			<input  name="staffImage" type="file" value="Add Image">
			<input class="addButt" name="addStaff" type="submit" value="Add Staff">						
		</form>
	</div>
	<div class="small-12 large-6 columns deleteDrink">
		<?php 
			while ($row=mysqli_fetch_array($staff)) {
				// echo "<div class=\"small-12 large-12 columns\">";
				echo "<p>{$row['staff_name']}</p>";
				echo "<a href=\"includes/caller_staff.php?caller_id=delete&id={$row['staff_id']}\">";
				echo "Delete";
				echo "</a><br>";
				// echo "</div>";
			}
		 ?>
	</div>

</div>

<div class="row">
	<div class="small-12 large-12 columns back">
	 <a href="admin_index.php">Back</a>
	</div>
</div>


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