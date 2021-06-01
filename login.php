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

<link rel="stylesheet" type="text/css" href="style10.css">
 <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />



</head>
<body class="heaader">

	<?php 

	include 'connection.php';

	if (isset($_POST['submit'])){

		$email = mysqli_real_escape_string($con,$_POST['email']);
		$password =  mysqli_real_escape_string($con,$_POST['password']);

		$email_search = "SELECT * FROM 	signup WHERE Email = '$email'";

		$query = mysqli_query($con,$email_search);

		$email_count =  mysqli_num_rows($query);

		if($email_count){

			
			$email_pass = mysqli_fetch_assoc($query);

			$dp_pass = $email_pass['Password'];

			if($password==$dp_pass){

				echo "connection succesful";
				header("Location: index.html");
				?>
				<script >
					alert("welcome");

				</script><?php


			}

			else{
				echo "wrong credentials";
				?>
				<script>
					alert("credentials doesnot match");
				</script><?php
			}

		}

	}

	?>

	<section class=" container header-first">
		<div class="row">
			
			<div class="col-lg-6 col-md-6 col-12 header-second text-white text-left shadow p-4 ">
				<h2 class="kk">Welcome to the website</h2>
				

				<p class="font-weight-bold gg">Login with social media</p>
				  <div class="d-flex justify-content-between   ">
				<a href="" class="btn btn-primary "><i class=" fa fa-facebook" aria-hidden="true"></i>    Login with facebook</a>

				<a href="" class="btn btn-danger mt-1"><i class=" fa fa-google" aria-hidden="true"></i>  Login with Gmail </a></div>
			</div>

			
			<div class="col-lg-6 col-md-6 col-12 header-third  shadow ">
				
				<h1 class="cc">Login</h1>
				<p class="text-secondary">Don't have an account? <a href="singup.php">Create your account</a>, it takes less than a minute. </p>

			 <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
			
			<div class="form-group">
          <label class="oo">Email</label>
          <input type="text" name="email" placeholder="Enter your email" class="form-control" required >
        </div>

        <div class="form-group">
          <label class="oo">Password</label>
          
      <input type="password" name="password" placeholder="Enter your password" class="form-control" required>
      </div>

        <div class="d-flex justify-content-around mt-4">

        <div class="form-check-inline">
 	 <label class="form-check-label">
    <input type="checkbox" class=" form-ckeck form-check-input " value="" >Remember Me
  	</label>
	</div>

		<a href="" class="text-secondary">Forgot Password?</a></div>
        <p class="d-flex justify-content-end aa"><input type="submit" name="submit" value="LOGIN" class="btn btn-outline-primary text-align-center mt-4 "></p>
      </form>
			</div>
		

		</div>
	</section>
	

</body>
</html>