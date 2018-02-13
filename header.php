

<div class="header">
		<div class="top-header navbar navbar-default"><!--header-one-->
			<div class="container" >
				<div class="nav navbar-nav header-two-left wow fadeInLeft animated" data-wow-delay=".5s">
					
					<ul style="margin-left: 9em;">
						<li style="margin-left: 9em;"><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 892</li>
						<li style="margin-left: 9em;"><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">inquiry@tpmbs.com</a></li>			
						<li style="margin-left: 9em;"><a href="login.php"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> Location</a></li>
					</ul>
					
				</div>
				
				
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="header-two navbar navbar-default header-right-cont pp"><!--header-two-->
			<div class="container header-right-cont po">
				
				<div class="nav  logo wow zoomIn animated header-right-cont" data-wow-delay=".7s">
					<h1><a href="index.php">TPM <b>BookStore</b><span class="tag">Learn | Achieve | Intelligence</span> </a></h1>
				</div class="nav navbar-nav logo wow zoomIn animated" data-wow-delay=".7s">
				<div style="margin:3.2em 0; display:flex;">
					<form action="/action_page.php">
						<input type="text" placeholder="Search.." name="search" required="required">
						<button class="type="submit">Search</button>
						 
					</form>
				</div>	
				<div class="nav navbar-nav navbar-right header-two-right header-right">
					
					<div class="header-right cart" style="">
						<a href="#"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a>
						
						<h4><a href= "cart.php">
								<span class="simpleCart_total"> $0.00 </span> (<span id="simpleCart_quantity" class="simpleCart_quantity"> 0 </span>) 
						</a></h4>
						<div class="cart-box">
							
							<div class="clearfix"> </div>
						</div>
					</div>
				<?PHP include("conn.php");
					if (! empty($_SESSION['loggedin']))
					{	
						$user = $_SESSION['loggedin'];
						$query="SELECT users.role, member.name, staff.name FROM users LEFT JOIN staff ON users.role = staff.role LEFT JOIN member ON users.role = member.role WHERE staff.email='$user' OR member.email='$user'";
						$result=mysqli_query($con, $query);
						$row=mysqli_fetch_array($result);
						
						$role=$row['role'];
						if ($role == 1){
						$o1 = "drpdwn-cont";
					} else { $o1 = "none"; }
					if ($role == 2){
						$o2 = "drpdwn-cont";
					} else { $o2 = "none"; }
					if ($role == 3){
						$o3 = "drpdwn-cont";
					} else { $o3 = "none"; }
					if ($role == 4){
						$o4 = "drpdwn-cont";
					} else { $o4 = "none"; }
					if ($role == 5){
						$o5 = "drpdwn-cont";
					} else { $o5 = "none"; }
					if ($role == 6){
						$o6 = "drpdwn-cont";
					} else { $o6 = "none"; }
						
						$name=$row[1].$row[2];
						
						
						$p = "profile.php";
					} else {
						$name="Login";
						$p = "login.php";
						$o1 = "none";
						$o2 = "none";
						$o3 = "none";
						$o4 = "none";
						$o5 = "none";
						$o6 = "none";
					} 
					
				?>
				
				<div class="header-right my-account drpdwn">
						<a href="<?PHP echo $p ?>"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span><?PHP echo $name ?></a>						
						<div class="<?PHP echo $o1 ?>" id="task1" name="member">
							<a href="profile.php">Manage Account</a>
							<a href="">Track Order</a>
							<a href="">Order History</a>
							<a href="">Wishlist</a>
							<a href="logout.php">Logout</a>
						</div>
						<div class="<?PHP echo $o2 ?>" id="task2" name="publisher">
							<a href="profile.php">Manage Account</a>
							<a href="order.php">Check List</a>
							<a href="report.php">Send New List</a>
							<a href="logout.php">Logout</a>
						</div>
						<div class="<?PHP echo $o3 ?>" id="task3" name="supplier">
							<a href="profile.php">Manage Account</a>
							<a href="order.php">Check Order</a>
							<a href="">Send Invoice</a>
							<a href="">Send Receipt</a>
							<a href="logout.php">Logout</a>
						</div>
						<div class="<?PHP echo $o4 ?>" id="task4" name="staff">
							<a href="profile.php">Manage Account</a>
							<a href="order.php">Search Order</a>
							<a href="">Book Inquiry</a>
							<a href="">Members</a>
							<a href="logout.php">Logout</a>
						</div>
						<div class="<?PHP echo $o5 ?>" id="task5" name="clerk">
							<a href="profile.php">Manage Account</a>
							<a href="updatewebsite.php">Update Website</a>
							<a href="invoice.php">Invoice</a>
							<a href="logout.php">Logout</a>
						</div>
						<div class="<?PHP echo $o6 ?>" id="task6" name="admin">
							<a href="profile.php">Manage Account</a>
							<a href="order.php">Send Order</a>
							<a href="report.php">Report</a>
							<a href="inventory.php">Inventory</a>
							<a href="logout.php">Logout</a>
						</div>
					</div>
					
				
			</div>
		</div>
			<div class="top-nav navbar navbar-default header-right-cont"><!--header-three-->
			<div class="container">
				<nav class="navbar" role="navigation">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<!--navbar-header-->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav top-nav-info">
							<li><a href="index.php">Home</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Books<b class="caret"></b></a>
								<ul class="dropdown-menu multi-column multi-column1">
									<div class="row">
										<div style="border-right: 1px solid;">
										<div class="col-sm-3 menu-grids">
											
											<h4>Genre</h4>
											<ul class="multi-column-dropdown">
												<li><h6><a class="list" href="products.html">Fiction</a></h6></li>
												<li><a class="list" href="products.html">Drama</a></li>
												<li><a class="list" href="products.html">Scientific</a></li>
												<li><a class="list" href="products.html">Novel</a></li>
												<li><a class="list" href="products.html">Horror</a></li>
												<li><h6><a class="list" href="products.html">Non-Fiction</a></h6></li>
												<li><a class="list" href="products.html">Cookbooks</a></li>
												<li><a class="list" href="products.html">Health</a></li>
												<li><a class="list" href="products.html">Travel</a></li>
												<li><a class="list" href="products.html">Religion & New Age</a></li>
											 </ul>
										</div>
																												
										<div class="col-sm-3 menu-grids" style="margin-top:2em;">
											
											<ul class="multi-column-dropdown">
												<li><h6><a class="list" href="products.html">Education</a></h6></li>
												<li><a class="list" href="products.html">Dictionaries</a></li>
												<li><a class="list" href="products.html">SPM</a></li>
												<li><a class="list" href="products.html">PT3</a></li>
												<li><h6><a class="list" href="products.html">Children & Teens</a></h6></li>
												<li><a class="list" href="products.html">Puzzles</a></li>
												<li><a class="list" href="products.html">Comics</a></li>
												<li><a class="list" href="products.html">Storybooks</a></li>
											</ul>
										</div>
										</div>
										<div class="col-sm-3 menu-grids">
											<ul class="multi-column-dropdown">
												<h4>Language</h4>
												<li><h6><a class="list" href="products.html">Chinese</a></h6></li>
												<li><h6><a class="list" href="products.html">English</a></h6></li>
												<li><h6><a class="list" href="products.html">Malay</a></h6></li>
												<li><h6><a class="list" href="products.html">Dialect</a></h6></li>
											</ul>
										</div>
										
									</div>
								</ul>
							</li>
							<li class="dropdown grid">
								<a href="#">New Arrivals</a>
							</li>
							
							<li><a href="codes.html">Special Offers</a></li>
						</ul> 
						<div class="clearfix"> </div>
						<!--//navbar-collapse-->
						
					</div>
					<!--//navbar-header-->
				</nav>
				
			</div>
		</div>
	</div>
					
	