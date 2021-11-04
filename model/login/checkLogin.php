<?php
	session_start();
	require_once('../../inc/config/constants.php');
	require_once('../../inc/config/db.php');
	
	if(isset($_SESSION['loggedIn'])){
		header('Location: index.php');
		exit();
	}

	$loginUsername = '';
	$loginPassword = '';
	$hashedPassword = '';
	// $username = '';
	if(isset($_POST['loginUsername'])){
		// $loginUsername = mysql_real_escape_string($_POST['loginUsername']);
		// $loginPassword = mysql_real_escape_string($_POST['loginPassword']);

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
			// $hash = password_hash($password, PASSWORD_BCRYPT);
			// $hashedPassword = md5($loginPassword);

/// ajouter la condition  hashedPassword
			$hashedPassword = password_hash($loginPassword, PASSWORD_BCRYPT);
			
			 // echo $hashedPassword;
			
			
         // $checkUserSql = "SELECT * FROM dbo.[user] WHERE username='$loginUsername' AND password='$hashedPassword' ";
			 $checkUserSql = "SELECT * FROM dbo.[agent] WHERE username='$loginUsername' ";
    
 
         $result = sqlsrv_query($conn, $checkUserSql);  //$conn is your connection in 'connection.php'

// checks if the search was made
if($result === false){
     die( print_r( sqlsrv_errors(), true));
}
//////////////////
// if(password_verify($loginPassword, $hashedPassword)){

// 	echo "<br /><br />Password is valid";

	
// }else {
// 	echo"<br /><br />Password is not valid";
// }
////////////////////
#checks if the search brought some row and if it is one only row
if(sqlsrv_has_rows($result) != 1){
       echo "Username/password not found";
}
else{
///////////////////////////////////////
	// $row = mysqli_fetch_assoc($rs);
	// 	if(password_verify($password,$row['password'])){
	// 		echo "Password verified";
	// 	}
	// 	else{
	// 		echo "Wrong Password";
	// 	}
	
	// else{
	// 	echo "No User found";
	// }
	////////////////////////////////
#creates sessions
    if($row = sqlsrv_fetch_array($result)){
       $_SESSION['nom_agent'] = $row['nom_agent'];
       $_SESSION['prenom_agent'] = $row['prenom_agent'];
      
       $_SESSION['code_centre'] = $row['code_centre'];
       // $_SESSION['level'] = $row['level'];
    	// $_SESSION['loggedIn'] = '1';
		$_SESSION['username'] = $row['username'];
		echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>Login success! Redirecting you to home page...</div>';

//////////////////////////////////////////////////////
		if(password_verify($loginPassword,$row['password'])){
			echo "Password verified";
			$_SESSION['loggedIn'] = '1';
			
		}
		else{
			echo "Wrong Password";
		}
	
	// else{
	// 	echo "No User found";
	// }
		////////////////////////////////////////////////

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
			
			
		} 
		else 
		{
			echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Please enter Username and Password</div>';
			exit();
		}
	}
?>