<!DOCTYPE html>
<html>
	<head>
		<title>Keyboard Store</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="../assets/css/main.css" />
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<!-- CSS only -->
		<style>
			.welcome{
				font-size: 35px;
				float: right;
				border-right: 10px;
			}
		</style>

		<noscript><link rel="stylesheet" href="css/noscript.css"/></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
				<header id="header" class="alt">
					<a href="index.php" class="logo"><strong>KEYBORAD</strong><span>Website</span></a>
					<nav>
					<?php if(empty($_SESSION['id'])){ ?>
						<?php } else { ?>
					Welcome <?php echo $_SESSION['name'] ?>, 
					<?php } ?>
						<a href="#menu">Menu</a>
					</nav>
				</header>
		

				<!-- Menu -->
				<nav id="menu">
					<ul class="links">
		                <li class="active"> <a href="index.php"><i class="fas fa-home"></i> Home </a> </li>
					
						<!-- CHECK ID CUSTOMERS -->

					<?php if(empty($_SESSION['id'])){ ?>
		                <li> <a href="signin.php"><i class="fas fa-sign-in-alt"></i> Sign In</a> </li>

						<li> <a href="signup.php"><i class="fas fa-user-plus"></i> Sign Up</a> </li>		             
					
					<?php } else { ?>

						<li> <a href="signout.php"><i class="fas fa-sign-out-alt"></i> Sign Out</a> </li>

						<li> <a href="products.php"><i class="fas fa-briefcase"></i> Products</a> </li>
						
					
					   
					<?php } ?>
						<li><a href="cart.php"><i class="fas fa-cart-plus"></i> Cart</a></li>
					



		                <li class="dropdown">
		                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">About</a>
		                    
		                    <ul class="dropdown-menu">
				                <li><a href="team.php"><i class="fas fa-users"></i> Team</a></li>
								<br><br>
								<li><a href="contact.php"><i class="fas fa-id-card"></i> Contact Us</a></li>
								<br><br>
				                <li><a href="testimonials.php"><i class="far fa-hand-paper"></i> Testimonials</a></li>
				                <br><br>
				                <li><a href="terms.php"><i class="fas fa-file-signature"></i> Terms</a></li>
		                    </ul>
						</li>
					</ul>
				</nav>