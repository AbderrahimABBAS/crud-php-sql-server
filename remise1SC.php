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
    
    echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>insertitemRR</div>';

    
  
$requete = htmlentities($_GET['num_boite']);
$requete1 = htmlentities($_GET['num_lot']);
$requete4 = htmlentities($_GET['code_centre']);
$requete5 = htmlentities($_GET['code_dr_interne']);

  
        $req = "SELECT * FROM dbo.[scan] WHERE num_boite='$requete'AND num_lot='$requete1'AND code_centre='$requete4'AND code_dr_interne='$requete5'"; 
        

        $exec = sqlsrv_query($conn, $req);                            
// exécuter la requête  
        

// checks if the search was made
if($exec === false){
     die( print_r( sqlsrv_errors(), true));
}

///////////////////////////////////////


#checks if the search brought some row and if it is one only row
if(sqlsrv_has_rows($exec) != 1){
       // Item does not exist, therefore, you can add it to DB as a new item
                // Start the insert process

                // la boite n'est pas encore traiter 
 

                echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>la boite n est pas encore traiter.</div>';
            
}
else{

// #creates sessions
//     if($row = sqlsrv_fetch_array($exec)){
       
//         $_SESSION['loggedIn'] = '1';
        
//         echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>agent exist dans la DB. <strong>Update</strong> button to update the details. Or use a different Item Number.</div>';
//                 exit();
//     }

        
//////////////////////////////////////////



         ?>

   







    <link rel="stylesheet" type="text/css" href="update.css"  />
<form action="remise2USC.php" method="POST">
  

<label for="date_restitution">date_restitution</label>
<input type="date" name="date_restitution" id="date_restitution">
<label for="nb_traite">nb_traite</label>
<input type="text" name="nb_traite" id="nb_traite">

<label for="nb_rejete">nb_rejete</label>
<input type="text" name="nb_rejete" id="nb_rejete">

<!-- [nb_traite]
,[nb_rejete] -->
<br>
<input type="hidden" name="num_boite" value=<?php echo $_GET['num_boite'];?>>
<input type="hidden" name="code_centre" value=<?php echo $_GET['code_centre'];?>>
<input type="hidden" name="code_dr_interne" value=<?php echo $_GET['code_dr_interne'];?>>
<input type="hidden" name="num_lot" value=<?php echo $_GET['num_lot'];?>>
<!-- <input type="hidden" name="nb_contrat_recu" value=<?php echo $_GET['nb_contrat_recu'];?>> -->

<button type="submit" class="btn" id="remise2USC">Update Content</button>


</form>
    
    <?php 
 echo $_GET['num_lot'];
 echo $_GET['num_boite'];
 echo $_GET['code_centre'];
 echo $_GET['code_dr_interne'];
 // echo $_GET['nb_contrat_recu'];
     }    
?>

<?php 
    


  require 'inc/footer.php';



/////////////////////////////////////////////////

//   while($rowww = sqlsrv_fetch_array($datta)){
//              echo htmlspecialchars($rowww['date_restitution']);
//              $k=$rowww['date_restitution'];
//                                                         }
// if($k == null)
// {
// $query = "UPDATE dbo.[depouille]  set nb_rejete='$nb_rejete',nb_traite='$nb_traite', date_restitution='$date_restitution'where num_boite='$numbt'and code_centre='$numbt1'and code_dr_interne='$numbt2'and num_lot='$numbt3'and code_agent='$j'";
// $datta = sqlsrv_query($conn,$req);

//         // $query =  "INSERT INTO dbo.[traitement]([nb_recu],[nb_traite],[nb_rejete],[date_affectaion],[date_restitution])
//      //                                       VALUES('$nb_recu','$nb_traite', '$nb_rejete','$date_affectaion','$date_affectaion') WHERE num_boite='$numbt'";
// $data = sqlsrv_query($conn,$query);
// if($data === false){
//      die( print_r( sqlsrv_errors(), true));
// }

// if($data)
// {
//     echo"<script>alert('Record Updated')<script>";
//      // echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>valeur added</div>';

//     // echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>Item added to database.</div>';

//      // echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>Item added to database.</div>';
//     echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>boite  exist dans la DB. Please click the <strong>Update</strong> button to update the details. Or use a different Item Number.</div>';
                

// // sleep(10);

// // $i = 1;
// // while ($i <= 200){

// //     echo $i;
// //     echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>Item added to database.</div>';
// //     $i++;
// // }
// //      $nombre_de_lignes = 1;

// // while ($nombre_de_lignes < 50)
// // {
// //     echo 'Je ne dois pas regarder les mouches voler quand j\'apprends le PHP.<br />';
// //     echo 'Je ne dois pas regarder les mouches voler quand  le PHP.<br />';
// //     $nombre_de_lignes++; // $nombre_de_lignes = $nombre_de_lignes + 1
// // }
//         ?>
//         <!-- <meta HTTP-EQUIV="Refresh" CONTENT ="0; URL=http://localhost/mobilis projet11/traitement1.php"> -->
//         <!-- <meta http-equiv="refresh" content="0;URL='http://localhost/mobilis projet11/traitement1.php'" />   -->
//         <!-- ////////////////// -->

//                           <script type="text/javascript">



//                             // while (true) {


//                             //            // sendStat();
//                             //            //   sleep(10);

//                             //                      }

//                             // sleep(100);

//                                  // var x = setTimeout(5); 
//                                  //   clearTimeout(x); 
//                            </script>
//        <!-- //////////////////////// -->
//         <?php
//         header("Location: traitement.php");
//    }
// }
// else{

//     echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>la boite a ete deja rendu  <strong>Update</strong> button to update the details. Or use a different Item Number.</div>';

// }
  ////////////////////////////////////////////////
    ?>