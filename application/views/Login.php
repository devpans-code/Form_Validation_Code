<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

  	<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery/jquery-2.1.3.min.js"></script>
  	<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.js"></script>

  	<script type="text/javascript" src="<?php echo base_url();?>JS/login.js"></script>

</head>
<body>
	<div class="container">
		<div class="jumbotron">
			<div class="page-header">
				<h2>Login</h2>
			</div>
			<form id="Login_Form" action="<?php echo site_url('login_con/doLogin'); ?>" method="post" enctype="multipart/form-data">
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Email : </label>
					<div class="col-sm-4">
						<input type="email" name="email" id="email" class="form-control" placeholder="Email">
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Password : </label>
					<div class="col-sm-4">
						<input type="password" name="password" id="password" class="form-control" placeholder="Password">
					</div>
				</div>
				<div class="from-group row">
					<div class="input-group input-group-inline">
						<label class="col-sm-2 col-form-label"></label>
						<div class="col-sm-2">
							<input type="submit" class="form-control btn btn-primary" value="Login">
						</div>
					</div>
				</div>
			</form>
			<br>
			<div class="from-group row">
					<div class="input-group input-group-inline">
						<label class="col-sm-2 col-form-label"></label>
						<div class="col-sm-2">
							<a href="<?php echo site_url('welcome');?>" class="btn btn-info">Register</a>
						</div>
					</div>
				</div>
			<?php
			echo $this->session->flashdata('error');
			?>
		</div>
	</div>
</body>
</html>