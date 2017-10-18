<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Contact us</title>
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
								<a href="<?php echo base_url().'MyController/prod'?>" class="dropdown-toggle" data-toggle="dropdown">List Kendaraan<b class="caret"></b></a>
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
							
							
							<li><a href="<?php echo base_url().'MyController/order'?>"> Order Form</a></li>
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
		<h2 class="animated wow fadeInLeft" data-wow-delay=".5s">Contact Us</h2>
		<h3 class="animated wow fadeInRight" data-wow-delay=".5s"><a href="<?php echo base_url().'MyController/index1'?>">Home</a><label>/</label>Contact Us</h3>
		<div class="clearfix"> </div>
	</div>
</div>
<!-- contact -->
	<div class="contact">
		<div class="container">
		
			
			<div class="col-md-8 contact-grids1 animated wow fadeInRight" data-wow-delay=".5s">
			<?php echo form_open_multipart(base_url('MyController/contactUs')); ?>
				<form>
						<div class="contact-form2">
							<h4>Name</h4>
							
								<input type="text" name="nama" placeholder="" required="">
							
						</div>
				
						<div class="contact-form2">
							<h4>Email</h4>
						
								<input type="email" name="email"  placeholder="" required="">
						
						</div>
						<div class="contact-form2">
							<h4>Subject</h4>
						
								<input type="text" name="judul"  placeholder="" required="">
						
						</div>
					
			
				<div class="contact-me ">
					<h4>Message</h4>
				
						<textarea type="text" name="isi"  placeholder="" required=""> </textarea>
						</div>
						<input type="submit" value="Submit" >
				</form>
				
			</div>
			
			<div class="col-md-4 contact-grids">
				<div class=" contact-grid animated wow fadeInLeft" data-wow-delay=".5s">
					<div class="contact-grid1">
						<div class="contact-grid2 ">
							<i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>
						</div>
						<div class="contact-grid3">
							<h4>Address</h4>
							<p>Gedung Jurusan Sistem Informasi, Kampus ITS<span>Sukolilo, Surabaya, Indonesia.</span></p>
						</div>
					</div>
				</div>
				<div class=" contact-grid animated wow fadeInUp" data-wow-delay=".5s">
					<div class="contact-grid1">
						<div class="contact-grid2 contact-grid4">
							<i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>
						</div>
						<div class="contact-grid3">
							<h4>Call Us</h4>
							<p>+62 822 348 932 84</p>
						</div>
					</div>
				</div>
				<div class=" contact-grid animated wow fadeInRight" data-wow-delay=".5s">
					<div class="contact-grid1">
						<div class="contact-grid2 contact-grid5">
							<i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>
						</div>
						<div class="contact-grid3">
							<h4>Email</h4>
							<p><a href="contactto:farihfadli44@gmail.com">rental.mobil@gmail.com</a></p>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>

<!-- //contact -->


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