<?php
  session_start();
  
  
  require_once('inc/config/constants.php');
  require_once('inc/config/db.php');
  require_once('inc/header.html');
?>
  <body>
<?php
  require 'inc/navigation.php';
?>
<style type="text/css">
body{
  background: #f2f2f2;
  font-family: 'Open Sans', sans-serif;
}

/*.recherche {
  width: 100%;
  position: relative
}

.searchTerm {
  float: left;
  width: 100%;
  border: 3px solid #00B4CC;
  padding: 15px;
  height: 20px;
  border-radius: 5px;
  outline: none;
  color: #9DBFAF;
}

.searchTerm:focus{
  color: #00B4CC;
}

.searchButton {
  position: absolute;  
  right: -50px;
  width: 40px;
  height: 36px;
  border: 1px solid #00B4CC;
  background: #00B4CC;
  text-align: center;
  color: #fff;
  border-radius: 5px;
  cursor: pointer;
  font-size: 20px;
}*/

/*Resize the wrap to see the search bar change!
.conteneur{
  width: 30%;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}*/

////////////////////////////////////////////////////////////
.dropbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>
<?php

$_usernm=$_SESSION['username'];
$_usernm1=$_SESSION['nom_agent'];
$_usernm2=$_SESSION['prenom_agent'];

$checkUserSqlag = "SELECT * FROM dbo.[agent] where username='$_usernm' and nom_agent='$_usernm1' and prenom_agent='$_usernm2'" ;

$resultag = sqlsrv_query($conn, $checkUserSqlag);  //$conn is your connection in 'connection.php'

// checks if the search was made
if($resultag === false){
     die( print_r( sqlsrv_errors(), true));
}

if (!$resultag) {
    trigger_error('Invalid query: ' . $conn->error);
}
 while($row = sqlsrv_fetch_array($resultag)){
                                                         // echo htmlspecialchars($row['etat']);
                                                         // echo htmlspecialchars($row['poste']);
                                                         $i=$row['etat'];
                                                          $j=$row['poste'];
                                                           }
                                                           ?>
<?php
                                                           if ($i=="inactive") {

  echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>Votre compte est inactive</div>';
} 

