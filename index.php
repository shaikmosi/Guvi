<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
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
	<title>My website</title>
</head>
<body>
	<div style="text-align: center">
		<a center href="logout.php">Logout</a>
	</div>
	<!-- <h1>This is the index page</h1> -->

	<br>
	<!-- Hello, <?php echo $user_data['user_name']; ?> -->
	<div class="section section-full-screen section-login" style="background-image: url('assets/img/bg1.jpg'); background-size: cover; background-position: top center; min-height: 620px;">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="card card-signup">
                        <form class="form" method="" action="">
                            <div class="header header-primary text-center">
                                <div class="social-line">
									<img src="assets/img/sing_in_logo.png" alt="Thumbnail Image" class="">
                                </div>
                            </div>
                            <p style="margin-bottom:30px; font-size:30px; font-type:bold;" class="text-divider">Hello, <?php echo $user_data['user_name']; ?><br>
							<br>Welcome to GUVI</p>
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