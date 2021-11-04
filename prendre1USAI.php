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
    $date_affectaion = htmlentities($_POST['date_affectaion']);
    // $date_restitution = htmlentities($_POST['date_restitution']);
    $numbt = $_POST['num_boite'];
    $numbt1 = $_POST['code_centre'];
    $numbt2 = $_POST['code_dr_interne'];
    $numbt3 = $_POST['num_lot'];
    $numbt4 = $_POST['nb_traite'];
    echo $numbt3;
    $_usernm=$_SESSION['username'];
if(!empty($date_affectaion)){
	 
	 
	     // echo"hello2";
/////////////////////////////////////////
    $query1 = "SELECT * FROM dbo.[agent] WHERE username='$_usernm'";

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
// on met insert ici pas update
$query =  "INSERT INTO     dbo.[saisie]([num_boite],[code_centre],[num_lot],[code_dr_interne],[code_agent],[nb_recu],[date_affectaion])
                    VALUES('$numbt','$numbt1','$numbt3', '$numbt2','$j','$numbt4','$date_affectaion')";
	     // $query = "UPDATE dbo.[saisie]  set code_centre='$numbt1',num_lot='$numbt3',code_dr_interne='$numbt2',code_agent='$j',nb_recu='$numbt4', date_affectaion='$date_affectaion'where num_boite='$numbt' ";

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
     echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>Item added to database.</div>';
        ?>
        <!-- <meta HTTP-EQUIV="Refresh" CONTENT ="0; URL=http://localhost/mobilis projet11/traitement1.php"> -->
        <!-- <meta http-equiv="refresh" content="0;URL='http://localhost/mobilis projet11/traitement1.php'" />   -->

        <?php
        header("Location: traitement3.php");
   }
}

 else {
            // One or more mandatory fields are empty. Therefore, display a the error message
            echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Please enter all fields marked with a (*)</div>';
            exit();
        }

  // } 

require 'inc/footer.php';

?>
