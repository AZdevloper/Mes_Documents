<!-- <?php

session_start();
include('connexion.php');

if ($_SERVER['REQUEST_METHOD'] == "POST") {

	// collecte data from user 
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	if (!empty($password) && !empty($email) && !empty($last_name) && !empty($first_name)) {

		$sql = "INSERT INTO `users`(`id`, `first_name`, `last_name`, `email`, `password`) VALUES (NULL,'$first_name ','$last_name ','$email','$password')";
		$result = $conn->query($sql);
		header("Location: sign_in.php");
		die;


	} else {
		echo "vous pouvez entrez des information valide ?";
	}


}

?> -->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sign Up</title>

	<!-- ================== BEGIN core-css ================== -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="assets/css/vendor.min.css" rel="stylesheet" />
	<link href="assets/css/default/app.min.css" rel="stylesheet" />
	<!-- ================== END core-css ================== -->
</head>

<body class=" d-flex justify-content-center align-items-center">

	<div class="container">
		<div class="d-flex justify-content-center ">
			<div class="card">
				<div class="card-header ">
					<h3>Sign Up</h3>
					<p>please fill in this form to create your account?</p>
					<div class="d-flex justify-content-end social_icon">
						<span><i class="fab fa-facebook-square"></i></span>
						<span><i class="fab fa-google-plus-square"></i></span>
						<span><i class="fab fa-twitter-square"></i></span>
					</div>
				</div>
				<div class="card-body h-400px w-400px">
					<form method="post" action="sign_up.php " id="sign_up_form">
						<div class="input-group form-group" id="frst_last_input">

							<input type="text"  class="form-control h-35px   d-inline-block" placeholder="First Name"
								id="sign_up_frstname" name="first_name">
							<input type="text" class="form-control h-35px d-inline-block"
								placeholder="Last Name" name="last_name" id="sign_up_lastname" >

						</div>
						<div class=" d-flex justify-around" id="form_validate_labl">
							<div class=" d-flex justify-around">
								<p></p>
								<label for="" class=" d-none row justify-content-end m-1 text-danger  fs-13px "
									id="label_error">unacceptable information </label>
							</div>
						</div>
						<!-- email -->
						<div class="input-group m-1 form-group">
							<div class="input-group-prepend ">
								<label for="username">
									<span class="input-group-text h-35px"><i class="fas fa-user"></i></span>
								</label>
							</div>
							<input type="text" class="form-control h-35px" placeholder="Email" id="useremail"
								name="email">

						</div>
						
						<div class=" d-flex justify-around" id="form_validate_email">
							<div class=" d-flex justify-around">
								<p></p>
								<label for="" class=" d-none row justify-content-end m-1 text-danger  fs-13px "
									id="label_error_email">unacceptable information </label>
							</div>
						</div>
						<div class="input-group m-1 form-group">
							<label for="password">
								<span class="input-group-text h-35px"><i class="fas fa-key"></i></span>
							</label>
							<input type="password" class="form-control h-35px" placeholder="Password" id="sign_up_password">
						</div>
						<div class="input-group m-1 form-group">
							<label for="password">
								<span class="input-group-text h-35px"><i class="fas fa-key"></i></span>
							</label>
							<input  type="password" class="form-control h-35px" placeholder=" Confirm Password"
								id="confirme_password" name="password">
						</div>
						<div class=" d-flex justify-around" id="form_validate_password">
							<div class=" d-flex justify-around">
								<p></p>
								<label for="" class=" d-nne row justify-content-end m-1 text-danger  fs-13px "
									id="label_error_password"> </label>
							</div>
						</div>

						<div class=" mt-3 mx-2  remember">
							<input type="checkbox"> I accept the Terms of Use & Privacy Policy ?
						</div>
						<div class="form-group">
							<input type="submit" value="Sign Up"id="sign_up_submit" class="btn btn-gray login_btn">
						</div>
					</form>
				</div>
				<div class="card-footer">
					<div class="d-flex justify-content-center links">
						Already have an account ? <a href="sign_in.php"> Sign in </a>
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- ================== BEGIN core-js ================== -->
	<script src="assets/js/vendor.min.js"></script>
	<script src="assets/js/app.min.js"></script>
	<script src="assets/js/main.js"></script>
	<!-- ================== END core-js ================== -->
</body>

</html>