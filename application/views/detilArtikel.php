<link rel="stylesheet" type="text/css" href= "<?php echo base_url();?>css/detilArtikel.css">
<body>
<div class="container detilartikel">
			<div class="col-md-12">
				<?php foreach($artikel as $value2) {?>
				<h4><?php echo $value2['judul'] ?></h4>
				<?php } ?>
				<br>
					<div class="col-md-12 mx-auto kotak">
						<?php foreach($artikel as $value2) {?>
							<center><img src="<?php echo base_url();?>image/<?php echo $value2['image']?>"></center>
						<?php } ?>
					</div>
			</div>
			<br>
			<div class="col-md-12">
				<?php foreach($artikel as $value2) {?>
					<p><?php echo $value2['isi'] ?></p>
				<?php } ?>
			</div>
</div>