else if ($i=="Active") {
  // elseif($j=="saisie" || $j=="scan" || $j=="depouille")
  if ($j=="Administrateur") {

    ///////////////////////////

    // On détermine sur quelle page on se trouve
if(isset($_GET['page']) && !empty($_GET['page'])){
    $currentPage = (int) strip_tags($_GET['page']);
}else{
    $currentPage = 1;
}
// On se connecte à là base de données
// require_once('connect.php');

// On détermine le nombre total d'articles 

  
$sql = 'SELECT * FROM detail_lot';

// $sql = 'SELECT COUNT(*) FROM detail_lot
// WHERE code_dr_interne';

 // $sql = 'SELECT COUNT(*) AS nb_articles FROM `articles`;';

// On prépare la requête
$resul = sqlsrv_query($conn, $sql);  //$conn is your connection in 'connection.php'

// checks if the search was made
if($resul === false){
     die( print_r( sqlsrv_errors(), true));
}

if (!$resul) {
    trigger_error('Invalid query: ' . $conn->error);
}

// $result = sqlsrv_fetch_array($resul)
// On récupère le nombre d'articles
// $result = $query->fetch();
// echo $result;
// $nbArticles = sqlsrv_num_rows( $resul )
$x = 0;
while($nbArticles = sqlsrv_fetch_array( $resul )){
  $x++;
}
// $nbArticles = (int) $result['code_dr_interne'];
if ($nbArticles === false)
   echo "Error in retrieveing row count.";
else
   echo $x;
// On détermine le nombre d'articles par page
$parPage = 5;
$nbArticles = $x;
// On calcule le nombre de pages total
$pages = ceil($nbArticles / $parPage);

echo $pages;
// Calcul du 1er article de la page
$premier = ($currentPage * $parPage) - $parPage;
// $premier = 5;

// $sql = 'SELECT * FROM `articles` ORDER BY `created_at` DESC LIMIT :premier, :parpage;';

// // On prépare la requête
// $query = $db->prepare($sql);

// $query->bindValue(':premier', $premier, PDO::PARAM_INT);
// $query->bindValue(':parpage', $parPage, PDO::PARAM_INT);

// // On exécute
// $query->execute();

// // On récupère les valeurs dans un tableau associatif
// $articles = $query->fetchAll(PDO::FETCH_ASSOC);

?>

<!-- ////////////////////// -->
<div class="container-fluid">
    <div class="row">
      <link rel="stylesheet" href="menu.css" />
<!--       <link rel="stylesheet" href="menuD.css" />
 -->      <nav class="dropdownmenu">
  <ul>


<div class="dropdown">
  <button class="dropbtn">Boite pour Depouille</button>
  <div class="dropdown-content">
    <a href="traitement.php">PRENDRE LA BOITE</a>
    <a href="remiseB.php">REMISE DES BOITES</a>
    
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">Boite pour Scane</button>
  <div class="dropdown-content">
    <a href="traitement2.php">PRENDRE LA BOITE</a>
    <a href="remiseSC.php">REMISE DES BOITES</a>
    
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">Boite pour Saisie</button>
  <div class="dropdown-content">
    <a href="traitement3.php">PRENDRE LA BOITE</a>
    <a href="remiseSAI.php">REMISE DES BOITES</a>
    
  </div>
</div>

<!-- SELECT nom, prénom
FROM Table1
WHERE Table1.nom NOT IN (SELECT nom FROM Table2) AND Table1.prénom NOT IN (SELECT prénom FROM Table2); -->

    <!-- <li class="drop-down"><a href="traitement.php"class="link-menu"> Boite pour Depouille </a>
      <ul class="menu-drop">
          <li>
            <a href="traitement.php" class="link-menu">PRENDRE LA BOITE </a>
          </li>
          <li>
            <a href="traitement.php" class="link-menu">REMISE DES BOITES</a>
          </li>
        </ul></li>
    <li><a href="traitement1.php"> Depouille </a></li>
      <li><a href="traitement2.php"> Scane </a></li>
    <li><a href="traitement3.php"> Saisie </a></li>
 -->



    <!-- ///////////////////////////////// -->
    <div class="conteneur">
      <!-- <form action="insertItem2.php" method="post">
   <div for="search" class="recherche">
      <input type="text" class="searchTerm" name="search" id="search" placeholder="What are you looking for?">
      <button type="submit"id="addItem2" class="searchButton">
        <i class="fa fa-search"></i>
     </button>
   </div>
 </form> -->
</div>
<!-- ///////////////// -->


<link rel="stylesheet" href="filterTable.css" />
<!-- <link rel="stylesheet" href="menu.css" /> -->

<?php 
//////////////////////////////////////////
// $checkUserSql = "SELECT * FROM dbo.[depouille]"  ;
/////////////////////////////////////////code_centre/code_dr_interne/num_lot/num_boite/code_agent

// SELECT nom, prénom
// FROM Table1
// WHERE Table1.nom NOT IN (SELECT nom FROM Table2) AND Table1.prénom NOT IN (SELECT prénom FROM Table2);

// $checkUserSql = "SELECT * FROM dbo.[detail_lot]

// WHERE detail_lot.code_centre NOT IN (SELECT code_centre FROM dbo.[depouille]) AND detail_lot.code_dr_interne NOT IN (SELECT code_dr_interne FROM dbo.[depouille])AND detail_lot.num_lot NOT IN (SELECT num_lot FROM dbo.[depouille])AND detail_lot.num_boite NOT IN (SELECT num_boite FROM dbo.[depouille])";
///////////
// SELECT TOP 10 AgentScores.agentID, AgentScores.totalScore, Agents.firstname, Agents.lastname FROM AgentScores INNER JOIN Agents ON AgentScores.AgentId=Agents.Agent_id ORDER BY AgentScores.totalScore DESC

// $checkUserSql="SELECT * FROM dbo.[detail_lot] WHERE NOT EXISTS( SELECT * FROM dbo.[depouille] WHERE depouille.num_boite=detail_lot.num_boite and  depouille.code_centre=detail_lot.code_centre and depouille.code_dr_interne=detail_lot.code_dr_interne and  depouille.num_lot=detail_lot.num_lot  ) LIMIT $premier,$parPage";
// $result2 = mssql_query("select top $page_rows name from table_name where id not in (select top $max id from table_name order by id asc) order by id asc") or die(mssql_error()); 

// SELECT * 
// FROM table1
// ORDER BY columnName
//   OFFSET 10 ROWS FETCH NEXT 10 ROWS ONLY
// SELECT * FROM v_table WHERE row BETWEEN 10 AND 20
// SELECT 'filds' FROM 'table' WHERE 'where' ORDER BY 'any' OFFSET 'offset' 
// ROWS FETCH NEXT 'per_page' ROWS ONLY
/////////////////////
// SELECT [FirstName], [LastName], [PersonType] FROM [Person].[Person] ORDER BY [FirstName] OFFSET 50 ROWS FETCH NEXT 10 ROW ONLY

$checkUserSql="SELECT * FROM dbo.[detail_lot] WHERE NOT EXISTS( SELECT * FROM dbo.[depouille] WHERE depouille.num_boite=detail_lot.num_boite and  depouille.code_centre=detail_lot.code_centre and depouille.code_dr_interne=detail_lot.code_dr_interne and  depouille.num_lot=detail_lot.num_lot  )

ORDER BY code_dr_interne OFFSET $premier ROWS FETCH NEXT $parPage ROWS ONLY ";

// $checkUserSql="SELECT top $premier  * FROM dbo.[detail_lot] WHERE NOT EXISTS( SELECT * FROM dbo.[depouille] WHERE depouille.num_boite=detail_lot.num_boite and  depouille.code_centre=detail_lot.code_centre and depouille.code_dr_interne=detail_lot.code_dr_interne and  depouille.num_lot=detail_lot.num_lot  ) ";

//////////////
// $checkUserSql="SELECT * FROM dbo.[detail_lot] WHERE NOT EXISTS( SELECT * FROM dbo.[depouille] WHERE depouille.num_boite=detail_lot.num_boite and  depouille.code_centre=detail_lot.code_centre and depouille.code_dr_interne=detail_lot.code_dr_interne and  depouille.num_lot=detail_lot.num_lot  ) and limit $premier,$parPage";
///////////////
// $checkUserSql = "SELECT * FROM dbo.[detail_lot]
// WHERE  num_boite  IN (SELECT num_boite FROM dbo.[depouille])";
/////////////

// $checkUserSql = "SELECT * FROM dbo.[detail_lot]"  ;
/////////////////////
// $checkUserSql = "SELECT * FROM dbo.[detail_lot]"  ;

$result = sqlsrv_query($conn, $checkUserSql);  //$conn is your connection in 'connection.php'

// checks if the search was made
if($result === false){
     die( print_r( sqlsrv_errors(), true));
}

if (!$result) {
    trigger_error('Invalid query: ' . $conn->error);
}


?>
    

   
  </ul> 

    <!-- <input type="text" onkeyup="searchProducts()" placeholder="Search...." style="height:2em; width:20em; margin:1em;"> -->
    <table style="width: 100%;">
      <thead>
        <tr>
          <th>code_centre</th>
          <th>code_dr_interne</th>
          <th>num_lot </th>
          <th>num_boite</th>
          <th>nb_contrat_recu</th>

        </tr>
      </thead>
      <tbody id="productTable">

      
       <?php while($row = sqlsrv_fetch_array($result)) {

        ?>
     <tr>
       <td><?php echo htmlspecialchars($row['code_centre']); ?></td>
       
       <td><?php echo htmlspecialchars($row['code_dr_interne']); ?></td>
       <td><?php echo htmlspecialchars($row['num_lot']); ?></td>
       <td><?php echo htmlspecialchars($row['num_boite']); ?></td>
       <td><?php echo htmlspecialchars($row['nb_contrat_recu']);?></td>
       <td><a id='prbt' href ='prendreD.php?num_boite=<?php echo $row["num_boite"]; ?>&num_lot=<?php echo $row["num_lot"]; ?>&code_centre=<?php echo $row["code_centre"]; ?>&code_dr_interne=<?php echo $row["code_dr_interne"]; ?>&nb_contrat_recu=<?php echo $row["nb_contrat_recu"]; ?>'>Prendre la boite</td>

        <!-- <td><a id='prbt' href ='prendreD.php?num_boite=<?php echo $row["num_boite"]; ?>&num_lot=<?php echo $row["num_lot"]; ?>&code_centre=<?php echo $row["code_centre"]; ?>&code_dr_interne=<?php echo $row["code_dr_interne"]; ?>&nb_contrat_recu=<?php echo $row["nb_contrat_recu"]; ?>'>Remise de la boite</td> -->
       
     </tr>
     <?php } ?> 


     

      </tbody>
    </table>
   <!-- ///////////////////////////////// href='{$_SERVER['PHP_SELF']}?pagenum=1'-->
<!-- SELECT TOP 10 * FROM (SELECT TOP 10 * FROM (SELECT * FROM SUIDOVOL WHERE FLT_DATE >='09/12/2010' AND FLT_DATE <='09/12/2010' ) ); -->
                <nav>
                    <ul class="pagination">
                        <!-- Lien vers la page précédente (désactivé si on se trouve sur la 1ère page) -->
                        <li class="page-item <?= ($currentPage == 1) ? "disabled" : "" ?>">
                            <a href="<?php $_SERVER['PHP_SELF']?>?page=<?= $currentPage - 1 ?>" class="page-link">Précédente</a>
                        </li>
                        <?php for($page = 1; $page <= $pages; $page++): ?>
                          <!-- Lien vers chacune des pages (activé si on se trouve sur la page correspondante) -->
                          <li class="page-item <?= ($currentPage == $page) ? "active" : "" ?>">
                                <a href="<?php $_SERVER['PHP_SELF']?>?page=<?= $page ?>" class="page-link"><?= $page ?></a>
                            </li>
                        <?php endfor ?>
                          <!-- Lien vers la page suivante (désactivé si on se trouve sur la dernière page) -->
                          <li class="page-item <?= ($currentPage == $pages) ? "disabled" : "" ?>">
                            <a href="<?php $_SERVER['PHP_SELF']?>?page=<?= $currentPage + 1 ?>" class="page-link">Suivante</a>
                        </li>
                    </ul>
                </nav>





   <!--  //////////////////// -->
 
  </div>
</div>

<?php
  require 'inc/footer.php';
?>
</body>

<?php
  }



  if ($j=="depouille") {
?>

<div class="container-fluid">
    <div class="row">
      <link rel="stylesheet" href="menu.css" />
<!--       <link rel="stylesheet" href="menuD.css" />
 -->      <nav class="dropdownmenu">
  <ul>


<div class="dropdown">
  <button class="dropbtn">Boite pour Depouille</button>
  <div class="dropdown-content">
    <a href="traitement.php">PRENDRE LA BOITE</a>
    <a href="remiseB.php">REMISE DES BOITES</a>
    
  </div>
</div>

<!-- <div class="dropdown">
  <button class="dropbtn">Boite pour Scane</button>
  <div class="dropdown-content">
    <a href="traitement2.php">PRENDRE LA BOITE</a>
    <a href="remiseSC.php">REMISE DES BOITES</a>
    
  </div>
</div> -->

<!-- <div class="dropdown">
  <button class="dropbtn">Boite pour Saisie</button>
  <div class="dropdown-content">
    <a href="traitement3.php">PRENDRE LA BOITE</a>
    <a href="remiseSAI.php">REMISE DES BOITES</a>
    
  </div>
</div> -->

<!-- SELECT nom, prénom
FROM Table1
WHERE Table1.nom NOT IN (SELECT nom FROM Table2) AND Table1.prénom NOT IN (SELECT prénom FROM Table2); -->

    <!-- <li class="drop-down"><a href="traitement.php"class="link-menu"> Boite pour Depouille </a>
      <ul class="menu-drop">
          <li>
            <a href="traitement.php" class="link-menu">PRENDRE LA BOITE </a>
          </li>
          <li>
            <a href="traitement.php" class="link-menu">REMISE DES BOITES</a>
          </li>
        </ul></li>
    <li><a href="traitement1.php"> Depouille </a></li>
      <li><a href="traitement2.php"> Scane </a></li>
    <li><a href="traitement3.php"> Saisie </a></li>
 -->



    <!-- ///////////////////////////////// -->
    <div class="conteneur">
      <!-- <form action="insertItem2.php" method="post">
   <div for="search" class="recherche">
      <input type="text" class="searchTerm" name="search" id="search" placeholder="What are you looking for?">
      <button type="submit"id="addItem2" class="searchButton">
        <i class="fa fa-search"></i>
     </button>
   </div>
 </form> -->
</div>
<!-- ///////////////// -->


<link rel="stylesheet" href="filterTable.css" />
<!-- <link rel="stylesheet" href="menu.css" /> -->

<?php 
//////////////////////////////////////////
// $checkUserSql = "SELECT * FROM dbo.[depouille]"  ;
/////////////////////////////////////////code_centre/code_dr_interne/num_lot/num_boite/code_agent

// SELECT nom, prénom
// FROM Table1
// WHERE Table1.nom NOT IN (SELECT nom FROM Table2) AND Table1.prénom NOT IN (SELECT prénom FROM Table2);

// $checkUserSql = "SELECT * FROM dbo.[detail_lot]

// WHERE detail_lot.code_centre NOT IN (SELECT code_centre FROM dbo.[depouille]) AND detail_lot.code_dr_interne NOT IN (SELECT code_dr_interne FROM dbo.[depouille])AND detail_lot.num_lot NOT IN (SELECT num_lot FROM dbo.[depouille])AND detail_lot.num_boite NOT IN (SELECT num_boite FROM dbo.[depouille])";
///////////
$checkUserSql="SELECT * FROM dbo.[detail_lot] WHERE NOT EXISTS( SELECT * FROM dbo.[depouille] WHERE depouille.num_boite=detail_lot.num_boite and  depouille.code_centre=detail_lot.code_centre and depouille.code_dr_interne=detail_lot.code_dr_interne and  depouille.num_lot=detail_lot.num_lot  )";
///////////////
// $checkUserSql = "SELECT * FROM dbo.[detail_lot]
// WHERE  num_boite  IN (SELECT num_boite FROM dbo.[depouille])";
/////////////

// $checkUserSql = "SELECT * FROM dbo.[detail_lot]"  ;
/////////////////////
// $checkUserSql = "SELECT * FROM dbo.[detail_lot]"  ;

$result = sqlsrv_query($conn, $checkUserSql);  //$conn is your connection in 'connection.php'

// checks if the search was made
if($result === false){
     die( print_r( sqlsrv_errors(), true));
}

if (!$result) {
    trigger_error('Invalid query: ' . $conn->error);
}


?>
    

   
  </ul> 

    <!-- <input type="text" onkeyup="searchProducts()" placeholder="Search...." style="height:2em; width:20em; margin:1em;"> -->
    <table style="width: 100%;">
      <thead>
        <tr>
          <th>code_centre</th>
          <th>code_dr_interne</th>
          <th>num_lot </th>
          <th>num_boite</th>
          <th>nb_contrat_recu</th>

        </tr>
      </thead>
      <tbody id="productTable">

      
       <?php while($row = sqlsrv_fetch_array($result)) {

        ?>
     <tr>
       <td><?php echo htmlspecialchars($row['code_centre']); ?></td>
       
       <td><?php echo htmlspecialchars($row['code_dr_interne']); ?></td>
       <td><?php echo htmlspecialchars($row['num_lot']); ?></td>
       <td><?php echo htmlspecialchars($row['num_boite']); ?></td>
       <td><?php echo htmlspecialchars($row['nb_contrat_recu']);?></td>
       <td><a id='prbt' href ='prendreD.php?num_boite=<?php echo $row["num_boite"]; ?>&num_lot=<?php echo $row["num_lot"]; ?>&code_centre=<?php echo $row["code_centre"]; ?>&code_dr_interne=<?php echo $row["code_dr_interne"]; ?>&nb_contrat_recu=<?php echo $row["nb_contrat_recu"]; ?>'>Prendre la boite</td>

        <!-- <td><a id='prbt' href ='prendreD.php?num_boite=<?php echo $row["num_boite"]; ?>&num_lot=<?php echo $row["num_lot"]; ?>&code_centre=<?php echo $row["code_centre"]; ?>&code_dr_interne=<?php echo $row["code_dr_interne"]; ?>&nb_contrat_recu=<?php echo $row["nb_contrat_recu"]; ?>'>Remise de la boite</td> -->
       
     </tr>
     <?php } ?> 


     

      </tbody>
    </table>
   





   <!--  //////////////////// -->
 
  </div>
</div>

<?php
  require 'inc/footer.php';
?>
</body>

<?php
  }
  elseif($j=="scan"){
?>

<div class="container-fluid">
    <div class="row">
      <link rel="stylesheet" href="menu.css" />
      <nav class="dropdownmenu">
  <ul>
     <!-- <div class="dropdown">
  <button class="dropbtn">Boite pour Depouille</button>
  <div class="dropdown-content">
    <a href="traitement.php">PRENDRE LA BOITE</a>
    <a href="remiseB.php">REMISE DES BOITES</a>
    
  </div>
</div> -->

<div class="dropdown">
  <button class="dropbtn">Boite pour Scane</button>
  <div class="dropdown-content">
    <a href="traitement2.php">PRENDRE LA BOITE</a>
    <a href="remiseSC.php">REMISE DES BOITES</a>
    
  </div>
</div>

<!-- <div class="dropdown">
  <button class="dropbtn">Boite pour Saisie</button>
  <div class="dropdown-content">
    <a href="traitement3.php">PRENDRE LA BOITE</a>
    <a href="remiseSAI.php">REMISE DES BOITES</a>
    
  </div>
</div> -->
    <!-- ///////////////////////////////// -->
    <div class="conteneur">
      <!-- <form action="insertItem2.php" method="post">
   <div for="search" class="recherche">
      <input type="text" class="searchTerm" name="search" id="search" placeholder="What are you looking for?">
      <button type="submit"id="addItem2" class="searchButton">
        <i class="fa fa-search"></i>
     </button>
   </div>
 </form> -->
</div>
<!-- ///////////////// -->


<link rel="stylesheet" href="filterTable.css" />
<!-- <link rel="stylesheet" href="menu.css" /> -->

<?php 

// $checkUserSql="SELECT * FROM dbo.[depouille] WHERE NOT EXISTS( SELECT * FROM dbo.[scan] WHERE scan.num_boite=depouille.num_boite and  scan.code_centre=depouille.code_centre and scan.code_dr_interne=depouille.code_dr_interne and  scan.num_lot=depouille.num_lot  )";

$checkUserSql="SELECT * FROM dbo.[depouille] WHERE NOT EXISTS( SELECT * FROM dbo.[scan] WHERE scan.num_boite=depouille.num_boite and  scan.code_centre=depouille.code_centre and scan.code_dr_interne=depouille.code_dr_interne and  scan.num_lot=depouille.num_lot ) and nb_traite IS NOT NULL";


// $checkUserSql = "SELECT * FROM dbo.[depouille]"  ;

$result = sqlsrv_query($conn, $checkUserSql);  //$conn is your connection in 'connection.php'

// checks if the search was made
if($result === false){
     die( print_r( sqlsrv_errors(), true));
}

if (!$result) {
    trigger_error('Invalid query: ' . $conn->error);
}

 // if($row = sqlsrv_fetch_array($result)){

 // }
?>
    

   
  </ul> 

    <!-- <input type="text" onkeyup="searchProducts()" placeholder="Search...." style="height:2em; width:20em; margin:1em;"> -->
    <table style="width: 100%;">
      <thead>
        <tr>
          <th>code_centre</th>
          <th>code_dr_interne</th>
          <th>num_lot </th>
          <th>num_boite</th>
          <th>nb_contrat_recu</th>

        </tr>
      </thead>
      <tbody id="productTable">

      
       <?php while($row = sqlsrv_fetch_array($result)) {

        ?>
     <tr>
       <td><?php echo htmlspecialchars($row['code_centre']); ?></td>
       
       <td><?php echo htmlspecialchars($row['code_dr_interne']); ?></td>
       <td><?php echo htmlspecialchars($row['num_lot']); ?></td>
       <td><?php echo htmlspecialchars($row['num_boite']); ?></td>
       <td><?php echo htmlspecialchars($row['nb_traite']);?></td>
       <td>
        <a id='prbt' href ='prendreSC.php?num_boite=<?php echo $row["num_boite"]; ?>&amp; num_lot=<?php echo $row["num_lot"]; ?>&amp; code_centre=<?php echo $row["code_centre"]; ?>&amp; code_dr_interne=<?php echo $row["code_dr_interne"]; ?>&amp;nb_traite=<?php echo $row["nb_traite"]; ?>'>Prendre la boite</a>
        </td>
       
     </tr>
     <?php } ?> 


     

      </tbody>
    </table>
    <?php 
    


  require 'inc/footer.php';


    ?>





   <!--  //////////////////// -->
 
  </div>
</div>

<?php
  require 'inc/footer.php';
?>
</body>

<?php
  }
  elseif($j=="saisie"){
?>
<div class="container-fluid">
    <div class="row">
      <link rel="stylesheet" href="menu.css" />
      <nav class="dropdownmenu">
  <ul>
 <!--    <div class="dropdown">
  <button class="dropbtn">Boite pour Depouille</button>
  <div class="dropdown-content">
    <a href="traitement.php">PRENDRE LA BOITE</a>
    <a href="remiseB.php">REMISE DES BOITES</a>
    
  </div>
</div> -->

<!-- <div class="dropdown">
  <button class="dropbtn">Boite pour Scane</button>
  <div class="dropdown-content">
    <a href="traitement2.php">PRENDRE LA BOITE</a>
    <a href="remiseSC.php">REMISE DES BOITES</a>
    
  </div>
</div> -->

<div class="dropdown">
  <button class="dropbtn">Boite pour Saisie</button>
  <div class="dropdown-content">
    <a href="traitement3.php">PRENDRE LA BOITE</a>
    <a href="remiseSAI.php">REMISE DES BOITES</a>
    
  </div>
</div>
    <!-- ///////////////////////////////// -->
    <div class="conteneur">
      <!-- <form action="insertItem2.php" method="post">
   <div for="search" class="recherche">
      <input type="text" class="searchTerm" name="search" id="search" placeholder="What are you looking for?">
      <button type="submit"id="addItem2" class="searchButton">
        <i class="fa fa-search"></i>
     </button>
   </div>
 </form> -->
</div>
<!-- ///////////////// -->


<link rel="stylesheet" href="filterTable.css" />
<!-- <link rel="stylesheet" href="menu.css" /> -->

<?php 

$checkUserSql="SELECT * FROM dbo.[scan] WHERE NOT EXISTS( SELECT * FROM dbo.[saisie] WHERE saisie.num_boite=scan.num_boite and  saisie.code_centre=scan.code_centre and saisie.code_dr_interne=scan.code_dr_interne and  saisie.num_lot=scan.num_lot  )and nb_traite IS NOT NULL";


// $checkUserSql = "SELECT * FROM dbo.[scan]"  ;

$result = sqlsrv_query($conn, $checkUserSql);  //$conn is your connection in 'connection.php'

// checks if the search was made
if($result === false){
     die( print_r( sqlsrv_errors(), true));
}

if (!$result) {
    trigger_error('Invalid query: ' . $conn->error);
}


?>
    

   
  </ul> 

    <!-- <input type="text" onkeyup="searchProducts()" placeholder="Search...." style="height:2em; width:20em; margin:1em;"> -->
    <table style="width: 100%;">
      <thead>
        <tr>
          <th>code_centre</th>
          <th>code_dr_interne</th>
          <th>num_lot </th>
          <th>num_boite</th>
          <th>nb_contrat_recu</th>

        </tr>
      </thead>
      <tbody id="productTable">

      
       <?php while($row = sqlsrv_fetch_array($result)) {

        ?>
     <tr>
       <td><?php echo htmlspecialchars($row['code_centre']); ?></td>
       
       <td><?php echo htmlspecialchars($row['code_dr_interne']); ?></td>
       <td><?php echo htmlspecialchars($row['num_lot']); ?></td>
       <td><?php echo htmlspecialchars($row['num_boite']); ?></td>
       <td><?php echo htmlspecialchars($row['nb_traite']);?></td>
       <td>
        <a id='prbt' href ='prendreSAI.php?num_boite=<?php echo $row["num_boite"]; ?> &amp; num_lot=<?php echo $row["num_lot"]; ?> &amp; code_centre=<?php echo $row["code_centre"]; ?> &amp; code_dr_interne=<?php echo $row["code_dr_interne"]; ?>&amp;nb_traite=<?php echo $row["nb_traite"]; ?>'>Prendre la boite</a>
        </td>
       
     </tr>
     <?php } ?> 


     

      </tbody>
    </table>
    <?php 
    


  // require 'inc/footer.php';


    ?>





   <!--  //////////////////// -->
 
  </div>
</div>

<?php
  require 'inc/footer.php';
?>
</body>

<?php
  }
    }
  // }
  // // }
  ?>
<!-- ////////////////////////////////////////////////////////////////// -->
