<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>
<body class="hold-transition"">
	<br>
	<div class="row">
		<div class="col-md-3">
		</div>
		<div class="col-md-6">	
	        <div class="card card-info">
		        <div class="card-header">
                <form class="form-horizontal" action="<?php echo site_url('Login/signup_action');?>" method="post">
		            <h3 class="card-title">Sign Up</h3>
		        </div>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputNRP">Nama</label>
                    <input type="text" class="form-control" id="exampleInputNRP" name="nama" placeholder="nama">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputNama">Email</label>
                    <input type="email" class="form-control" id="exampleInputNama" name="email" placeholder="email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword" name="password" placeholder="Password">
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
	        </div>
		</div>
	</div>
	<?php $this->load->view("admin/_partials/js.php") ?>    
</body>
</html>
