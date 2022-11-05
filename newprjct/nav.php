<div class="wrap-menu-desktop how-shadow1" style="background-color:white;">
					<nav class="limiter-menu-desktop container">

						<!-- Logo desktop -->
						<a href="#" class="logo">
							<img src="images/icons/logo-01.png" alt="IMG-LOGO">
						</a>

						<!-- Menu desktop -->
						<div class="menu-desktop">
							<ul class="main-menu">
								<!-- <li>
								<a href="product.html">Home</a>
								<ul class="sub-menu">
									<li><a href="index.html">Homepage 1</a></li>
									<li><a href="home-02.html">Homepage 2</a></li>
									<li><a href="home-03.html">Homepage 3</a></li>
								</ul>
							</li>  -->

								<li>
									<a href="user_shop.php">Shop</a>
								</li>

								<li class="label1" data-label1="hot">
									<a href="shoping-cart.php">Features</a>
								</li>

								<li>
									<a href="blog.php">Blog</a>
								</li>

								<li>
									<a href="about.php">About</a>
								</li>

								<li>
									<a href="contact.php">Contact</a>
								</li>
								<li>
									<a href="logout.php">Logout</a>
								</li>

							</ul>
						</div>

						<!-- Icon header -->
						<div class="wrap-icon-header flex-w flex-r-m">
							<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
								<i class="zmdi zmdi-search"></i>
							</div>

							<a href="shoppingcart.php">
								<?php
								$email=$_SESSION['email'];
								$sq="SELECT login_id FROM `login` WHERE email='$email'";
								$re=mysqli_query($con,$sq);
								$ro=mysqli_fetch_array($re);
								$lid=$ro['login_id'];
								$sql="SELECT count(*) FROM `cart` WHERE login_id='$lid'";
								$res=mysqli_query($con,$sql);
								$row=mysqli_fetch_array($res);
								?>
								<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="<?php echo $row['0']?>">
								<i class="zmdi zmdi-shopping-cart"></i>
							</div>
							</a>

							<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 " style="text-align:center;">
								<i class="zmdi zmdi-account-circle"></i><br>
                                <h5>
								<a href="edit.php">
								<?php
                                if (isset($_SESSION['email'])) {
                                    echo $email = $_SESSION['email'];
                                }
                                ?>
								</a>
								</h5>
							</div>

							<div>
								<a href="#" class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 " >
									<i class="zmdi zmdi-favorite-outline"></i>
								</a>
							</div>
						</div>

					</nav>
				</div>