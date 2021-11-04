<?php

    session_start();
error_reporting(0);
    require_once('inc/config/constants.php');
    require_once('inc/config/db.php');
    require_once('inc/header.html');
?>
<body>
<?php
    require 'inc/navigation.php';

// var_dump($_POST);
// die();
// echo"hello";
 // if(isset($_POST['update1'])){
// echo"hello1";
	// $nb_recu = htmlentities($_POST['nb_recu']);
	// $nb_traite = htmlentities($_POST['nb_traite']);
 //    $nb_rejete = htmlentities($_POST['nb_rejete']);

    // $date_affectaion = htmlentities($_POST['date_affectaion']);

    // $date_restitution = htmlentities($_POST['date_restitution']);
    $numbt = $_POST['num_boite'];
    $numbt1 = $_POST['code_centre'];
    $numbt2 = $_POST['code_dr_interne'];
    $numbt3 = $_POST['num_lot'];
    // $numbt4 = $_POST['nb_contrat_recu'];
     $date_restitution= htmlentities($_POST['date_restitution']);
     $nb_traite= htmlentities($_POST['nb_traite']);
     $nb_rejete= htmlentities($_POST['nb_rejete']);
    echo $numbt3;
    $_usernm=$_SESSION['username'];
if(!empty($date_restitution)&& !empty($nb_traite)){
	 
	 
	     // echo"hello2"; && !empty($nb_rejete)
/////////////////////////////////////////
    $query1 = "SELECT * FROM dbo.[agent] WHERE username='$_usernm'";

    // $query1 = "SELECT * FROM dbo.[depouille] WHERE username='$_usernm'";

         $result = sqlsrv_query($conn, $query1);  //$conn is your connection in 'connection.php'

// checks if the search was made
if($result === false){
     die( print_r( sqlsrv_errors(), true));
}
// echo"helloooooo";
if(sqlsrv_has_rows($result) != 1){
    echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button> username dont existe in database.</div>';
                exit();

}

    // echo"helloooooo";

   if (!$result) {
                                     trigger_error('Invalid query: ' . $conn->error);
                                               }



                           
                                               while($row = sqlsrv_fetch_array($result)){
                                                       // echo htmlspecialchars($row['code_centre']);
                                                       // $i=$row['code_centre'];
                                                       $j=$row['code_agent'];
                                                        }


         /////////////////////////////////////////////
// $query = "UPDATE dbo.[traitement]  set nb_recu='$nb_recu', nb_traite='$nb_traite',nb_rejete='$nb_rejete', date_affectaion='$date_affectaion',date_restitution='$date_restitution' where num_boite='$num_boite'";
// on met  update
	     // $query = "UPDATE dbo.[depouille]  set code_centre='$numbt1',num_lot='$numbt3',code_dr_interne='$numbt2',code_agent='$j',nb_recu='$numbt4', date_affectaion='$date_affectaion'where num_boite='$numbt' ";

// vrifier si la valeur de date de restitution est null $result->num_rows == null 
//////////////////////////////////////////////////////////////////////////
$req = "SELECT * FROM dbo.[saisie] WHERE num_boite='$numbt'and num_lot='$numbt3'and code_centre='$numbt1'and code_dr_interne='$numbt2'"; 

$datta = sqlsrv_query($conn,$req);

if($datta === false){
     die( print_r( sqlsrv_errors(), true));
}

while($rowww = sqlsrv_fetch_array($datta)){
             echo htmlspecialchars($rowww['date_restitution']);
             $k=$rowww['date_restitution'];
                                                        }
if($k == null)
{
$query = "UPDATE dbo.[saisie]  set nb_rejete='$nb_rejete',nb_traite='$nb_traite', date_restitution='$date_restitution'where num_boite='$numbt'and code_centre='$numbt1'and code_dr_interne='$numbt2'and num_lot='$numbt3'and code_agent='$j'";
$datta = sqlsrv_query($conn,$req);

        // $query =  "INSERT INTO dbo.[traitement]([nb_recu],[nb_traite],[nb_rejete],[date_affectaion],[date_restitution])
     //                                       VALUES('$nb_recu','$nb_traite', '$nb_rejete','$date_affectaion','$date_affectaion') WHERE num_boite='$numbt'";
$data = sqlsrv_query($conn,$query);
if($data === false){
     die( print_r( sqlsrv_errors(), true));
}

if($data)
{
    echo"<script>alert('Record Updated')<script>";
     // echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>valeur added</div>';

    // echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>Item added to database.</div>';

     // echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>Item added to database.</div>';
    echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>boite  exist dans la DB. Please click the <strong>Update</strong> button to update the details. Or use a different Item Number.</div>';
                

// sleep(10);

// $i = 1;
// while ($i <= 200){

//     echo $i;
//     echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>Item added to database.</div>';
//     $i++;
// }
//      $nombre_de_lignes = 1;

// while ($nombre_de_lignes < 50)
// {
//     echo 'Je ne dois pas regarder les mouches voler quand j\'apprends le PHP.<br />';
//     echo 'Je ne dois pas regarder les mouches voler quand  le PHP.<br />';
//     $nombre_de_lignes++; // $nombre_de_lignes = $nombre_de_lignes + 1
// }
        ?>
        <!-- <meta HTTP-EQUIV="Refresh" CONTENT ="0; URL=http://localhost/mobilis projet11/traitement1.php"> -->
        <!-- <meta http-equiv="refresh" content="0;URL='http://localhost/mobilis projet11/traitement1.php'" />   -->
        <!-- ////////////////// -->

                          <script type="text/javascript">



                            // while (true) {


                            //            // sendStat();
                            //            //   sleep(10);

                            //                      }

                            // sleep(100);

                                 // var x = setTimeout(5); 
                                 //   clearTimeout(x); 
                           </script>
       <!-- //////////////////////// -->
        <?php
        header("Location: traitement3.php");
   }
}
else{

    echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>la boite a ete deja rendu  <strong>Update</strong> button to update the details. Or use a different Item Number.</div>';

}
////////////////////////
// $query = "UPDATE dbo.[depouille]  set nb_rejete='$nb_rejete',nb_traite='$nb_traite', date_restitution='$date_restitution'where num_boite='$numbt'and code_centre='$numbt1'and code_dr_interne='$numbt2'and num_lot='$numbt3'and code_agent='$j'";
// $datta = sqlsrv_query($conn,$req);

// 	    // $query =  "INSERT INTO dbo.[traitement]([nb_recu],[nb_traite],[nb_rejete],[date_affectaion],[date_restitution])
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
}

 else {
            // One or more mandatory fields are empty. Therefore, display a the error message
            echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Please enter all fields marked with a (*)</div>';
            exit();
        }

  // } 

require 'inc/footer.php';

?>
