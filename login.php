<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicon/apple-icon.png">
	<link rel="icon" type="image/png" href="assets/img/favicon/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

	<title>GUVI LOGIN</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>

	<!-- Fonts and icons -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"/>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700"/>

	<!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="assets/css/material-kit.css"/>
</head>

<body>

    <div class="section section-full-screen section-login" style="background-image: url('assets/img/bg1.jpg'); background-size: cover; background-position: top center; min-height: 620px;">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="card card-signup">
                        <form class="form" method="post" action="">
                            <div class="header header-primary text-center">
                                <div class="social-line">
									<img src="assets/img/sing_in_logo.png" alt="Thumbnail Image" class="">
                                </div>
                                <h4>Login</h4>
                            </div>
                            <p class="text-divider">Welcome to GUVI</p>
                            <div class="content">

                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">face</i>
                                    </span>
                                    <div class="form-group is-empty"><input name="user_name" type="text" class="form-control" placeholder="User Name..."><span class="material-input"></span></div>
                                </div>

                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">lock_outline</i>
                                    </span>
                                    <div class="form-group is-empty"><input name="password" type="password" placeholder="Password..." class="form-control"><span class="material-input"></span></div>
                                </div>
								
                            </div>
							<div class="text-center forgot-text">
								<a href="#" class="btn btn-simple btn-danger btn-lg">Forgot password?<div class="ripple-container"></div></a>
							</div>
                            <div class="footer text-center">
								<!-- <a id="button" stype="submit" class="btn btn-danger">Login<div class="ripple-container"></div></a> -->
								<input id="button" type="submit" value="Login"><br><br>
                            </div>
                            <div class="text-center">
								<a href="signup.php" class="btn btn-simple btn-danger btn-lg">Create a new account<div class="ripple-container"></div></a>
							</div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

</body>

	<!--   Core JS Files   -->
	<script type="text/javascript" src="assets/js/jquery-1.10.2.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/material.min.js"></script>

	<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
	<script type="text/javascript" src="assets/js/material-kit.js"></script>

</html>



