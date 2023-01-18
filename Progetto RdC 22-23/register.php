<!DOCTYPE html>
<html lang="en">
<head>
  <title>UNIHub - Register</title>
  <meta charset="utf-8" content="width=device-width, initial-scale=1.0">
	
	<link rel="icon" href="img/UNIHub.png">
  
	<?php 
		require 'code/php/require/bootstrap_head.php';
	?>	
	
</head>	

<!-- CSS -->
	
<style>
	
	#body {
		background-color: #1F1F1F;
		color: white;
		font-size: 14px;
	}
	
	p {
		padding: 10px;
		margin: 0;
	}
	
	img:hover {
		cursor: pointer;
	}
	
	.login-form {
		background-color: #323232;
		border-radius: 5px;
		padding: 20px;
		margin-bottom: 20px;
	}
	
	.register-red{
		border: 1px solid #323232;
		border-radius: 5px;
	}
	
	.btn-success{
		font-size: 14px; 
		width: 100%;
	}
	
	label {
		margin-top: 0;
		margin-bottom: 0;
	}
	
	input {
		height: 24px;
		margin-top: 3px;
		margin-bottom: 10px;
		border: none;
	}
	
</style>
	
<!-- body --> 
	
<body id="body"> 
	
	<!-- main -->
	
	<div class="d-flex justify-content-center">
		<div class="container" style="width: 25%; position: absolute; top: 10%">
			<div class="row" align="center">
				<div>
					<img src="img/UNIHub2.png" alt="logo" width="35%" onClick="window.location = 'index.php'">
				</div>
				<h5>Sign up to UNIHub</h5>
			</div>

			<div class="row login-form">
				<form action="" method="post">
				<div class="row">
					<div class="col-6">
						<label class="form-label">Name</label>
						<input type="text" class="form-control">
					</div>	
					<div class="col-6">
						<label class="form-label">Surname</label>
						<input type="text" class="form-control">
					</div>
				</div>
				<div class="col-12">
					<label class="form-label">Email</label>
					<input type="email" class="form-control">
			  	</div>	
				<div class="col-12">
					<label class="form-label">Username</label>
					<input type="text" class="form-control">
			  	</div>	
				<div class="row">
					<div class="col-6">
						<label class="form-label">Password</label>
						<input type="password" class="form-control">
					</div>	
					<div class="col-6">
						<label class="form-label">Confirm password</label>
						<input type="password" class="form-control">
					</div>
				</div>
				<br>
    			<button type="submit" class="btn btn-success">Sign up</button>
				</form>
			</div>
			
			<div class="row register-red" align="center">
				<p>Have already registered? <a href="login.php">Login to your account</a>.</p>
			</div>
		</div>
	</div>
	
</body>
	
<!-- script --> 
	
<script>
	
</script>
	
</html>