<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>RENTAL MOBIL</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Classic Style Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="<?php echo base_url(); ?>/assets/web/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url(); ?>/assets/web/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="<?php echo base_url(); ?>/assets/web/js/jquery.min.js"></script>
<!-- //js -->
<!-- cart -->
<script src="<?php echo base_url(); ?>/assets/web/js/simpleCart.min.js"></script>
<!-- cart -->
<!-- for bootstrap working -->
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/web/js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<!-- animation-effect -->
<link href="<?php echo base_url(); ?>/assets/web/css/animate.min.css" rel="stylesheet"> 
<script src="<?php echo base_url(); ?>/assets/web/js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->
<link href='//fonts.googleapis.com/css?family=Cabin:400,500,600,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>
</head>
	
<body>
<!-- header -->
	<div class="header">
			<div class="header-grid">
					<div class="container">
				<div class="header-left animated wow fadeInLeft" data-wow-delay=".5s">
					<ul>
					<li><i class="glyphicon glyphicon-headphones"></i><a href="#">24x7 live support</a></li>
						<li><i class="glyphicon glyphicon-envelope" ></i><a href="mailto:farihfadli44@gmail.com">rental.mobil@gmail.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" ></i>+62 822 348 932 84</li>
						
					</ul>
				</div>
				<div class="header-right animated wow fadeInRight" data-wow-delay=".5s">
				
				<div class="header-right2">
					<div class="cart box_1">

						<div class="clearfix"> </div>
					</div>	
				</div>
				<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
			</div>
			<div class="container">
			<div class="logo-nav">
				
					<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header nav_2">
						<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						 <div class="navbar-brand logo-nav-left wow fadeInLeft animated" data-wow-delay=".5s">
							<h1 class="animated wow pulse" data-wow-delay=".5s"><a href="index.html">RENTAL<span>MOBIL</span></a></h1>
						</div>

					</div> 
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav">
							<li ><a href="<?php echo base_url().'MyController/index1'?>" class="act">Home</a></li>	
							<!-- Mega Menu -->
							<li class="dropdown active">
								<a href="<?php echo base_url().'MyController/prod'?>" class="dropdown-toggle" data-toggle="dropdown">List Kendaraan <b class="caret"></b></a>
								<ul class="dropdown-menu multi">
									<div class="row">
										<div class="col-sm-4">
											
												
											<?php foreach ($data as $x) { ?>
											<li><a href="<?php echo base_url().'MyController/getDetail/'.$x['idKendaraan']?>"> <?= $x['namaKendaraan'] ?> </a> </li>
											<?php } ?>
											<br></br>
											<li><a href="<?php echo base_url().'MyController/prod'?>">SEE ALL</a></li>
												
										<div class="clearfix"></div>
									</div>
									<div class="row-top">

										<div class="clearfix"></div>
									</div>
								</ul>
							</li>
							
							
							<li><a href="<?php echo base_url().'MyController/order'?>">Book Form</a></li>
							<li><a href="<?php echo base_url().'MyController/contact'?>">Contact Us</a></li>
							<li><a href="<?php echo base_url().'MyController/adminin'?>">Login</a></li>
						</ul>
					</div>
					</nav>
				</div>
				
		</div>
	</div>
<!-- //header -->


<!-- banner -->
	<div class="banner">
	
	
	<div class="banner-right">
					<ul id="flexiselDemo2">			
						<li><div class="banner-grid">
						<h2>Featured Products</h2>
						<div class="wome">
								<a href="<?php echo base_url().'MyController/getDetail/'.$x['idKendaraan']?>" ><img class="img-responsive" src="<?php echo base_url(); ?>/assets/web/images/prod3.jpg" alt="" />
								</a>
								<div class="women simpleCart_shelfItem">
									
									<h6 ><a href="<?php echo base_url().'MyController/getDetail/'.$x['idKendaraan']?>"><?php echo $data[2]['namaKendaraan']?></a></h6>
									<p class="ba-price"><em class="item_price">Rp.<?php echo $data[2]['hargaSewa']?></em></p>
									<a href="<?php echo base_url().'MyController/order'?>" data-text="Book Now" class="but-hover1 item_add">Book Now</a>
								</div>							
								</div>							
							</div></li>
						<li><div class="banner-grid">
						<h2>Featured Products</h2>
						<div class="wome">
								<a href="<?php echo base_url().'MyController/getDetail/'.$x['idKendaraan']?>" ><img class="img-responsive" src="<?php echo base_url(); ?>/assets/web/images/prod4.jpg" alt="" />
								</a>	
								<div class="women simpleCart_shelfItem">
									
									<h6 ><a href="<?php echo base_url().'MyController/getDetail/'.$x['idKendaraan']?>"><?php echo $data[3]['namaKendaraan']?></a></h6>
									<p class="ba-price"><em class="item_price">Rp.<?php echo $data[3]['hargaSewa']?></em></p>
									<a href="<?php echo base_url().'MyController/order'?>" data-text="Book Now" class="but-hover1 item_add">Book Now</a>
								</div>						
								</div>						
							</div></li>
						<li><div class="banner-grid">
						<h2>Featured Products</h2>
						<div class="wome">
								<a href="<?php echo base_url().'MyController/getDetail/'.$x['idKendaraan']?>" ><img class="img-responsive" src="<?php echo base_url(); ?>/assets/web/images/prod8.jpg" alt="" />
								</a>	
								<div class="women simpleCart_shelfItem">
									
									<h6 ><a href="<?php echo base_url().'MyController/getDetail/'.$x['idKendaraan']?>"><?php echo $data[7]['namaKendaraan']?></a></h6>
									<p class="ba-price"><em class="item_price">Rp.<?php echo $data[7]['hargaSewa']?></em></p>
									<a href="<?php echo base_url().'MyController/order'?>" data-text="Book Now" class="but-hover1 item_add">Book Now</a>
								</div>						
								</div>						
							</div></li>
						
					
					</ul>
					<script type="text/javascript">
		$(window).load(function() {
			$("#flexiselDemo2").flexisel({
				visibleItems: 1,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 5000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 1
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 1
		    		}
		    	}
		    });
		    
		});
	</script>
		<script type="text/javascript" src="<?php echo base_url(); ?>/assets/web/js/jquery.flexisel.js"></script>

					</div>

				
				</div>

	</div>
