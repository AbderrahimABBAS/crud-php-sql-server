<?php
    session_start();

	require_once('inc/config/constants.php');
	require_once('inc/config/db.php');
    require_once('inc/header.html');
    require 'inc/navigation.php';
	?>
<!-- <script src="filterTable.js"></script> -->
<link rel="stylesheet" href="filterTable.css" />

    <?php
	// $initialStock = 0;
	// $baseImageFolder = '../../data/item_images/';
	// $itemImageFolder = '';

	echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>insertitemRR</div>';

	// $insertItemSql1=  "INSERT INTO dbo.[traitement]([num_boite]);
 //                                           SELECT num_boite FROM dbo.[detail_lot]  ";

    //                        $insertItemSql1=  "SELECT num_boite
    //                                             FROM dbo.[detail_lot]
    //                                               INNER JOIN dbo.[traitement] 
                                                     
    //                                                                                        ";

    //                        $insertItemStatement1 = sqlsrv_query($conn, $insertItemSql1);  //$conn is your connection in 'connection.php'
                          
    //                        // checks if the search was made
    //                        if($insertItemStatement1 === false){
    //                               die( print_r( sqlsrv_errors(), true));
    //                                              }

				// // $insertItemStatement = $conn->prepare($insertItemSql);
				// // $insertItemStatement->execute(['itemNumber' => $itemNumber, 'itemName' => $itemName, 'discount' => $discount, 'stock' => $quantity, 'unitPrice' => $unitPrice, 'status' => $status, 'description' => $description]);
				// echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>bdd detail added to  database traitement.</div>';
				// exit();

//                                            INSERT INTO table1 (col1, col2, col3)
// SELECT column1, column2, column3
// FROM table2   
///////////////////////////////////////////////////////////////////////////////////////////////////////////
// 	// Récupère la recherche
//      $recherche = isset($_POST['search1']) ? $_POST['search1'] : '';

//      // la requete mysql
//      $q = $conn->query(
//      "SELECT champ1, champ2 FROM votretable
//       WHERE champ1 LIKE '%$search1%'
//       OR champ2 LIKE '%$recherche%'
//       LIMIT 10");

//      // affichage du résultat
//      while( $r = mysqli_fetch_array($q)){
//      echo 'Résultat de la recherche: '.$r['champ1'].', '.$r['champ2'].' <br />'
// ;
//      }

	// if(isset($_POST['itemDetailsItemNumber1'])){
	// 	echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>insertitem11</div>';
	// }

////////////////////////////-->


                               

/*---------------------------------------------------------------*/
/*
    Titre : Moteur de recherche simple                                                                                       
    Rapport de la maj:                                                                                                    
    - refactoring du code en PHP 7                                                                                        
    - fonctionnement du code vérifié                                                                                    
*/
/*---------------------------------------------------------------*/




     
    


    if ( isset($_POST['search']) )
    $requete = htmlentities($_POST['search']);


    if (!empty($requete))
    {
    	// "SELECT * FROM dbo.[Bordereau_Versement] WHERE nb_boite='$Quantity4' AND num_lot='$ItemName2' "  ;
  
        $req = "SELECT * FROM dbo.[depouille] WHERE num_boite LIKE '$requete'"; 

        $exec = sqlsrv_query($conn, $req);                            
// exécuter la requête  
        

// checks if the search was made
if($exec === false){
     die( print_r( sqlsrv_errors(), true));
}


// while ($row = sqlsrv_fetch_array($exec)){
         // echo 'Résultat de la recherche: '.$row['num_boite'].'';

         ?>
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
        <!--   <th>code_agent_dispatch</th> -->
          <th>type_op</th>
          <!-- <th>code_agence_interne</th> -->
          <th>EDITE</th>
        </tr>
      </thead>
      <tbody id="productTable">

      
       <?php while($row = sqlsrv_fetch_array($exec)) {

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
       <td><a href ='updateD.php?num_boite=<?php echo $row["num_boite"]; ?>'>Edit/Update</td>

       <!-- <td><button type="button"class="btn btn-success editbtn">EDITE</button></td> -->
       <!-- <td><a href = 'update.php?rn=$row[nb_recu]&fn=$row[nb_traite]&ln=$row[nb_rejete]'>Edit/Update</td> -->
        <!-- <td><a href = 'delete.php?rn=$row[nb_recu]&fn=$row[nb_traite]&ln=$row[nb_rejete]'onclick='return ckeckdelete()'>Delete</td> -->
       
     </tr>
     <?php } ?> 


     

      </tbody>
    </table>
    <!-- $(document).ready(function(){
        $('.editbtn').on('click',function()
                                            { 
                                            $().modal('show') ;
                                                }
        );
    }); -->
    <?php 

         // 
    // 
    // 
    // 
    // 

                // exit();
    // } while 

}
   else
         {

            echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>boite non existante </div>';
               }

?>
<!-- $rn = $_GET['rn']
$rn = $_GET['fn']
$rn = $_GET['ln']
$rn = $_GET['en'] 


<form action="" method="GET">
    <table>
<tr>
    <td>first name</td>
<td><input type="text value="<?php echo "$rn"?>name="firstname" required></td>
</tr>
</table>


if($_GET['submit'])
{
    $rollno = $_GET['rollno'];
    $nb_recu = $_GET['nb_recu'];
    $nb_traite = $_GET['nb_traite'];
    $rollno = $_GET['rollno'];
$query = "UPDATE traitement  set rollno='$rollno', nb_recu='$nb_recu' where rollno='$rollno'";
$data = sqlsrv_query($conn,$query);
if($data)
{
    echo"<script>alert('Record Updated')<script>";
        ?>
        <meta HTTP-EQUIV="Refresh" CONTENT ="0; URL=http://localhost:8080/">
        header("location:all_records.php");
        else
    {
        echo mysqli_error();
    }   
       <!--  <?php
// }

// }
?> 
-->
<?php 
    


  require 'inc/footer.php';


    ?>