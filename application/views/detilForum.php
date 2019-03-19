<link rel="stylesheet" type="text/css" href= "<?php echo base_url();?>css/detilforum.css">
<body>
	<div class="container isi">
			<div class="col-md-12">
				<div class="col-md-12 mx-auto gambar">
					<center><img src="<?php echo base_url();?>image/forum.jpg"></center>
				</div>
				<br>
				
			</div>
			<br>
			<div class="col-md-10 isiform">
				<?php foreach($forum as $value2) {?>
				<h4><?php echo $value2['judul_forum'] ?></h4>
				<p><?php echo $value2['isi_forum'] ?></p>
				
				<p> oleh <?php echo $value2['email'] ?></p>
				<?php } ?>
			</div>
			<br>
			<div class="col-md-12">
				<h3>Komentar :</h3><br>
				<?php foreach($komentar as $value) {?>
				<div class="col-md-8 kotakkomen">
					<p class="emailnya"><?php echo $value['email1'];?></p>
					<p class="komennya"><?php echo $value['komentar'];?></p>
				</div>
				<?php } ?>
				<?php 
					echo form_open("C_Forum/addkomen"); 
				?>
					<?php foreach($forum as $value2) {?>
					<div class="form-group">
						<label for="noforum"></label>
						<input type="hidden" name="noforum" class="form-control" value="<?php echo $value2['no_forum']; ?>" required>
					</div>
					<?php } ?>
					<div class="form-group">
						<label for="komentar">Komentar</label>
						<textarea class="form-control" name="komentar" placeholder="Tulis Komentar Anda" ></textarea>
					</div>		
					<button type="submit" class="btn btn-warning submitbtn">Submit</button>
				</form>
				<br>
			</div>			
	</div>