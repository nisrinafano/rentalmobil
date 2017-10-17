<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Our Products</title>
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
<link href='//fonts.googleapis.com/css?family=Lato:400,100,300,700,900' rel='stylesheet' type='text/css'></head>
	
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
							<h1 class="animated wow pulse" data-wow-delay=".5s"><a href="index.html">Rental<span>Mobil</span></a></h1>
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
<!--banner-->
<div class="banner-top">
	<div class="container">
		<h2 class="animated wow fadeInLeft" data-wow-delay=".5s">Detail Product</h2>
		<h3 class="animated wow fadeInRight" data-wow-delay=".5s"><a href="<?php echo base_url().'MyController/index1'?>">Home</a><label>/</label>Detail Product</h3>
		<div class="clearfix"> </div>
	</div>
</div>
	<!--content-->
		<div class="product">
			<div class="container">
		<div class="col-md-3 product-bottom ">
			<!--categories-->
			<div class="categories animated wow fadeInUp animated" data-wow-delay=".5s" >
					<h3>This Product</h3>
					<ul class="cate">
						
						<?php foreach ($data as $x) { ?>
							<ul>
								
								<li><i class="glyphicon glyphicon-menu-right" ></i><a href="<?php echo base_url().'MyController/getDetail/'.$x['idKendaraan']?>"> <?= $x['namaKendaraan'] ?> </a> </li>
								
					
					</ul>
					<?php } ?>
				</div>
		<!--//menu-->
		<!--price-->
				
			<!--//price-->
			<!--colors-->
									
                                 
			<!--//colors-->
			
				<!---->
 	</div>

 		<?php foreach ($data as $x) { ?>

			<div class="col-md-9 animated wow fadeInRight" data-wow-delay=".5s">
				<div class="col-md-5 grid-im">		
		<div class="flexslider">
			  <ul class="slides">
			    <li data-thumb="images/si.jpg">
			        <div class="thumb-image"> <img src="<?php echo base_url().'upload/'.$x['fotoKendaraan']; ?>" data-imagezoom="true" class="img-responsive"> </div>
			    </li>
			    
			  </ul>
		</div>
	</div>	
<div class="col-md-7 single-top-in">
						<div class="span_2_of_a1 simpleCart_shelfItem">
				<h3><?= $x['namaKendaraan'] ?></h3>
				
			    <div class="price_single">
				  <span class="reducedfrom item_price">Rp. <?= $x['hargaSewa'] ?></span>
				 <a href="<?php echo base_url().'MyController/order'?>" data-text="Order Now" class="but-hover1 item_add">Order Now</a>
				 <div class="clearfix"></div>
				</div>
				
				 
			   
			<div class="clearfix"> </div>
			</div>
		   <!----- tabs-box ---->
		<div class="sap_tabs">	
				     <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
						  		  	 
							<div class="resp-tabs-container">
							    <h2 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-0"><span class="resp-arrow"></span>Product Description</h2><div class="tab-1 resp-tab-content resp-tab-content-active" aria-labelledby="tab_item-0" style="display:block">
									<div class="facts">
									  <p > <h3>Merk Kendaraan : </h3><?= $x['merkKendaraan'] ?> </p>
									  <p > <h3>Nama Kendaraan : </h3><?= $x['namaKendaraan'] ?> </p>	         
							          <p > <h3>Nomor Polisi Kendaraan : </h3><?= $x['nopolKendaraan'] ?> </p>
							        </div>

							    	</div>					        
			 </div>

								</div>									
							      

			<?php } ?>

							 </div>
					      </div>
					 </div>
					 <script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
		    <script type="text/javascript">
			    $(document).ready(function () {
			        $('#horizontalTab').easyResponsiveTabs({
			            type: 'default', //Types: default, vertical, accordion           
			            width: 'auto', //auto or any width like 600px
			            fit: true   // 100% fit in a container
			        });
			    });
			   </script>	
<!---->
					</div>
			
</div>
<!----->
			</div>			
		</div>
				<!--//products-->


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
				<p>&copy 2017 Rental Mobil. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
			</div>
		</div>
	</div>
<!-- //footer -->
</body>
</html>