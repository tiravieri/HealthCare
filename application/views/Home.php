
	<link rel="stylesheet" type="text/css" href= "<?php echo base_url();?>css/home.css">
	<body>
	
		<div class="container isi">
			<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
			  <div class="carousel-inner slide">
				<div class="carousel-item active">
				  <img class="d-block w-100 " src="<?php echo base_url(); ?>image/slide1.png" alt="First slide">
				</div>
				<div class="carousel-item">
				  <img class="d-block w-100 " src="<?php echo base_url(); ?>image/slide2.jpg" alt="Second slide">
				</div>
				<div class="carousel-item">
				  <img class="d-block w-100 " src="<?php echo base_url(); ?>image/slide4.jpg" alt="Third slide">
				</div>
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			  </a>
			</div>
		</div>
		
		<div class="container isi">
			<center><button class="btn btn-md btn-WARNING tren" type="button">TRENDING</button></center>
		</div>
		
		<div class="container isi">
			<div class="col-md-12">
				<div class="row">
					<?php foreach($artikel as $value) {?>
					<div class="col-xs-12 col-sm-5 col-md-5 col-lg-3 mx-auto kotak">
						<a href="<?php echo site_url('C_Home/getinfo/'.$value['no_artikel'])?>">
							<img src="<?php echo base_url();?>image/<?php echo $value['image']?>">
							<br>
							<div class="label">
								<center><div class="label_txt"><?php echo $value['judul']?></div></center>
							</div>
						<br>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
		
