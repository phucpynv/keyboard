<?php session_start();
if (empty($_SESSION['id'])):
	header('location:signin.php');
endif;
include 'header.php';
?>

<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="../assets/css/main.css" />
		<noscript><link rel="stylesheet" href="css/noscript.css"/></noscript>
				
		<!-- Banner -->
					<section id="banner" class="major">
						<div class="inner">
							<header class="major">
								<h1>WELCOME TO OUR ONLINE STORE.</h1>
							</header>
							<div class="content">
								<p>The House of Kitchenware. The best brands at the best prices. Delivered fast.</p>
								<ul class="actions">
									<li><a href="products.php" class="button next scrolly">Products</a></li>
								</ul>
							</div>
						</div>
					</section>

				<!-- Main -->
				<div id="main">
					
					
					<!-- About us -->
					<section>
						<div class="inner">
							<header class="major">
								<h2>About us</h2>
							</header>
							<p>Form J2TEAMNNL WITH LOVE.</p>
							<ul class="actions">
								<li><a href="about-us.php" class="button next">Read more</a></li>
							</ul>
						</div>
					</section>
					<br>
					<div class="inner">
							<header class="major">
								<h2>List Product</h2>
							</header>
					<!-- Featured Products -->
							<section class="tiles">
								<article>
									<span class="image">
										<img src="../images/product-1-720x480.jpg" width="30px"/>
									</span>
									<header class="major">
										<h3>Nồi Nhôm</h3>

										<p><del>$99.00 </del> <strong>$79.00</strong></p>

										<p></p>

										<div class="major-actions">
											<a href="products.php" class="button small next">View Product</a>
										</div>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="../images/product-2-720x480.jpg" width="30px"/>
									</span>
									<header class="major">
										<h3>Nồi Inox</h3>

										<p><del>$199.00</del> <strong>$179.00</strong></p>

										<p></p>

										<div class="major-actions">
											<a href="products.php" class="button small next">View Product</a>
										</div>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="../images/product-3-720x480.jpg" width="30px"/>
									</span>
									<header class="major">
										<h3>Nồi Thủy Tinh</h3>

										<p><del>$99.00</del> <strong> $79.00</strong></p>

										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum dicta voluptas quia dolor fuga odit.</p>

										<div class="major-actions">
											<a href="products.php" class="button small next">View Product</a>
										</div>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="../images/product-4-720x480.jpg" width="30px"/>
									</span>
									<header class="major">
										<h3>Nồi Đất</h3>

										<p><del>$99.00</del> <strong> $79.00</strong></p>

										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum dicta voluptas quia dolor fuga odit.</p>

										<div class="major-actions">
											<a href="products.php" class="button small next">View Product</a>
										</div>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="../images/product-5-720x480.jpg" width="30px"/>
									</span>
									<header class="major">
										<h3>Nồi Gốm</h3>

										<p><del>$99.00</del> <strong> $79.00</strong></p>

										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum dicta voluptas quia dolor fuga odit.</p>

										<div class="major-actions">
											<a href="products.php" class="button small next">View Product</a>
										</div>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="../images/product-6-720x480.jpg" width="30px"/>
									</span>
									<header class="major">
										<h3>Nồi Áp Suất</h3>

										<p><del>$99.00</del> <strong> $79.00</strong></p>

										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum dicta voluptas quia dolor fuga odit.</p>

										<div class="major-actions">
											<a href="products.php" class="button small next">View Product</a>
										</div>
									</header>
								</article>
							</section>

					<!-- Testimonials -->
					<section>
						<div class="inner">
							<header class="major">
								<h2>Testimonials</h2>
							</header>
							<div class="row">
								<div class="col-6">
									<p><em>"Có làm thì mới có ăn"</em></p>
									<p><strong>- Bạn Phúc giấu tên</strong></p>
									
								</div>

								<div class="col-6">
									<p><em>"Còn thở là còn gỡ"</em></p>
									<p><strong>- Bạn Phúc giấu tên</strong></p>
								</div>
							</div>
							<ul class="actions">
								<li><a href="testimonials.php" class="button next">Read more</a></li>
							</ul>
						</div>
					</section>
				</div>

						<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>


			<!-- Footer -->
<?php
include 'footer.php';
?>