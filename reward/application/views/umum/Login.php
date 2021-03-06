<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>SB Admin 2 - Bootstrap Admin Theme</title>

	<link href="<?php echo base_url('assets/plugin/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/plugin/metisMenu/metisMenu.min.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/plugin/sb-admin-2/css/sb-admin-2.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/plugin/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">
</head>

<body>

	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="login-panel panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Please Sign In</h3>
						<?php
						if($alert){
							echo '<h5>'.$alert.'</h5>';
						}
						?>
					</div>
					<div class="panel-body">
						<form role="form" action="" method="POST">
							<fieldset>
								<div class="form-group">
									<input class="form-control" placeholder="Username" name="username" type="text" autofocus>
								</div>
								<div class="form-group">
									<input class="form-control" placeholder="Password" name="password" type="password" value="">
								</div>
								<div class="checkbox">
									<label>
										<input name="remember" type="checkbox" value="Remember Me">Remember Me
									</label>
								</div>
								<button class="btn btn-lg btn-success btn-block" name="submit">Login</button>
							</fieldset>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="<?php echo base_url('assets/plugin/jquery/jquery.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/plugin/bootstrap/js/bootstrap.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/plugin/metisMenu/metisMenu.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/plugin/sb-admin-2/js/sb-admin-2.js'); ?>"></script>

</body>

</html>
