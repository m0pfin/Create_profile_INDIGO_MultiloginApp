<!DOCTYPE html>
<html lang="en">
<head>
	<title>Create profile</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" action="createProfile.php" method="POST">
					<span class="login100-form-title">
						Create profile
					</span>

                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="text" name="name" placeholder="Prefix name profile">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-user-circle" aria-hidden="true"></i>
						</span>
                    </div>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="count" placeholder="100">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="text" name="proxy" placeholder="192.168.0.1:0000:Login:Pass">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-umbrella" aria-hidden="true"></i>
						</span>
                    </div>

                    <div class="wrap-input100 validate-input">
                        <select class="input100" name="proxy_type">
                            <option value="HTTP">HTTP</option>
                            <option value="SOCKS">SOCKS</option>
                        </select>
                    </div>

                    <div class="wrap-input100 validate-input">
                        <select class="input100" name="os">
                            <option value="win">Windows</option>
                            <option value="mac">Mac OS</option>
                        </select>
                    </div>

					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Create
						</button>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="#">
							Create INDIGO profile
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>