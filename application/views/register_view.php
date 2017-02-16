<!DOCTYPE html>
<html>	
	<head>
	<title>Registrasi Form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="Cofrestru Registration Form Responsive Templates, Iphone Widget Template, Smartphone login forms,Login form, Widget Template, Responsive Templates, a Ipad 404 Templates, Flat Responsive Templates" />
	<link href="<?php echo base_url(); ?>assets/css/style.css" rel='stylesheet' type='text/css' />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:700,300,600,800,400' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Marvel:400,700' rel='stylesheet' type='text/css'>
	</head>

	<body>
		<div class="registration">
			<h2>Registration Form</h2>
			<?php
			if(!empty($notif)){
				echo '<div class="alert alert-danger">'.$notif.'</div>';
			}
			?>		
			<form method="post" action="<?php echo base_url(); ?>index.php/register">
				<div class="form-info">
				<input name="name" type="text" class="text" placeholder="Your Full Name"  >
				<input name="email" type="text" class="text" placeholder="Email Adress" >
				<input name="username" type="text" class="text" placeholder="User Name" >
				<input name="password" type="password" placeholder="Password" >
			    </div>
			    <input name="submit" type="submit" value="REGISTER">
			</form>
			<div class="clear"> </div>
		</div>
	</body>
</html>