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
  $requete2 =htmlentities($_GET['code_centre']);
  $requete3 =htmlentities($_GET['code_dr_interne']);
  // si la boite existe dans la table saisie alors ne l'ajoute pas quelqu'un l'a utiliser 

        $req = "SELECT * FROM dbo.[saisie] WHERE num_boite='$requete'AND num_lot='$requete1'and code_centre='$requete2'and code_dr_interne='$requete3'"; 


         $exec = sqlsrv_query($conn, $req);                            
// exécuter la requête  
        

// checks if the search was made
if($exec === false){
     die( print_r( sqlsrv_errors(), true));
}

#checks if the search brought some row and if it is one only row
if(sqlsrv_has_rows($exec) != 1){
       // Item does not exist, therefore, you can add it to DB as a new item
        // Start the insert process


         ?>

   







    <link rel="stylesheet" type="text/css" href="update.css"  />
<form action="prendre1USAI.php" method="POST">
  

<label for="date_affectaion">date_affectaion</label>
<input type="date" name="date_affectaion" id="date_affectaion">


<br>
<input type="hidden" name="num_boite" value=<?php echo $_GET['num_boite'];?>>
<input type="hidden" name="code_centre" value=<?php echo $_GET['code_centre'];?>>
<input type="hidden" name="code_dr_interne" value=<?php echo $_GET['code_dr_interne'];?>>
<input type="hidden" name="num_lot" value=<?php echo $_GET['num_lot'];?>>
<input type="hidden" name="nb_traite" value=<?php echo $_GET['nb_traite'];?>>

<button type="submit" class="btn" id="prendre1USAI">Update Content</button>


</form>
    
    <?php 
 echo $_GET['num_lot'];
 echo $_GET['num_boite'];
 echo $_GET['code_centre'];
 echo $_GET['code_dr_interne'];
 echo $_GET['nb_traite'];
         
?>

<?php 
    


  require 'inc/footer.php';
// exit();
}
else{

#creates sessions
    if($row = sqlsrv_fetch_array($exec)){
       
    echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>boite deja traité <strong></strong> </div>';
        exit();
    }




     

    }


    ?>