<!-- //banner -->
<!--content-->
		<div class="content">
		<div class="content-head">
					
					<div class="col-md-6 col-m1 animated wow fadeInLeft" data-wow-delay=".1s">
						<div class="col-1">
						<div class="col-md-6 col-2">
							<a href="<?php echo base_url().'MyController/prod'?>"><img src="<?php echo base_url(); ?>/assets/web/images/car2.jpeg" class="img-responsive" alt="">
							</a></div>
							<div class="col-md-6 col-p">
								<h5>The One and Only</h5>
								<p>Rental Mobil Online Satu-Satunya di Surabaya</p>
								<a href="<?php echo base_url().'MyController/prod'?>" class="shop" data-hover="Book Now">Book Now</a>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="col-1">
						<div class="col-md-6 col-p">
								<h5>Easy to Access</h5>
								<p>Mudah Diakses Kapan Saja dan Dimana Saja</p>
								<a href="<?php echo base_url().'MyController/prod'?>" class="shop" data-hover="Book Now">Book Now</a>
							</div>
						<div class="col-md-6 col-2">
							<a href="<?php echo base_url().'MyController/prod'?>"><img src="<?php echo base_url(); ?>/assets/web/images/car3.jpeg" class="img-responsive" alt="">
							</a></div>
							<div class="clearfix"> </div>
						</div>
						</div>
					
					<div class="col-md-6 col-m2 animated wow fadeInRight" data-wow-delay=".1s">
					
						<!---->
						 <!-- requried-jsfiles-for owl -->
							<link href="<?php echo base_url(); ?>/assets/web/css/owl.carousel.css" rel="stylesheet">
							    <script src="<?php echo base_url(); ?>/assets/web/js/owl.carousel.js"></script>
							        <script>
									    $(document).ready(function() {
									      $("#owl-demo").owlCarousel({
									        items : 2,
									        lazyLoad : false,
									        autoPlay : true,
									        navigation : true,
									        navigationText :  true,
									        pagination : false,
									      });
									    });
									  </script>
							 <!-- //requried-jsfiles-for owl -->
							 <!-- start content_slider -->
						       <div id="owl-demo" class="owl-carousel">
					                <div class="item">					                	 
										  
											<a href="<?php echo base_url().'MyController/prod'?>"><img class="img-responsive" src="<?php echo base_url(); ?>/assets/web/images/prod2.jpg" alt="" /></a>  
											<a href="<?php echo base_url().'MyController/prod'?>" class="shop-2" >Book Now</a>
								
					                </div>
									<div class="item">					                	  
										
											<a href="<?php echo base_url().'MyController/prod'?>"><img class="img-responsive" src="<?php echo base_url(); ?>/assets/web/images/prod5.jpg" alt="" /></a>  
											<a href="<?php echo base_url().'MyController/prod'?>" class="shop-2">Book Now</a>									
																		
					                </div>
									
									<div class="item">					                	 
									
											<a href="<?php echo base_url().'MyController/prod'?>"><img class="img-responsive" src="<?php echo base_url(); ?>/assets/web/images/prod3.jpg" alt="" /> </a> 
											<a href="<?php echo base_url().'MyController/prod'?>" class="shop-2">Book Now</a>									
																			
					                </div>
									<div class="item">					                	  
										
											<a href="<?php echo base_url().'MyController/prod'?>"><img class="img-responsive" src="<?php echo base_url(); ?>/assets/web/images/prod6.jpg" alt="" /></a>  
											<a href="<?php echo base_url().'MyController/prod'?>" class="shop-2">Book Now</a>									
																		
					                </div>
							</div>
					   </div>
					   <div class="clearfix"></div>
			</div>	
					</div>
				
			<!---->
			
				
				<!----->
				<!---->
				<div class="content-top">
					

					<div class="col-md-7 col-md2 animated wow fadeInLeft" data-wow-delay=".1s">
						<div class="col-sm-4 item-grid simpleCart_shelfItem">
							<div class="grid-pro">
								<div  class=" grid-product " >
									<figure>		
										<a href="single.html">
											<div class="grid-img">
												<img  src="<?php echo base_url(); ?>/assets/web/images/prod1.jpg" class="img-responsive" alt="">
											</div>
											<div class="grid-img">
												<img  src="<?php echo base_url(); ?>/assets/web/images/prod1.jpg" class="img-responsive"  alt="">
											</div>			
										</a>		
									</figure>	
								</div>
								<div class="women">
									
									<h6><a href="single.html"> <?php echo $data[0]['namaKendaraan']?></a></h6>
									<p ><em class="item_price">Rp.<?php echo $data[0]['hargaSewa']?></em></p>
									<a href="<?php echo base_url().'MyController/order'?>" data-text="Book Now" class="but-hover1 item_add">Book Now</a>
								</div>
							</div>
							
						</div>
				
						<div class="col-sm-4 item-grid simpleCart_shelfItem">
							<div class="grid-pro">
								<div  class=" grid-product " >
									<figure>		
										<a href="single.html">
											<div class="grid-img">
												<img  src="<?php echo base_url(); ?>/assets/web/images/prod5.jpg" class="img-responsive" alt="">
											</div>
											<div class="grid-img">
												<img  src="<?php echo base_url(); ?>/assets/web/images/prod5.jpg" class="img-responsive"  alt="">
											</div>			
										</a>		
									</figure>	
								</div>
								<div class="women">
									
									<h6><a href="single.html"><?php echo $data[4]['namaKendaraan']?></a></h6>
									<p ><em class="item_price">Rp.<?php echo $data[4]['hargaSewa']?></em></p>
									<a href="<?php echo base_url().'MyController/order'?>" data-text="Book Now" class="but-hover1 item_add">Book Now</a>
								</div>
							</div>
						</div>
						<div class="col-sm-4 item-grid simpleCart_shelfItem">
						<div class="grid-pro">
								<div  class=" grid-product " >
									<figure>		
										<a href="single.html">
											<div class="grid-img">
												<img  src="<?php echo base_url(); ?>/assets/web/images/prod7.jpg" class="img-responsive" alt="">
											</div>
											<div class="grid-img">
												<img  src="<?php echo base_url(); ?>/assets/web/images/prod7.jpg" class="img-responsive"  alt="">
											</div>			
										</a>		
									</figure>	
								</div>
								<div class="women">
									
									<h6><a href="single.html"><?php echo $data[6]['namaKendaraan']?></a></h6>
									<p ><em class="item_price">Rp.<?php echo $data[6]['hargaSewa']?></em></p>
									<a href="<?php echo base_url().'MyController/order'?>" data-text="Book Now" class="but-hover1 item_add">Book Now</a>
								</div>
							</div>
						</div>
					<div class="clearfix"></div>
					</div>
					<div class="col-md-5 col-md1 animated wow fadeInRight" data-wow-delay=".1s">
						<div class="col-3">
							<a href="<?php echo base_url().'MyController/prod'?>"><img src="<?php echo base_url(); ?>/assets/web/images/9.jpg" class="img-responsive " alt="">
							<div class="col-pic">
								<h5>Book Now</h5>
								<p>Klik Disini untuk Pemesanan Penyewaan Kendaraan</p>
							</div></a>
						</div>
						
					</div>
					<div class="clearfix"></div>
				</div>
			
			
				<!--products-->


