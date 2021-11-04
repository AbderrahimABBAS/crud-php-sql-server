<?php
	session_start();
	require_once('../../inc/config/constants.php');
	require_once('../../inc/config/db.php');
	
	$loginUsername = '';
	$loginPassword = '';
	$hashedPassword = '';
	// $username = '';
	if(isset($_POST['loginUsername'])){
		$loginUsername = $_POST['loginUsername'];
		$loginPassword = $_POST['loginPassword'];
		
		if(!empty($loginUsername) && !empty($loginUsername)){
			
			// Sanitize username
			$loginUsername = filter_var($loginUsername, FILTER_SANITIZE_STRING);
			
			// Check if username is empty
			if($loginUsername == ''){
				echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Please enter Username</div>';
				exit();
			}
			
			// Check if password is empty
			if($loginPassword == ''){
				echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Please enter Password</div>';
				exit();
			}
			
			// Encrypt the password
			$hashedPassword = md5($loginPassword);
			
			
         $checkUserSql = "SELECT * FROM shop_inventory.[user] WHERE username='$loginUsername' AND password='$hashedPassword' ";
    
 
         $result = sqlsrv_query($conn, $checkUserSql);  //$conn is your connection in 'connection.php'

// checks if the search was made
if($result === false){
     die( print_r( sqlsrv_errors(), true));
}

#checks if the search brought some row and if it is one only row
if(sqlsrv_has_rows($result) != 1){
       echo "User/password not found";
}
else{

#creates sessions
    if($row = sqlsrv_fetch_array($result)){
       // $_SESSION['id'] = $row['id'];
       // $_SESSION['name'] = $row['name'];
       // $_SESSION['user'] = $row['user'];
       // $_SESSION['level'] = $row['level'];
    	$_SESSION['loggedIn'] = '1';
		$_SESSION['fullName'] = $row['fullName'];
		echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>Login success! Redirecting you to home page...</div>';
		exit();
    }
    else {
				echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Incorrect Username / Password</div>';
				exit();
			}
#redirects user
    
    // header("Location: restrict.php");
}
        


			// Check if user exists or not
			// if($checkUserStatement->rowCount() > 0){
			// 	// Valid credentials. Hence, start the session
			// 	$row = $checkUserStatement->fetch(PDO::FETCH_ASSOC);

			// 	$_SESSION['loggedIn'] = '1';
			// 	$_SESSION['fullName'] = $row['fullName'];
				
			// 	echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>Login success! Redirecting you to home page...</div>';
			// 	exit();
			// } 
			// else {
			// 	echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Incorrect Username / Password</div>';
			// 	exit();
			// }
			
			
		} else {
			echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Please enter Username and Password</div>';
			exit();
		}
	}
?>
////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////
<!--    <!-- <a class="nav-link" id="v-pills-search-tab" data-toggle="pill" href="#v-pills-search" role="tab" aria-controls="v-pills-search" aria-selected="false">Search</a> -->
      <ul id="submenu">
        <!-- <li><a href="http://www.jochaho.com/wordpress/difference-between-svg-vs-canvas/">Difference between SVG vs. Canvas</a></li>
        <li><a href="http://www.jochaho.com/wordpress/new-features-in-html5/">New features in HTML5</a></li>
        <li><a href="http://www.jochaho.com/wordpress/creating-links-to-sections-within-a-webpage/">Creating links to sections within a webpage</a></li> -->
      </ul>
    </li>
    <!-- <li><a href="http://www.jochaho.com/wordpress/category/news/">News</a></li>
    <li><a href="http://www.jochaho.com/wordpress/about-pritesh-badge/">Contact Us</a></li> -->
  </ul>
</nav>
		<div class="col-lg-2">
		<h1 class="my-4"></h1>
			<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
			 
			</div>
		</div>
<!-- Div to show the ajax message from validations/db submission -->
							<div id="itemDetailsMessage"></div>
