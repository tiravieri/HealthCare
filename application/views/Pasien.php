<body>
	<div class="container">
		<div class="row">
          <div class="col-lg-12 ml-auto mr-auto">
<h3 style="font-weigth=bold">Data Pasien</h3><br>
          <table class="table table-striped table-light table-bordered table-hover" style="width:100%">
            <thead class="thead-dark">
              <tr>
                    <th>No Pasien</th>
                    <th>Nama Pasien</th>	
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
					<th>Tanggal Lahir</th>
					<th>Tanggal Masuk</th>
					<th>Keluhan</th>
				  	<th>Action</th>
              </tr>
			</thead>
			  <tbody>
			  	<?php foreach($pasien as $value) {?>
				<tr class="">
						<td><?php echo $value['no_pasien'];?></td>
						<td><?php echo $value['nama_pasien'];?></td>
						<td><?php echo $value['jenis_kelamin']; ?></td>
						<td><?php echo $value['alamat']; ?></td>
						<td><?php echo $value['tgl_lahir']; ?></td>
						<td><?php echo $value['tgl_masuk']; ?></td>
						<td><?php echo $value['keluhan']; ?></td>
						<td style="text-align: center;">
						  <button class="btn btn-md btn-block btn-primary" data-toggle="modal" data-target="#edit<?php echo $value['no_pasien']; ?>">Edit</button><br>
						  <button class="btn btn-md btn-block btn-danger" data-toggle="modal" data-target="#hapus<?php echo $value['no_pasien']; ?>">Hapus</button>
						</td>
				</tr>
				  
				  <div id="edit<?php echo $value['no_pasien']; ?>" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"></button>
                                    <h4 class="modal-title">Edit Data Artikel</h4>
                                </div>
                                <?php echo form_open("C_Admin/updatePasien"); ?>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label class="control-label" for="nomor">No Pasien</label>
                                        <input type="text" class="form-control" disabled value="<?php echo $value['no_pasien']; ?>">
                                        <input type="hidden" name="nomor" class="form-control" value="<?php echo $value['no_pasien']; ?>" required>
                                    </div>
									
                                    <div class="form-group">
                                        <label class="control-label" for="nama">Nama Pasien</label>
                                        <input type="text" name="nama" class="form-control" value="<?php echo $value['nama_pasien']; ?>" required>
                                    </div>
									
                                    <div class="form-group">
                                        <label class="control-label" for="jenis_kelamin">Jenis_Kelamin</label>
                                        <input type="textarea" name="jk" class="form-control" value="<?php echo $value['jenis_kelamin']; ?>" required>
                                    </div>
									
									<div class="form-group">
                                        <label class="control-label" for="alamat">Alamat</label>
                                        <input type="text" name="alamat" class="form-control" value="<?php echo $value['alamat']; ?>" required>
                                    </div>
									
									<div class="form-group">
                                        <label class="control-label" for="tgl_lahir">Tanggal Lahir</label>
                                        <input type="text" name="tgl_lahir" class="form-control" value="<?php echo $value['tgl_lahir']; ?>" required>
                                    </div>
									
									<div class="form-group">
                                        <label class="control-label" for="tgl_masuk">Tanggal Masuk</label>
                                        <input type="text" name="tgl_masuk" class="form-control" value="<?php echo $value['tgl_masuk']; ?>" required>
                                    </div>
									
									<div class="form-group">
                                        <label class="control-label" for="nama">Keluhan</label>
                                        <input type="text" name="keluhan" class="form-control" value="<?php echo $value['keluhan']; ?>" required>
                                    </div>
									
                                </div>
                                <div class="modal-footer">
                                    <button type="button" data-dismiss="modal" class="btn btn-danger">Close</button>
                                    <input type="submit" class="btn btn-primary" name="edit" value="Edit">
                                </div>
                                <?php echo form_close(); ?>
                            </div>
                        </div>
                    </div>
				  
				  <div id="hapus<?php echo $value['no_pasien']; ?>" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"></button>
                                <h4 class="modal-title">Anda Ingin Menghapus Artikel Nomor <?php echo $value['no_pasien'];?>?</h4>
                                  <?php echo form_open("C_Admin/delArtikel"); ?>
                                  <input type="hidden" name="no_artikel" class="form-control" value="<?php echo $value['no_pasien'];?>" required>
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
			  </tbody>
		</table>
	</div>
	
	
</body>