<?php
	require_once('inc/config/constants.php');
	require_once('inc/config/db.php');
	
	// $initialStock = 0;
	// $baseImageFolder = '../../data/item_images/';
	// $itemImageFolder = '';

	echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>insertitem</div>';
	// if(isset($_POST['itemDetailsItemName2'])){taskOption
	if(isset($_POST['itemDetailsItemName2'])){
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
		// $description = htmlentities($_POST['itemDetailsQuantity10']); itemDetailsItemNumber1

// if (isset($_POST['taskOption']))
// {
//     // L'élément "list" existe bien
//     echo 'Option choisi : '.$_POST['taskOption'].'<br />'; // Sera a ou b ou c
// }

		$ItemNumber1 = htmlentities($_POST['itemDetailsItemNumber1']);
        // $ItemNumberOR1 = htmlentities($_POST['itemDetailsItemNumberOR1']);
        // $ItemNumberCH1 = htmlentities($_POST['itemDetailsItemNumberCH1']);
        // $ItemNumberCONS1 = htmlentities($_POST['itemDetailsItemNumberCONS1']);
        // $ItemNumberSUD1 = htmlentities($_POST['itemDetailsItemNumberSUD1']);

		$ItemName2 = htmlentities($_POST['itemDetailsItemName2']);
		$Discount3 = htmlentities($_POST['itemDetailsQuantity3']);
		$Quantity4 = htmlentities($_POST['itemImageItemNumber4']);
		$ItemNumber5 = htmlentities($_POST['itemImageItemNumber5']);
		$ItemNumber6 = htmlentities($_POST['itemDetailsQuantity6']);
		$Quantity7 = htmlentities($_POST['itemDetailsQuantity7']);
		
		
		// Check if mandatory fields are not empty
		if(!empty($ItemNumber1) && !empty($ItemName2) && isset($Discount3) && isset($Quantity4)&& isset($ItemNumber5)&& isset($ItemNumber6)&& isset($Quantity7)){
			
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
			///////////  enlever nb_boite


                  $checkUserSql = "SELECT * FROM dbo.[Bordereau_Versement] WHERE nb_boite='$Quantity4' AND num_lot='$ItemName2' AND code_dr_interne='$ItemNumber1' "  ;
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

                         $insertItemSql=  "INSERT INTO dbo.[Bordereau_Versement]([code_dr_interne],[num_lot], [nb_contrat], [nb_boite],[date_versement],[date_reception],[code_agence_interne])
                                           VALUES('$ItemNumber1','$ItemName2', '$Discount3','$Quantity4','$ItemNumber5','$ItemNumber6','$Quantity7')";

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
		echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>boite exist dans la DB. <strong>Update</strong> button to update the details. Or use a different Item Number.</div>';
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

		}}
		 else {
			// One or more mandatory fields are empty. Therefore, display a the error message
			echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Please enter all fields marked with a (*)</div>';
			exit();
		}
	}
?>