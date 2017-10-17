<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PELO | Create Katalog</title>

<link href="<?php echo base_url(); ?>/assets/back/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>/assets/back/css/datepicker3.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>/assets/back/css/styles.css" rel="stylesheet">

<script src="<?php echo base_url(); ?>/assets/back/js/lumino.glyphs.js"></script>

</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>PELO Apparel | </span>Admin</a>
				<ul class="user-menu">
					<a href="<?php echo base_url().'adminin'?>"> Logout <span class="caret"></span></a>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		
		<ul class="nav menu">
			<li><a href="<?php echo base_url() . 'read' ?>"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Tabel Katalog</a></li>
			<li><a href="<?php echo base_url() . 'MyController/createKatalog' ?>"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> Add Katalog</a></li> 
			<li><a href="<?php echo base_url() . 'MyController/adminOrder' ?>"><svg class="glyph stroked star"><use xlink:href="#stroked-star"></use></svg> Order</a></li>
			<li><a href="<?php echo base_url() . 'MyController/adminContact' ?>"><svg class="glyph stroked star"><use xlink:href="#stroked-star"></use></svg> Contact</a></li>
			<li class="parent ">
				
				<ul class="children collapse" id="sub-item-1">
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Sub Item 1
						</a>
					</li>
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Sub Item 2
						</a>
					</li>
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Sub Item 3
						</a>
					</li>
				</ul>
			</li>
			<li role="presentation" class="divider"></li>
		</ul>
		<div class="attribution">Template by <a href="http://www.medialoot.com/item/lumino-admin-bootstrap-template/">Medialoot</a><br/><a href="http://www.glyphs.co" style="color: #333;">Icons by Glyphs</a></div>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Icons</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">UPDATE</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Edit Katalog</div>
					<div class="panel-body">
							<form method="post" action="<?php echo base_url().'MyController/doUpdate'?>">  
							<?php echo form_open_multipart(base_url('MyController/updateKatalog')); ?>
								<div class="col-md-6">
								<div class="form-group">
									<label>Id Barang</label>
									<input class="form-control"  value="<?php echo $idbrg; ?>"  name="idbrg">
								</div>
																
								<div class="form-group">
									<label>Jenis Barang</label>
									<input class="form-control"  value="<?php echo $jenisbrg; ?>" name="jenisbrg">
								</div>
								<div class="form-group">
									<label>Nama Barang</label>
									<input class="form-control"  value="<?php echo $namabrg; ?>" name="namabrg">
								</div>
								<div class="form-group">
									<label>Harga Barang</label>
									<input class="form-control"  value="<?php echo $hargabrg; ?>" name="hargabrg">
								</div>
								<div class="form-group">
									<label>Ukuran Barang</label>
									<input class="form-control"   value="<?php echo $ukuranbrg; ?>" name="ukuranbrg">
								</div>
								<div class="form-group">
									<label>Warna Barang</label>
									<input class="form-control"   value="<?php echo $warnabrg; ?>" name="warnabrg">
								</div>
								<div class="form-group">
									<label>Satuan Barang</label>
									<input class="form-control"  value="<?php echo $satuanbrg; ?>" name="satuanbrg">
								</div>			
						</div>

						<div class="col-md-6">
								<div class="form-group">
									<label>Gambar Barang</label>
									<input type="file"  value="<?php echo $gambarbrg; ?>" name="gambarbrg">
									 <p class="help-block">Example block-level help text here.</p><br>
								</div>
								<div class="form-group">
									<label>Gambar Barang dengan Model</label>
									<input type="file"  value="<?php echo $gambarbrg_model; ?>" name="gambarbrg_model">
									 <p class="help-block">Example block-level help text here.</p><br>
								</div>
								<div class="form-group">
									<label>Deskripsi</label>
									<textarea class="form-control" rows="5"  value="<?php echo $deskripsibrg; ?>" name="deskripsibrg"></textarea>
								</div>

								<button type="submit" class="btn btn-primary">Edit</button>
								<button type="reset" class="btn btn-default">Reset Button</button>
						</div>
					</div>
					</form>
					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->	
	</div><!--/.main-->

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){		  
				$(this).find('em:first').toggleClass("glyphicon-minus");	  
			}); 
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>
