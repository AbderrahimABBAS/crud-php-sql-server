
<?php
require_once('inc/config/constants.php');
    require_once('inc/config/db.php');
    require_once('inc/header.html');
    require 'inc/navigation.php';
?>
<html>
<head>
    <title>Pagination</title>
    <!-- Bootstrap CDN -->
    <!-- https://www.myprogrammingtutorials.com/create-pagination-with-php-and-mysql.html -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <?php
// Get the current page number
        if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }

// The formula for php pagination

// You can always manage the number of records to be displayed in a page by changing the value of $no_of_records_per_page variable.


        $no_of_records_per_page = 10;
        $offset1 = ($pageno-1) * $no_of_records_per_page;

        // $conn=mysqli_connect("localhost","my_user","my_password","my_db");
        // Check connection
        // if (mysqli_connect_errno()){
        //     echo "Failed to connect to MySQL: " . mysqli_connect_error();
        //     die();
        // }

// Get the number of total number of pages

        $total_pages_sql = "SELECT COUNT(*) FROM dbo.[scan]";
         $result = sqlsrv_query($conn, $total_pages_sql);
        
        $total_rows = sqlsrv_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);
        // echo $total_pages; 
        // echo $total_rows; 
        echo $offset1; 


// Constructing the SQL Query for pagination
// $sql = "SELECT * FROM dbo.[scan] ";

        $sql = "SELECT * FROM dbo.[scan] limit $offset1, $no_of_records_per_page";
        $res_data = sqlsrv_query($conn,$sql);
        if($res_data === false){
     die( print_r( sqlsrv_errors(), true));
}
        while($row = sqlsrv_fetch_array($res_data)){
            //here goes the data
        }
        sqlsrv_close($conn);
    ?>

<!-- Pagination buttons

These Buttons are served to users as Next Page & Previous Page, so that they can easily navigate through you pages. Here I am using bootstrap’s pagination button, you can use your own buttons if you want. -->
    
    <ul class="pagination">
        <li><a href="?pageno=1">First</a></li>
        <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
        </li>
        <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
        </li>
        <li><a href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
    </ul>
</body>
</html>


/////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////

<html>

<head>

<title>ThaiCreate.Com PHP & SQL Server (sqlsrv)</title>

</head>

<body>

<?php

ini_set('display_errors', 1);

error_reporting(~0);

$serverName = "localhost";

$userName = "sa";

$userPassword = '';

$dbName = "mydatabase";

$connectionInfo = array("Database"=>$dbName, "UID"=>$userName, "PWD"=>$userPassword, "MultipleActiveResultSets"=>true);

$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn === false ) {

die( print_r( sqlsrv_errors(), true));

}

$sql = "SELECT * FROM customer";

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

SELECT ROW_NUMBER() OVER(ORDER BY CustomerID) AS RowID,*  FROM customer

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

////////////////////////////////////
<?php

require 'conn.php';
$pdo = dbConnect();

$limite = 10;

$pg = (isset($_GET['pg'])) ? (int)$_GET['pg'] : 1;

$inicio = ($pg * $limite) - $limite;


$sql = "SELECT * FROM ( SELECT *, ROW_NUMBER() OVER (ORDER BY ID_USUARIO) as row FROM tbl_usuario) a WHERE row between ".$inicio." and ".$limite.""; 

try {

        $query = $pdo->prepare($sql);
        $query->execute();

        } catch (PDOexception $error_sql){

                echo 'Erro ao retornar os Dados.'.$error_sql->getMessage();
}

while($linha = $query->fetch(PDO::FETCH_ASSOC)){ ?>

                <?php 
                echo $linha['NOME'].'</br>'; 

                ?> 
<?php }


$sql_Total = 'SELECT ID_USUARIO FROM tbl_usuario';

try {
        $query_Total = $pdo->prepare($sql_Total);
        $query_Total->execute();
        $query_result = $query_Total->fetchAll(PDO::FETCH_ASSOC);
        $query_count =  $query_Total->rowCount(PDO::FETCH_ASSOC);


        $qtdPag = ceil($query_count/$limite);

        } catch (PDOexception $error_Total){

                echo 'Erro ao retornar os Dados. '.$error_Total->getMessage();

        }


        echo "<div class='relax h30'></div>";
        echo '<a href="teste?pg=1">PRIMEIRA PÁGINA</a>&nbsp;';
        echo '<ul id="paginacao">';
    echo '<li><a class="anterior" href="teste?pg=1">Anterior</a></li>';

        if($qtdPag > 1 && $pg <= $qtdPag){

                for($i = 1; $i <= $qtdPag; $i++){

                        if($i == $pg){

                                echo "<li><a class='ativo'>".$i."</a></li>";

                        } else {

                                echo "<li><a href='teste?pg=$i'>".$i."</a></li>";

                        }

                }

        }

        echo "<li><a class='proxima' href='teste?pg=$qtdPag'>Próxima</a></li>";

?>