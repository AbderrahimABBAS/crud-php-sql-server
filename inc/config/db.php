<?php

// $serverName = "POOL21-LAP";
// try
// {
// $conn = new PDO("sqlsrv:server=$serverName ;
// Database=mobilisTest","","");
// echo"connecter ";
// $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
// // $sql ="SELECT * FROM shop_inventory.[user]";
// // foreach ($conn->query($sql) as $row){
// // print_r($row);
// //  }
// }
// catch(Exception $e)
// {
// die(print_r($e->getMessage()));
// }



$serverName = "POOL21-LAP";
$connectionInfo = array("Database"=>"suivis_mobilis1");
$conn = sqlsrv_connect( $serverName, $connectionInfo);
if($conn) {
// echo"Connection established.<br/>";

// $a = '';
// $hashedPassword = '';
// $hashedPassword = md5($a);
// echo $hashedPassword ;

// $sql ="SELECT * FROM shop_inventory.[user]";
// foreach ($conn->query($sql) as $row){
// print_r($row);
//  }
}else{
echo"Connection could not be established.<br />";
die( print_r( sqlsrv_errors(), true));
}


?>
