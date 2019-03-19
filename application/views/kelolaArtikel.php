<body>
	<div class="container">
		<div class="row">
          <div class="col-lg-12 ml-auto mr-auto">
<h3 style="font-weight:bold">Data Artikel</h3><br>
          <table class="table table-striped table-light table-bordered table-hover" style="width:100%">
            <thead class="thead-dark">
              <tr>
                    <th>Nomor</th>
                    <th>Judul</th>	
                    <th>Isi</th>
                    <th>Image</th>
				  	<th>Action</th>
              </tr>
			</thead>
			  <tbody>
			  	<?php foreach($artikel as $value) {?>
				<tr class="">
						<td><?php echo $value['no_artikel'];?></td>
						<td><?php echo $value['judul'];?></td>
						<td><?php echo $value['isi']; ?></td>
						<td><img style="width:250px" src="<?php echo base_url();?>image/<?php echo $value['image']?>"></td>
						<td style="text-align: center;">
						  <button class="btn btn-md btn-block btn-primary" data-toggle="modal" data-target="#edit<?php echo $value['no_artikel']; ?>">Edit</button><br>
						  <button class="btn btn-md btn-block btn-danger" data-toggle="modal" data-target="#hapus<?php echo $value['no_artikel']; ?>">Hapus</button>
						</td>
				</tr>
				  
				  <div id="edit<?php echo $value['no_artikel']; ?>" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"></button>
                                    <h4 class="modal-title">Edit Data Artikel</h4>
                                </div>
                                <?php echo form_open("C_Admin/updateArtikel"); ?>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label class="control-label" for="nomor">Nomor</label>
                                        <input type="text" class="form-control" disabled value="<?php echo $value['no_artikel']; ?>">
                                        <input type="hidden" name="nomor" class="form-control" value="<?php echo $value['no_artikel']; ?>" required>
                                    </div>
									
                                    <div class="form-group">
                                        <label class="control-label" for="judul">Judul</label>
                                        <input type="text" name="judul" class="form-control" value="<?php echo $value['judul']; ?>" required>
                                    </div>
									
                                    <div class="form-group">
                                        <label class="control-label" for="isi">isi</label>
                                        <input type="textarea" name="isi" class="form-control" value="<?php echo $value['isi']; ?>" id="harga" required>
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
				  
				  <div id="hapus<?php echo $value['no_artikel']; ?>" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"></button>
                                <h4 class="modal-title">Anda Ingin Menghapus Artikel Nomor <?php echo $value['no_artikel'];?>?</h4>
                                  <?php echo form_open("C_Admin/delArtikel"); ?>
                                  <input type="hidden" name="no_artikel" class="form-control" value="<?php echo $value['no_artikel'];?>" required>
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