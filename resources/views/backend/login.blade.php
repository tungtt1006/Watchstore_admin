<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/back-end/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/back-end/login.css') }}">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
<div class="container" style="margin-top:80px;">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel" style="border:1px solid darkgray;border-radius:0;">
				<div class="panel-heading text-center" >
				   <h1 class="title_login">
				   	  <i class="fas fa-user"></i>
				   	</h1>
				</div>
				<div class="panel-body text-center body">
				  <form method="post" action="index.php?controller=login&action=login">
					<div class="row" style="margin-top:5px;">
						<div class="col-md-1"></div>
						<div class="col-md-10">
							<input type="email" name="email" class="form-control text" placeholder="Email" required>
						</div>
					</div>
					<div class="row" style="margin-top:15px;">
						<div class="col-md-1"></div>
						<div class="col-md-10">
							<input type="password" name="password" class="form-control text"  placeholder="Password" required>
						</div>
					</div>
					<div class="row" style="margin-top:10px;">
						<div class="col-md-5"></div>
						<div class="col-md-7">
						  <a class="forgot_pass" href="#">Forgot Password?</a>
                        </div>
					</div>
					<div class="row" style="margin-top:50px;">
						<div class="col-md-12">
							<input type="submit" value="Login" class="btn btn_login"> 
						</div>
					</div>
				  </form>
				</div>
				<div class="panel-footer text-center">
					<i class="fab fa-facebook" style="color:#0000ff;"></i>
					 &emsp;
					<i class="fab fa-google" style="color:#DB4437;"></i>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>