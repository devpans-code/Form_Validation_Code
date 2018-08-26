<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<div class="jumbotron">
		<h3>Admin Form....</h3>
		<hr>
		<form class="" action="<?php echo site_url('admin_con/doCheck'); ?>" method="post">
			<div class="form-group">
				<label for="email">Admin : &nbsp;</label>
				<div class="col-sm-4"> 
					<input type="text" name="userName" id="" class="form-control" placeholder="username">
				</div>
			</div>
			<div class="form-group">
				<label for="password">Password : &nbsp;</label>
				<div class="col-sm-4"> 
					<input type="password" name="passWord" id="" class="form-control" placeholder="********">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-2 input-group">
					<input type="submit" name="log" id="" class="form-control input-lg btn btn-success" value="Login">
				</div>
			</div>
		</form>
		<?php
			echo $this->session->flashdata('errors');
		?>
	</div>
</div>
</body>
</html>