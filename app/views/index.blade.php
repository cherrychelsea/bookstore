<?php ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>Bookstore</title>
	    <!-- Boostrap -->
	    <link rel="stylesheet" href="css/normalize.css">
	    <link rel="stylesheet" href="css/bootstrap.css">
	    <link rel="stylesheet" href="css/custom.css">
	    <!-- Font awesome -->
	    <link rel="stylesheet" href="plugins/fa/css/font-awesome.css">
	    <link rel="stylesheet" href="plugins/fp/css/flickerplate.css">
		<!-- script -->
		<script src="js/jquery.js"></script>
		<script src="js/helper.js"></script>
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
								<a href="#">Log in</a>
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
		                        <img id="logo-header" class="brand-img" src="img/brand/thebookstore_logo.png" alt="The Book store">
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
													</div>
												</li>
												<li class="category-item megamenu__nav-item" role="presentation">
													<div class="item-link">
														<a href="" class="megamenu__nav-item-link">Children's Books</a>
													</div>
												</li>
												<li class="category-item megamenu__nav-item" role="presentation">
													<div class="item-link">
														<a href="" class="megamenu__nav-item-link">Computers &amp; Technology</a>
														<!-- <span class="pull-right"><i class="fa fa-angle-right megamenu__nav-item-link-arrow-right"></i></span> -->s
													</div>
												</li>
												<li class="category-item megamenu__nav-item" role="presentation">
													<div class="item-link">
														<a href="" class="megamenu__nav-item-link">Cookbooks, Foods &amp; Wine</a>
													</div>
												</li>
												<li class="category-item megamenu__nav-item" role="presentation">
													<div class="item-link">
														<a href="" class="megamenu__nav-item-link">Education &amp; Teaching</a>
													</div>
												</li>
												<li class="category-item megamenu__nav-item" role="presentation">
													<div class="item-link">
														<a href="" class="megamenu__nav-item-link">Engineering &amp; Transportation</a>
													</div>
												</li>
												<li class="category-item megamenu__nav-item" role="presentation">
													<div class="item-link">
														<a href="" class="megamenu__nav-item-link">Comics, Graphics &amp; Novels</a>
													</div>
												</li>
												<li class="category-item megamenu__nav-item" role="presentation">
													<div class="item-link">
														<a href="" class="megamenu__nav-item-link">History</a>
													</div>
												</li>
												<li class="category-item megamenu__nav-item" role="presentation">
													<div class="item-link">
														<a href="" class="megamenu__nav-item-link">Law</a>
													</div>
												</li>
												<li class="category-item megamenu__nav-item" role="presentation">
													<div class="item-link">
														<a href="" class="megamenu__nav-item-link">Medical Books</a>
													</div>
												</li>
												<li class="category-item megamenu__nav-item" role="presentation">
													<div class="item-link">
														<a href="" class="megamenu__nav-item-link">Health, Fitness &amp; Dieting</a>
													</div>
												</li>
												<li class="category-item megamenu__nav-item" role="presentation">
													<div class="item-link">
														<a href="" class="megamenu__nav-item-link">Humors &amp; Entertainment</a>
													</div>
												</li>
												<li class="category-item megamenu__nav-item" role="presentation">
													<div class="item-link">
														<a href="" class="megamenu__nav-item-link">Travel &amp; Discovery</a>
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
							<div class="main">
								<div class="row main-row">
									<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
										<!-- Slider -->
										<div class="slider">
											<div class="flicker prominent-items">
												<ul>
													<li>
														<img src="img/slider/slide_harry_potter_box_set.jpg" alt="" class="slider-image">
													</li>
													<li>
														<img src="img/slider/slide_alex_feg_bio.jpg" alt="" class="slider-image">
													</li>
													<li>
														<img src="img/slider/slide_the_house_of_hades.jpg" alt="" class="slider-image">
													</li>
												</ul>
											</div>
										</div> <!-- end of Slider-->
									</div>
								</div>
								<div class="row main-row">
									<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
										<div class="upcomming">
											<div class="header upcomming-header">
												<h4>New &amp; Upcomming Releases</h4>
												<a href="#" class="pull-right">See all</a>
											</div>
											<!-- Upcomming books -->
											<section class="upcomming-books">
												<div class="row">
													<div class="col-md-3">
														<div class="upcomming-book book-item">
															<a href="#">
																<div class="book-visual">
																	<div class="book-thumb">
																		<div class="book-img"><img src="img/thumb/books/see_how_small-scott_blockwood.jpg" alt="See how small - Scott Blockwood" class="book-thumbnail"></div>
																		<div class="book-promotion">
																			<span class="new">New</span>
																		</div>
																	</div>
																</div>
															</a>
															<div class="book-meta">
																<div class="title">
																	<a href="book/">
																		<h5 class="book-title">Chó hoang Dingo hay là câu chuyện mối tình đầu</h5>
																	</a>
																</div>
																<div class="author">
																	<span class="book-author">Scott Blackwood</span>
																</div>
																<div class="rate-comment">
																	<div class="rate-box">
																		<div class="ratings" style="width: 75%;"></div>
																	</div>
																	<div class="comment-box">
																		<span>(6 nhận xét)</span>
																	</div>
																</div>
																<div class="format">
																	<span class="book-format">Hardcover</span>
																</div>
																<div class="price">
																	<span class="price-currency">$</span>
																	<span class="book-price">18.63</span>
																</div>
															</div>
														</div>
													</div> <!-- end of Item 1 -->
													<!-- Item 2 -->
													<div class="col-md-3">
														<div class="upcomming-book book-item">
															<a href="#">
																<div class="book-visual">
																	<div class="book-thumb">
																		<div class="book-img"><img src="img/thumb/books/see_how_small-scott_blockwood.jpg" alt="See how small - Scott Blockwood" class="book-thumbnail"></div>
																		<div class="book-promotion">
																			<span class="discount">-20%</span>
																		</div>
																	</div>
																</div>
															</a>
															<div class="book-meta">
																<div class="title">
																	<a href="book/">
																		<h5 class="book-title">Chó hoang Dingo hay là câu chuyện mối tình đầu</h5>
																	</a>
																</div>
																<div class="author">
																	<span class="book-author">Scott Blackwood</span>
																</div>
																<div class="rate-comment">
																	<div class="rate-box">
																		<div class="ratings" style="width: 75%;"></div>
																	</div>
																	<div class="comment-box">
																		<span>(6 nhận xét)</span>
																	</div>
																</div>
																<div class="format">
																	<span class="book-format">Hardcover</span>
																</div>
																<div class="price">
																	<span class="price-currency">$</span>
																	<span class="book-price">18.63</span>
																</div>
															</div>
														</div>
													</div> <!-- end of Item 2 -->
													<!-- Item 3 -->
													<div class="col-md-3">
														<div class="upcomming-book book-item">
															<a href="#">
																<div class="book-visual">
																	<div class="book-thumb">
																		<div class="book-img"><img src="img/thumb/books/see_how_small-scott_blockwood.jpg" alt="See how small - Scott Blockwood" class="book-thumbnail"></div>
																		<div class="book-promotion">
																			<span class="new">New</span>
																		</div>
																	</div>
																</div>
															</a>
															<div class="book-meta">
																<div class="title">
																	<a href="book/">
																		<h5 class="book-title">Chó hoang Dingo hay là câu chuyện mối tình đầu</h5>
																	</a>
																</div>
																<div class="author">
																	<span class="book-author">Scott Blackwood</span>
																</div>
																<div class="rate-comment">
																	<div class="rate-box">
																		<div class="ratings" style="width: 75%;"></div>
																	</div>
																	<div class="comment-box">
																		<span>(6 nhận xét)</span>
																	</div>
																</div>
																<div class="format">
																	<span class="book-format">Hardcover</span>
																</div>
																<div class="price">
																	<span class="price-currency">$</span>
																	<span class="book-price">18.63</span>
																</div>
															</div>
														</div>
													</div> <!-- end of Item 3 -->
													<!-- Item 4 -->
													<div class="col-md-3">
														<div class="upcomming-book book-item">
															<a href="#">
																<div class="book-visual">
																	<div class="book-thumb">
																		<div class="book-img"><img src="img/thumb/books/see_how_small-scott_blockwood.jpg" alt="See how small - Scott Blockwood" class="book-thumbnail"></div>
																		<div class="book-promotion">
																			<span class="new">New</span>
																		</div>
																	</div>
																</div>
															</a>
															<div class="book-meta">
																<div class="title">
																	<a href="book/">
																		<h5 class="book-title">Chó hoang Dingo hay là câu chuyện mối tình đầu</h5>
																	</a>
																</div>
																<div class="author">
																	<span class="book-author">Scott Blackwood</span>
																</div>
																<div class="rate-comment">
																	<div class="rate-box">
																		<div class="ratings" style="width: 75%;"></div>
																	</div>
																	<div class="comment-box">
																		<span>(6 nhận xét)</span>
																	</div>
																</div>
																<div class="format">
																	<span class="book-format">Hardcover</span>
																</div>
																<div class="price">
																	<span class="price-currency">$</span>
																	<span class="book-price">18.63</span>
																</div>
															</div>
														</div>
													</div><!-- Item 4 -->
												</div>
											</section>  <!-- end of Upcomming book-->
										</div>
									</div>
								</div> <!-- end of Upcomming row -->
								<!-- Popular Books -->
								<div class="row main-row">
									<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
										<div class="header popular-header">
											<h4>Popular Books</h4>
											<a href="#" class="pull-right">See all</a>
										</div> 

										<!-- Popular books -->
										<section class="popular-books">
											<div class="row">
												<!-- Item 1 -->
												<div class="col-md-3">
													<div class="popular-book book-item">
														<a href="#">
															<div class="book-visual">
																<div class="book-thumb">
																	<div class="book-img"><img src="img/thumb/books/see_how_small-scott_blockwood.jpg" alt="See how small - Scott Blockwood" class="book-thumbnail"></div>
																	<div class="book-promotion">
																		<span class="new">New</span>
																	</div>
																</div>
															</div>
														</a>
														<div class="book-meta">
															<div class="title">
																<a href="">
																	<h5 class="book-title">Chó hoang Dingo hay là câu chuyện mối tình đầu</h5>
																</a>
															</div>
															<div class="author">
																<span class="book-author">Scott Blackwood</span>
															</div>
															<div class="rate-comment">
																<div class="rate-box">
																	<div class="ratings" style="width: 75%;"></div>
																</div>
																<div class="comment-box">
																	<span>(6 nhận xét)</span>
																</div>
															</div>
															<div class="format">
																<span class="book-format">Hardcover</span>
															</div>
															<div class="price">
																<span class="price-currency">$</span>
																<span class="book-price">18.63</span>
															</div>
														</div>
													</div> <!-- end of Book Item -->
												</div> <!-- end of Item 1 -->

												<!-- Item 2 -->
												<div class="col-md-3">
													<div class="popular-book book-item">
														<a href="#">
															<div class="book-visual">
																<div class="book-thumb">
																	<div class="book-img"><img src="img/thumb/books/see_how_small-scott_blockwood.jpg" alt="See how small - Scott Blockwood" class="book-thumbnail"></div>
																	<div class="book-promotion">
																		<span class="new">New</span>
																	</div>
																</div>
															</div>
														</a>
														<div class="book-meta">
															<div class="title">
																<a href="">
																	<h5 class="book-title">Chó hoang Dingo hay là câu chuyện mối tình đầu</h5>
																</a>
															</div>
															<div class="author">
																<span class="book-author">Scott Blackwood</span>
															</div>
															<div class="rate-comment">
																<div class="rate-box">
																	<div class="ratings" style="width: 75%;"></div>
																</div>
																<div class="comment-box">
																	<span>(6 nhận xét)</span>
																</div>
															</div>
															<div class="format">
																<span class="book-format">Hardcover</span>
															</div>
															<div class="price">
																<span class="price-currency">$</span>
																<span class="book-price">18.63</span>
															</div>
														</div>
													</div> <!-- end of Book Item -->
												</div> <!-- end of Item 2 -->

												<!-- Item 3 -->
												<div class="col-md-3">
													<div class="popular-book book-item">
														<a href="#">
															<div class="book-visual">
																<div class="book-thumb">
																	<div class="book-img"><img src="img/thumb/books/see_how_small-scott_blockwood.jpg" alt="See how small - Scott Blockwood" class="book-thumbnail"></div>
																	<div class="book-promotion">
																		<span class="new">New</span>
																	</div>
																</div>
															</div>
														</a>
														<div class="book-meta">
															<div class="title">
																<a href="">
																	<h5 class="book-title">Chó hoang Dingo hay là câu chuyện mối tình đầu</h5>
																</a>
															</div>
															<div class="author">
																<span class="book-author">Scott Blackwood</span>
															</div>
															<div class="rate-comment">
																<div class="rate-box">
																	<div class="ratings" style="width: 75%;"></div>
																</div>
																<div class="comment-box">
																	<span>(6 nhận xét)</span>
																</div>
															</div>
															<div class="format">
																<span class="book-format">Hardcover</span>
															</div>
															<div class="price">
																<span class="price-currency">$</span>
																<span class="book-price">18.63</span>
															</div>
														</div>
													</div> <!-- end of Book Item -->
												</div> <!-- end of Item 3 -->

												<!-- Item 4 -->
												<div class="col-md-3">
													<div class="popular-book book-item">
														<a href="#">
															<div class="book-visual">
																<div class="book-thumb">
																	<div class="book-img"><img src="img/thumb/books/see_how_small-scott_blockwood.jpg" alt="See how small - Scott Blockwood" class="book-thumbnail"></div>
																	<div class="book-promotion">
																		<span class="new">New</span>
																	</div>
																</div>
															</div>
														</a>
														<div class="book-meta">
															<div class="title">
																<a href="">
																	<h5 class="book-title">Chó hoang Dingo hay là câu chuyện mối tình đầu</h5>
																</a>
															</div>
															<div class="author">
																<span class="book-author">Scott Blackwood</span>
															</div>
															<div class="rate-comment">
																<div class="rate-box">
																	<div class="ratings" style="width: 75%;"></div>
																</div>
																<div class="comment-box">
																	<span>(6 nhận xét)</span>
																</div>
															</div>
															<div class="format">
																<span class="book-format">Hardcover</span>
															</div>
															<div class="price">
																<span class="price-currency">$</span>
																<span class="book-price">18.63</span>
															</div>
														</div>
													</div> <!-- end of Book Item -->
												</div> <!-- end of Item 4 -->
											</div>
										</section>
									</div>							
								</div> <!-- end of popular book row -->
								<!-- Recommended by thebookstore -->
								<div class="row main-row">
									<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
										<div class="header popular-header">
											<h4>Recommended by thebookstore</h4>
											<a href="#" class="pull-right">See all</a>
										</div> 

										<!-- Recommended books -->
										<section class="popular-books">
											<div class="row">
												<!-- Item 1 -->
												<div class="col-md-3">
													<div class="recommended-book book-item">
														<a href="#">
															<div class="book-visual">
																<div class="book-thumb">
																	<div class="book-img"><img src="img/thumb/books/see_how_small-scott_blockwood.jpg" alt="See how small - Scott Blockwood" class="book-thumbnail"></div>
																	<div class="book-promotion">
																		<span class="new">New</span>
																	</div>
																</div>
															</div>
														</a>
														<div class="book-meta">
															<div class="title">
																<a href="">
																	<h5 class="book-title">Chó hoang Dingo hay là câu chuyện mối tình đầu</h5>
																</a>
															</div>
															<div class="author">
																<span class="book-author">Scott Blackwood</span>
															</div>
															<div class="rate-comment">
																<div class="rate-box">
																	<div class="ratings" style="width: 75%;"></div>
																</div>
																<div class="comment-box">
																	<span>(6 nhận xét)</span>
																</div>
															</div>
															<div class="format">
																<span class="book-format">Hardcover</span>
															</div>
															<div class="price">
																<span class="price-currency">$</span>
																<span class="book-price">18.63</span>
															</div>
														</div>
													</div> <!-- end of Book Item -->
												</div> <!-- end of Item 1 -->

												<!-- Item 1 -->
												<div class="col-md-3">
													<div class="popular-book book-item">
														<a href="#">
															<div class="book-visual">
																<div class="book-thumb">
																	<div class="book-img"><img src="img/thumb/books/see_how_small-scott_blockwood.jpg" alt="See how small - Scott Blockwood" class="book-thumbnail"></div>
																	<div class="book-promotion">
																		<span class="new">New</span>
																	</div>
																</div>
															</div>
														</a>
														<div class="book-meta">
															<div class="title">
																<a href="">
																	<h5 class="book-title">Chó hoang Dingo hay là câu chuyện mối tình đầu</h5>
																</a>
															</div>
															<div class="author">
																<span class="book-author">Scott Blackwood</span>
															</div>
															<div class="rate-comment">
																<div class="rate-box">
																	<div class="ratings" style="width: 75%;"></div>
																</div>
																<div class="comment-box">
																	<span>(6 nhận xét)</span>
																</div>
															</div>
															<div class="format">
																<span class="book-format">Hardcover</span>
															</div>
															<div class="price">
																<span class="price-currency">$</span>
																<span class="book-price">18.63</span>
															</div>
														</div>
													</div> <!-- end of Book Item -->
												</div> <!-- end of Item 1 -->

												<!-- Item 1 -->
												<div class="col-md-3">
													<div class="popular-book book-item">
														<a href="#">
															<div class="book-visual">
																<div class="book-thumb">
																	<div class="book-img"><img src="img/thumb/books/see_how_small-scott_blockwood.jpg" alt="See how small - Scott Blockwood" class="book-thumbnail"></div>
																	<div class="book-promotion">
																		<span class="new">New</span>
																	</div>
																</div>
															</div>
														</a>
														<div class="book-meta">
															<div class="title">
																<a href="">
																	<h5 class="book-title">Chó hoang Dingo hay là câu chuyện mối tình đầu</h5>
																</a>
															</div>
															<div class="author">
																<span class="book-author">Scott Blackwood</span>
															</div>
															<div class="rate-comment">
																<div class="rate-box">
																	<div class="ratings" style="width: 75%;"></div>
																</div>
																<div class="comment-box">
																	<span>(6 nhận xét)</span>
																</div>
															</div>
															<div class="format">
																<span class="book-format">Hardcover</span>
															</div>
															<div class="price">
																<span class="price-currency">$</span>
																<span class="book-price">18.63</span>
															</div>
														</div>
													</div> <!-- end of Book Item -->
												</div> <!-- end of Item 1 -->

												<!-- Item 1 -->
												<div class="col-md-3">
													<div class="popular-book book-item">
														<a href="#">
															<div class="book-visual">
																<div class="book-thumb">
																	<div class="book-img"><img src="img/thumb/books/see_how_small-scott_blockwood.jpg" alt="See how small - Scott Blockwood" class="book-thumbnail"></div>
																	<div class="book-promotion">
																		<span class="new">New</span>
																	</div>
																</div>
															</div>
														</a>
														<div class="book-meta">
															<div class="title">
																<a href="">
																	<h5 class="book-title">Chó hoang Dingo hay là câu chuyện mối tình đầu</h5>
																</a>
															</div>
															<div class="author">
																<span class="book-author">Scott Blackwood</span>
															</div>
															<div class="rate-comment">
																<div class="rate-box">
																	<div class="ratings" style="width: 75%;"></div>
																</div>
																<div class="comment-box">
																	<span>(6 nhận xét)</span>
																</div>
															</div>
															<div class="format">
																<span class="book-format">Hardcover</span>
															</div>
															<div class="price">
																<span class="price-currency">$</span>
																<span class="book-price">18.63</span>
															</div>
														</div>
													</div> <!-- end of Book Item -->
												</div> <!-- end of Item 1 -->
											</div>
											
										</section>
									</div>
									<!-- 

									 -->							
								</div> <!-- end of Recommended by thebookstore  row -->
								<!-- Popuplar Author -->
								<div class="row main-row">
									<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
										<div class="header popular-header">
											<h4>Popular Authors</h4>
											<a href="#" class="pull-right">See all</a>
										</div> 

										<!-- Recommended books -->
										<div class="row author-row">
											<div class="col-md-6 col-xs-6">
												<article class="popular-author">
													<div class="author-meta">
														<div class="author-img">
															<img src="img/author/james_patterson.jpg" alt="" class="author-img">
														</div>
														<div class="author-info">
															<h4 class="author-name">James Patterson</h4>
															<a href="#" class="see-more">All book by this author</a>
														</div>
													</div>
													<div class="author-bio">
														<p>It is no surprise that in January, 2010, The New York Times Magazine featured James Patterson on its cover and hailed him as having "transformed book publishing," and that Time magazine hailed him as "The Man Who Can't Miss." Recently, NBC's Rock Center with Brian Williams profiled Patterson's prolific career, AARP named him one of the "50 Most Influential People Who Make Our Days a Little Brighter," and Variety featured him in a cover story highlighting his adventures in Hollywood.</p>
													</div>
												</article> <!-- end of Author 1 -->
											</div>
											<div class="col-md-6 col-xs-6">
												<article class="popular-author">
													<div class="author-meta">
														<div class="author-img">
															<img src="img/author/james_patterson.jpg" alt="" class="author-img">
														</div>
														<div class="author-info">
															<h4 class="author-name">James Patterson</h4>
															<a href="#" class="see-more">All book by this author</a>
														</div>
													</div>
													<div class="author-bio">
														<p>It is no surprise that in January, 2010, The New York Times Magazine featured James Patterson on its cover and hailed him as having "transformed book publishing," and that Time magazine hailed him as "The Man Who Can't Miss." Recently, NBC's Rock Center with Brian Williams profiled Patterson's prolific career, AARP named him one of the "50 Most Influential People Who Make Our Days a Little Brighter," and Variety featured him in a cover story highlighting his adventures in Hollywood.</p>
													</div>
												</article> <!-- end of Author 2 -->
											</div>
										</div> <!-- end of Author row -->
									</div>							
								</div> <!-- end of Popular Author row -->
							</div> <!-- end of Main Content -->
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

		<script src="plugins/fp/js/min/modernizr-custom-v2.7.1.min.js"></script>
		<script src="plugins/fp/js/min/hammer-v2.0.3.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<!-- Image Slider FP -->
		<script src="plugins/fp/js/min/flickerplate.min.js"></script>
		<script src="js/slider.js"></script>
		<script src="js/bookstore.js"></script>
	</body>
</html>