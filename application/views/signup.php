<!DOCTYPE html>
<html  class="no-js" lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>CD - Login & Register Form HTML5 Template</title>
	<link rel="icon" href="<?=base_url('assets/');?>assets/img/icon.png" type="image/gif" sizes="16x16">
	<link rel="icon" href="<?=base_url('assets/');?>assets/img/icon.png" type="image/gif" sizes="18x18">
	<link rel="icon" href="<?=base_url('assets/');?>assets/img/icon.png" type="image/gif" sizes="20x20">

	<link rel="stylesheet" href="<?=base_url('assets/');?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url('assets/');?>assets/css/bootstrap-icons.css">
	<link rel="stylesheet" href="<?=base_url('assets/');?>style1.css">

</head>
<body>
	
	<!-- Start Login Register Form -->
	<form method="post" action="<?=base_url('login/signup');?>">
	<section class="login-form-style4 section-padding" style="background-image:url('<?=base_url('assets/');?>assets/img/bg.jpg');">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 align-self-center">
					<div class="lgf4_Left_content mb-30">
						<h2><a href="#">CD</a></h2>
						<h3>Welcome To CD LOGIN</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit <a href="#">Faq</a>. Nunc mattis erat lacinia auctor hendrerit <a href="#">help</a>. Praesent nec eros sit amet sem pulvinar ornare et nec tortor. Maecenas vitae massa pellentesque, tempor sapien at, congue quam. Suspendisse malesuada. <br><?php echo validation_errors();?></p>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="loginfs4_form">
						<div class="loginfs4_form_headding">
							<h2>Register a New Account</h2>
							<p>Register into your pages account</p>
						</div>
						<div class="loginfs4_form_middle">
							<form action="#">
								<input type="text" name="Uname" placeholder="UserName">
								<input type="email" name="email" placeholder="Email">
								<input type="password" name="password" placeholder="Password">
								<input type="password" name="cpassword" placeholder="Confirm Password">
								<button class="button-1" type="submit">Register</button>
							</form>
							<p class="or">or</p>
							<button class="google" type="submit"><i class="bi bi-google"></i> Continue with Google</button>
							<button class="facebook" type="submit"><i class="bi bi-facebook"></i> Continue with Facebook</button>
						</div>
						<div class="loginfs4_form_btm">
							<div class="login-register-from-btom text-center mt-15">
								<p>Already have an account? <a href="<?=base_url('login');?>">Sign IN</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Login Register Form -->
</form>


    <!-- Js File -->
    <script src="<?=base_url('assets/');?>assets/js/modernizr.min.js"></script>
    <script src="<?=base_url('assets/');?>assets/js/jquery-3.5.1.min.js"></script>
    <script src="<?=base_url('assets/');?>assets/js/bootstrap.min.js"></script>
    <script src="<?=base_url('assets/');?>assets/js/popper.min.js"></script>
</body>
</html>