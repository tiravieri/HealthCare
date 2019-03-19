<link rel="stylesheet" type="text/css" href= "<?php echo base_url();?>css/artikel.css">
<body>
<div class="container isi">
			<div class="col-md-12">
			<center><button class="btn btn-md btn-WARNING tren" type="button">ARTIKEL</button></center>
				<div class="row kotakartikel">
					<?php foreach($artikel as $value) {?>
					<div class="col-xs-12 col-sm-5 col-md-5 col-lg-4 mx-auto kotak">
						<a href="<?php echo site_url('C_Artikel/halArtikel/'.$value['no_artikel'])?>">
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
			<br>
</div>