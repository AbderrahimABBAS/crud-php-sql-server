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
			
			// Check the given credentials
			// $aa = $_GET['username']
   //               print_r($_POST['username']); 
               // $sql ="SELECT * FROM [shop_inventory].[user] WHERE [username] = "$aa"";
               //            foreach ($conn->query($sql) as $row){
               //                 print_r($row);
               //                          }
			
               // $username = $_POST['username']; 
               //   echo $username;$donnees['console'] :".$_POST['username']."

			// $checkUserSql = "  SELECT * FROM shop_inventory.[user] WHERE shop_inventory.[user].[username] = a   ";
			// $checkUserStatement = $conn->prepare($checkUserSql);
			// $checkUserStatement->bindParam(':username', $loginUsername);
			// $checkUserStatement->bindParam(':password', $hashedPassword);
            // WHERE calories < :calories AND couleur LIKE :couleur'
                   //  $sql ="SELECT * FROM shop_inventory.[user] WHERE [username] = :username ";
                   // foreach ($conn->query($sql) as $row){
                   //     print_r($row);
                   //                        }

                                
                    // foreach ($conn->query($checkUserSql) as $row){
                    //            print_r($row);
                    //                     }
			  // $checkUserStatement->execute(['user.[username]' => $loginUsername]) ;
			  // $query->execute(array(‘:title’=>$title));/////////////////////////////
			      // if( $checkUserStatement === false ) {
         //           die( print_r( sqlsrv_errors(), true));
         //                               }

			// $sql ="SELECT * FROM [shop_inventory].[user] WHERE [username] = 'a' AND 
			// [password] = '1'";
                          // foreach ($conn->query($checkUserSql) as $row){
                          //      print_r($row);
                          //               }

//                $username = $_REQUEST['uNm'];
//                 $password  = $_REQUEST['uPw'];WHERE user='{$user}' AND"
         // ."password='{$hashedPassword}'

         // $checkUserSql = "SELECT * FROM shop_inventory.[user] WHERE username='{$loginUsername}' AND"
         // ."password='{$hashedPassword}'";
         $checkUserSql = "SELECT * FROM shop_inventory.[user] WHERE username='$loginUsername' AND password='$hashedPassword' ";
    
 //        $sql ="SELECT * FROM shop_inventory.[user]";
 //         foreach ($conn->query($sql) as $row){
 //        print_r($row);
 // }
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
        
// $stmt = sqlsrv_query( $conn, $tsql, array(), array( "Scrollable" => SQLSRV_CURSOR_KEYSET ));
// if($stmt == true){
// 			$_SESSION['loggedIn'] = '1';
// 			$_SESSION['fullName'] = $row['fullName'];
//     echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>Login success! Redirecting you to home page...</div>';
// 				exit();
// //     header('Location: index.php');
// //     die();
//                 }
				// else{
//     header('Location: error.html');
//     die();
// }///////////
#creates sessions
    // while($row = sqlsrv_fetch_array($result)){
    //    $_SESSION['id'] = $row['id'];
    //    $_SESSION['name'] = $row['name'];
    //    $_SESSION['user'] = $row['user'];
    //    $_SESSION['level'] = $row['level'];
    // }

			// Check if user exists or not
			if($checkUserStatement->rowCount() > 0){
				// Valid credentials. Hence, start the session
				$row = $checkUserStatement->fetch(PDO::FETCH_ASSOC);

				$_SESSION['loggedIn'] = '1';
				$_SESSION['fullName'] = $row['fullName'];
				
				echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>Login success! Redirecting you to home page...</div>';
				exit();
			} 
			else {
				echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Incorrect Username / Password</div>';
				exit();
			}
			
			
		} else {
			echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Please enter Username and Password</div>';
			exit();
		}
	}
?>