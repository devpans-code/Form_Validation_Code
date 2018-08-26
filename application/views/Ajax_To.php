<!DOCTYPE html>
<html>
<head>
	<title>Insert</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

  	<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery/jquery-2.1.3.min.js"></script>
  	<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.js"></script>

  	<script type="text/javascript" src="<?php echo base_url();?>/JS/ajax.js"></script>
</head>
<body>
<div class="container">
	<form class="" action="" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<div class="input-group input-group-inline">
			<label class="col-sm-2 col-form-label">Name : </label>
			<div class="col-sm-4">
				<input type="text" name="name" id="name" class="form-control">
			</div>
		</div>		
		<div class="form-group">
		<div class="input-group input-group-inline">
			<label class="col-sm-2 col-form-label"></label>
			<input type="submit" name="Insert" id="ajax" value="AJX" class="btn btn-primary">
			</div>
		</div>
	</form>
</div>
</body>
</html>