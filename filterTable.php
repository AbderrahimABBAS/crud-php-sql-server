<?php
  session_start();
  
  
  require_once('inc/config/constants.php');
  require_once('inc/config/db.php');
  require_once('inc/header.html');
  
?>
<script src="filterTable.js"></script>
<?php
  require 'inc/navigation.php';
?>
<link rel="stylesheet" href="filterTable.css" />
<link rel="stylesheet" href="menu.css" />
<nav class="dropdownmenu">

  <ul>
   <!-- <li><a href="administration.php">ajouter un agent</a></li> -->
    <li><a href="ajouteragent.php">ajouter un agent</a></li>
      <li><a href="filterTable.php">Tableau D affichage</a></li>
    <li><a href="administration1.php">administration</a></li>
    <!-- <li>  <input type="text" onkeyup="searchProducts()" name="valueToSearch" placeholder="Value To Search" style="height:2em; width:20em; margin:1em;">

          <input type="submit" name="search" value="Filter">
    </li> -->
  </ul> 
</nav>
<?php 


$checkUserSql = "SELECT * FROM dbo.[traitement] "  ;

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
          <th>code_agent</th>
          <th>code_dr_interne</th>
          <th>num_lot </th>
          <th>num_boite</th>
          <th>date_affectaion</th>
          <th>date_restitution</th>
          <th>nb_recu</th>
          <th>nb_traite </th>
          <th>nb_rejete</th>
          <th>code_agent_dispatch</th>
          
          
        </tr>
      </thead>
      <tbody id="productTable">

      
       <?php while($row = sqlsrv_fetch_array($result)) {

        ?>
     <tr>
       <td><?php echo htmlspecialchars($row['code_centre']); ?></td>
       <td><?php echo htmlspecialchars($row['code_agent']); ?></td>
       <td><?php echo htmlspecialchars($row['code_dr_interne']); ?></td>
       <td><?php echo htmlspecialchars($row['num_lot']); ?></td>
       <td><?php echo htmlspecialchars($row['num_boite']); ?></td>
       
       <td><?php echo date_format($row['date_affectaion'], 'Y-m-d'); ?></td>
       <td><?php echo date_format($row['date_restitution'], 'Y-m-d'); ?></td>
       <td><?php echo htmlspecialchars($row['nb_recu']); ?></td>
       <td><?php echo htmlspecialchars($row['nb_traite']); ?></td>
       <td><?php echo htmlspecialchars($row['nb_rejete']); ?></td>
       <td><?php echo htmlspecialchars($row['code_agent_dispatch']); ?></td>
       
     </tr>
     <?php } ?> 


     

      </tbody>
    </table>
    <?php 
    


  require 'inc/footer.php';


    ?>



