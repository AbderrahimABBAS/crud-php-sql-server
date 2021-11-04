<?php
  session_start();
  // Redirect the user to login page if he is not logged in.
  if(!isset($_SESSION['loggedIn'])){
    header('Location: login.php');
    exit();
  }
  require_once('inc/config/constants.php');
  require_once('inc/config/db.php');
  require_once('inc/header.html');
?>
  <body>
<?php
  require 'inc/navigation.php';
?>
<link rel="stylesheet" type="text/css" href="index.css"  />

<?php

$_usernm=$_SESSION['username'];
$_usernm1=$_SESSION['nom_agent'];
$_usernm2=$_SESSION['prenom_agent'];




$checkUserSql = "SELECT * FROM dbo.[agent] where username='$_usernm' and nom_agent='$_usernm1' and prenom_agent='$_usernm2'" ;

$result = sqlsrv_query($conn, $checkUserSql);  //$conn is your connection in 'connection.php'

// checks if the search was made
if($result === false){
     die( print_r( sqlsrv_errors(), true));
}

if (!$result) {
    trigger_error('Invalid query: ' . $conn->error);
}
 while($row = sqlsrv_fetch_array($result)){
                                                         // echo htmlspecialchars($row['etat']);
                                                         // echo htmlspecialchars($row['poste']);
                                                         $i=$row['etat'];
                                                          $j=$row['poste'];
                                                           }


if ($i=="inactive") {
  echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>Votre compte est inactive</div>';
} 
else if 
  ($i=="Active") {
  
  if ($j=="Administrateur") {
    ?>

<div class="cards-list">
  
<div class="card 1">
  <div class="card_image"> <img src="https://i.redd.it/b3esnz5ra34y.jpg" /> </div>
  <div class="card_title title-white">
    <p> <a href="BVersement.php">B.Versement</a></p>
  </div>
</div>

  <div class="card 2">
  <div class="card_image">
    <img src="https://cdn.blackmilkclothing.com/media/wysiwyg/Wallpapers/PhoneWallpapers_FloralCoral.jpg" />
    </div>
  <div class="card_title title-white">
    <p><a href="suis des lots.php">SUIS DES LOTS</a></p>
  </div>
</div>

<div class="card 3">
  <div class="card_image">
    <img src="https://media.giphy.com/media/10SvWCbt1ytWCc/giphy.gif" />
  </div>
  <div class="card_title">
    <p><a href="https://openclassrooms.com">DISPATCHING</a></p>
  </div>
</div>
  
  <div class="card 4">
  <div class="card_image">
    <img src="https://media.giphy.com/media/LwIyvaNcnzsD6/giphy.gif" />
    </div>
  <div class="card_title">
    <p><a href="traitement.php">TRAITEMENT</a></p>
  </div>
  </div>

  <div class="card 5">
  <div class="card_image">
    <img src="https://media.giphy.com/media/LwIyvaNcnzsD6/giphy.gif" />
    </div>
  <div class="card_title title-black">
    <p><a href="administration1.php">ADMINISTRATION</a></p>
  </div>
  </div>

</div>

<?php
  require 'inc/footer.php';
?>
</body>
  <?php  
  }
elseif ($j=="reception") {
  ?>
  <div class="cards-list">
  
<div class="card 1">
  <div class="card_image"> <img src="https://i.redd.it/b3esnz5ra34y.jpg" /> </div>
  <div class="card_title title-white">
    <p> <a href="BVersement.php">B.Versement</a></p>
  </div>
</div>

  <div class="card 2">
  <div class="card_image">
    <img src="https://cdn.blackmilkclothing.com/media/wysiwyg/Wallpapers/PhoneWallpapers_FloralCoral.jpg" />
    </div>
  <div class="card_title title-white">
    <p><a href="suis des lots.php">SUIS DES LOTS</a></p>
  </div>
</div>

<!-- <div class="card 3">
  <div class="card_image">
    <img src="https://media.giphy.com/media/10SvWCbt1ytWCc/giphy.gif" />
  </div>
  <div class="card_title">
    <p><a href="https://openclassrooms.com">DISPATCHING</a></p>
  </div>
</div> -->
  
  <!-- <div class="card 4">
  <div class="card_image">
    <img src="https://media.giphy.com/media/LwIyvaNcnzsD6/giphy.gif" />
    </div>
  <div class="card_title">
    <p><a href="traitement.php">TRAITEMENT</a></p>
  </div>
  </div> -->

  <!-- <div class="card 5">
  <div class="card_image">
    <img src="https://media.giphy.com/media/LwIyvaNcnzsD6/giphy.gif" />
    </div>
  <div class="card_title title-black">
    <p><a href="administration1.php">ADMINISTRATION</a></p>
  </div>
  </div> -->

</div>

<?php
  require 'inc/footer.php';
?>
</body>

  <?php
}elseif($j=="saisie" || $j=="scan" || $j=="depouille"){
  ?>
<div class="cards-list">
  
<!-- <div class="card 1">
  <div class="card_image"> <img src="https://i.redd.it/b3esnz5ra34y.jpg" /> </div>
  <div class="card_title title-white">
    <p> <a href="BVersement.php">B.Versement</a></p>
  </div>
</div> -->

  <!-- <div class="card 2">
  <div class="card_image">
    <img src="https://cdn.blackmilkclothing.com/media/wysiwyg/Wallpapers/PhoneWallpapers_FloralCoral.jpg" />
    </div>
  <div class="card_title title-white">
    <p><a href="suis des lots.php">SUIS DES LOTS</a></p>
  </div>
</div> -->

<!-- <div class="card 3">
  <div class="card_image">
    <img src="https://media.giphy.com/media/10SvWCbt1ytWCc/giphy.gif" />
  </div>
  <div class="card_title">
    <p><a href="https://openclassrooms.com">DISPATCHING</a></p>
  </div>
</div> -->
  
  <div class="card 4">
  <div class="card_image">
    <img src="https://media.giphy.com/media/LwIyvaNcnzsD6/giphy.gif" />
    </div>
  <div class="card_title">
    <p><a href="traitement.php">TRAITEMENT</a></p>
  </div>
  </div>

  <!-- <div class="card 5">
  <div class="card_image">
    <img src="https://media.giphy.com/media/LwIyvaNcnzsD6/giphy.gif" />
    </div>
  <div class="card_title title-black">
    <p><a href="administration1.php">ADMINISTRATION</a></p>
  </div>
  </div> -->

</div>

<?php
  require 'inc/footer.php';
?>
</body>
<?php
}


} 






