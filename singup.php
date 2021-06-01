<?php
	session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="style9.css">
 <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />


</head>
<body class="heaader">


		<?php

		include 'connection.php';

		if(isset($_POST['submit'])){
			$username = mysqli_real_escape_string($con , $_POST['name']);
			$email = mysqli_real_escape_string($con , $_POST['email']);
			$Password = mysqli_real_escape_string($con , $_POST['password']);
			$repassword = mysqli_real_escape_string($con , $_POST['confirm-password']);


			
			$emailquery = "SELECT * FROM signup WHERE Email = '$email' ";
			$query = mysqli_query($con,$emailquery);


			
				
				if ($Password === $repassword) {
					
					$insertquery = "INSERT INTO signup ( Name, Email, Password, repassword) VALUES('$username', '$email', '$Password', '$repassword')" ;	

					$iquery = mysqli_query($con,$insertquery);

					if ($iquery) {
								
								?>
								<script >
									alert("Sign up succesful");
								</script>
								<?php
							}
							else {
								?>
								<script >
									alert("Sign up notsuccesful");
								</script>
								<?php
							}
				}
				
				else{
								?>
								<script >
									alert("Password are not matching");
								</script>
								<?php
				}
			
		}

		?>

		<section class=" container header-first">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-12 header-third  shadow ">
				
				<h1 class="cc">Sign up</h1>
				

			 <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
			
			<div class="form-group">
          <label class="oo">Name</label>
          <input type="text" name="name" placeholder="Enter your Name" class="form-control" required>
        </div>


			<div class="form-group">
          <label class="oo">Email</label>
          <input type="text" name="email" placeholder="Enter your email" class="form-control" required>
        </div>

        <div class="form-group">
          <label class="oo">Password</label>
          <input type="password" name="password" placeholder="Type your password" class="form-control" required>
      </div>

      <div class="form-group">
          <label class="oo">Confirm Password</label>
          <input type="password" name="confirm-password" placeholder="Re-type your password" class="form-control" required>
      </div>

      <div class="form-check ">
 			 <label class="form-check-label">
    			<input type="checkbox" class="form-check-input" value="">I agree with all<a href=""> Terms of use</a> & <a href="">Privacy policy.</a>
  			</label>
		</div>

      <input type="submit" name="submit" value="SIGN UP" class="btn btn-outline-primary mb-4 mt-3">
			
  		</form>
		</div>

		<div class="col-lg-6 col-md-6 col-12 header-second text-white text-left shadow p-3 ">
				<h2 class="kk">Welcome!</h2>
				<!-- <p >We all know how hard it can be to make a site look like the demo.We all know how hard it can be to make a site look like the demo.We all know how hard it can be to make a site look like the demo.</p> -->

				<p class="gg">Have an account?<a href="login.php" class="text-danger"> Log In</a></p>
			</div>



		</div>
		</section>

		<?php

?>
</body>
</html>