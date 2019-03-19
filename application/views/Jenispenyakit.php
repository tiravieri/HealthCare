<link rel="stylesheet" type="text/css" href= "<?php echo base_url();?>css/jenispenyakit.css">

<body>
	<div class="container penyakit">
			<div class="col-md-12">
			<center><button class="btn btn-md btn-WARNING tren" type="button">PERNAPASAN</button></center>
				<div class="row">
					<?php foreach($penyakit as $value) {?>
					<div class="col-xs-12 col-sm-5 col-md-5 col-lg-4 mx-auto bulat">
						<a href="<?php echo site_url('C_Penyakit/detilPenyakit2/'.$value['id_penyakit'])?>">
							<center><img src="<?php echo base_url();?>image/<?php echo $value['gambar']?>"></center>
							<br>
							<div class="label">
								<center><div class="label_txt"><?php echo $value['nama_penyakit']?></div></center>
							</div>
						<br>
					</div>
					<?php } ?>
				</div>
			</div>
			<br>
</div>