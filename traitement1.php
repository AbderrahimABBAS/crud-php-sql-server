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

.recherche {
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
}

/*Resize the wrap to see the search bar change!*/
.conteneur{
  width: 30%;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
//////////
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
<div class="container-fluid">
    <div class="row">
      <link rel="stylesheet" href="menu.css" />
      <nav class="dropdownmenu">
  <ul>

    <div class="dropdown">
  <button class="dropbtn">Boite pour Depouille</button>
  <div class="dropdown-content">
    <a href="traitement.php">PRENDRE LA BOITE</a>
    <a href="traitement.php">REMISE DES BOITES</a>
    
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">Boite pour Scane</button>
  <div class="dropdown-content">
    <a href="traitement2.php">PRENDRE LA BOITE</a>
    <a href="traitement2.php">REMISE DES BOITES</a>
    
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">Boite pour Saisie</button>
  <div class="dropdown-content">
    <a href="traitement3.php">PRENDRE LA BOITE</a>
    <a href="traitement3.php">REMISE DES BOITES</a>
    
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


$checkUserSql = "SELECT * FROM dbo.[detail_lot]"  ;

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