<body>
	<div class="container">
		<div class="row">
          <div class="col-lg-12 ml-auto mr-auto">
			<h3 style="font-weight:bold">Data Penyakit</h3><br>
          <table class="table table-striped table-light table-bordered table-hover" style="width:100%">
            <thead class="thead-dark">
              <tr>
                    <th>No Penyakit</th>
                    <th>id Penyakit</th>	
                    <th>Nama Penyakit</th>
                    <th>Penjelasan</th>
					<th>Image</th>
				  	<th>Action</th>
              </tr>
			</thead>
			  <tbody>
			  	<?php foreach($penyakit as $value) {?>
				<tr class="">
						<td><?php echo $value['no_penyakit'];?></td>
						<td><?php echo $value['id_penyakit'];?></td>
						<td><?php echo $value['nama_penyakit']; ?></td>
						<td><?php echo $value['penjelasan']; ?></td>
						<td><img style="width:250px" src="<?php echo base_url();?>image/<?php echo $value['gambar']?>"></td>
						<td style="text-align: center;">
						  <button class="btn btn-md btn-block btn-primary" data-toggle="modal" data-target="#edit<?php echo $value['id_penyakit']; ?>">Edit</button><br>
						  <button class="btn btn-md btn-block btn-danger" data-toggle="modal" data-target="#hapus<?php echo $value['id_penyakit']; ?>">Hapus</button>
						</td>
				</tr>
				  
				  <div id="edit<?php echo $value['id_penyakit']; ?>" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"></button>
                                    <h4 class="modal-title">Edit Data Artikel</h4>
                                </div>
                                <?php echo form_open("C_Admin/updatePenyakit"); ?>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label class="control-label" for="id">Id Penyakit</label>
                                        <input type="text" class="form-control" disabled value="<?php echo $value['id_penyakit']; ?>">
                                        <input type="hidden" name="id" class="form-control" value="<?php echo $value['id_penyakit']; ?>" required>
                                    </div>
									
                                    <div class="form-group">
                                        <label class="control-label" for="nama">Nama Penyakit</label>
                                        <input type="text" name="nama" class="form-control" value="<?php echo $value['nama_penyakit']; ?>" required>
                                    </div>
									
                                    <div class="form-group">
                                        <label class="control-label" for="penjelasan">Penjelasan</label>
                                        <input type="textarea" name="penjelasan" class="form-control" value="<?php echo $value['penjelasan']; ?>" required>
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
				  
				  <div id="hapus<?php echo $value['id_penyakit']; ?>" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"></button>
                                <h4 class="modal-title">Anda Ingin Menghapus Artikel Nomor <?php echo $value['id_penyakit'];?>?</h4>
                                  <?php echo form_open("C_Admin/delPenyakit"); ?>
                                  <input type="hidden" name="no_artikel" class="form-control" value="<?php echo $value['id_penyakit'];?>" required>
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