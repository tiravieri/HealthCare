<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Bootstrap -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/footer.css">
		
		<style>
			.active a{
				color: orange !important;
			}
			
			.nav-item > a:hover{
				color : blue!important;
			}
			body {
				background-color :white;
			}
			
			.blkg {
				background-color:white;
			}
		</style>
		
	</head>

	<body>
	<?php
		$hal = $this->uri->segment(1);
	?>
	<div class="container blkg">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
			  <a class="navbar-brand" href="#">
				<img src="<?php echo base_url();?>image/logo Helath.png" width="250" height="60" class="d-inline-block align-top" alt="healthcare">
			  </a>
			  
			  <div class="collapse navbar-collapse" id="navbarNav">
				<ul class="nav navbar-nav navbar-right ml-auto">
				  <li class="nav-item <?=($hal=='C_Home')?'active':'';?>">
					<a class="nav-link" href="<?php echo site_url('C_Home/index') ?>">Home <span class="sr-only">(current)</span></a>
				  </li>
				  <li class="nav-item <?=($hal=='C_Penyakit')?'active':'';?>">
					<a class="nav-link" href="<?php echo site_url('C_Penyakit/index') ?>">Penyakit</a>
				  </li>
				  <li class="nav-item <?=($hal=='C_Artikel')?'active':'';?>">
					<a class="nav-link" href="<?php echo site_url('C_Artikel/index') ?>">Artikel</a>
				  </li>
				  <li class="nav-item <?=($hal=='C_Forum')?'active':'';?>">
					<a class="nav-link" href="<?php echo site_url('C_Forum/index') ?>">Forum</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="#">Event</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="#">Kontak</a>
				  </li>
				</ul>
			  </div>
			  <a href="<?php echo site_url('C_Login/index') ?>"><button class="btn btn-sm btn-WARNING" type="button">LOGIN</button></a>
			</nav>
	</div>	
</body>
