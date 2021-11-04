<?php
	session_start();
	require_once('../../inc/config/constants.php');
	require_once('../../inc/config/db.php');
	
	$loginUsername = '';
	$loginPassword = '';
	$hashedPassword = '';
	// $username = '';
	if(isset($_POST['loginUsername'])){
		$loginUsername = $_POST['loginUsername'];
		$loginPassword = $_POST['loginPassword'];
		
		if(!empty($loginUsername) && !empty($loginUsername)){
			
			// Sanitize username
			$loginUsername = filter_var($loginUsername, FILTER_SANITIZE_STRING);
			
			// Check if username is empty
			if($loginUsername == ''){
				echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Please enter Username</div>';
				exit();
			}
			
			// Check if password is empty
			if($loginPassword == ''){
				echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Please enter Password</div>';
				exit();
			}
			
			// Encrypt the password
			$hashedPassword = md5($loginPassword);
			
			
         $checkUserSql = "SELECT * FROM shop_inventory.[user] WHERE username='$loginUsername' AND password='$hashedPassword' ";
    
 
         $result = sqlsrv_query($conn, $checkUserSql);  //$conn is your connection in 'connection.php'

// checks if the search was made
if($result === false){
     die( print_r( sqlsrv_errors(), true));
}

#checks if the search brought some row and if it is one only row
if(sqlsrv_has_rows($result) != 1){
       echo "User/password not found";
}
else{

#creates sessions
    if($row = sqlsrv_fetch_array($result)){
       // $_SESSION['id'] = $row['id'];
       // $_SESSION['name'] = $row['name'];
       // $_SESSION['user'] = $row['user'];
       // $_SESSION['level'] = $row['level'];
    	$_SESSION['loggedIn'] = '1';
		$_SESSION['fullName'] = $row['fullName'];
		echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>Login success! Redirecting you to home page...</div>';
		exit();
    }
    else {
				echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Incorrect Username / Password</div>';
				exit();
			}
#redirects user
    
    // header("Location: restrict.php");
}
        


			// Check if user exists or not
			// if($checkUserStatement->rowCount() > 0){
			// 	// Valid credentials. Hence, start the session
			// 	$row = $checkUserStatement->fetch(PDO::FETCH_ASSOC);

			// 	$_SESSION['loggedIn'] = '1';
			// 	$_SESSION['fullName'] = $row['fullName'];
				
			// 	echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>Login success! Redirecting you to home page...</div>';
			// 	exit();
			// } 
			// else {
			// 	echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Incorrect Username / Password</div>';
			// 	exit();
			// }
			
			
		} else {
			echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Please enter Username and Password</div>';
			exit();
		}
	}
?>