<form action="insertItem2.php" method="post">
	
                                <div class="form-row">
								<div class="form-group col-md-3">
								  <!-- <label for="itemDetailsDiscount">code dr interne</label>
								  <input type="number" class="form-control" value="0" name="itemDetailsDiscount" id="itemDetailsDiscount"> -->

								  <label for="itemDetailsItemNumberD1">code_centre<span class="requiredIcon">*</span></label>
								  <input type="number" class="form-control" value="0" name="itemDetailsItemNumberD1" id="itemDetailsItemNumberD1">
								</div>
								<div class="form-group col-md-3">
								  <label for="itemDetailsItemNameD2">code_agent<span class="requiredIcon">*</span></label>
								  <input type="number" class="form-control" value="0" name="itemDetailsItemNameD2" id="itemDetailsItemNameD2">
								</div>
								<div class="form-group col-md-3">
								  <!-- <label for="itemDetailsUnitPrice">num boite<span class="requiredIcon">*</span></label>
								  <input type="number" class="form-control" value="0" name="itemDetailsUnitPrice" id="itemDetailsUnitPrice"> -->
								  <label for="itemDetailsDiscountD3">code_dr_interne<span class="requiredIcon">*</span></label>
								  <input type="number" class="form-control" value="0" name="itemDetailsDiscountD3" id="itemDetailsDiscountD3">
								</div>
								<div class="form-group col-md-3">
								  <!-- <label for="itemDetailsTotalStock">nb contrat recu</label>
								  <input type="number" class="form-control" value="0" name="itemDetailsUnitPrice" id="itemDetailsUnitPrice"> -->
								  <label for="itemDetailsQuantityD4">num_lot<span class="requiredIcon">*</span></label>
								  <input type="number" class="form-control" value="0" name="itemDetailsQuantityD4" id="itemDetailsQuantityD4">
								</div>
								<div class="form-group col-md-3">
								  <!-- <label for="itemDetailsTotalStock">nb contrat recu</label>
								  <input type="number" class="form-control" value="0" name="itemDetailsUnitPrice" id="itemDetailsUnitPrice"> -->
								  <label for="itemImageItemNumberD5">num_boite<span class="requiredIcon">*</span></label>
								  <input type="number" class="form-control" value="0" name="itemImageItemNumberD5" id="itemImageItemNumberD5">
								</div>
								<div class="form-group col-md-3">
								  <!-- <label for="itemDetailsTotalStock">nb contrat recu</label>
								  <input type="number" class="form-control" value="0" name="itemDetailsUnitPrice" id="itemDetailsUnitPrice"> -->
								  <label for="itemImageItemNumberD6">date_affectaion<span class="requiredIcon">*</span></label>
								  <input type="date" class="form-control"  name="itemImageItemNumberD6" id="itemImageItemNumberD6">
								</div>
								<div class="form-group col-md-3">
								  <!-- <label for="itemDetailsTotalStock">nb contrat recu</label>
								  <input type="number" class="form-control" value="0" name="itemDetailsUnitPrice" id="itemDetailsUnitPrice"> -->
								  <label for="itemDetailsQuantityD7">date_restitution<span class="requiredIcon">*</span></label>
								  <input type="date" class="form-control" name="itemDetailsQuantityD7" id="itemDetailsQuantityD7">
								</div>
								<div class="form-group col-md-3">
								  <!-- <label for="itemDetailsTotalStock">nb contrat recu</label>
								  <input type="number" class="form-control" value="0" name="itemDetailsUnitPrice" id="itemDetailsUnitPrice"> -->
								  <label for="itemDetailsQuantityD8">nb_recu<span class="requiredIcon">*</span></label>
								  <input type="number" class="form-control" name="itemDetailsQuantityD8" id="itemDetailsQuantityD8">
								</div>
								<div class="form-group col-md-3">
								  <!-- <label for="itemDetailsTotalStock">nb contrat recu</label>
								  <input type="number" class="form-control" value="0" name="itemDetailsUnitPrice" id="itemDetailsUnitPrice"> -->
								  <label for="itemImageItemNumberD9">nb_traite<span class="requiredIcon">*</span></label>
								  <input type="number" class="form-control" value="0" name="itemImageItemNumberD9" id="itemImageItemNumberD9">
								</div>
								<div class="form-group col-md-3">
								  <!-- <label for="itemDetailsTotalStock">nb contrat recu</label>
								  <input type="number" class="form-control" value="0" name="itemDetailsUnitPrice" id="itemDetailsUnitPrice"> -->
								  <label for="itemDetailsQuantityD10">nb_rejete<span class="requiredIcon">*</span></label>
								  <input type="number" class="form-control" value="0" name="itemDetailsQuantityD10" id="itemDetailsQuantityD10">
								</div>
								<div class="form-group col-md-3">
								  <!-- <label for="itemDetailsTotalStock">nb contrat recu</label>
								  <input type="number" class="form-control" value="0" name="itemDetailsUnitPrice" id="itemDetailsUnitPrice"> -->
								  <label for="itemDetailsQuantityD11">code_agent_dispatch<span class="requiredIcon">*</span></label>
								  <input type="number" class="form-control" value="0" name="itemDetailsQuantityD11" id="itemDetailsQuantityD11">
								</div>
								<div class="form-group col-md-3">
								  <!-- <label for="itemDetailsTotalStock">nb contrat recu</label>
								  <input type="number" class="form-control" value="0" name="itemDetailsUnitPrice" id="itemDetailsUnitPrice"> -->
								  <label for="itemDetailsQuantityD12">type_op<span class="requiredIcon">*</span></label>
								  <input type="number" class="form-control" value="0" name="itemDetailsQuantityD12" id="itemDetailsQuantityD12">
								</div>
								<div class="form-group col-md-3">
								  <!-- <label for="itemDetailsTotalStock">nb contrat recu</label>
								  <input type="number" class="form-control" value="0" name="itemDetailsUnitPrice" id="itemDetailsUnitPrice"> -->
								  <label for="itemDetailsQuantityD13">code_agence_interne<span class="requiredIcon">*</span></label>
								  <input type="number" class="form-control" value="0" name="itemDetailsQuantityD13" id="itemDetailsQuantityD13">
								</div>
								<div class="form-group col-md-3">
									<div id="imageContainer"></div>
								</div>
							  </div>


							  <div class="form-row">
								<div class="form-group col-md-3" style="display:inline-block">
								  <!-- <label for="itemDetailsItemNumber">Item Number<span class="requiredIcon">*</span></label>
								  <input type="number" class="form-control" name="itemDetailsItemNumber" id="itemDetailsItemNumber" autocomplete="off"> -->
								  <div id="itemDetailsItemNumberSuggestionsDiv" class="customListDivWidth"></div>
								</div>
								<div class="form-group col-md-3">
								  <!-- <label for="itemDetailsProductID">Product ID</label>
								  <input class="form-control invTooltip" type="number" readonly  id="itemDetailsProductID" name="itemDetailsProductID" title="This will be auto-generated when you add a new item"> -->
								</div>
							  </div>
							  <div class="form-row">
								  <div class="form-group col-md-6">
									<!-- <label for="itemDetailsItemName">Item Name<span class="requiredIcon">*</span></label>
									<input type="text" class="form-control" name="itemDetailsItemName" id="itemDetailsItemName" autocomplete="off"> -->
									<div id="itemDetailsItemNameSuggestionsDiv" class="customListDivWidth"></div>
								  </div>
								  <div class="form-group col-md-2">
									<!-- <label for="itemDetailsStatus">Status</label>
									<select id="itemDetailsStatus" name="itemDetailsStatus" class="form-control chosenSelect">
										<?php include('inc/statusList.html'); ?>
									</select> -->
								  </div>
							  </div>
							  <div class="form-row">
								<div class="form-group col-md-6" style="display:inline-block">
								  <!-- <label for="itemDetailsDescription">Description</label>
								  <textarea rows="4" class="form-control" placeholder="Description" name="itemDetailsDescription" id="itemDetailsDescription"></textarea> -->
								</div>
							  </div>
							 
							  <button type="button" id="addItem2" class="btn btn-success">Add Item</button>
							  <!-- <button type="button" id="updateItemDetailsButton" class="btn btn-primary">Update</button>
							  <button type="button" id="deleteItem" class="btn btn-danger">Delete</button> -->
							  <button type="reset" class="btn" id="itemClear">Clear</button>
							</form> -->
							/////////////////////////////////////////////////////////////////
							if(isset($_POST['itemDetailsItemNumber1'])){
		echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>insertitem11</div>';
	
		// $itemNumber = htmlentities($_POST['itemDetailsItemNumber1']);
		// $itemName = htmlentities($_POST['itemDetailsItemName2']);
		// $discount = htmlentities($_POST['itemDetailsDiscount3']);
		// $quantity = htmlentities($_POST['itemDetailsQuantity4']);
		// $unitPrice = htmlentities($_POST['itemImageItemNumber5']);
		// $status = htmlentities($_POST['itemImageItemNumber6']);
		// $description = htmlentities($_POST['itemDetailsQuantity7']);
		// $unitPrice = htmlentities($_POST['itemDetailsQuantity8']);
		// $status = htmlentities($_POST['itemImageItemNumber9']);
		// $description = htmlentities($_POST['itemDetailsQuantity10']);

		$ItemNumber1 = htmlentities($_POST['itemDetailsItemNumber1']);
		$ItemName2 = htmlentities($_POST['itemDetailsItemName2']);
		$Discount3 = htmlentities($_POST['itemDetailsDiscount3']);
		$Quantity4 = htmlentities($_POST['itemDetailsQuantity4']);
		$ItemNumber5 = htmlentities($_POST['itemImageItemNumber5']);
		$ItemNumber6 = htmlentities($_POST['itemImageItemNumber6']);
		$Quantity7 = htmlentities($_POST['itemDetailsQuantity7']);
		$Quantity8 = htmlentities($_POST['itemDetailsQuantity8']);
		$ItemNumber9 = htmlentities($_POST['itemImageItemNumber9']);
		$Quantity10 = htmlentities($_POST['itemDetailsQuantity10']);
		$Quantity11 = htmlentities($_POST['itemDetailsQuantity11']);
		


		// Check if mandatory fields are not empty
		if(!empty($ItemNumber1) && !empty($ItemName2) && isset($Discount3) && isset($Quantity4)&& isset($ItemNumber5)&& isset($ItemNumber6)&& isset($Quantity7)&& isset($Quantity8)&& isset($ItemNumber9)&& isset($Quantity10)&& isset($Quantity11)){
			
			// Sanitize item number
			// $itemNumber = filter_var($itemNumber, FILTER_SANITIZE_STRING);
			
			// Validate item quantity. It has to be a number
			if(filter_var($ItemNumber1, FILTER_VALIDATE_INT) === 0 || filter_var($ItemNumber1, FILTER_VALIDATE_INT)||filter_var($ItemName2, FILTER_VALIDATE_INT) === 0 || filter_var($ItemName2, FILTER_VALIDATE_INT)||filter_var($Discount3, FILTER_VALIDATE_INT) === 0 || filter_var($Discount3, FILTER_VALIDATE_INT)||filter_var($Quantity4, FILTER_VALIDATE_INT) === 0 || filter_var($Quantity4, FILTER_VALIDATE_INT)||filter_var($Quantity7, FILTER_VALIDATE_INT) === 0 || filter_var($Quantity7, FILTER_VALIDATE_INT)||filter_var($Quantity8, FILTER_VALIDATE_INT) === 0 || filter_var($Quantity8, FILTER_VALIDATE_INT)||filter_var($ItemNumber9, FILTER_VALIDATE_INT) === 0 || filter_var($ItemNumber9, FILTER_VALIDATE_INT)||filter_var($Quantity10, FILTER_VALIDATE_INT) === 0 || filter_var($Quantity10, FILTER_VALIDATE_INT)||filter_var($Quantity11, FILTER_VALIDATE_INT) === 0 || filter_var($Quantity11, FILTER_VALIDATE_INT)){
				// Valid quantity
			} else {
				// Quantity is not a valid number
				echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Please enter a valid number for quantity</div>';
			 	exit();
			}
			
			// Validate unit price. It has to be a number or floating point value
			// if(filter_var($unitPrice, FILTER_VALIDATE_FLOAT) === 0.0 || filter_var($unitPrice, FILTER_VALIDATE_FLOAT)){
			// 	// Valid float (unit price)
			// } else {
			// 	// Unit price is not a valid number
			// 	echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Please enter a valid number for unit price</div>';
			// 	exit();
			// }
			
			// Validate discount only if it's provided
			// if(!empty($discount)){
			// 	if(filter_var($discount, FILTER_VALIDATE_FLOAT) === false){
			// 		// Discount is not a valid floating point number
			// 		echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Please enter a valid discount amount</div>';
			// 		exit();
			// 	}
			// }
			
			// // Create image folder for uploading images
			// $itemImageFolder = $baseImageFolder . $itemNumber;
			// if(is_dir($itemImageFolder)){
			// 	// Folder already exist. Hence, do nothing
			// } else {
			// 	// Folder does not exist, Hence, create it
			// 	mkdir($itemImageFolder);
			// }
			


                  $checkUserSql = "SELECT * FROM dbo.[traitement] WHERE num_boite='$ItemNumber5' AND num_lot='$Quantity4' "  ;
    // a faire ( if num boite existe alors) 
 
         $result = sqlsrv_query($conn, $checkUserSql);  //$conn is your connection in 'connection.php'

// checks if the search was made
if($result === false){
     die( print_r( sqlsrv_errors(), true));
}

#checks if the search brought some row and if it is one only row
if(sqlsrv_has_rows($result) != 1){
       // Item does not exist, therefore, you can add it to DB as a new item
				// Start the insert process

				// $insertItemSql = 'INSERT INTO item(itemNumber, itemName, discount, stock, unitPrice, status, description) VALUES(:itemNumber, :itemName, :discount, :stock, :unitPrice, :status, :description)';
	            
	            // $insertItemSql="INSERT INTO dbo.[detail_lot]
	            //                        ,[code_centre]
             //                       ,[code_dr_interne]
             //                               ,[num_lot]
             //                             ,[num_boite]
             //                       ,[nb_contrat_recu]
             //               VALUES ('1','$itemNumber','$itemName','$discount','$quantity')";

                         $insertItemSql=  "INSERT INTO dbo.[traitement]([code_centre],[code_agent], [code_dr_interne], [num_lot],[num_boite],[date_affectaion],[date_restitution], [nb_recu], [nb_traite],[nb_rejete] ,[code_agent_dispatch])
                                           VALUES('$ItemNumber1','$ItemName2', '$Discount3','$Quantity4','$ItemNumber5','$ItemNumber6','$Quantity7', '$Quantity8','$ItemNumber9','$Quantity10','$Quantity11')";

                           $insertItemStatement = sqlsrv_query($conn, $insertItemSql);  //$conn is your connection in 'connection.php'
                          
                           // checks if the search was made
                           if($insertItemStatement === false){
                                  die( print_r( sqlsrv_errors(), true));
                                                 }

				// $insertItemStatement = $conn->prepare($insertItemSql);
				// $insertItemStatement->execute(['itemNumber' => $itemNumber, 'itemName' => $itemName, 'discount' => $discount, 'stock' => $quantity, 'unitPrice' => $unitPrice, 'status' => $status, 'description' => $description]);
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
	}
		 else {
			// One or more mandatory fields are empty. Therefore, display a the error message
			echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Please enter all fields marked with a (*)</div>';
			exit();
		}
	}

////////////////////////////////////////////////////////
$nb_resultats=sqlsrv_num_rows($exec);
        
        // $nb_resultats = $exec->num_rows;              // compter les résultats
echo '<font color="blue">Résultat de votre recherche </font><br/>
            <font size="2px">'.$nb_resultats.'</font>';

    if($nb_resultats != 0) 
    {
       echo '<center>';   
       echo '
           <form action="" method="Post">
           <input type="text" name="requete" size="60px">
           <input type="submit" value="Ok">
           </form>';
      echo '</center>';
      echo '<font color="blue">Résultat de votre recherche </font><br/>
            <font size="2px">'.$nb_resultats.'</font>';


    if($nb_resultats > 1)
    {
        echo ' <font size="2px" color="red">résultats</font> ';
    }
        else
        {
            echo ' <font size="2px" color="red">résultats trouvé</font>  ';
        } 

       echo  '<font size="2px">dans notre base de données :</font><br/><br/>';



    while($donnees = mysqli_fetch_array($exec))
    {
    ?>

    <?php
          
          echo '<span>'; 
          echo '<font size="2px">'.$donnees['adresse_site'].'</font><br/>';
          echo  '<font size="2px">'.$donnees['nom_site'].'</font><br/>';
          echo '<font size="2px">'.$donnees['description_site'].'</font><br/>';
          echo '</span>';
    ?>

    <?php
    } // fin de la boucle
    ?>


    <?php
    }


    else {
        echo '<center>';   
        echo '
           <form action="" method="Post">
           <input type="text" name="requete" size="60px">
           <input type="submit" value="Ok">
           </form>';
        echo '</center>';
        echo '<h5>Pas de résultats</h3>';
        echo '<pre>Nous n avons trouver aucun résultats pour votre requête
              <font color="blue">' .$_POST['requete'].'</font></pre>';
      
     }
    }

    else
    { 


     echo '<center>';   
     echo '
           <form action="" method="Post">
           <input type="text" name="requete" size="60px">
           <input type="submit" value="Ok">
           </form>';
     echo '</center>';      

    }
