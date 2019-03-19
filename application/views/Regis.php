<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/regis.css">
<body>
		<div class="container isiregis">
		
		
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-5">
			<form action="<?php echo site_url('C_Regis/register'); ?>" method="POST">
				<br>
				<div class="form-group">
					<label for="email">Email</label>
					<input class="form-control" type="text" name="email" placeholder="Email" />
				</div>
				
				<div class="form-group">
					<label for="nama">Nama</label>
					<input class="form-control" type="text" name="nama" placeholder="Name" />
        		</div>
				
				<div class="form-group">
					<label for="password">Password</label>
					<input class="form-control" type="password" name="password" placeholder="Password" />
        		</div>
				<br>
			
			</div>
			
			
			<div class="col-md-5 my-auto mx-auto isiregis2">
				<h3 class="text-center">Register To</h3>
				<center><img src="<?php echo base_url();?>image/logo Helath.png"></center>
       			<center><button type="submit" class="btn btn-lg btn-warning">Register</button></center>
				<center>
					<p>Sudah Punya Akun? 
           				<a href="<?php echo site_url('C_Akun/index') ?>">Login disini.</a>
          			</p>
				</center>
			</div>
			
			
			</form>
			</div>
			<?php echo $this->session->flashdata('message');?>
		</div>
