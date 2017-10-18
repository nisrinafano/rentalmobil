<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>RENTAL MOBIL | Read Katalog</title>

<link href="<?php echo base_url(); ?>/assets/back/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>/assets/back/css/datepicker3.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>/assets/back/css/bootstrap-table.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>/assets/back/css/styles.css" rel="stylesheet">

<script src="<?php echo base_url(); ?>/assets/back/js/lumino.glyphs.js"></script>
<style type="text/css">

table, th, td {
	border: 1px solid black;
    border-collapse: collapse;
}

th, td {
    padding: 5px;
}
</style>

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
				<a class="navbar-brand" href="#"><span>RENTAL MOBIL | </span>Admin</a>
				<ul class="user-menu">
					<a href="<?php echo base_url().'User/logout'?>"> Logout <span class="caret"></span></a>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		
		<ul class="nav menu">
			<li><a href="<?php echo base_url() . 'read' ?>"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Tabel Katalog</a></li>
			<li><a href="<?php echo base_url() . 'Kendaraan/createKatalog' ?>"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> Add Katalog</a></li> 
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
				<h1 class="page-header">TABEL KATALOG</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Read Katalog</div>
					<div class="panel-body">
						<table style="width: 100%;" >
							<thead align="center" style="background-color: blue; color: white;">
								<td></td>
								<td>ID KENDARAAN</td>
								<td>MERK KENDARAAN</td>
								<td>NAMA KENDARAAN</td>
								<td>HARGA SEWA</td>
								
								<td>NOPOL KENDARAAN</td>
								<td>ID PEMILIK</td>
								<td>Action</td>
							</thead>
					<form method="post" action="<?php echo base_url().'MyController/deleteKatalog'?>"> 
					<tbody align="center">
					<?php foreach ($data as $x) { ?>
						<tr>
						<td><input type="checkbox" value="<?= $x['idKendaraan']?>" name='item[]'></td> 
						<td><?= $x['idKendaraan'] ?></td>
						<td><?= $x['merkKendaraan'] ?></td>
						<td><?= $x['namaKendaraan'] ?></td>
						<td><?= $x['hargaSewa'] ?></td>
						<td><?= $x['nopolKendaraan'] ?></td>
						<td><?= $x['idPemilik'] ?></td>
						
						<td align=center>
							<a href="<?php echo base_url().'MyController/updateKatalog/'?>">Edit</a>
						</td>
						</tr>
					<?php } ?>
					</tbody>
					</table>				
					<br>
					<input type="submit" value="Delete"></form>

		</div>
				</div>
			</div>
		</div><!--/.row-->	
						<script>
						    $(function () {
						        $('#hover, #striped, #condensed').click(function () {
						            var classes = 'table';
						
						            if ($('#hover').prop('checked')) {
						                classes += ' table-hover';
						            }
						            if ($('#condensed').prop('checked')) {
						                classes += ' table-condensed';
						            }
						            $('#table-style').bootstrapTable('destroy')
						                .bootstrapTable({
						                    classes: classes,
						                    striped: $('#striped').prop('checked')
						                });
						        });
						    });
						
						    function rowStyle(row, index) {
						        var classes = ['active', 'success', 'info', 'warning', 'danger'];
						
						        if (index % 2 === 0 && index / 2 < classes.length) {
						            return {
						                classes: classes[index / 2]
						            };
						        }
						        return {};
						    }
						</script>
					</div>
				</div>
			</div>
		</div><!--/.row-->	
		
		
	</div><!--/.main-->

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/bootstrap-table.js"></script>
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
