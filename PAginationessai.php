<?php
/*---------------------------------------------------------------*/
/*
    Titre : Pagination classique                                                                                          
                                                                                                                          
    URL   : https://phpsources.net/code_s.php?id=47
    Date édition     : 05 Sept 2004                                                                                       
    Date mise à jour : 26 Sept 2019                                                                                      
    Rapport de la maj:                                                                                                    
    - refactoring du code en PHP 7                                                                                        
    - fonctionnement du code vérifié                                                                                    
*/
/*---------------------------------------------------------------*/?>
    CREATE TABLE IF NOT EXISTS `phpsources_test` (
      `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
      `texte` text,
      PRIMARY KEY (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

    --
    -- Données de la table `phpsources_test`
    --

    INSERT INTO `phpsources_test` (`id`, `texte`) VALUES
    (1, 'I love PHP'),
    (2, 'I do PHP'),
    (3, 'Hello world'),
    (4, 'Good morning'),
    (5, 'Good night'),
    (6, 'Im Free');
                               
<?php

    $db_server = 'localhost'; // Adresse du serveur MySQL
    $db_name = '';            // Nom de la base de données
    $db_user_login = 'root';  // Nom de l'utilisateur
    $db_user_pass = '';       // Mot de passe de l'utilisateur

    // Ouvre une connexion au serveur MySQL
    $conn = mysqli_connect($db_server,$db_user_login, $db_user_pass, $db_name);


    $page = isset($_GET['page']) ? $_GET['page'] : ''; 
    $debut = '';
    // Prepare le requete MySql
    $requete = "SELECT * from phpsources_test";
    $ret = mysqli_query($conn,$requete);

    // Variable nombre d'enreg par page
    $limit=2;


    if($debut==""){$debut=0;}
    $debut=$page*$limit;
    // Compte le nombre de champ
    $nb_total=$ret->num_rows;
    // Requete
    $limite = mysqli_query($conn,"$requete limit $debut,$limit");


    // Affiche le page par page avec ses liens
    if ($page>0) {
    $precedent=$page-1;
    echo "<a href=\"".$_SERVER['PHP_SELF']."?page=$precedent\">PRECEDENT</a>";
    }

    $i=0;
    $j=1;

    if($nb_total>$limit) {
    while($i<($nb_total/$limit)) {
    if($i!=$page){echo "<a href=\"".$_SERVER['PHP_SELF']."?page=$i\">$j</a> ";}
    else { echo "<b>$j</b>";}
    $i++;$j++;
    }
    }

    if($debut+$limit<$nb_total) {
    $suivant=$page+1;
    echo "<a href=\"".$_SERVER['PHP_SELF']."?page=$suivant\">SUIVANT</a>";
    }


    //Affichage le contenu de votre table
    //avec une limite, dans l'exemple $limit est à 4

    $limit_str = "LIMIT ". $page * $limit .",$limit";

    $result = mysqli_query($conn,"
                          SELECT * 
                          FROM phpsources_test
                          ORDER BY id 
                          ASC $limit_str");
    while ($row = mysqli_fetch_array ($result) )
    {
    // affiche les different champs
    echo $row['texte'];
    echo"<br />";
    }
?>
//////////////////////////////////////////////////
/////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////
<!-- Fichier complet
Voici le fichier complet correspondant à la mise en place de la pagination -->

<?php
// On détermine sur quelle page on se trouve
if(isset($_GET['page']) && !empty($_GET['page'])){
    $currentPage = (int) strip_tags($_GET['page']);
}else{
    $currentPage = 1;
}
// On se connecte à là base de données
require_once('connect.php');

// On détermine le nombre total d'articles
$sql = 'SELECT COUNT(*) AS nb_articles FROM `articles`;';

// On prépare la requête
$query = $db->prepare($sql);

// On exécute
$query->execute();

// On récupère le nombre d'articles
$result = $query->fetch();

$nbArticles = (int) $result['nb_articles'];

// On détermine le nombre d'articles par page
$parPage = 10;

// On calcule le nombre de pages total
$pages = ceil($nbArticles / $parPage);

// Calcul du 1er article de la page
$premier = ($currentPage * $parPage) - $parPage;

$sql = 'SELECT * FROM `articles` ORDER BY `created_at` DESC LIMIT :premier, :parpage;';

// On prépare la requête
$query = $db->prepare($sql);

$query->bindValue(':premier', $premier, PDO::PARAM_INT);
$query->bindValue(':parpage', $parPage, PDO::PARAM_INT);

// On exécute
$query->execute();

// On récupère les valeurs dans un tableau associatif
$articles = $query->fetchAll(PDO::FETCH_ASSOC);

require_once('close.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <div class="row">
            <section class="col-12">
                <h1>Liste des articles</h1>
                <table class="table">
                    <thead>
                        <th>ID</th>
                        <th>Titre</th>
                        <th>Date</th>
                    </thead>
                    <tbody>
                        <?php
                        foreach($articles as $article){
                        ?>
                            <tr>
                                <td><?= $article['id'] ?></td>
                                <td><?= $article['titre'] ?></td>
                                <td><?= $article['created_at'] ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
                <nav>
                    <ul class="pagination">
                        <!-- Lien vers la page précédente (désactivé si on se trouve sur la 1ère page) -->
                        <li class="page-item <?= ($currentPage == 1) ? "disabled" : "" ?>">
                            <a href="./?page=<?= $currentPage - 1 ?>" class="page-link">Précédente</a>
                        </li>
                        <?php for($page = 1; $page <= $pages; $page++): ?>
                          <!-- Lien vers chacune des pages (activé si on se trouve sur la page correspondante) -->
                          <li class="page-item <?= ($currentPage == $page) ? "active" : "" ?>">
                                <a href="./?page=<?= $page ?>" class="page-link"><?= $page ?></a>
                            </li>
                        <?php endfor ?>
                          <!-- Lien vers la page suivante (désactivé si on se trouve sur la dernière page) -->
                          <li class="page-item <?= ($currentPage == $pages) ? "disabled" : "" ?>">
                            <a href="./?page=<?= $currentPage + 1 ?>" class="page-link">Suivante</a>
                        </li>
                    </ul>
                </nav>
            </section>
        </div>
    </main>
</body>
</html>




/////////////////////////////////////////////
<?php

require_once ('includes/connect.inc.php');

$items_on_page = 12; 

if(isset($_GET['page']))
{
$page = $_GET['page'];
$start_from = ($_GET['page']-1)*$items_on_page;
}else
{
$page = 1;
$start_from = 0;
}

$sql = "SELECT p.productID, p.catalogueID, p.colour1, p.colour2, p.colour3, ROW_NUMBER() OVER(ORDER BY p.productID ASC) AS rownumber 
FROM products p JOIN product_catalogue c ON p.catalogueID = c.catalogueID 
WHERE p.category1=2 OR p.category2=2"; 

$params = array($_GET['category1']&&($_GET['category2']));

$stmt = sqlsrv_query( $conn, $sql, $params);
if( $stmt === false ) {
     die( print_r( sqlsrv_errors(), true));
}

$sql2 = "SELECT COUNT(productID) AS 'rowcount' FROM products WHERE category1=2 OR category2=2";
$stmt2 = sqlsrv_query( $conn, $sql2,$params);
if( $stmt2 === false ) {
     die( print_r( sqlsrv_errors(), true));
}


while( $row2 = sqlsrv_fetch_array( $stmt2)){$total_records = $row2['rowcount'];}

$total_pages = ceil($total_records / $items_on_page);

?>

<?php
                    $dynamicList = "";
                    while( $row = sqlsrv_fetch_array($stmt)) 
                        {   
                            $rownumber = $row['rownumber'];
                            $end_at = $items_on_page + $start_from;

                            if (($rownumber>$start_from)&&($rownumber<=$end_at))
                            {
                                $prod_id = $row['productID'];
                                $cat_id = $row['catalogueID'];
                                $col_id1 = $row['colour1'];
                                $col_id2 = $row['colour2'];
                                $col_id3 = $row['colour3'];

                                $sql3 = "SELECT * FROM product_colours WHERE colourID =? OR colourID =? OR colourID =?"; 
                                $params3 = array($col_id1,$col_id2,$col_id3);
                                $stmt3 = sqlsrv_query( $conn, $sql3, $params3);

                                $count = 1;
                                while( $row3 = sqlsrv_fetch_array( $stmt3)) 
                                {
                                    switch ($count)
                                    {
                                        case 1:$colour1 = $row3['colour_description'];break;
                                        case 2:$colour2 = $row3['colour_description'];break;
                                        case 3:$colour3 = $row3['colour_description'];break;
                                    }
                                    $count++;
                                }

                                $sql3 = "SELECT catalogueID, product_name, product_price, description FROM product_catalogue WHERE catalogueID = ?"; 
                                $params3 = array($cat_id);
                                $stmt3 = sqlsrv_query( $conn, $sql3, $params3);

                                $columncount = 0;
$dynamicList = '<table width="744" border="0" cellpadding="6"><tr>';
while( $row3 = sqlsrv_fetch_array( $stmt3)) 
{
  $prod_name = $row3['product_name'];
  $prod_price = $row3['product_price'];
  $prod_desc = $row3['description'];

  $dynamicList .= '<td width="135"><a href="product_details_women.php?productID=' . $prod_id . '">
      <img src="images/products/Small/Women/' . $prod_id . '.jpg" alt="' . $prod_name . '" width="129" height="169" border="0">
    </a>
  </td>

  <td width="593" valign="top">' . $prod_name . '<br>
  £' . $prod_price . '<br>
  <a href="product_details_women.php?productID=' . $prod_id . '">View Product Details</a></td>';

if($columncount == 2)
{
$dynamicList .= '</tr><tr>';
$columncount = 0;
}
else
{
  $columncount++; 
}
}


$dynamicList .= '</tr></table>';

echo $dynamicList;



}

}

?>

<?php
                        

                    function Pagination($x)
                    {   
                        $pageURL = $_SERVER['PHP_SELF']."?".$_SERVER['QUERY_STRING'];
                        //$pageURL = $_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']."?".$_SERVER['QUERY_STRING'];                           
                        $pageURL = preg_replace("/\b&page=([0-9]{1,4})/","",$pageURL);                          
                        return $pageURL."&page=".$x;                
                    }

                    if ($page != 1)
                    {
                        echo "<a href='".Pagination($page-1)."'>Previous</a>";
                    } 
                    else
                    {
                        echo "Previous";
                    }

                    echo " | ";
                    for ($i=1; $i<=$total_pages; $i++) 
                    { 
                        if ($i != $page)
                        {
                            echo "<a href='".Pagination($i)."'> ".$i." </a>"; 
                        }
                        else
                        {
                            echo " ".$i." ";
                        }
                    } 
                    echo " | ";

                    if ($page != $total_pages)
                    {
                        echo "<a href='".Pagination($page+1)."'>Next</a>";
                    } 
                    else
                    {
                        echo "Next";
                    }
                    ?>
/////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////
<?php 
//Connects your database
$dbhost = 'localhost';
$dbuser = 'username';
$dbpass = 'password';
$db = 'database';
$connect_db = mssql_connect ( $dbhost, $dbuser, $dbpass ) or die(mssql_error());
mssql_select_db ( $db, $connect_db ) or die(mssql_error());

//This checks to see if there is a page number, that the number is not 0, and that the number is actually a number. If not, it will set it to page number to 1.
if ((!isset($_GET['pagenum'])) || (!is_numeric($_GET['pagenum'])) || ($_GET['pagenum'] < 1)) { $pagenum = 1; }
else { $pagenum = $_GET['pagenum']; }

//Now you can use this query to see how many rows you are dealing with
//Edit $result as your query
$result = mssql_query ("SELECT name FROM table_name") or die(mssql_error());
$rows = mssql_num_rows($result);

//This is the number of results displayed per page 
$page_rows = 4; 

//This tells us the page number of our last page 
$last = ceil($rows/$page_rows); 

//Seeing if the current page we are on is the last
if (($pagenum > $last) && ($last > 0)) { $pagenum = $last; }

//This sets the range to display in our query 
$max = ($pagenum - 1) * $page_rows;

//This is your query again, just spiced up a bit
//mssql doesnt have that nice limit ability like mysql... so we use this to make it work...
//the way the table is designed is, "id" is the unique id, and "name" is just a list of names i have in there.
$result2 = mssql_query("select top $page_rows name from table_name where id not in (select top $max id from table_name order by id asc) order by id asc") or die(mssql_error()); 

//This is where you show your results
while($info = mssql_fetch_array( $result2 )) 
{ 
print $info['name']; 
echo "<br>";
} 
echo "<p>";

// This shows the page they are on, and the total number of pages
echo " --Page $pagenum of $last-- <p>";

// First we check if we are on page one. If we are then we don't need a link to the previous page or the first page so we do nothing. If we aren't then we generate links to the 

first page, and to the previous page.
if ($pagenum == 1) { } 
else 
{
echo " <a href='{$_SERVER['PHP_SELF']}?pagenum=1'> <<-First</a> ";
echo " ";
$previous = $pagenum-1;
echo " <a href='{$_SERVER['PHP_SELF']}?pagenum=$previous'> <-Previous</a> ";
} 

//just a spacer
echo " ---- ";

//This does the same as above, only checking if we are on the last page, and then generating the Next and Last links
if ($pagenum == $last) 
{
} 
else {
$next = $pagenum+1;
echo " <a href='{$_SERVER['PHP_SELF']}?pagenum=$next'>Next -></a> ";
echo " ";
echo " <a href='{$_SERVER['PHP_SELF']}?pagenum=$last'>Last ->></a> ";
} 
?>

<!-- SELECT *
FROM table_name_here
ORDER BY (SELECT NULL AS NOORDER)
OFFSET 9 ROWS 
FETCH NEXT 25 ROWS ONLY --> 