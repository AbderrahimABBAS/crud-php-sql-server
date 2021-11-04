<link rel="stylesheet" type="text/css" href="login1.css"  />
<!-- <link rel="stylesheet" type="text/javascript" href="login1.js"  /> -->
<!-- <script type="text/javascript" src="login1.js"></script>
 -->
<?php
	session_start();
	
	// Check if user is already logged in
	if(isset($_SESSION['loggedIn'])){
		header('Location: pageAcueille.html');
		exit();
	}
	
	require_once('inc/config/constants.php');
	require_once('inc/config/db.php');
	require_once('inc/header.html');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="login-wrap">
	 <form action="" >
	<div class="login-html">
	    <!-- <button type="button" id="login" class="btn btn-primary">Login</button> -->  
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
		<div class="login-form">
			<div class="sign-in-htm">
				<div class="group">
					<label for="loginUsername" class="label">Username</label>
					<input id="loginUsername" name="loginUsername" type="text" class="input">
				</div>
				<div class="group">
					<label for="loginPassword" class="label">Password</label>
					<input id="loginPassword" name="loginPassword" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<input id="check" type="checkbox" class="check" checked>
					<label for="check"><span class="icon"></span> Keep me Signed in</label>
				</div>
				<div class="group">
					<!-- <input type="submit" id="login" class="button" value="Sign In"> -->
					<button type="button" id="login" class="button">Login</button>
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<a href="#forgot">Forgot Password?</a>
				</div>
			</div>
			<div class="sign-up-htm">
				<div class="group">
					<label for="user" class="label">Username</label>
					<input id="user" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<label for="pass" class="label">Repeat Password</label>
					<input id="pass" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<label for="pass" class="label">Email Address</label>
					<input id="pass" type="text" class="input">
				</div>
				<div class="group">
					<input type="submit" class="button" value="Sign Up">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<label for="tab-1">Already Member?</a>
				</div>
			</div>
		</div>
	</div>
</form>
</div>
<?php
	require 'inc/footer.php';
?>
</body>
</html>