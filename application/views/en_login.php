<!DOCTYPE html>
<html lang="en">
<head>
	<title><?=$title;?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" href="assets/blackcard/img/logos/logo2.png" type="image/x-icon">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/login/css/main.css">
<!--===============================================================================================-->
	<!-- 自訂css  -->
	<link rel="stylesheet" type="text/css" href="assets/login/css/custom.css">

</head>
<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('assets/blackcard/img/header-bg.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post">
					<span class="login100-form-logo">
						<img src="./assets/blackcard/img/logos/logo2.png" class="img-fluid" alt="">
						<!-- <i class="zmdi zmdi-landscape"></i> -->
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						<?=$title;?>
						<input type="hidden" name="rule" value="login">
					</span>

					<div class="wrap-input100 validate-input" data-validate = "<?=$ar;?>"><!-- ar = account required -->
						<input class="input100" type="text" name="username" placeholder="<?=$username;?>">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="<?=$pr;?>"><!-- pr = password required -->
						<input class="input100" type="password" name="password" placeholder="<?=$password;?>">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							<?=$button;?>
						</button>
						<a href="<?=$en_url;?>">
							<button type="button" class="english" name="button">
								<?=$lan;?>
							</button>
						</a>
						<!-- <button class="login100-form-btn"> -->
						<!-- </button> -->
					</div>
				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="assets/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/login/vendor/bootstrap/js/popper.js"></script>
	<script src="assets/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/login/vendor/daterangepicker/moment.min.js"></script>
	<script src="assets/login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="assets/login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="assets/login/js/main.js"></script>
	<script type="text/javascript">
		<?php if(isset($code) && $code == 404){ ?>
			alert("<?=$msg;?>");
			document.reload();
		<?php } ?>
	</script>
</body>
</html>
