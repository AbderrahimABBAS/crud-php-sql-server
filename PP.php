<?php
 echo '<pre>';
            print_r(filter_list());
            echo '</pre>';
            ?>
<input type="hidden" name="num_boite" value=<?php echo $_GET['num_boite'];?>>

<button type="submit" class="btn" id="update1">Update Content</button>

<td><a href ='updateD.php?num_boite=<?php echo $row["num_boite"]; ?>'>Edit/Update</td>







	<td><?php echo date_format($row['date_affectaion'], 'Y-m-d'); ?></td>
       <td><?php echo date_format($row['date_restitution'], 'Y-m-d'); ?></td>
       <td><?php echo htmlspecialchars($row['nb_recu']); ?></td>
       <td><?php echo htmlspecialchars($row['nb_traite']); ?></td>
       <td><?php echo htmlspecialchars($row['nb_rejete']); ?></td>
       <td><?php echo htmlspecialchars($row['code_agent_dispatch']); ?></td>
       <td><a href ='updateD.php?num_boite=<?php echo $row["num_boite"]; ?>'>Edit/Update</td>





        <button onclick="myFunction()" id="fire">fire</button>
<button  id="water" style="visibility:hidden">water</button>
function myFunction()
{

document.getElementById("fire").style.visibility = 'hidden';
document.getElementById("water").style.visibility = 'visible';
}


function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.innerHTML === "Hello") {
    x.innerHTML = "Swapped text!";
  } else {
    x.innerHTML = "Hello";
  }
}


///////////////////////////////////
<?php
#checks if the search brought some row and if it is one only row
if(sqlsrv_has_rows($result) != 1){
       // Item does not exist, therefore, you can add it to DB as a new item
        // Start the insert process

    echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>Item added to database.</div>';
        exit();
}
else{

#creates sessions
    if($row = sqlsrv_fetch_array($result)){
       // $_SESSION['id'] = $row['id'];
       // $_SESSION['name'] = $row['name'];
       // $_SESSION['user'] = $row['user'];
       // $_SESSION['level'] = $row['level'];
      $_SESSION['loggedIn'] = '1';
    // $_SESSION['fullName'] = $row['fullName'];
    echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>agent exist dans la DB. <strong>Update</strong> button to update the details. Or use a different Item Number.</div>';
        exit();
    }




     

    }

    /////////////////////////////////////////////////////////////////////

    #checks if the search brought some row and if it is one only row
if(sqlsrv_has_rows($query2) != 1){
       // Item does not exist, therefore, you can add it to DB as a new item
        // Start the insert process
      $query =  "INSERT INTO dbo.[depouille]([code_centre],[num_lot],[code_dr_interne],[code_agent],[nb_recu],[date_affectaion])
                                           VALUES('$numbt1','$numbt3', '$numbt2','$j','$numbt4','$date_affectaion')";
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
        // header("Location: traitement.php");
   }
    echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>Item added to database.</div>';
        exit();
}
else{

#creates sessions
    if($row = sqlsrv_fetch_array($result)){
       
    echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>boite deja traité <strong>Update</strong> </div>';
        exit();
    }




     

    }
/////////////////////////////////////////////////////////////////



    #checks if the search brought some row and if it is one only row
if(sqlsrv_has_rows($query2) != 1){
       // Item does not exist, therefore, you can add it to DB as a new item
        // Start the insert process
      $query =  "INSERT INTO dbo.[depouille]([code_centre],[num_lot],[code_dr_interne],[code_agent],[nb_recu],[date_affectaion])
                                           VALUES('$numbt1','$numbt3', '$numbt2','$j','$numbt4','$date_affectaion')";
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
        // header("Location: traitement.php");
   }
    echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>Item added to database.</div>';
        exit();
}
else{

#creates sessions
    if($row = sqlsrv_fetch_array($result)){
       
    echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>boite deja traité <strong>Update</strong> </div>';
        exit();
    }




     

    }
    /////////////////////////////////////////////////////////////////////////
$req = "SELECT * FROM dbo.[depouille] WHERE num_boite LIKE '$requete'AND num_lot='$requete1'and code_centre='$requete2'and code_dr_interne='$requete3'"; 

        

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
<form action="prendre1UD.php" method="POST">
  

<label for="date_affectaion">date_affectaion</label>
<input type="date" name="date_affectaion" id="date_affectaion">


<br>
<input type="hidden" name="num_boite" value=<?php echo $_GET['num_boite'];?>>
<input type="hidden" name="code_centre" value=<?php echo $_GET['code_centre'];?>>
<input type="hidden" name="code_dr_interne" value=<?php echo $_GET['code_dr_interne'];?>>
<input type="hidden" name="num_lot" value=<?php echo $_GET['num_lot'];?>>
<input type="hidden" name="nb_contrat_recu" value=<?php echo $_GET['nb_contrat_recu'];?>>

<button type="submit" class="btn" id="prendre1UD">Update Content</button>


</form>
    
    <?php 
 echo $_GET['num_lot'];
 echo $_GET['num_boite'];
 echo $_GET['code_centre'];
 echo $_GET['code_dr_interne'];
 echo $_GET['nb_contrat_recu'];
         
?>

<?php 
    


  require 'inc/footer.php';


    
        exit();
}
else{

#creates sessions
    if($row = sqlsrv_fetch_array($exec)){
       
    echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>boite deja traité <strong></strong> </div>';
        exit();
    }

?>


     

    }


  ?>
  ///////////////////////////////////////////////////////////////////////////
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
$req = "SELECT * FROM dbo.[depouille] WHERE num_boite='$numbt'and num_lot='$numbt3'and code_centre='$numbt1'and code_dr_interne='$numbt2'"; 

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

}
else{

    echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>la boite a ete deja rendu  <strong>Update</strong> button to update the details. Or use a different Item Number.</div>';

}
////////////////////////
$query = "UPDATE dbo.[depouille]  set nb_rejete='$nb_rejete',nb_traite='$nb_traite', date_restitution='$date_restitution'where num_boite='$numbt'and code_centre='$numbt1'and code_dr_interne='$numbt2'and num_lot='$numbt3'and code_agent='$j'";
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
        header("Location: traitement.php");
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
