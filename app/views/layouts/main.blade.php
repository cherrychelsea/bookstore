<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>Bookstore</title>
	    <!-- Boostrap -->
	    {{ HTML::style('css/normalize.css') }}

	    {{ HTML::style('css/bootstrap.css') }}
	    {{ HTML::style('css/custom.css') }}
	    <!-- Font awesome -->
	    {{ HTML::style('plugins/fa/css/font-awesome.css') }}
	    {{ HTML::style('plugins/fp/css/flickerplate.css') }}
		<!-- script -->
		{{ HTML::script('js/jquery.js') }}
		{{ HTML::script('js/helper.js') }}
	</head>
	<body>
		<div class="wrapper">
			<!-- Header -->
			<div class="header">
				<!-- Topbar -->
				<div class="topbar">
					<div class="container">
						<!-- Topbar Navigation -->
						<ul class="loginbar pull-right">
							<li class="social facebook">
								<i class="fa fa-facebook-square"></i>
							</li>
							<li class="social google-plus">
								<i class="fa fa-google-plus-square"></i>
							</li>
							<li class="social youtube">
								<i class="fa fa-youtube-square"></i>
							</li>
							<li class="topbar-divider"></li>
							<li>
								<a href="login.html">Log in</a>
							</li>
							<li class="topbar-divider"></li>
							<li>
								<a href="#">My Order</a>
							</li>
							<li class="topbar-divider"></li>
							<li>
								<a href="#">Help</a>
							</li>
							<li class="topbar-divider"></li>
							<li>
								<a href="#" class="dropdown-toggle" type="button" id="languageDropdownMenu" data-toggle="dropdown" aria-expanded="true"><i class="fa fa-lg fa-globe"></i> Languages <i class="fa fa-angle-down"></i></a>
								<ul class="dropdown-menu" id="languageSelector" role="menu" aria-labelledby="languageDropdownMenu">
									<li role="presentation"><span value="en">English</span></li>
									<li role="presentation"><span value="vi">Vietnamese</span></li>
								</ul>
							</li>
						</ul>
						<!-- End Topbar Navigation -->		
					</div>
				</div> <!-- end of Topbar -->
				<!-- Navbar -->
				<div class="navbar navbar-default thebookstore-navbar" role="navigation">
					<div class="container">
						<div class="navbar-header">
		                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
		                        <span class="sr-only">Toggle navigation</span>
		                        <span class="fa fa-bars"></span>
		                    </button>
		                    <a class="navbar-brand" href="index.html">
		                        <!-- <img id="logo-header" class="brand-img" src="img/brand/thebookstore_logo.png" alt="The Book store"> -->
		                        {{ HTML::image('img/brand/thebookstore_logo.png', 'The Book store', array("id" => "logo-header", "class" => "brand-img")) }}
		                    </a>
		                </div>
		                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					    <!-- Navbar Search -->
					    <form action="post" id="navSearchForm" class="navbar-search col-md-5">
					    	<div class="input-group">
								<div class="input-group-btn _search-select">
									<button type="button" class="btn btn-default dropdown-toggle _search-all" data-toggle="dropdown" name="category-chooser" id="categoryChooser">
										All <span><i class="fa fa-angle-down"></i></span>
									</button>
									<ul class="dropdown-menu _search-dropdown">
										<li>
											<a href="">Art &amp; Photography</a>													
										</li>
										<li>
											<a href="">Business &amp; Money</a>
										</li>
										<li>
											<a href="">Children's Books</a>
										</li>
										<li>
											<a href="">Computers &amp; Technology</a>
										</li>
										<li>
											<a href="">Cookbooks, Foods &amp; Wine</a>
										</li>
										<li>
											<a href="">Education &amp; Teaching</a>
										</li>
										<li>
											<a href="">Engineering &amp; Transportation</a>
										</li>
										<li>
											<a href="">Comics, Graphics &amp; Novels</a>
										</li>
										<li>
											<a href="">History</a>
										</li>
										<li>
											<a href="" class="pointer">Law</a>
										</li>
										<li>
											<a href="">Medical Books</a>
										</li>
										<li>
											<a href="">Health, Fitness &amp; Dieting</a>
										</li>
										<li>
											<a href="">Humors &amp; Entertainment</a>
										</li>
										<li>
											<a href="">Travel &amp; Discovery</a>
										</li>
									</ul>
								</div>
								<input type="text" id="search" autocomplete="on" class="form-control _input-search" name="q" value placeholder="Search books, novels, audio,...">
								<span class="input-group-btn">
									<button type="submit" class="btn btn-default _search-btn">Search</button>
								</span>
							</div>
					    </form>

					    <!-- end of Navbar Search -->
					      <ul class="nav navbar-nav navbar-right">
					      	<li class="dropdown">
					          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
								<i class="fa fa-lg fa-bell"></i> Notification
					          </a>
					          <ul class="dropdown-menu" role="menu">
					            <li><a href="#">Action</a></li>
					            <li><a href="#">Another action</a></li>
					            <li><a href="#">Something else here</a></li>
					            <li class="divider"></li>
					            <li><a href="#">Separated link</a></li>
					          </ul>
					        </li>
					        <li>
					        	<a href=""><i class="fa fa-lg fa-map-marker"></i> Check Order Status</a>
					        </li>
					        <li class="dropdown">
					          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
								<i class="fa fa-lg fa-shopping-cart"></i>	Your cart
					          </a>
					          <ul class="dropdown-menu" role="menu">
					            <li><a href="#">Action</a></li>
					            <li><a href="#">Another action</a></li>
					            <li><a href="#">Something else here</a></li>
					            <li class="divider"></li>
					            <li><a href="#">Separated link</a></li>
					          </ul>
					        </li>
					      </ul>
					    </div>
					</div>
				</div> <!-- end of Navbar -->
				<!-- Navigation Menu -->
			</div> <!-- end of Header -->
			<!-- Body content -->
			<div class="body-content">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-xs-2 col-lg-3">
							<div class="left-sidebar">
								<div class="row">
									<!-- Categories -->
									<div class="categories megamenu">
										<div class="categories-header megamenu-header">
											<h4 class="header megamenu-header-title"><i class="fa fa-lg fa-bars"></i>Categories</h4>
										</div>
										<div class="categories-list">
											<ul class="category-list megamenu__nav-list">
												<li class="category-item megamenu__nav-item" role="presentation">
													<div class="item-link">
														<a href="" class="megamenu__nav-item-link">Art &amp; Photography</a>
														<span class="pull-right"><i class="fa fa-angle-right megamenu__nav-item-link-arrow-right"></i></span>
														<div class="megamenu__nav-sub">
															<div class="megamenu__nav-sub-header">
																<h4 class="megamenu__nav-sub-title">Art &amp; Photography </h4>
															</div>
															<ul class="megamenu__nav-sub-list">
																<li class="megamenu__nav-sub-list-item">
																	<a href="" class="megamenu__nav-sub-list-item-link">Architecture</a>
																</li>
																<li class="megamenu__nav-sub-list-item">
																	<a href="" class="megamenu__nav-sub-list-item-link">Collections, Catalogs &amp; Exhibitions</a>
																</li>
																<li class="megamenu__nav-sub-list-item">
																	<a href="" class="megamenu__nav-sub-list-item-link">Decorative Arts &amp; Design</a>
																</li>
																<li class="megamenu__nav-sub-list-item">
																	<a href="" class="megamenu__nav-sub-list-item-link">Drawing </a>
																</li>
																<li class="megamenu__nav-sub-list-item">
																	<a href="" class="megamenu__nav-sub-list-item-link">Fashion</a>
																</li>
																<li class="megamenu__nav-sub-list-item">
																	<a href="" class="megamenu__nav-sub-list-item-link">Graphic Design</a>
																</li>
																<li class="megamenu__nav-sub-list-item">
																	<a href="" class="megamenu__nav-sub-list-item-link">History &amp; Criticism</a>
																</li>
																<li class="megamenu__nav-sub-list-item">
																	<a href="" class="megamenu__nav-sub-list-item-link">Individual Artists</a>
																</li>
																<li class="megamenu__nav-sub-list-item">
																	<a href="" class="megamenu__nav-sub-list-item-link">Music</a>
																</li>
																<li class="megamenu__nav-sub-list-item">
																	<a href="" class="megamenu__nav-sub-list-item-link">Painting</a>
																</li>
																<li class="megamenu__nav-sub-list-item">
																	<a href="" class="megamenu__nav-sub-list-item-link">Performing Arts</a>
																</li>
																<li class="megamenu__nav-sub-list-item">
																	<a href="" class="megamenu__nav-sub-list-item-link">Photography &amp; Video</a>
																</li>
																<li class="megamenu__nav-sub-list-item">
																	<a href="" class="megamenu__nav-sub-list-item-link">Religious</a>
																</li>
																<li class="megamenu__nav-sub-list-item">
																	<a href="" class="megamenu__nav-sub-list-item-link">Sculpture</a>
																</li>
																<li class="megamenu__nav-sub-list-item">
																	<a href="" class="megamenu__nav-sub-list-item-link">Study &amp; Teaching </a>
																</li>
																<li class="megamenu__nav-sub-list-item">
																	<a href="" class="megamenu__nav-sub-list-item-link">Vehicle Pictorials</a>
																</li>
															</ul>
														</div>													
													</div>
												</li>
												<li class="category-item megamenu__nav-item" role="presentation">
													<div class="item-link">
														<a href="" class="megamenu__nav-item-link">Business &amp; Money</a>
														<span class="pull-right"><i class="fa fa-angle-right megamenu__nav-item-link-arrow-right"></i></span>

													</div>
												</li>
												<li class="category-item megamenu__nav-item" role="presentation">
													<div class="item-link">
														<a href="" class="megamenu__nav-item-link">Children's Books</a>
														<span class="pull-right"><i class="fa fa-angle-right megamenu__nav-item-link-arrow-right"></i></span>

													</div>
												</li>
												<li class="category-item megamenu__nav-item" role="presentation">
													<div class="item-link">
														<a href="" class="megamenu__nav-item-link">Computers &amp; Technology</a>
														<span class="pull-right"><i class="fa fa-angle-right megamenu__nav-item-link-arrow-right"></i></span>
													</div>
												</li>
												<li class="category-item megamenu__nav-item" role="presentation">
													<div class="item-link">
														<a href="" class="megamenu__nav-item-link">Cookbooks, Foods &amp; Wine</a>
														<span class="pull-right"><i class="fa fa-angle-right megamenu__nav-item-link-arrow-right"></i></span>

													</div>
												</li>
												<li class="category-item megamenu__nav-item" role="presentation">
													<div class="item-link">
														<a href="" class="megamenu__nav-item-link">Education &amp; Teaching</a>
														<span class="pull-right"><i class="fa fa-angle-right megamenu__nav-item-link-arrow-right"></i></span>

													</div>
												</li>
												<li class="category-item megamenu__nav-item" role="presentation">
													<div class="item-link">
														<a href="" class="megamenu__nav-item-link">Engineering &amp; Transportation</a>
														<span class="pull-right"><i class="fa fa-angle-right megamenu__nav-item-link-arrow-right"></i></span>

													</div>
												</li>
												<li class="category-item megamenu__nav-item" role="presentation">
													<div class="item-link">
														<a href="" class="megamenu__nav-item-link">Comics, Graphics &amp; Novels</a>
														<span class="pull-right"><i class="fa fa-angle-right megamenu__nav-item-link-arrow-right"></i></span>

													</div>
												</li>
												<li class="category-item megamenu__nav-item" role="presentation">
													<div class="item-link">
														<a href="" class="megamenu__nav-item-link">History</a>
														<span class="pull-right"><i class="fa fa-angle-right megamenu__nav-item-link-arrow-right"></i></span>

													</div>
												</li>
												<li class="category-item megamenu__nav-item" role="presentation">
													<div class="item-link">
														<a href="" class="megamenu__nav-item-link">Law</a>
														<span class="pull-right"><i class="fa fa-angle-right megamenu__nav-item-link-arrow-right"></i></span>

													</div>
												</li>
												<li class="category-item megamenu__nav-item" role="presentation">
													<div class="item-link">
														<a href="" class="megamenu__nav-item-link">Medical Books</a>
														<span class="pull-right"><i class="fa fa-angle-right megamenu__nav-item-link-arrow-right"></i></span>

													</div>
												</li>
												<li class="category-item megamenu__nav-item" role="presentation">
													<div class="item-link">
														<a href="" class="megamenu__nav-item-link">Health, Fitness &amp; Dieting</a>
														<span class="pull-right"><i class="fa fa-angle-right megamenu__nav-item-link-arrow-right"></i></span>

													</div>
												</li>
												<li class="category-item megamenu__nav-item" role="presentation">
													<div class="item-link">
														<a href="" class="megamenu__nav-item-link">Humors &amp; Entertainment</a>
														<span class="pull-right"><i class="fa fa-angle-right megamenu__nav-item-link-arrow-right"></i></span>

													</div>
												</li>
												<li class="category-item megamenu__nav-item" role="presentation">
													<div class="item-link">
														<a href="" class="megamenu__nav-item-link">Travel &amp; Discovery</a>
														<span class="pull-right"><i class="fa fa-angle-right megamenu__nav-item-link-arrow-right"></i></span>
														
													</div>
												</li>
											</ul>
											<!-- <span class="show-all">Show all <i class="fa fa-angle-down"></i></span> -->
											<div class="hidden"></div>
										</div>
									</div> <!-- end of Categories -->
								</div>
								<div class="row">
									<!-- Refine Conditions -->
									<div class="refine">
										<div class="refine-header">
											<h4 class="header"><i class="fa fa-lg fa-filter"></i>Refined by</h4>
										</div>
										<div class="refine-list">
											<div class="row">
												<div class="col-md-12">
													<div class="header">
														<label for="">Author</label>
													</div>
													<ul class="refined-by-author">
														<li class="author-item">
															<a href="">Author name</a>
														</li>
														<li class="author-item">
															<a href="">Author name</a>
														</li>
														<li class="author-item">
															<a href="">Author name</a>
														</li>
													</ul>
												</div>
											</div>
											<!-- Format row -->
											<div class="row">
												<div class="col-md-12">
													<div class="header">
														<label for="">Format</label>
													</div>
													<ul class="refined-by-format">
														<li class="format-item">
															<input type="checkbox" aria-label="Paperback" value="paperback" id="paperbackFilter" name="formatFilterCheck"><span> Paperback</span>
														</li>
														<li class="format-item">
															<input type="checkbox" aria-label="Ebook" value="ebook" id="ebookFilter" name="formatFilterCheck"><span> Ebook</span>
														</li>
														<li class="format-item">
															<input type="checkbox" aria-label="Hardcover" value="hardcover" id="hardcoverFilter" name="formatFilterCheck"><span> Hardcover</span>
														</li>
														<li class="format-item">
															<input type="checkbox" aria-label="Audio Books" value="audiobook" id="audiobookFilter" name="formatFilterCheck"><span> Audio Books</span>
														</li>
													</ul>
												</div>
											</div> <!-- end of Format row -->
											<!-- Language row -->
											<div class="row">
												<div class="col-md-12">
													<div class="header">
														<label for="">Language</label>
													</div>
													<ul class="refined-by-language">
														<li class="language-item">
															<input type="checkbox" aria-label="Vietnamese" value="vn" id="vnLangFilter" name="languageFilterCheck"><span> Vietnamese</span>
														</li>
														<li class="language-item">
															<input type="checkbox" aria-label="English" value="en" id="enLangFilter" name="languageFilterCheck"><span> English</span>
														</li>
														<li class="language-item">
															<input type="checkbox" aria-label="French" value="vn" id="frLangFilter" name="languageFilterCheck"><span> French</span>
														</li>
														<li class="language-item">
															<input type="checkbox" aria-label="Japanese" value="jp" id="jpLangFilter" name="languageFilterCheck"><span> sJapanese</span>
														</li>
													</ul>
												</div>
											</div> <!-- end of Language row -->
										</div>
										<div class="apply-filter">
											<a href="#" class="filter-btn">Apply filters</a>
											<!-- <a href="#" class="filter-btn">Áp dụng bộ lọc</a> -->

										</div>

									</div> <!-- end of Refine Conditions -->
								</div>

								<div class="row">
									<!-- Social Connection -->
									<div class="social">
										<div class="social-header">
											<!-- <h4 class="header"><i class="fa fa-lg fa-facebook-square"></i>Social Connections</h4> -->
											<h4 class="header"><i class="fa fa-lg fa-facebook-square"></i>Kết nối mạng xã hội</h4>

										</div>
										<div class="social-like-count">

										</div>
										<div class="social-like-users">
											
										</div>
									</div> <!-- end of Refine Conditions -->
								</div>
							</div> <!-- end of Left-Sidebar -->
						</div>
						<div class="col-md-9 col-xs-10 col-lg-9">
							<!-- Main content -->
							@yield('content')
						</div>
					</div>
				</div>
			</div> <!-- end of Body Content -->
			<!-- Footer -->
			<div class="footer">
				<div class="container">
					<!-- Footer info -->
					<div class="row footer-1">
						<!-- About -->
						<div class="col-md-3">
							<div class="about footer-item">
								<img src="img/brand/thebookstore_logo.png" alt="" class="logo-footer">
							</div>
							<div class="about-text">
								<p>About theBookstore dolor sit amet, consectetur adipiscing elit. Maecenas eget nisl id libero tincidunt sodales. Duis eleifend fermentum ante ut aliquam. Cras mi risus, dignissim sed adipiscing ut, placerat non arcu.</p>
							</div>
						</div> <!-- end of About -->
						<!-- Information -->
						<div class="col-md-3">
							<div class="information footer-item">
								<div class="header">
									<h4>Information</h4>
								</div>
								<ul class="information-list">
									<li>
										<a href="#">My Orders</a>
									</li>
									<li>
										<a href="#">How to shop</a>
									</li>
									<li>
										<a href="#">Deliver Info and Charges</a>
									</li>
									<li>
										<a href="#">Payment Modes Accepted</a>
									</li>
									<li>
										<a href="#">Help Files</a>
									</li>
								</ul>
							</div>
						</div> <!-- end of Information -->
						<!-- Useful Links -->
						<div class="col-md-3">
							<div class="useful-link footer-item">
								<div class="header">
									<h4>Useful Links</h4>
								</div>
								<ul class="useful-link-list">
									<li>
										<a href="#">About us</a>
									</li>
									<li>
										<a href="#">Privacy Policy</a>
									</li>
									<li>
										<a href="#">Term of Services</a>
									</li>
									<li>
										<a href="#">Contact us</a>
									</li>									
								</ul>
							</div>
						</div> <!-- end of Useful Links -->
						<!-- Contact Us -->
						<div class="col-md-3">
							<div class="contact footer-item">
								<div class="header">
									<h4>Contact us</h4>
								</div>
								<div class="contact-info">
									<ul>
										<li>
											<span class="address">25, Lorem Lis Street, Orange, California, US</span>
										</li>
										<li>
											<span class="phone">Phone: 800 123 3456</span>
										</li>
										<li>
											<span class="fax">Fax: 800 123 3456</span>
										</li>
										<li>
											<span class="email">Email: info@thebookstore.com</span>
										</li>
									</ul>
								</div>
							</div>
						</div> <!-- end of Contact Us -->
					</div> <!-- end of Footer Infor -->
				</div>
			</div> <!-- end of Footer -->
			<div class="copyright-section">
				<div class="container">
					<!-- Copyright -->
					<div class="row">
						<div class="copyright">
							<span>2014 &copy; All Rights reserved</span>
						</div>
						<div class="pull-right social">
							
						</div>
					</div> <!-- end of Copyright -->
				</div>
			</div>
		</div>

		{{ HTML::script('plugins/fp/js/min/modernizr-custom-v2.7.1.min.js') }}
		{{ HTML::script('plugins/fp/js/min/hammer-v2.0.3.min.js') }}
		{{ HTML::script('js/bootstrap.min.js') }}
		<!-- Image Slider FP -->
		{{ HTML::script('plugins/fp/js/min/flickerplate.min.js') }}
		{{ HTML::script('js/slider.js') }}
		{{ HTML::script('js/bookstore.js') }}
	</body>
</html>