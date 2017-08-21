<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="social-icons">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-camera"></i></a></li>
								<li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="right-nav">
							<ul class="nav">
								<li><a href="#"><i class="fa fa-heart"></i></a></li>
								<li><a href="shopping-cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                <?php
									if(isset($_SESSION['uid']))
									{										
								?>
                                <li><a href="logout.php"><i class="fa fa-user" aria-hidden="true"></i><?php echo ucwords($_SESSION['name']); ?> Logout</a></li>
                                <li><a href="my-account.php"> My Account</a></li>
                                <?php
									}
									else
									{
								?>
								<li><a href="loginuser.php"><i class="fa fa-user" aria-hidden="true"></i> Sign In</a></li>
								<li><a href="registeruser.php">Register</a></li>
                               <?php 
									}
								?>	
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="header-middel-main">
				<div class="logo pull-left">
					<a href="#"><img src="images/home/logo.png" width="270" alt="" /></a>
				</div>
                <?php /*?><div class="menu-container">
			        <div class="menu">
			            <ul>
			                <li><a href="#">Home</a></li>
			                <li><a href="#">Products</a>
			                    <ul>
			                        <li><a href="#">School</a>
			                            <ul>
			                                <li><a href="#">Lidership</a></li>
			                                <li><a href="#">History</a></li>
			                                <li><a href="#">Locations</a></li>
			                                <li><a href="#">Careers</a></li>
			                            </ul>
			                        </li>
			                        <li><a href="#">Study</a>
			                            <ul>
			                                <li><a href="#">Undergraduate</a></li>
			                                <li><a href="#">Masters</a></li>
			                                <li><a href="#">International</a></li>
			                                <li><a href="#">Online</a></li>
			                            </ul>
			                        </li>
			                        <li><a href="#">Research</a>
			                            <ul>
			                                <li><a href="#">Undergraduate research</a></li>
			                                <li><a href="#">Masters research</a></li>
			                                <li><a href="#">Funding</a></li>
			                            </ul>
			                        </li>
			                        <li><a href="#">Something</a>
			                            <ul>
			                                <li><a href="#">Sub something</a></li>
			                                <li><a href="#">Sub something</a></li>
			                                <li><a href="#">Sub something</a></li>
			                                <li><a href="#">Sub something</a></li>
			                            </ul>
			                        </li>
									<li><a href="#">Something</a>
			                            <ul>
			                                <li><a href="#">Sub something</a></li>
			                                <li><a href="#">Sub something</a></li>
			                                <li><a href="#">Sub something</a></li>
			                                <li><a href="#">Sub something</a></li>
			                            </ul>
			                        </li>
									<li><a href="#">School</a>
			                            <ul>
			                                <li><a href="#">Lidership</a></li>
			                                <li><a href="#">History</a></li>
			                                <li><a href="#">Locations</a></li>
			                                <li><a href="#">Careers</a></li>
			                            </ul>
			                        </li>
			                        <li><a href="#">Study</a>
			                            <ul>
			                                <li><a href="#">Undergraduate</a></li>
			                                <li><a href="#">Masters</a></li>
			                                <li><a href="#">International</a></li>
			                                <li><a href="#">Online</a></li>
			                            </ul>
			                        </li>
			                        <li><a href="#">Research</a>
			                            <ul>
			                                <li><a href="#">Undergraduate research</a></li>
			                                <li><a href="#">Masters research</a></li>
			                                <li><a href="#">Funding</a></li>
			                            </ul>
			                        </li>
			                        <li><a href="#">Something</a>
			                            <ul>
			                                <li><a href="#">Sub something</a></li>
			                                <li><a href="#">Sub something</a></li>
			                                <li><a href="#">Sub something</a></li>
			                                <li><a href="#">Sub something</a></li>
			                            </ul>
			                        </li>
									<li><a href="#">Something</a>
			                            <ul>
			                                <li><a href="#">Sub something</a></li>
			                                <li><a href="#">Sub something</a></li>
			                                <li><a href="#">Sub something</a></li>
			                                <li><a href="#">Sub something</a></li>
			                            </ul>
			                        </li>
                                    <li><a href="#">School</a>
			                            <ul>
			                                <li><a href="#">Lidership</a></li>
			                                <li><a href="#">History</a></li>
			                                <li><a href="#">Locations</a></li>
			                                <li><a href="#">Careers</a></li>
			                            </ul>
			                        </li>
			                    </ul>
			                </li>
			                <li><a href="">Raw Materials</a></li>
			                <li><a href="">Contact</a></li>
			            </ul>
			        </div>
				</div><?php */?>
				<div class="menu-container">
			        <div class="menu">
			            <ul>
			                <li><a href="index.php">Home</a></li>
			                <li><a href="#">Products</a>
			                	<ul>
                                <?php
									$query_mc = "SELECT `mc_id`, `mc_name` FROM `main_category` WHERE `mc_status`=1 order by `mc_name`";
									$stmt_mc = $conn->prepare($query_mc) or die($conn->error);
									if($stmt_mc) 
									{	
										$stmt_mc->execute();
										$stmt_mc->bind_result($mc_id, $mc_name);
										$stmt_mc->store_result();
										//$count_mc=$stmt_mc->num_rows;
										
										while ($stmt_mc->fetch()) 
										{
								?>
			                        <li><a href="#"><?php echo ucfirst($mc_name); ?></a>
			                            <ul>
                                        	<?php
							$query_pc = "SELECT `pc_id`, `pc_name` FROM `parent_category` WHERE mc_id=?";
							$stmt_pc = $conn->prepare($query_pc) or die($conn->error);
							if($stmt_pc) 
							{	
								$stmt_pc->bind_param('i',$mc_id);
								$stmt_pc->execute();
								$stmt_pc->bind_result($pc_id, $pc_name);
								$stmt_pc->store_result();
								//$count_mc=$stmt_mc->num_rows;
								
								while ($stmt_pc->fetch()) 
								{
						?>
			                                <li><a href="product.php?pid=<?php echo $pc_id; ?>"><?php echo ucfirst($pc_name); ?></a></li>
                                            <?php
													}
												}
											?>	
			                            </ul>
			                        </li>
                                   <?php
										}
									}
								 ?>	 
			                    </ul>
			                </li>
			                <li><a href="#">Raw Materials</a></li>
			                <li><a href="#">Contact</a></li>
			            </ul>
			        </div>
				</div>
	
				<div class="header-search-box">
					<input class="form-control" placeholder="Search" type="text">
					<button class="btn btn-default" type="submit">
						<img src="images/search.png" alt="Search Image" width="20" height="20">
					</button>
				</div>


				<div class="clear"></div>
				</div>
			</div>
		</div><!--/header-middle-->