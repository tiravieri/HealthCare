<link rel="stylesheet" type="text/css" href= "<?php echo base_url();?>css/Profile.css">
<body>
<div class="container isi">
	<div class="col-md-12">
		<center><button class="btn btn-md btn-WARNING tren" type="button">PROFILE</button></center>
		<br>
		<div class="row">
			<?php foreach($mmbr as $value) {?>
			<div class="col-md-4 mx-auto my-auto kotakprofile">
					<h5>Email : <span class="data"><?php echo $value->email;?></span><h5>
					<h5>Nama : <span class="data"><?php echo $value->nama;?></span><h5>
			</div>
			<div class="col-md-1 "></div>
			<div class="col-md-4 mx-auto my-auto kotakprofile">
				<center><h4> Edit Profile Anda ? </h4></center>
				<center><button class="btn btn-md  btn-primary" data-toggle="modal" data-target="#edit<?php echo $value->email; ?>">Edit</button><br></center>
				<br>
				<center><h4> Delete Profile Anda ? </h4></center>
				<center><button class="btn btn-md btn-danger" data-toggle="modal" data-target="#hapus<?php echo $value->email; ?>">Hapus</button></center>
			</div>
			
			<div id="edit<?php echo $value->email; ?>" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"></button>
                                    <h4 class="modal-title">Edit Data Profile</h4>
                                </div>
                                <?php echo form_open("C_Profile/updateMember"); ?>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label class="control-label" for="email">email</label>
                                        <input type="text" class="form-control" disabled value="<?php echo $value->email; ?>">
                                        <input type="hidden" name="email" class="form-control" value="<?php echo $value->email; ?>" required>
                                    </div>
									
                                    <div class="form-group">
                                        <label class="control-label" for="nama">Nama</label>
                                        <input type="text" name="nama" class="form-control" value="<?php echo $value->nama; ?>" required>
                                    </div>
									
                                    <div class="form-group">
                                        <label class="control-label" for="password">Password</label>
                                        <input type="password" name="password" class="form-control" value="<?php echo $value->password; ?>" required>
                                    </div>
									
                                </div>
                                <div class="modal-footer">
                                    <button type="button" data-dismiss="modal" class="btn btn-danger">Close</button>
                                    <button type="submit" class="btn btn-primary" name="edit" value="Edit">Edit</button>
                                </div>
                                <?php echo form_close(); ?>
                            </div>
                        </div>
            </div>
				  
				  <div id="hapus<?php echo $value->email; ?>" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"></button>
                                <h4 class="modal-title">Anda Ingin Menghapus Artikel Nomor <?php echo $value->email;?>?</h4>
                                  <?php echo form_open("C_Profile/delMember"); ?>
                                  <input type="hidden" name="no_artikel" class="form-control" value="<?php echo $value->email;?>" required>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" data-dismiss="modal" class="btn btn-danger">Tidak</button>
                                    <input type="submit" class="btn btn-primary" name="hapus" value="Hapus">
                                </div>
                                <?php echo form_close(); ?>
                            </div>
                        </div>
                    </div>
			
			<?php } ?>
		</div>
		<br><br>
	</div>
</div>