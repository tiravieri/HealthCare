<link rel="stylesheet" type="text/css" href= "<?php echo base_url();?>css/detilpenyakit.css">
<body>
<div class="container detilpenyakit">
			<div class="col-md-12">
				<?php foreach($penyakit as $value2) {?>
				<h4><?php echo $value2['nama_penyakit'] ?></h4>
				<?php } ?>
				<br>
					<div class="col-md-12 mx-auto kotak">
						<?php foreach($penyakit as $value2) {?>
							<center><img src="<?php echo base_url();?>image/<?php echo $value2['gambar']?>"></center>
						<?php } ?>
					</div>
			</div>
			<br>
			<div class="col-md-12">
				<?php foreach($penyakit as $value2) {?>
					<p><?php echo $value2['penjelasan'] ?></p>
				<?php } ?>
			</div>
</div>