<?php

#checks if the search brought some row and if it is one only row
if(sqlsrv_has_rows($result) != 1){
       // Item does not exist, therefore, you can add it to DB as a new item
				// Start the insert process

				// la boite n'est pas encore traiter 
 

				echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>la boite n est pas encore traiter.</div>';
			
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




			// // Calculate the stock values
			// $stockSql = 'SELECT stock FROM item WHERE itemNumber=:itemNumber';
			// $stockStatement = $conn->prepare($stockSql);
			// $stockStatement->execute(['itemNumber' => $itemNumber]);
			// if($stockStatement->rowCount() > 0){
			// 	//$row = $stockStatement->fetch(PDO::FETCH_ASSOC);
			// 	//$quantity = $quantity + $row['stock'];
			// 	echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Item already exists in DB. Please click the <strong>Update</strong> button to update the details. Or use a different Item Number.</div>';
			// 	exit();
			// } else {
			// 	// Item does not exist, therefore, you can add it to DB as a new item
			// 	// Start the insert process
			// 	$insertItemSql = 'INSERT INTO item(itemNumber, itemName, discount, stock, unitPrice, status, description) VALUES(:itemNumber, :itemName, :discount, :stock, :unitPrice, :status, :description)';
			// 	$insertItemStatement = $conn->prepare($insertItemSql);
			// 	$insertItemStatement->execute(['itemNumber' => $itemNumber, 'itemName' => $itemName, 'discount' => $discount, 'stock' => $quantity, 'unitPrice' => $unitPrice, 'status' => $status, 'description' => $description]);
			// 	echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>Item added to database.</div>';
			// 	exit();
			// }

		}

	?>

	//////////////////////////////////////////////////////////////

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
/*@import url(https://fonts.googleapis.com/css?family=Open+Sans);*/

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
</style>
<!-- <link rel="stylesheet" href="search1.css" /> -->
<!-- <form action="insertItem2.php" method="post">
   <div class="wrap">
   <div class="search">
   <div for="search" class="recherche">
      <input type="text" class="searchTerm" name="search" id="search" placeholder="What are you looking for?">
      <button type="submit"id="addItem2" class="searchButton">
        <i class="fa fa-search"></i>
     </button>
   </div>
 
</div>
</div>
</form> -->
<p>Remise Depouille</p>
<div class="conteneur">
      <form action="insertItemD.php" method="post">
   <div for="search" class="recherche">
      <input type="text" class="searchTerm" name="search" id="search" placeholder="What are you looking for?">
      <button type="submit"id="addItem2" class="searchButton">
        <i class="fa fa-search"></i>
     </button>
   </div>
 </form>
</div>
</body>



 <?php
  require 'inc/footer.php';
?>