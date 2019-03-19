<link rel="stylesheet" type="text/css" href= "<?php echo base_url();?>css/forum.css">
<body>
	<div class="container isi">
			<div class="col-md-12">
			<img class="imgforum" src="<?php echo base_url();?>image/forum.jpg">
			
			<table class="table table-striped table-hover">
				<thead>
					<tr class="thead-dark">
					  <th scope="col">#</th>
					  <th scope="col">Judul</th>
					  <th scope="col">Oleh</th>
					</tr>
				</thead>
				
				<tbody>
					<?php foreach($forum as $value) {?>
					<tr class="table-warning">
						<td><a href="<?php echo site_url('C_Forum/halForum/'.$value['no_forum'])?>"><?php echo $value['no_forum'];?></td>
						<td><?php echo $value['judul_forum'];?></td>
						<td><?php echo $value['email']; ?></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
			
			<center><a class="btn btn-warning " href="" data-toggle="modal" data-target="#tambahkeranjang">Buat Forum</a></center><br>
			<div id="tambahkeranjang" class="modal fade" role="dialog">
                        
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"></button>
                                   <center> <h4 class="modal-title">Beli</h4> </center>
                                </div>
                                <?php echo form_open("C_Forum/addforum"); ?>
                                <div class="modal-body">
									
									<div class="form-group">
                                        <label for="name">No Forum</label>
										<input class="form-control" type="text" name="noforum" required/>
                                    </div>
									
									<div class="form-group">
                                        <label for="name">Judul Forum</label>
            							<input class="form-control" type="text" name="judul" required/>
                                    </div>
									
									<div class="form-group">
                                        <label for="name">Isi</label>
            							<input class="form-control" type="text" name="isi" required/>
                                    </div>
									
									
                                </div>
								
                                <div class="modal-footer">
                         			<input type="submit" data-dismiss="modal" class="btn btn-danger"  value="close">
                                     <input type="submit" class="btn btn-primary" name="kirim" value="Kirim">
									
                                </div>
                                <?php echo form_close(); ?>
                            </div>
                        </div>
                    </div>
			</div>
	</div>