<!-- footer -->
	<div class="footer">
		<div class="container">
		<div class="footer-top">
		<div class="col-md-9 footer-top1">
		<h4>Any QUESTION ?</h4>
		<p>If you still confused about our products, feel free to ask it to us !</p>
		</div>
		<div class="col-md-3 footer-top2">
		<a href="<?php echo base_url().'MyController/contact'?>">Contact Us</a>
		</div>
		<div class="clearfix"> </div>
		</div>
			<div class="footer-grids">
				<div class="col-md-4 footer-grid animated wow fadeInLeft" data-wow-delay=".5s">
					<h3>About Us</h3>
					<p>Hi ! kami adalah rental mobil pertama dan satu-satunya di Surabaya yang menyediakan layanan rental mobil secara online.<span> .</span></p>
				</div>
				<div class="col-md-4 footer-grid animated wow fadeInLeft" data-wow-delay=".6s">
					<h3>Contact Info</h3>
					<ul>
						<li><i class="glyphicon glyphicon-map-marker" ></i>Gedung Jurusan Sistem Informasi, Kampus ITS<span>Sukolilo, Surabaya, Indonesia.</span></li>
						<li class="foot-mid"><i class="glyphicon glyphicon-envelope" ></i><a href="mailto:farihfadli44@gmail.com">rental.mobil@gmail.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" ></i>+62 822 348 932 84</li>
					</ul>
				</div>
				
			
			<div class="copy-right animated wow fadeInUp" data-wow-delay=".5s">
				<p>&copy 2017 Pelo Apparel. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
			</div>
		</div>
	</div>
<!-- //footer -->
</body>
</html>