<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid">
	<div class="jumbotron">
		<div class="page-header">
			<h2>Welcome
				<?php
					echo $this->session->userdata('admin_user');
				?>
				<a href="logout" class="btn btn-danger">Logout</a>
			</h2>
		</div>
		<div class="table-responsive">
			<table class="table table-borderless table-dark">
				<tr class="bg-primary">
					<td>ID</td>
					<td>Photo</td>
					<td>Name</td>
					<td>Phone</td>
					<td>Mobile</td>
					<td>Email</td>
					<td>Address 1</td>
					<td>Address 2</td>
					<td>City</td>
					<td>State</td>
					<td>Pincode</td>
					<td>Delete</td>
				</tr>
				<tr>
					<?php
						foreach ($info->result() as $row) 
						{
					?>
						<tr>
							<td><?php echo $row->id; ?></td>
							<td><img class="rounded" src="<?php echo base_url().$row->image; ?>" width="50" height="40"></td>
							<td><?php echo $row->fname; ?> <?php echo $row->lname; ?></td>
							<td><?php echo $row->landline; ?> <?php echo $row->phone; ?></td>
							<td><?php echo $row->mobile; ?></td>
							<td><?php echo $row->email; ?></td>
							<td><?php echo $row->address1; ?></td>
							<td><?php echo $row->address2; ?></td>
							<td><?php echo $row->city; ?></td>
							<td><?php echo $row->state; ?></td>
							<td><?php echo $row->pincode; ?></td>
							<td><a href="<?php echo base_url()?>/admin_con/delete/<?php echo $row->id; ?>" class="btn btn-primary">Delete</a></td>
						</tr>
					<?php	
						}
					?>
			</table>
		</div>
	</div>
</div>

</body>
</html>