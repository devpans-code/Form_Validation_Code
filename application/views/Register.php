<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Register Page</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

  	<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery/jquery-2.1.3.min.js"></script>
  	<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.js"></script>

	<script type="text/javascript" src="<?php echo base_url();?>JS/validation.js"></script>
	<script type="text/javascript">

	$(function()
	{
		//change is event name

		$("#email").change(function()
		{
			var Email_ad = $("#email").val();
			if(Email_ad != '')
			{
				$.ajax({
					url:"<?php echo base_url();?>Welcome/email",
					method: "POST",
					data:{email : Email_ad},
					success: function(data)
					{
						$("#error").html(data);
					}
				})
			}
		});

		$("#mobile").change(function()
		{
			var Mobile_No = $("#mobile").val();
			if(Mobile_No != '')
			{
				$.ajax({
					url:"<?php echo base_url();?>Welcome/getMobile",
					method: "POST",
					data:{mobile : Mobile_No},
					success: function(data)
					{
						$("#error1").html(data);
					}
				})
			}
		});

		$('#country').change(function()
		{
			var Country_id = $('#country').val();
			if(Country_id != '')
			{
				$.ajax({
					url : "<?php echo base_url();?>Welcome/state",
					method: "POST",

					data:{c_id : Country_id},

					success:function(data)
					{
						$("#state").html(data);
					}
				})
			}
			else
			{
				$('#state').html('<option value="">Select State</option>');
			}
		});

		$('#state').change(function()
		{
			var state_id = $('#state').val();
			if(state_id != '')
			{
				$.ajax({
					url : "<?php echo base_url();?>Welcome/city",
					method: "POST",
					data: {s_id : state_id},
					success:function(data)
					{
						$("#city").html(data);
					}
				})
			}
			else
			{
				$('#city').html('<option value="">Select City</option>');
			}
		});
	});

	</script>

</head>
<style type="text/css">
	.box
	{
		display: inline;
	}
</style>
<body>
	<div class="container">
		<div class="jumbotron">
			<div class="page-header">
				<h2>Register</h2>
			</div>
			<form id="Register_Form" action="<?php echo site_url('welcome/doPut'); ?>" method="post" enctype="multipart/form-data">

				<div class="form-group row">
					<div class="input-group input-group-inline">
					<label class="col-sm-4 col-form-label">Name : </label>
						<div class="col-sm-2">						
							<input type="text" name="fname" id="fname" class="form-control" placeholder="First Name">
						</div>
						<div class="col-sm-2">
							<input type="text" name="lname" id="lname" class="form-control" placeholder="Last Name">
						</div>
					</div>
				</div>

				<div class="form-group row">
					<div class="input-group input-group-inline">
						<label class="col-sm-4 col-form-label">Email : </label>
							<div class="col-sm-4">
								<input type="email" name="email" id="email" class="form-control" placeholder="Email">
							</div>
							<div>
								<h4 id="error"></h4>
							</div>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-4 col-form-label">Password : </label>
					<div class="col-sm-4">
						<input type="password" name="password" id="password" class="form-control" placeholder="Password">
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-4 col-form-label">Re-Enter : </label>
					<div class="col-sm-4">
						<input type="password" name="password2" id="password2" class="form-control" placeholder="Re-Enter Password">
					</div>
				</div>

				<div class="form-group row">
					<div class="input-group input-group-inline">
						<label class="col-sm-4 col-form-label">Phone : </label>
						<div class="col-sm-1">
							<input type="text" name="landline" id="landline" class="form-control" placeholder="000" maxlength="3">
						</div>
						<div class="col-sm-3">
							<input type="text" name="phone" id="phone" class="form-control" placeholder="Landline Number" maxlength="8">
						</div>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-4 col-form-label">Mobile : </label>
					<div class="col-sm-4">
						<input type="text" name="mobile" id="mobile" class="form-control" placeholder="Mobile Number" maxlength="10">
					</div>
					<div>
						<h4 id="error1"></h4>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-4 col-form-label">Address 1 : </label>
					<div class="col-sm-4">
						<input type="text" name="add1" id="add1" class="form-control" placeholder="Address 1">
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-4 col-form-label">Address 2 : </label>
					<div class="col-sm-4">
						<input type="text" name="add2" id="add2" class="form-control" placeholder="Address 2">
					</div>
				</div>

				<div class="form-group row">
				<label class="col-sm-4 col-form-label">Country Name : </label>
				<div class="col-sm-3">
					<select class="form-control input-lg" name="Country" id="country">
						<option value="">Select Country</option>
					<?php
						foreach ($country as $row => $value) 
						{
					?>
							<option value="<?php echo $value->c_id ?>"><?php echo $value->country_name?></option>;
					<?php	
						}
					?>
					</select>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-4 col-form-label">State Name : </label>
				<div class="col-sm-3">
					<select class="form-control input-lg form-control action" name="State" id="state">
						<option value="">Select State</option>
					</select>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-4 col-form-label">City Name : </label>
				<div class="col-sm-3">
					<select class="form-control input-lg" name="City" id="city">
						<option value="">Select City</option>
					</select>
				</div>
			</div>

				<div class="form-group row">
					<label class="col-sm-4 col-form-label">Pincode : </label>
					<div class="col-sm-4">
						<input type="text" name="pincode" id="pincdoe" class="form-control" placeholder="Pincode" maxlength="6">
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-4 col-form-label">Image : </label>
					<div class="col-sm-4">
						<input type="file" name="image" id="image" class="">
					</div>
				</div>

				<div class="from-group row">
					<div class="input-group input-group-inline">
						<label class="col-sm-4 col-form-label"></label>
						<div class="col-sm-2">
							<input type="submit" class="form-control btn btn-primary" value="Register">
						</div>
						<a href="<?php echo site_url('login_con'); ?>" class="btn btn-info">Log In</a>
					</div>
				</div>
			</form>
		</div>
	</div>

	<?php
		echo $this->session->flashdata('success');
	?>

</body>
</html>