<!DOCTYPE html>
<head>
        <title>Member Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->	
    <!-- <link rel="icon" type="image/png" href="images/icons/favicon.ico"/> -->
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.css">
    <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="assets/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="assets/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="assets/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="assets/css/util.css">
        <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <!--===============================================================================================-->
    </head>

<body>
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-43">
						Register Form
					</span>			
					<form class="wrap-input100 validate-input">
                        <div class="wrap-input100 validate-input" data-validate = "Enter Name">
                            <input required class="input100" type="text" name="name" placeholder="Full name" title="Format: Xx[space]Xx (e.g. Alex Cican)" autofocus autocomplete="on" />
                            <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate = "Enter Username">
                            <input required class="input100" type="text" name="username" placeholder="User Name"autofocus autocomplete="on" required pattern=".*\S+.*" />
                            <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                            </div>
                        <div class="wrap-input100 validate-input" data-validate = "Email address">
                            <input class="input100" type="text" name="emailAddress" placeholder="Email Address" required>
                            <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                            </div>
                        <div class="wrap-input100 validate-input" data-validate="Enter password">
                            <input class="input100" type="password" name="pass" id="password" placeholder="Password" title="Password min 8 characters. At least one UPPERCASE and one lowercase letter" required pattern="(?=^.{8,}$)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$"/>
                            <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                        </div>

                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn" value="Sign Up" type="submit">
                                Register
                            </button>
                        </div>
				</form>
				<div class="login100-more" style="background-image: url('assets/img/tm-img-03.jpg');">
                </div>
            </div>
        </div>
    </div>
<!--===============================================================================================-->
<script src="assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/bootstrap/js/popper.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/daterangepicker/moment.min.js"></script>
	<script src="assets/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="assets/js/main.js"></script>
</body>
</html>