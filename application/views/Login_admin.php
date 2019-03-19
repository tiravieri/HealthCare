<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/loginadmin.css">
<body>
	<div class="container isilogin">
		
		<h3 class="text-center login">Login To</h3>
		<center><img src="<?php echo base_url();?>image/logo Helath.png"></center>
		<div class="col-md-5 mx-auto">
		<?php 
          echo form_open("C_Admin/check"); 
        ?>
			<div class="form-group">
				<label for="username">Username</label>
			   <center><input class="form-control" type="text" name="username" placeholder="username" required/></center> 
			  </div>
       		<div class="form-group">
				<label for="password">Password</label>
				<input class="form-control" type="password" name="password" placeholder="Password" />
        	</div>
			
			<center><button type="submit" class="btn btn-lg btn-warning">Login</button></center>
			
			<br>
			
			</form>
		</div>
		
	</div>