 <?php

session_start();
include('connexion.php');

if ($_SERVER['REQUEST_METHOD'] == "POST") {

	// collecte data from user 
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	if (!empty($password) && !empty($email) && !empty($last_name) && !empty($first_name)) {

		$sql = "SELECT * FROM users  WHERE email ='$email' limit 1 ";

			$result =  $conn->query($sql);
			$is=0;
			foreach( $result as $row ) {
			
					if($email==$row['email']){
							$is++;
							
					}
				
			}
					if ($is>0) {
						

						$_SESSION['signup_error'] ='this emile is already exists '; 
						header("Location: sign_up.php");
						
					
					}else {
					
						$sql = "INSERT INTO `users`(`id`, `first_name`, `last_name`, `email`, `password`) VALUES (NULL,'$first_name ','$last_name ','$email','$password')";
		$result = $conn->query($sql);
		header("Location: sign_in.php");
					}

		
		


	} 

}

?> 
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> library MGS</title>

	<!-- ================== BEGIN core-css ================== -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="assets/css/vendor.min.css" rel="stylesheet" />
	<link href="assets/css/default/app.min.css" rel="stylesheet" />
	<!-- ================== END core-css ================== -->
	<link rel="stylesheet" href="assets/css/style.css">
</head>

<body class=""style="">
<div class="banner">
	
		<video autoplay muted loop id="myVideo">
			<source src="assets/video/library.mp4" type="video/mp4">
		  </video>
		  
		<div class="card_continer  ">
			
					<div class="  row  ">
						
			
				
						<div class="card_col_1 d-none d-sm-none d-md-block  p-3 bg-black-300 border rounded-3 ms-md-5  ms-xl-5 ms-xxl-1  col bg-opacity-65 ">
							<div class=" flex-column row gx-lg-4">
								<h3 class=" col"><span class=" text-blue-300">library MGS</span></h3>
								<p class="col">A library management system is software that is designed to manage all the functions of a library.</p>
								<div class=" col d-flex justify-content-end social_icon">
									<span><i class="fab fa-facebook-square"></i></span>
									<span><i class="fab fa-google-plus-square"></i></span>
									<span><i class="fab fa-twitter-square"></i></span>
								</div>
								<div class=" col-sm-auto d-flex justify-content-center">
									<img class="img_login" src="assets/gif/e4c29445ec.gif" alt="">
								</div>
							</div>
						</div>

						<div class="card_col_2 bg-black-100 p-3 col border rounded-3 me-xl-5 me-xxl-1 me-md-5   bg-opacity-65 " style="min-height: 400px;">
							<h3>Sign Up</h3>
							<p>please fill in this form to create your account?</p>
							<div class="d-flex justify-content-end social_icon">
								<span><i class="fab fa-facebook-square"></i></span>
								<span><i class="fab fa-google-plus-square"></i></span>
								<span><i class="fab fa-twitter-square"></i></span>
							</div>
							<form method="post" action="sign_up.php " id="sign_up_form">
							<?php if(isset($_SESSION['signup_error'])): ?>
									<div class="alert alert-danger alert-dismissible fade show">
										<strong>wrong!</strong>
										<?php 
									echo $_SESSION['signup_error'] ; 
									
										?>
										<button type="button" class="btn-close" data-bs-dismiss="alert"></span>
									</div>
									<?php endif ?>
								<div class="input-group  form-group" id="frst_last_input">
			
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
											<span class="input-group-text h-35px"><i class="fa fa-envelope"></i></span>
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
									<input type="submit" value="Sign Up"id="sign_up_submit" class="btn btn-gray login_btn"> <span  class=" f-w-600"> <a href="sign_in.php" rel=""> sign in</a> </span>
								</div>
							</form>
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