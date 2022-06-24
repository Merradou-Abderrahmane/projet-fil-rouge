
<?php
require_once __DIR__ . '/../manager/artisanManager.php';
$artisanManager = new ArtisanManager();
$data = $artisanManager->displayCategory();
?>

<!DOCTYPE html>
<html lang="zxx">
	
<!-- Mirrored from codeminifier.com/reveal-live-2/reveal/home-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Jun 2022 09:52:09 GMT -->
<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
        <title>Reveal - Business Listing & Directory HTML Template</title>
		
        <!-- All Plugins Css -->
        <link rel="stylesheet" href="assets/css/plugins.css">
		 
		
        <!-- Custom CSS -->
        <link href="assets/css/styles.css" rel="stylesheet">
		
		<!-- Custom Color Option -->
		<link href="assets/css/colors.css" rel="stylesheet">
		
    </head>
	
    <body class="red-skin">
	
		 <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
    
		
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
		
            <!-- ============================================================== -->
            <!-- Top header  -->
            <!-- ============================================================== -->
            <!-- Start Navigation -->
			<div class="header header-light">
				<div class="container">
					<nav id="navigation" class="navigation navigation-landscape">
						<div class="nav-header">
							<a class="nav-brand" href="#">
								<img src="assets/img/logo.png" class="logo" alt="" />
							</a>
							<div class="nav-toggle"></div>
						</div>
						<div class="nav-menus-wrapper">
							<ul class="nav-menu">
							
								<li class="active"><a href="javascript:void(0);">Home<span class="submenu-indicator"></span></a>

								</li>
								
								<li><a href="javascript:void(0);">Explore<span class="submenu-indicator"></span></a>

								</li>
								
								<li><a href="javascript:void(0);">Listings<span class="submenu-indicator"></span></a>

										

								</li>
								
								<li><a href="javascript:void(0);">Pages<span class="submenu-indicator"></span></a>

								</li>
								
								<li><a href="contact.html">Contacts</a></li>
								
							</ul>
							
							<ul class="nav-menu nav-menu-social align-to-right">
								
								<li>
									<a href="javascript:void(0);" data-toggle="modal" data-target="#login">
										<i class="fa fa-sign-in-alt mr-1"></i><span class="dn-lg">Sign In</span>
									</a>
								</li>

							</ul>
						</div>
					</nav>
				</div>
			</div>
			<!-- End Navigation -->
			<div class="clearfix"></div>
			<!-- ============================================================== -->
			<!-- Top header  -->
			<!-- ============================================================== -->
			
			
			<!-- ============================ Hero Banner  Start================================== -->
			<div class="image-bottom hero-banner" style="background:#d80649 url(assets/img/banner.png) no-repeat;" data-overlay="0">
				<div class="container">
					<div class="row justify-content-center text-center">
						<div class="col-lg-9 col-md-12">
							<p class="lead-i m-0">Find Your Dream Places</p>
							<h1 class="big-header-capt capti">Discover Your Places</h1>
							<div class="full-search-2 Reveal-search Reveal-search-radius box-style">
								<div class="Reveal-search-content">
									
									<div class="row">
									
										<div class="col-lg-5 col-md-5 col-sm-12 br-left-p">
											<div class="form-group">
												<div class="input-with-icon">
													<input type="text" class="form-control" placeholder="Keywords...">
													<i class="ti-search"></i>
												</div>
											</div>
										</div>
										
										<div class="col-lg-4 col-md-4 col-sm-6">
											<div class="form-group">
												<div class="input-with-icon">
													<select id="list-category" class="form-control">
														<option value="">&nbsp;</option>
														<option value="1">Spa & Bars</option>
														<option value="2">Restaurants</option>
														<option value="3">Hotels</option>
														<option value="4">Educations</option>
														<option value="5">Business</option>
														<option value="6">Retail & Shops</option>
														<option value="7">Garage & Services</option>
													</select>
													<i class="ti-briefcase"></i>
												</div>
											</div>
										</div>
										
										<div class="col-lg-3 col-md-3 col-sm-12">
											<div class="form-group">
												<a href="#" class="btn search-btn btn-black">Find Now</a>
											</div>
										</div>
										
									</div>
									
								</div>
								
							</div>
							<div class="popular-cat-list">
								<ul>
									<li><a href="grid-with-sidebar.html">Hotel & Spa</a></li>
									<li><a href="grid-with-sidebar.html">Education</a></li>
									<li><a href="grid-with-sidebar.html">Shopping</a></li>
									<li><a href="grid-with-sidebar.html">Restaurants</a></li>
								</ul>	
							</div>
						
						</div>
					</div>
				</div>
			</div>
			<!-- ============================ Hero Banner End ================================== -->
			
			<!-- ================= Air BNB Category ================= -->
			<section>
				<div class="container">
				
					<!-- Row -->
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="sec-heading center">
								<h2>Categories</h2>
								<h3>Explore Top <span class="theme-cl">Categories</span></h3>
							</div>
						</div>
					</div>
					<!-- Row -->
					
					<div class="row">
						
						<div class="owl-carousel owl-theme" id="ab-categorie-slide">
							
							<!-- Single Category -->

							<?php foreach($data as $value){ 

								?>


							<div class="Reveal-cats-box">
								<article class="Reveal-arbnb-box style-1">
							
									<!-- Single arbnb -->
									<div class="Reveal-Reveal-arbnb-box-image">
										<figure>
											<a href="stays.php?id=<?php echo $value->getId() ;?>">
												<img src="assets/img/<?php echo $value->getPhoto() ;?>" class="img-responsive Reveal-listing-box-img" alt="">
											</a>
										</figure>
									</div>

									<div class="Reveal-inner-box">
										<div class="Reveal-box-inner-ellipsis">
											<h4 class="entry-title">
												<a href="stays.html"><?php echo $value->getCategory() ;?>  </a>
											</h4>
										</div>
									</div>
				
								</article>	
							</div>
							<?php  } ?>
						
							
							<!-- Single Category -->
							
							<!-- Single Category -->
						
							
						</div>
						
					</div>
					
				</div>		
			</section>
			<!-- ================= Air BNB Category ================= -->
			
			<!-- ================= Explore Places ================= -->
			<section class="gray">
				<div class="container">
				
					<!-- Row -->
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="sec-heading center">
								<h2>Featured</h2>
								<h3>Top Rated <span class="theme-cl">Places</span></h3>
							</div>
						</div>
					</div>
					<!-- Row -->
					
					<div class="row">
						
						<div class="col-lg-4 col-md-6 col-sm-6 col-12">
							<div class="Reveal-grid-item classical-list">
								<div class="image">
									<a href="listing-detail.html" class="Reveal-featured-listing-thumb">
										<img src="assets/img/l-1.jpg" alt="latest property" class="img-responsive">
									</a>
									<div class="Reveal-listing-price-info"> 
										<span class="pricetag">$25 - $65</span>
									</div>
									<a href="#" class="tag_t"><i class="ti-heart"></i>Save</a>								
								</div>
								
								<div class="proerty_content">
									<div class="author-avater">
										<img src="assets/img/user-1.png" class="author-avater-img" alt="">
									</div>
									<div class="list-rates">
										<i class="fa fa-star filled"></i>	
										<i class="fa fa-star filled"></i>	
										<i class="fa fa-star filled"></i>	
										<i class="fa fa-star filled"></i>	
										<i class="fa fa-star"></i>	
									</div>
									<div class="proerty_text">
									  <h3 class="captlize"><a href="listing-detail.html">Zicom Gym House</a></h3>
									</div>
									<p class="property_add">Awesome Gym Center in The USA</p>
									<div class="property_meta"> 
									  <div class="list-fx-features">
											<div class="listing-card-info-icon">
												<span class="inc-fleat inc-add">302 mailburn, Canada</span>
											</div>
											<div class="listing-card-info-icon">
												<span class="inc-fleat inc-call">+91 2356 548 958</span>
											</div>
										</div>  
									</div>
								</div>
								
								<div class="Reveal-listing-footer-info">
									<div class="listing-cat">
										<a href="search-listing.html" class="cat-icon cl-1"><i class="ti-hummer cbg-1"></i>Gym Trainer</a>
										<span class="more-cat">+3</span>
									</div>
									<div class="m-listing-status">
										<span class="l-status l-open">Open</span>
									</div>
								</div>
								
							</div>
						</div>
						
						<div class="col-lg-4 col-md-6 col-sm-6 col-12">
							<div class="Reveal-grid-item classical-list">
								<span class="Reveal-featured-liting-box"><span class="fst">Featured</span></span>
								<div class="image">
									<a href="listing-detail.html" class="Reveal-featured-listing-thumb">
										<img src="assets/img/l-2.jpg" alt="latest property" class="img-responsive">
									</a>
									<div class="Reveal-listing-price-info"> 
										<span class="pricetag">$30 - $60</span>
									</div>
									<a href="#" class="tag_t"><i class="ti-heart"></i>Save</a>								
								</div>
								
								<div class="proerty_content">
									<div class="author-avater">
										<img src="assets/img/user-2.png" class="author-avater-img" alt="">
									</div>
									<div class="list-rates">
										<i class="fa fa-star filled"></i>	
										<i class="fa fa-star filled"></i>	
										<i class="fa fa-star filled"></i>	
										<i class="fa fa-star filled"></i>	
										<i class="fa fa-star"></i>	
									</div>
									<div class="proerty_text">
									  <h3 class="captlize"><a href="listing-detail.html">Green Rewoke Villa</a></h3>
									</div>
									<p class="property_add">Luxury Villa House in Your City</p>
									<div class="property_meta"> 
									  <div class="list-fx-features">
											<div class="listing-card-info-icon">
												<span class="inc-fleat inc-add">504 Vikraz, London</span>
											</div>
											<div class="listing-card-info-icon">
												<span class="inc-fleat inc-call">+91 2356 548 958</span>
											</div>
										</div>  
									</div>
								</div>
								
								<div class="Reveal-listing-footer-info">
									<div class="listing-cat">
										<a href="search-listing.html" class="cat-icon cl-1"><i class="ti-home cbg-2"></i>Family Home</a>
										<span class="more-cat">+3</span>
									</div>
									<div class="m-listing-status">
										<span class="l-status l-close">Close</span>
									</div>
								</div>
								
							</div>
						</div>
						
						<div class="col-lg-4 col-md-6 col-sm-6 col-12">
							<div class="Reveal-grid-item classical-list">
								<div class="image">
									<a href="listing-detail.html" class="Reveal-featured-listing-thumb">
										<img src="assets/img/l-3.jpg" alt="latest property" class="img-responsive">
									</a>
									<div class="Reveal-listing-price-info"> 
										<span class="pricetag">$125 - $170</span>
									</div>
									<a href="#" class="tag_t"><i class="ti-heart"></i>Save</a>								
								</div>
								
								<div class="proerty_content">
									<div class="author-avater">
										<img src="assets/img/user-3.png" class="author-avater-img" alt="">
									</div>
									<div class="list-rates">
										<i class="fa fa-star filled"></i>	
										<i class="fa fa-star filled"></i>	
										<i class="fa fa-star filled"></i>	
										<i class="fa fa-star filled"></i>	
										<i class="fa fa-star"></i>	
									</div>
									<div class="proerty_text">
									  <h3 class="captlize"><a href="listing-detail.html">Castle Nue Palace</a></h3>
									</div>
									<p class="property_add">one of The Best Marriage Palace</p>
									<div class="property_meta"> 
									  <div class="list-fx-features">
											<div class="listing-card-info-icon">
												<span class="inc-fleat inc-add">46 Annfield, Canada</span>
											</div>
											<div class="listing-card-info-icon">
												<span class="inc-fleat inc-call">+91 2356 548 958</span>
											</div>
										</div>  
									</div>
								</div>
								
								<div class="Reveal-listing-footer-info">
									<div class="listing-cat">
										<a href="search-listing.html" class="cat-icon cl-1"><i class="ti-archive cbg-3"></i>Hotel</a>
										<span class="more-cat">+3</span>
									</div>
									<div class="m-listing-status">
										<span class="l-status l-open">Open</span>
									</div>
								</div>
								
							</div>
						</div>
						
						<div class="col-lg-4 col-md-6 col-sm-6 col-12">
							<div class="Reveal-grid-item classical-list">
								<span class="Reveal-featured-liting-box"><span class="fst">Featured</span></span>
								<div class="image">
									<a href="listing-detail.html" class="Reveal-featured-listing-thumb">
										<img src="assets/img/l-4.jpg" alt="latest property" class="img-responsive">
									</a>
									<div class="Reveal-listing-price-info"> 
										<span class="pricetag">$55 - $100</span>
									</div>
									<a href="#" class="tag_t"><i class="ti-heart"></i>Save</a>								
								</div>
								
								<div class="proerty_content">
									<div class="author-avater">
										<img src="assets/img/user-4.png" class="author-avater-img" alt="">
									</div>
									<div class="list-rates">
										<i class="fa fa-star filled"></i>	
										<i class="fa fa-star filled"></i>	
										<i class="fa fa-star filled"></i>	
										<i class="fa fa-star filled"></i>	
										<i class="fa fa-star"></i>	
									</div>
									<div class="proerty_text">
									  <h3 class="captlize"><a href="listing-detail.html">Sangam Raj Studio</a></h3>
									</div>
									<p class="property_add">Make Smart Data offices</p>
									<div class="property_meta"> 
									  <div class="list-fx-features">
											<div class="listing-card-info-icon">
												<span class="inc-fleat inc-add">27 Horsefair Green, CA</span>
											</div>
											<div class="listing-card-info-icon">
												<span class="inc-fleat inc-call">+91 2356 548 958</span>
											</div>
										</div>  
									</div>
								</div>
								
								<div class="Reveal-listing-footer-info">
									<div class="listing-cat">
										<a href="search-listing.html" class="cat-icon cl-1"><i class="ti-briefcase cbg-4"></i>Office</a>
										<span class="more-cat">+3</span>
									</div>
									<div class="m-listing-status">
										<span class="l-status l-close">Close</span>
									</div>
								</div>
								
							</div>
						</div>
						
						<div class="col-lg-4 col-md-6 col-sm-6 col-12">
							<div class="Reveal-grid-item classical-list">
								<div class="image">
									<a href="listing-detail.html" class="Reveal-featured-listing-thumb">
										<img src="assets/img/l-8.jpg" alt="latest property" class="img-responsive">
									</a>
									<div class="Reveal-listing-price-info"> 
										<span class="pricetag">$35 - $75</span>
									</div>
									<a href="#" class="tag_t"><i class="ti-heart"></i>Save</a>								
								</div>
								
								<div class="proerty_content">
									<div class="author-avater">
										<img src="assets/img/user-5.png" class="author-avater-img" alt="">
									</div>
									<div class="list-rates">
										<i class="fa fa-star filled"></i>	
										<i class="fa fa-star filled"></i>	
										<i class="fa fa-star filled"></i>	
										<i class="fa fa-star filled"></i>	
										<i class="fa fa-star"></i>	
									</div>
									<div class="proerty_text">
									  <h3 class="captlize"><a href="listing-detail.html">Glass Green Palace</a></h3>
									</div>
									<p class="property_add">Open palace with Your Dream</p>
									<div class="property_meta"> 
									  <div class="list-fx-features">
											<div class="listing-card-info-icon">
												<span class="inc-fleat inc-add">53 Witney Way, USA</span>
											</div>
											<div class="listing-card-info-icon">
												<span class="inc-fleat inc-call">+91 2356 548 958</span>
											</div>
										</div>  
									</div>
								</div>
								
								<div class="Reveal-listing-footer-info">
									<div class="listing-cat">
										<a href="search-listing.html" class="cat-icon cl-1"><i class="ti-home cbg-5"></i>Palace</a>
										<span class="more-cat">+3</span>
									</div>
									<div class="m-listing-status">
										<span class="l-status l-open">Open</span>
									</div>
								</div>
								
							</div>
						</div>
						
						<div class="col-lg-4 col-md-6 col-sm-6 col-12">
							<div class="Reveal-grid-item classical-list">
								<span class="Reveal-featured-liting-box"><span class="fst">Featured</span></span>
								<div class="image">
									<a href="listing-detail.html" class="Reveal-featured-listing-thumb">
										<img src="assets/img/l-6.jpg" alt="latest property" class="img-responsive">
									</a>
									<div class="Reveal-listing-price-info"> 
										<span class="pricetag">$35 - $60</span>
									</div>
									<a href="#" class="tag_t"><i class="ti-heart"></i>Save</a>								
								</div>
								
								<div class="proerty_content">
									<div class="author-avater">
										<img src="assets/img/user-6.png" class="author-avater-img" alt="">
									</div>
									<div class="list-rates">
										<i class="fa fa-star filled"></i>	
										<i class="fa fa-star filled"></i>	
										<i class="fa fa-star filled"></i>	
										<i class="fa fa-star filled"></i>	
										<i class="fa fa-star"></i>	
									</div>
									<div class="proerty_text">
									  <h3 class="captlize"><a href="listing-detail.html">Sheekha Salone Shop</a></h3>
									</div>
									<p class="property_add">New Patcham Salone Services</p>
									<div class="property_meta"> 
									  <div class="list-fx-features">
											<div class="listing-card-info-icon">
												<span class="inc-fleat inc-add">46 Well Lane, Patcham</span>
											</div>
											<div class="listing-card-info-icon">
												<span class="inc-fleat inc-call">+91 2356 548 958</span>
											</div>
										</div>  
									</div>
								</div>
								
								<div class="Reveal-listing-footer-info">
									<div class="listing-cat">
										<a href="search-listing.html" class="cat-icon cl-1"><i class="ti-cut cbg-6"></i>Services</a>
										<span class="more-cat">+3</span>
									</div>
									<div class="m-listing-status">
										<span class="l-status l-close">Close</span>
									</div>
								</div>
								
							</div>
						</div>
						
					</div>
					
					<!-- Row -->
					<div class="row">
						<div class="col-lg-12 col-md-12 text-center">
							<a href="half-map-with-grid2-layout-2.html" class="btn btn-light btn-md rounded">Explore More Listings</a>
						</div>
					</div>
					<!-- Row -->
					
				</div>	
			</section>
			<!-- ================================= Explore Property =============================== -->
			
			<!-- ============================ Step How To Use Start ================================== -->
			<section>
				<div class="container">
					
					<!-- Row -->
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="sec-heading center">
								<h2>Process</h2>
								<h3>How It <span class="theme-cl">Works</span></h3>
							</div>
						</div>
					</div>
					<!-- Row -->
					
					<div class="row">
						<div class="col-lg-4 col-md-4">
							<div class="Reveal-working-step">
								<div class="Reveal-icon-wrap"><div class="Reveal-icon-large-box f-light-success"><i class="ti-map-alt text-success"></i></div></div>
								<div class="Reveal-working-box-caption">
									<h4>Find Interesting Place</h4>
									<p>There are many variations of passages of Lorem Ipsum available, but the majority have Ipsum available.</p>
								</div>
							</div>
						</div>
						
						<div class="col-lg-4 col-md-4">
							<div class="Reveal-working-step">
								<div class="Reveal-icon-wrap"><div class="Reveal-icon-large-box f-light-warning"><i class="ti-user text-warning"></i></div></div>
								<div class="Reveal-working-box-caption">
									<h4>Contact a Few Owners</h4>
									<p>There are many variations of passages of Lorem Ipsum available, but the majority have Ipsum available.</p>
								</div>
							</div>
						</div>
						
						<div class="col-lg-4 col-md-4">
							<div class="Reveal-working-step remove">
								<div class="Reveal-icon-wrap"><div class="Reveal-icon-large-box f-light-blue"><i class="ti-shield text-blue"></i></div></div>
								<div class="Reveal-working-box-caption">
									<h4>Make a Reservation</h4>
									<p>There are many variations of passages of Lorem Ipsum available, but the majority have Ipsum available.</p>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- ============================ Step How To Use End ====================== -->
			
			<!-- ============================ Reviews Start ================================== -->
			<section class="light-bg">
				<div class="container">
					
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="sec-heading center">
								<h2>Reviews</h2>
								<h3>What People <span class="theme-cl">Saying</span></h3>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="owl-carousel owl-theme" id="reviews-slide">
							
								<!-- Single Review -->
								<div class="item">
									<div class="smart-testimonials">
										<div class="smart-testi-thumb">
											<img src="assets/img/r-1.jpg" class="img-fluid" alt="" />
											<span class="cipt bg-success"><i class="fas fa-quote-left"></i></i></span>
										</div>
										<div class="smart-testimonials-content">
											<div class="Reveal-smart-tes-content">
												<p>At vero eos et accusamus et iusto odiopri dignissimos ducimus qui expedita distinctio praesentium voluptatum.</p>
											</div>
											<div class="Reveal-st-author-info">
												<h4 class="Reveal-st-author-title">Adam Gilkrist</h4>
												<span class="Reveal-st-author-subtitle theme-cl">CEO & Founder</span>
											</div>
										</div>
									</div>
								</div>
								
								<!-- Single Review -->
								<div class="item">
									<div class="smart-testimonials">
										<div class="smart-testi-thumb">
											<img src="assets/img/r-2.jpg" class="img-fluid" alt="" />
											<span class="cipt bg-purple"><i class="fas fa-quote-left"></i></i></span>
										</div>
										<div class="smart-testimonials-content">
											<div class="Reveal-smart-tes-content">
												<p>At vero eos et accusamus et iusto odiopri dignissimos ducimus qui expedita distinctio praesentium voluptatum.</p>
											</div>
											<div class="Reveal-st-author-info">
												<h4 class="Reveal-st-author-title">Lilly Wikdoner</h4>
												<span class="Reveal-st-author-subtitle theme-cl">Content Writer</span>
											</div>
										</div>
									</div>
								</div>
								
								<!-- Single Review -->
								<div class="item">
									<div class="smart-testimonials">
										<div class="smart-testi-thumb">
											<img src="assets/img/r-3.jpg" class="img-fluid" alt="" />
											<span class="cipt bg-danger"><i class="fas fa-quote-left"></i></i></span>
										</div>
										<div class="smart-testimonials-content">
											<div class="Reveal-smart-tes-content">
												<p>At vero eos et accusamus et iusto odiopri dignissimos ducimus qui expedita distinctio praesentium voluptatum.</p>
											</div>
											<div class="Reveal-st-author-info">
												<h4 class="Reveal-st-author-title">Subhas Rajpoot</h4>
												<span class="Reveal-st-author-subtitle theme-cl">Team Leader</span>
											</div>
										</div>
									</div>
								</div>
								
								<!-- Single Review -->
								<div class="item">
									<div class="smart-testimonials">
										<div class="smart-testi-thumb">
											<img src="assets/img/r-4.jpg" class="img-fluid" alt="" />
											<span class="cipt bg-primary"><i class="fas fa-quote-left"></i></i></span>
										</div>
										<div class="smart-testimonials-content">
											<div class="Reveal-smart-tes-content">
												<p>At vero eos et accusamus et iusto odiopri dignissimos ducimus qui expedita distinctio praesentium voluptatum.</p>
											</div>
											<div class="Reveal-st-author-info">
												<h4 class="Reveal-st-author-title">Pooja Mithali</h4>
												<span class="Reveal-st-author-subtitle theme-cl">Graphic Designer</span>
											</div>
										</div>
									</div>
								</div>
							
							</div>
						</div>
					</div>
					
				</div>
			</section>
			<!-- ============================ Reviews End ================================== -->
			
			<!-- ============================ Step How To Use Start ================================== -->

			<div class="clearfix"></div>
			<!-- ============================ Step How To Use End ====================== -->
			
			<!-- ============================ Call To Action Start ================================== -->
			<!-- ============================ Call To Action End ================================== -->
			
			<!-- ============================ Footer Start ================================== -->
			<footer class="dark-footer skin-dark-footer">
				<div>
					<div class="container">
						<div class="row">
							
							<div class="col-lg-4 col-md-6">
								<div class="footer-widget">
									<img src="assets/img/logo-light.png" class="img-fluid f-logo" alt="" />
									<p>407-472 Rue Saint-Sulpice, Montreal<br>Quebec, H2Y 2V8</p>
									<ul class="footer-bottom-social">
										<li><a href="#"><i class="ti-facebook"></i></a></li>
										<li><a href="#"><i class="ti-twitter"></i></a></li>
										<li><a href="#"><i class="ti-instagram"></i></a></li>
										<li><a href="#"><i class="ti-linkedin"></i></a></li>
									</ul>
								</div>
							</div>		
							<div class="col-lg-2 col-md-4">
								<div class="footer-widget">
									<h4 class="widget-title">Useful links</h4>
									<ul class="footer-menu">
										<li><a href="about-us.html">About Us</a></li>
										<li><a href="faq.html">FAQs Page</a></li>
										<li><a href="checkout.html">Checkout</a></li>
										<li><a href="login.html">Login</a></li>
									</ul>
								</div>
							</div>
							
							<div class="col-lg-2 col-md-4">
								<div class="footer-widget">
									<h4 class="widget-title">Developers</h4>
									<ul class="footer-menu">
										<li><a href="booking.html">Booking</a></li>
										<li><a href="stays.html">Stays</a></li>
										<li><a href="adventures.html">Adventures</a></li>
										<li><a href="author-detail.html">Author Detail</a></li>
									</ul>
								</div>
							</div>
							
							<div class="col-lg-2 col-md-4">
								<div class="footer-widget">
									<h4 class="widget-title">Useful links</h4>
									<ul class="footer-menu">
										<li><a href="about-us.html">About Us</a></li>
										<li><a href="faq.html">Jobs</a></li>
										<li><a href="checkout.html">Events</a></li>
										<li><a href="about-us.html">Press</a></li>
									</ul>
								</div>
							</div>
									
							<div class="col-lg-2 col-md-4">
								<div class="footer-widget">
									<h4 class="widget-title">Useful links</h4>
									<ul class="footer-menu">
										<li><a href="about-us.html">Support</a></li>
										<li><a href="about-us.html">About Us</a></li>
										<li><a href="checkout.html">Privacy & Terms</a></li>
									</ul>
								</div>
							</div>
							
						</div>
					</div>
				</div>
				
				<div class="footer-bottom">
					<div class="container">
						<div class="row align-items-center">
							
							<div class="col-lg-12 col-md-12 text-center">
								<p class="mb-0">© 2021 Reveal. Designd By <a href="https://themezhub.net/">Themezhub</a> All Rights Reserved</p>
							</div>
							
						</div>
					</div>
				</div>
			</footer>
			<!-- ============================ Footer End ================================== -->
			
			<!-- Log In Modal -->
			<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="registermodal">
				<div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
					<div class="modal-content" id="registermodal">
						<span class="mod-close" data-dismiss="modal"><i class="ti-close"></i></span>
						<div class="modal-body">
							<h4 class="modal-header-title">Log <span class="theme-cl">In</span></h4>
							<div class="login-form">
								<form>
								
									<div class="form-group">
										<label>User Name</label>
										<div class="input-with-icon gray">
											<input type="text" class="form-control" placeholder="Username">
											<i class="ti-user"></i>
										</div>
									</div>
									
									<div class="form-group">
										<label>Password</label>
										<div class="input-with-icon gray">
											<input type="password" class="form-control" placeholder="*******">
											<i class="ti-unlock"></i>
										</div>
									</div>
									
									<div class="form-group">
										<button type="submit" class="btn btn-md full-width pop-login">Login</button>
									</div>
								
								</form>
							</div>
							<div class="modal-divider"><span>Or login via</span></div>
							<div class="social-login mb-3">
								<ul>
									<li><a href="#" class="btn fb"><i class="ti-facebook"></i></a></li>
									<li><a href="#" class="btn google"><i class="ti-google"></i></a></li>
									<li><a href="#" class="btn twitter"><i class="ti-twitter"></i></a></li>
								</ul>
							</div>
							<div class="modat-foot">
								<div class="md-left">Have't Account? <a href="register.html" class="theme-cl">Sign Up</a></div>
								<div class="md-right"><a href="#" class="theme-cl">Forget Password?</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Modal -->
			
			<a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>

			

		</div>
		<!-- ============================================================== -->
		<!-- End Wrapper -->
		<!-- ============================================================== -->

		<!-- ============================================================== -->
		<!-- All Jquery -->
		<!-- ============================================================== -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/rangeslider.js"></script>
		<script src="assets/js/select2.min.js"></script>
		<script src="assets/js/owl.carousel.min.js"></script>
		<script src="assets/js/jquery.magnific-popup.min.js"></script>
		<script src="assets/js/slick.js"></script>
		<script src="assets/js/slider-bg.js"></script>
		<script src="assets/js/lightbox.js"></script> 
		<script src="assets/js/imagesloaded.js"></script>
		<script src="assets/js/jquery.counterup.min.js"></script>
		<script src="assets/js/counterup.min.js"></script>
		 
		<script src="assets/js/custom.js"></script>
		<!-- ============================================================== -->
		<!-- This page plugins -->
		<!-- ============================================================== -->

	</body>

<!-- Mirrored from codeminifier.com/reveal-live-2/reveal/home-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Jun 2022 09:52:30 GMT -->
</html>