?>
///////////////////////////////////
<?php
	require_once('inc/config/constants.php');
	require_once('inc/config/db.php');
	
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
  
        $req = "SELECT * FROM dbo.[traitement] WHERE num_boite LIKE '$requete'"; 

        $exec = sqlsrv_query($conn, $req);                            
// exécuter la requête  
        

// checks if the search was made
if($exec === false){
     die( print_r( sqlsrv_errors(), true));
}


while ($row = sqlsrv_fetch_array($exec)){
         echo 'Résultat de la recherche: '.$row['num_boite'].'';
////////////////////////////////////////////////////////////////////
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
          <th>code_agent_dispatch</th>
          <th>type_op</th>
          <th>code_agence_interne</th>
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
       <td><button type="button"class="btn btn-success editbtn">EDITE</button></td>
       <td><a href = 'update.php?rn=$row[nb_recu]&fn=$row[nb_traite]&ln=$row[nb_rejete]'>Edit/Update</td>
        <td><a href = 'delete.php?rn=$row[nb_recu]&fn=$row[nb_traite]&ln=$row[nb_rejete]'onclick='return ckeckdelete()'>Delete</td>
       
     </tr>
     <?php } ?> 


     

      </tbody>
    </table>
    $(document).ready(function(){
        $('.editbtn').on('click',function()
                                            { 
                                            $().modal('show') ;
                                                }
        );
    });
    <?php 

         //////////////////////////////////////////////////////////////////


                // exit();
    }

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
        <?php
}

}
?>
-->
//////////////////////////////////////////////////// add info
<label for="">First Name</label>
<input type="text" id='fname'>