?>

<!-- <div class="cards-list">
  
<div class="card 1">
  <div class="card_image"> <img src="https://i.redd.it/b3esnz5ra34y.jpg" /> </div>
  <div class="card_title title-white">
    <p> <a href="BVersement.php">B.Versement</a></p>
  </div>
</div>

  <div class="card 2">
  <div class="card_image">
    <img src="https://cdn.blackmilkclothing.com/media/wysiwyg/Wallpapers/PhoneWallpapers_FloralCoral.jpg" />
    </div>
  <div class="card_title title-white">
    <p><a href="suis des lots.php">SUIS DES LOTS</a></p>
  </div>
</div>

<div class="card 3">
  <div class="card_image">
    <img src="https://media.giphy.com/media/10SvWCbt1ytWCc/giphy.gif" />
  </div>
  <div class="card_title">
    <p><a href="https://openclassrooms.com">DISPATCHING</a></p>
  </div>
</div>
  
  <div class="card 4">
  <div class="card_image">
    <img src="https://media.giphy.com/media/LwIyvaNcnzsD6/giphy.gif" />
    </div>
  <div class="card_title">
    <p><a href="traitement.php">TRAITEMENT</a></p>
  </div>
  </div>

  <div class="card 5">
  <div class="card_image">
    <img src="https://media.giphy.com/media/LwIyvaNcnzsD6/giphy.gif" />
    </div>
  <div class="card_title title-black">
    <p><a href="administration1.php">ADMINISTRATION</a></p>
  </div>
  </div>

</div>

<?php
  // require 'inc/footer.php';
?>
</body> -->