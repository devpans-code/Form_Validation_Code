<!DOCTYPE html>
<html>
<head>
	<title>Insert</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<form class="" action="<?php echo site_url("Insert/doFIll"); ?>" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<div class="input-group input-group-inline">
			<label class="col-sm-2 col-form-label">Name : </label>
			<div class="col-sm-4">
				<input type="text" name="fname" class="form-control">
			</div>
			<div class="col-sm-4">
				<input type="text" name="lname" class="form-control">
			</div>
			</div>
		</div>		
		<div class="form-group">
		<div class="input-group input-group-inline">
			<label class="col-sm-2 col-form-label"></label>
			<input type="submit" name="Insert" value="Insert" class="btn btn-primary">
			</div>
		</div>
	</form>
</div>
</body>
</html>