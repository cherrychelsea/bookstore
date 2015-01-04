<?php  ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>Single Book View | Bookstore</title>
	    <!-- Boostrap -->
	    <link rel="stylesheet" href="css/normalize.css">
	    <link rel="stylesheet" href="css/bootstrap.css">
	    <link rel="stylesheet" href="css/custom.css">
	    <!-- Font awesome -->
	    <link rel="stylesheet" href="fa/css/font-awesome.css">
	    <link rel="stylesheet" href="fp/css/flickerplate.css">
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
											<a href="">All Categories</a>													
										</li>
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
						<div class="col-md-3 col-xs-2 col-lg-3  megamenu-wrapper">
							<div class="left-sidebar">
								<div class="row">
									<!-- Categories -->
									<div class="categories megamenu">
										<div class="categories-header megamenu-header" id="categoryMenu">
											<a href="" class="megamenu-header-title-link"><h4 class="header megamenu-header-title"><i class="fa fa-lg fa-bars"></i>Categories</h4></a>
										</div>
										<div class="categories-list megamenu__list exit-on-out">
											<ul class="category-list megamenu__nav-list">
												<li class="category-item megamenu__nav-item" role="presentation">
													<div class="item-link">
														<a href="" class="megamenu__nav-item-link">Art &amp; Photography</a>
														<span class="pull-right"><i class="fa fa-angle-right megamenu__nav-item-link-arrow-right"></i></span>
														<div class="megamenu__nav-sub">
															<div class="megamenu__nav-sub-header">
																<h4 class="megamenu__nav-sub-title">Art &amp; Photography </h4>
															</div>
															<div class="megamenu__nav-sub-content">
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
																<!-- <div class="megamenu__nav-sub-promotion">
																	<img src="img/thumb/megamenu_bg.png" alt="">
																</div> -->
															</div>
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
											<!-- <span class="show-all">Show asll <i class="fa fa-angle-down"></i></span> -->
											<!-- <div class="hidden"></div> -->
										</div>
									</div> <!-- end of Categories -->
								</div>
							</div> <!-- end of Left-Sidebar -->
						</div>
						<div class="col-md-5">
							<!-- Small ad, promotion can be place here -->
						</div>
						<div class="col-md-4 pull-right">
							<div class="hotline-wrapper pull-right">
								<i class="fa fa-lg fa-phone-square"></i>
								<span class="hotline-title">Hotline: </span>
								<span class="hotline-number">1900-0099</span>
								<span class="hotline-active-time">8h - 21h daily (include Sat &amp; Sun)</span>
							</div>
						</div>
						<!-- <hr class="divider" style="position: absolute; margin-top: 35px;"> -->
					</div>
					
					<!-- Region for Book view -->
					<div class="row book-item-viewport marginbottom-20">
						<!-- Book Cover and Preview -->
						<div class="col-md-3" id="leftCol">
							<div class="book-preview">
								<div class="book-image">
									<div class="read-sample">
										
									</div>
									<div class="book-cover-preview">
										<img src="img/thumb/books/b_winter_in_white.jpg" alt="" class="book-cover">
									</div>
									<div class="share-book">
										
									</div>
								</div>
							</div>
						</div> <!-- end of book cover and review -->
						<div class="col-md-6" id="centerCol">
							<div class="book-detail-info">
								<!-- Book General Information -->
								<div class="information-header">
									<div class="book-header">
										<h2 class="book-title">Winter in White: A Mini Pop-Up Treat</h2>
									</div>
									<div class="book-author">
										<span class="book-author-list">by <a href="#">Robert Sabuda</a></span>
									</div>
									<div class="book-ratings">
										<div class="rate-box">
											<div class="ratings" style="width:85%"></div>
											<!-- <div class="caret" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-lg fa-angle-down"></i></div>
											<div class="dropdown-menu" role="menu" aria-labelledby="dLabel">
												<span>Something dropped down</span>
											</div> -->
										</div>
										<div class="reviews">
											<a href="#">580 customer reviews</a>
										</div>
									</div> <!-- end of book ratings -->
									<!-- Book feature badge -->
									<div class="book-feature-badge-wrapper">
										<span class="feature feature-badge">#1 Best Seller</span>
										<span class="cat-name">in <a href="" class="cat">Children's Books</a></span>
									</div> <!-- end of book feature badge -->
								</div> <!-- end of General Information -->
								<!-- Book details -->
								<div class="details">
									<p class="page detail-item">
										<span class="detail-item-title">Paperpack: </span>
										<span class="page-count detail-value">512</span>
									</p>
									<p class="publisher detail-item">
										<span class="detail-item-title">Publisher: </span>
										<span class="publisher-name detail-value">Little Simon Merchandise</span>
									</p>
									<p class="publish-date detail-item">
										<span class="detail-item-title">Publish date: </span>
										<span class="publisher-name detail-value">06/11/2007</span>
									</p>
									<p class="language detail-item">
										<span class="detail-item-title">Language: </span>
										<span class="detail-value">English</span>
									</p>
									<p class="isbn-10 detail-item">
										<span class="detail-item-title">ISBN-10: </span>
										<span class="detail-value">0689853653</span>
									</p>
									<p class="isbn-13 detail-item">
										<span class="detail-item-title">ISBN-13: </span>
										<span class="detail-value">9780689853654</span>
									</p>
									<p class="dimension detail-item">
										<span class="detail-item-title">Demension: </span>
										<span class="detail-value"> 16.76 x 12.45 x 4.39 centimeters</span>
									</p>
									<p class="shipping-weight detail-item">
										<span class="detail-item-title">Shipping Weight: </span>
										<span class="detail-value"> 0.20 kilograms</span>
									</p>
								</div> <!-- end of details -->
								<!-- Description -->
								<div class="descriptions">
									<div class="header">
										<h4>Descriptions</h4>
									</div>
									<div class="book-description">
										<p class="description-text">
											This jewel of a book celebrates the wonders of winter, from snow dancing across branches to the scrape of an ice skate across a pond to the whoosh of a sled down a hill. With magnificent pop-ups by legendary writer, artist, and paper engineer Sabuda, this book is a joy to share. ...Silent hush of snowy white...
										</p>
										<!-- <p class="description-text">This jewel of a book celebrates the wonders of winter, from snow dancing across branches to the scrape of an ice skate across a pond to the whoosh of a sled down a hill. With magnificent pop-ups by legendary writer, artist, and paper engineer Robert Sabuda, this book is a joy to share and a perfect book to give to celebrate the winter season in all its glory.</p> -->
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3" id="rightCol">
							<div class="order">
								<!-- Order and Add to cart -->
								<div class="order-wrapper">
									<div class="price-wrapper">
										<div class="price-region">
											<h5>Price</h5>
											<p class="price">
												<span class="price-currency">$</span><span class="book-price">12.07</span>
											</p>
										</div>
										<div class="discount-info">
											<div class="from">
												<p>
													From: <span class="from-price">$15.24</span> (Save <span class="save-count">15%</span>)
												</p>
											</div>
											<div class="more-info">
												<p>
													From now until 31 Jan 2015, get free delivery with minimum purchase of $60. Use promo code 0CAFA2C61F. <a href="" class="promote-more-info">Click here for details.</a>
												</p>
											</div>
										</div> <!-- end of discount info -->
									</div> <!-- end of price wrapper -->
								</div> <!-- end of order-wrapper -->
								<!-- Item status -->
								<div class="item-status-wrapper">
									<div class="status">
										<p class="in-stock">In stock</p>
									</div>
									<div class="copy-available">
										<span><i class="fa fa-caret-right"></i> 64 copies available</span>
									</div>
									<div class="delivery-info">
										<span><i class="fa fa-caret-right"></i> Usually delivered within 4-7 working days.</span>
									</div>
								</div> <!-- end of item status -->
								<!-- Add to cart -->
								<div class="add-to-cart-wrapper">
									<form action="" class="cart-form">
										<div class="quantity">
											<input type="text" class="quantity-input" id="quantityInput" placeholder="Enter quantity of books">
										</div>
										<div class="add-to-cart">
											<button class="btn btn-default cart-btn" id="addToCartBtn" type="submit">Add to cart</button>
										</div>
										<div class="add-to-wishlist">
											<!-- <button class="wishlist-btn" id="addToWishlistBtn" type="submit">Add to Wishlist </button> -->
										</div>
									</form>
								</div>
								<!-- end of add to cart -->
							</div> <!-- end of order & add to cart -->
						</div>
					</div> <!-- end of book three-column view -->
					<!-- <hr class="divider"> -->

					<!-- Similar bought -->
					<div class="row product-similar-bought marginbottom-20">
						<div class="similar-header">
							<h4 class="similar-title">
								Customers who bought this also bought
							</h4>
							<div class="col-md-12">
								<div class="row main-row">
									<div class="col-md-2">
										<div class="book-item">
											<a href="#">
												<div class="book-visual">
													<div class="book-thumb">
														<div class="book-img"><img src="img/thumb/books/see_how_small-scott_blockwood.jpg" alt="See how small - Scott Blockwood" class="book-thumbnail"></div>
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
										</div>
									</div> <!-- end of Item 1 -->

									<div class="col-md-2">
										<div class="book-item">
											<a href="#">
												<div class="book-visual">
													<div class="book-thumb">
														<div class="book-img"><img src="img/thumb/books/see_how_small-scott_blockwood.jpg" alt="See how small - Scott Blockwood" class="book-thumbnail"></div>
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
										</div>
									</div> <!-- end of Item 1 -->

									<div class="col-md-2">
										<div class="book-item">
											<a href="#">
												<div class="book-visual">
													<div class="book-thumb">
														<div class="book-img"><img src="img/thumb/books/see_how_small-scott_blockwood.jpg" alt="See how small - Scott Blockwood" class="book-thumbnail"></div>
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
										</div>
									</div> <!-- end of Item 1 -->

									<div class="col-md-2">
										<div class="book-item">
											<a href="#">
												<div class="book-visual">
													<div class="book-thumb">
														<div class="book-img"><img src="img/thumb/books/see_how_small-scott_blockwood.jpg" alt="See how small - Scott Blockwood" class="book-thumbnail"></div>
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
										</div>
									</div> <!-- end of Item 1 -->

									<div class="col-md-2">
										<div class="book-item">
											<a href="#">
												<div class="book-visual">
													<div class="book-thumb">
														<div class="book-img"><img src="img/thumb/books/see_how_small-scott_blockwood.jpg" alt="See how small - Scott Blockwood" class="book-thumbnail"></div>
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
										</div>
									</div> <!-- end of Item 1 -->

									<div class="col-md-2">
										<div class="book-item">
											<a href="#">
												<div class="book-visual">
													<div class="book-thumb">
														<div class="book-img"><img src="img/thumb/books/see_how_small-scott_blockwood.jpg" alt="See how small - Scott Blockwood" class="book-thumbnail"></div>
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
										</div>
									</div> <!-- end of Item 1 -->
								</div>
							</div>
						</div>
					</div>
					<!-- end of similar bought -->

					<!-- <hr class="divider"> -->

					<!-- Customer Review -->
					<div class="row customer-review-wrapper marginbottom-20">
						<div class="customer-review-header">
							<h4 class="review-title">Customer Reviews</h4>
						</div>
						<div class="customer-review">
							<div class="row">
								<div class="col-md-6 col-lg-6">
									<div class="top-review-wrapper">
										<p>Top reviews</p>
										<div class="bubble-wrapper">
											<div class="review-quote-bubble">
												<div class="review-inner">
													<span class="review">This is a very well written book, it's really technical, but the way it is made makes it look easy to understand and to follow.</span>
												</div>
											</div>
											<div class="review-qoute-bubble-arrow"></div>
											<a href="" class="review-qoute-author">Duc Cuong</a>
										</div>
										<div class="bubble-wrapper right">
											<div class="review-quote-bubble">
												<div class="review-inner">
													<span class="review">This is a very well written book, it's really technical, but the way it is made makes it look easy to understand and to follow.</span>
												</div>
											</div>
											<div class="review-qoute-bubble-arrow"></div>
											<a href="" class="review-qoute-author">Duc Cuong</a>
										</div>
									</div>

								</div>
								<div class="col-md-6 col-lg-6">
									<div class="rating-wrapper">
										<div class="overall-rating">
											sdfsa
										</div>
										<div class="detail-ratings">
											asfsdf
										</div>
									</div>
								</div>
							</div>
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

		<script src="fp/js/min/modernizr-custom-v2.7.1.min.js"></script>
		<script src="fp/js/min/hammer-v2.0.3.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<!-- Image Slider FP -->
		<script src="fp/js/min/flickerplate.min.js"></script>
		<script src="js/slider.js"></script>
		<script src="js/bookstore.js"></script>
	</body>
</html>