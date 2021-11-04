
<?php
require_once('inc/config/constants.php');
    require_once('inc/config/db.php');
    require_once('inc/header.html');
    require 'inc/navigation.php';
?>

<html>

<head>

<title>ThaiCreate.Com PHP & SQL Server (sqlsrv)</title>

</head>

<body>

<?php

ini_set('display_errors', 1);

error_reporting(~0);

// $serverName = "localhost";

// $userName = "sa";

// $userPassword = '';

// $dbName = "mydatabase";

// $connectionInfo = array("Database"=>$dbName, "UID"=>$userName, "PWD"=>$userPassword, "MultipleActiveResultSets"=>true);

// $conn = sqlsrv_connect( $serverName, $connectionInfo);

// if( $conn === false ) {

// die( print_r( sqlsrv_errors(), true));

// }

$sql = "SELECT * FROM dbo.[scan]";

$params = array();

$options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );

$query = sqlsrv_query( $conn, $sql , $params, $options );

$num_rows = sqlsrv_num_rows($query);

$per_page = 2;   // Per Page

$page  = 1;

if(isset($_GET["Page"]))

{

$page = $_GET["Page"];

}

$prev_page = $page-1;

$next_page = $page+1;

$row_start = (($per_page*$page)-$per_page);

if($num_rows<=$per_page)

{

$num_pages =1;

}

else if(($num_rows % $per_page)==0)

{

$num_pages =($num_rows/$per_page) ;

}

else

{

$num_pages =($num_rows/$per_page)+1;

$num_pages = (int)$num_pages;

}

$row_end = $per_page * $page;

if($row_end > $num_rows)

{

$row_end = $num_rows;

}

$sql = " SELECT c.* FROM (

SELECT ROW_NUMBER() OVER(ORDER BY CustomerID) AS RowID,*  FROM dbo.[scan]

) AS c

WHERE c.RowID > $row_start AND c.RowID <= $row_end

";

$query = sqlsrv_query( $conn, $sql );

 

?>

<table width="600" border="1">

<tr>

<th width="91"> <div align="center">CustomerID </div></th>

<th width="98"> <div align="center">Name </div></th>

<th width="198"> <div align="center">Email </div></th>

<th width="97"> <div align="center">CountryCode </div></th>

<th width="59"> <div align="center">Budget </div></th>

<th width="71"> <div align="center">Used </div></th>

</tr>

<?php

while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC))

{

?>

<tr>

<td><div align="center"><?php echo $result["CustomerID"];?></div></td>

<td><?php echo $result["Name"];?></td>

<td><?php echo $result["Email"];?></td>

<td><div align="center"><?php echo $result["CountryCode"];?></div></td>

<td align="right"><?php echo $result["Budget"];?></td>

<td align="right"><?php echo $result["Used"];?></td>

</tr>

<?php

}

?>

</table>

<br>

Total <?php echo $num_rows;?> Record : <?php echo $num_pages;?> Page :

<?php

if($prev_page)

{

echo " <a href='$_SERVER[SCRIPT_NAME]?Page=$prev_page'><< Back</a> ";

}

for($i=1; $i<=$num_pages; $i++){

if($i != $page)

{

echo "[ <a href='$_SERVER[SCRIPT_NAME]?Page=$i'>$i</a> ]";

}

else

{

echo "<b> $i </b>";

}

}

if($page!=$num_pages)

{

echo " <a href ='$_SERVER[SCRIPT_NAME]?Page=$next_page'>Next>></a> ";

}

sqlsrv_close($conn);

?>

</body>

</html>