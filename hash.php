<?php
// password_hash('Doe',PASSWORD_DEFAULT,['cost' => 14]);

// var_dump(password_verify('Doe','aaa'));

// /////////
// $password = "karlhadwen";
// $hash = password_hash($password, PASSWORD_BCRYPT);
// $options = array('cost'=>11);

// echo $hash;
// if(password_verify($password, $hash)){

// 	if(password_needs_rehash($hash, PASSWORD_DEFAULT, $options)){
// 		$newHash = password_hash($password, PASSWORD_DEFAULT, $options);

// 		echo "<br /> <br />New Hash: " .$newHash;
// 	}
	
// }

////////////////////////////////////////
$password = "karlhadwen";
$hash = password_hash($password, PASSWORD_BCRYPT);
$options = array('cost'=>12);

echo $hash;
if(password_verify($password, $hash)){

	echo "<br /><br />Password is valid";

	
}else {
	echo"<br /><br />Password is not valid";
}
if(password_verify($password, $hash)){
if(password_needs_rehash($hash, PASSWORD_DEFAULT, $options)){
		$newHash = password_hash($password, PASSWORD_DEFAULT, $options);

		echo "<br /> <br />New Hash: " .$newHash;
	}
}
/////////////////////////////////
$password=$_POST['password'];
$select_user="select * from user ";
$run_qry=mysqli_query($conn,$select_user);
if(mysqli_num_rows($run_qry)>0){
	while($row=mysqli_fetch_assoc($run_qry)){
		if(password_verify('$password',$row['password'])){
			if(password_verify('$password',$row['password'])){
				header("location:welcome.php");
			}
		}
	}

}
?>

//////////////////////////////////
<?php 
   session_start(); 
   include 'dbhandler.php'; // shouldn't be include './dbhandler.php'; ? 
   $uid = $_POST['uid']; 
   $pwd = $_POST['pwd']; 

   $sql = "SELECT * FROM user WHERE uid='".mysqli_real_escape_string($conn, $uid)."'"; 
   $result = mysqli_query($conn, $sql);
   if (mysqli_num_rows($result) === 1) {
     $row = mysqli_fetch_assoc($result);
     if (password_verify($pwd, $row['pwd'])) {
       $_SESSION['id'] = $row['id']; 
       $_SESSION['uid'] = $row['uid']; 
       $_SESSION['pwd'] = $row['pwd'];
       // redirect to "login success" page would be a better solution
       echo "<h1 style='color:green;'>Successfully Logged In";
     } else {
       echo "Invalid password";
     }
   } else {
     echo "Your login name is invalid";
   }


   /////////////////////////////////
require_once("config.php");
if(isset($_POST['submit'])){
	$email = trim($_POST['email']);
	$password = trim($_POST['password']);
	
	$sql = "select * from users where email = '".$email."'";
	$rs = mysqli_query($conn,$sql);
	$numRows = mysqli_num_rows($rs);
	
	if($numRows  == 1){
		$row = mysqli_fetch_assoc($rs);
		if(password_verify($password,$row['password'])){
			echo "Password verified";
		}
		else{
			echo "Wrong Password";
		}
	}
	else{
		echo "No User found";
	}
}

//////////////////////////
if(!empty($_SESSION['myValue'])
{
    echo $_SESSION['myValue'];
}
else
{
    echo "Session not set yet.";
}

 ?>
 //////////////////////////////// inseret dans edite les informations de code centre..............
 /////// voir comment travailler avec les session..........

 //////////require 'sesssion.php';