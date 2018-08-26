<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Display Content</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container-fluid jumbotron">
			<div class="page-header">
				<h3>Welcome 
					<?php 
						echo $this->session->userdata('fname')."&nbsp;"; 
						echo $this->session->userdata('lname');
					?> 
					<a href="<?php echo site_url('login_con/doLogout');?>" class="btn btn-danger">Logout</a>
				</h3>
			</div>
			<div class="table-responsive">
				<table class="table table-bordered">
					<tr>
						<td>User ID</td>
						<td>First Name</td>
						<td>Last Name</td>
						<td>Email</td>
						<td>Phone</td>
						<td>Mobile</td>
						<td>Address 1</td>
						<td>Address 2</td>
						<td>City</td>
						<td>State</td>
						<td>Country</td>
						<td>Pincode</td>
						<td>Photo</td>
					</tr>
					<?php
						foreach ($h->result() as $r) 
						{
					?>
							<tr>
								<td><?php echo  $r-> id; ?></td>
								<td><?php echo  $r-> fname; ?></td>
								<td><?php echo  $r-> lname; ?></td>
								<td><?php echo  $r-> email; ?></td>
								<td><?php echo  $r-> landline,'&nbsp;', $r-> phone;  ?></td>
								<td><?php echo  $r-> mobile; ?></td>
								<td><?php echo  $r-> address1; ?></td>
								<td><?php echo  $r-> address2; ?></td>
								<td><?php echo  $r-> city_name; ?></td>
								<td><?php echo  $r-> state_name; ?></td>
								<td><?php echo  $r-> country_name; ?></td>
								<td><?php echo  $r-> pincode; ?></td>
								<td><img src="<?php echo base_url().$r-> image; ?>" width="50" height="50"></td>
							</tr>
					<?php
						}
					?>
				</table>
			</div>
	</div>
</body>
</html>