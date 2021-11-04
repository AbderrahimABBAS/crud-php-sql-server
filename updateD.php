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
<!-- <div class="conteneur">
      <form action="insertItem2.php" method="post">
   <div for="search" class="recherche">
      <input type="text" class="searchTerm" name="search" id="search" placeholder="What are you looking for?">
      <button type="submit"id="addItem2" class="searchButton">
        <i class="fa fa-search"></i>
     </button>
   </div>
 </form>
</div> -->
                                  <!-- <label for="itemDetailsDiscount">code dr interne</label>
                                  <input type="number" class="form-control" value="0" name="itemDetailsDiscount" id="itemDetailsDiscount"> -->

                                 



<link rel="stylesheet" type="text/css" href="update.css"  />
<form action="update1D.php" method="POST">
    <!-- <div for="update" class="update"> -->
<!-- <label for="nb_recu">nb_recu</label>
<input type="text" name="nb_recu"id="nb_recu"> -->

<label for="nb_traite">nb_traite</label>
<input type="text" name="nb_traite" id="nb_traite">

<label for="nb_rejete">nb_rejete</label>
<input type="text" name="nb_rejete" id="nb_rejete">

<!-- <label for="date_affectaion">date_affectaion</label>
<input type="date" name="date_affectaion" id="date_affectaion"> -->

<label for="date_restitution">date_restitution</label>
<input type="date" name="date_restitution" id="date_restitution">
<br>
<input type="hidden" name="num_boite" value=<?php echo $_GET['num_boite'];?>>

<button type="submit" class="btn" id="update1D">Update Content</button>

<!-- <button onclick="updateInfo()">Update Content</button> -->
<!-- <br> -->
  <!-- </div> -->
</form>
 
        <?php
// $nb=$row[num_boite];
// echo $nb;
require 'inc/footer.php';
?>
</body>