<label for="">Last Name</label>
<input type="text" id='lname'>

<label for="">Email Address</label>
<input type="text" id='email'>

<label for="">Phone Number</label>
<input type="text" id='phone'>
<br>
<button onclick="updateInfo()">Update Content</button>
<br>
<h4 id="enterName">First Last</h4>
<h4 id='enterEmail'>example@email.com</h4>
<h4 id='enterPhone'>555-555-5555</h4>

///////////////////////////////////css add info
label {
  display: block;
  padding-top: 10px;
  font-size 22px;
  font-family: Arial, serif;
  color: grey;
}

input {
  border: 1px solid grey;
  padding: 6px;
  border-radius: 50px;
  color: grey;
  box-shadow: 0 0 10px rgba(0, 0, 0, .1);
}

button {
  display: block;
  margin-top: 10px;
  font-size 22px;
  font-family: Arial, serif;
  color: grey;
  padding: 8px 20px;
  border: 10px;
  border-radius: 50px;
  box-shadow: 0 0 10px rgba(0, 0, 0, .1);
}

h4 {
  margin: 0;
}
/////////////////////////////
<!DOCTYPE html>
<html>
<head>
  <title>Display all records from Database</title>
</head>
<body>

<h2>Employee Details</h2>

<table border="2">
  <tr>
    <td>Sr.No.</td>
    <td>Full Name</td>
    <td>Age</td>
    <td>Edit</td>
    <td>Delete</td>
  </tr>

<?php

include "dbConn.php"; // Using database connection file here

$records = mysqli_query($db,"select * from tblemp"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['fullname']; ?></td>
    <td><?php echo $data['age']; ?></td>    
    <td><a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a></td>
    <td><a href="delete.php?id=<?php echo $data['id']; ?>">Delete</a></td>
  </tr>	
<?php
}
?>
</table>

</body>
</html>

///////////////////////////////////////////////
<?php

include "dbConn.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$qry = mysqli_query($db,"select * from tblemp where id='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $fullname = $_POST['fullname'];
    $age = $_POST['age'];
	
    $edit = mysqli_query($db,"update tblemp set fullname='$fullname', age='$age' where id='$id'");
	
    if($edit)
    {
        mysqli_close($db); // Close connection
        header("location:all_records.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error();
    }    	
}
?>

<h3>Update Data</h3>

<form method="POST">
  <input type="text" name="fullname" value="<?php echo $data['fullname'] ?>" placeholder="Enter Full Name" Required>
  <input type="text" name="age" value="<?php echo $data['age'] ?>" placeholder="Enter Age" Required>
  <input type="submit" name="update" value="Update">
</form>
////////////////////////////////