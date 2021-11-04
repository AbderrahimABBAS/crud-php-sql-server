<?php
     session_start();
     require_once('../../inc/config/constants.php');
     require_once('../../inc/config/db.php');
     //Affichage des erreurs php
    error_reporting(E_ALL);
 
     $initialStock = 0;
     $baseImageFolder = '../../data/item_images/';
     $itemImageFolder = '';
     $_usernm=$_SESSION['username'];
     $_nom=$_SESSION['nom_agent'];
     $_prnm =$_SESSION['prenom_agent'];
     $_cdcentre =$_SESSION['code_centre'] ;

     

// $insertItemSql=  "SELECT TOP 1 (code_dr_interne) FROM dbo.[Bordereau_Versement] ORDER BY code_dr_interne DESC";
// // select * from ma_table where rownum >= all
// // SELECT LAST (column_name) FROM table_name;  
// // where rownum >= all
// // SELECT TOP 1 column_name FROM table_name
// // ORDER BY column_name DESC;
//                                 echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>from anouther page</div>';;
//                              $result1 = sqlsrv_query($conn, $insertItemSql);
//                              // $rowCount = sqlsrv_num_rows($result1); 
//                              // echo htmlspecialchars($rowCount);
//                                  // $row_count = sqlsrv_num_rows($result1);
//                                  // echo "Total rows: ".$row_count."<br/>"; 
//                                  if($result1 === false){
//                                       die( print_r( sqlsrv_errors(), true));
//                                                        }

//                                 if (!$result1) {
//                                      trigger_error('Invalid query: ' . $conn->error);
//                                                }



//                            // while($row = sqlsrv_fetch_array($result1)){
//                            //   echo htmlspecialchars($row['code_dr_interne'][length]);

//                            // }
//                                                // $i = 0;

//                                                while($row = sqlsrv_fetch_array($result1)){
//                                                            echo htmlspecialchars($row['code_dr_interne']);
//                                                            // $i++;

//                                                                                             }
                                                       // echo "Total rows: ".$i."<br/>";
                                                       // echo htmlspecialchars($row['code_dr_interne'][$i]);

                                                       // select * from ma_table where rownum >= all

                          //  foreach($array as $element) {
                          // if ($element === end($array))
                          //              echo 'LAST ELEMENT!';
                          //                             }
    // $insertItemSql=  "SELECT code_dr_interne FROM dbo.[Bordereau_Versement] WHERE code_dr_interne=IDENT_CURRENT( 'Bordereau_Versement') ),";
    //                             echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>from anouther page</div>';;
    //                          $result1 = sqlsrv_query($conn, $insertItemSql);
    //                              if($result1 === false){
    //                                   die( print_r( sqlsrv_errors(), true));
    //                                                    }

    //                             if (!$result1) {
    //                                  trigger_error('Invalid query: ' . $conn->error);
    //                                            }



    //                        if($row = sqlsrv_fetch_array($result1)){
    //                             echo htmlspecialchars($row['code_dr_interne']);

    //                        }




     
     if(isset($_POST['itemDetailsDiscount'])){
          
          // $itemNumber = htmlentities($_POST['itemDetailsItemName1']);
          $itemName = htmlentities($_POST['itemDetailsDiscount']);
          $discount = htmlentities($_POST['itemDetailsQuantity']);
          
          
          
          // Check if mandatory fields are not empty
          if(!empty($itemName) && isset($discount)){
               
               // Sanitize item number
               // $itemNumber = filter_var($itemNumber, FILTER_SANITIZE_STRING);
               
               // Validate item quantity. It has to be a number
               if((filter_var($itemName, FILTER_VALIDATE_INT) === 0 || filter_var($itemName, FILTER_VALIDATE_INT))||(filter_var($discount, FILTER_VALIDATE_INT) === 0 || filter_var($discount, FILTER_VALIDATE_INT))){
                    // Valid quantity
                    // echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button> valid number </div>';

               } else {
                    // Quantity is not a valid number
                    echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Please enter a valid number for quantity</div>';
                    exit();
               }
               
               // // Validate unit price. It has to be a number or floating point value
               // if(filter_var($unitPrice, FILTER_VALIDATE_FLOAT) === 0.0 || filter_var($unitPrice, FILTER_VALIDATE_FLOAT)){
               //   // Valid float (unit price)
               // } else {
               //   // Unit price is not a valid number
               //   echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Please enter a valid number for unit price</div>';
               //   exit();
               // }
               
               // // Validate discount only if it's provided
               // if(!empty($discount)){
               //   if(filter_var($discount, FILTER_VALIDATE_FLOAT) === false){
               //        // Discount is not a valid floating point number
               //        echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Please enter a valid discount amount</div>';
               //        exit();
               //   }
               // }
               
               // // Create image folder for uploading images
               // $itemImageFolder = $baseImageFolder . $itemNumber;
               // if(is_dir($itemImageFolder)){
               //   // Folder already exist. Hence, do nothing
               // } else {
               //   // Folder does not exist, Hence, create it
               //   mkdir($itemImageFolder);
               // }[suivis_mobilis].[dbo].[detail_lot]



// ajouter num lot et code dr et centre dans les conditions
               /////////////////////////////////////////////////////////////
               $insertItemSql1=  "SELECT TOP 1 (code_dr_interne) FROM dbo.[Bordereau_Versement] ORDER BY IDb DESC";

                                echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>from anouther page</div>';;
                             $result1 = sqlsrv_query($conn, $insertItemSql1);
                            
                                 if($result1 === false){
                                      die( print_r( sqlsrv_errors(), true));
                                                       }

                                if (!$result1) {
                                     trigger_error('Invalid query: ' . $conn->error);
                                               }



                           
                                               while($row = sqlsrv_fetch_array($result1)){
                                                         echo htmlspecialchars($row['code_dr_interne']);
                                                         $cddrintern=$row['code_dr_interne'];
                                                          }
               
                   // $insertItemSql2=  "SELECT TOP 1 (num_lot) FROM dbo.[Bordereau_Versement] ORDER BY num_lot DESC";

                    $insertItemSql2=  "SELECT TOP 1 (num_lot) FROM dbo.[Bordereau_Versement] ORDER BY IDb DESC";
                    $result2 = sqlsrv_query($conn, $insertItemSql2);
                            
                                 if($result2 === false){
                                      die( print_r( sqlsrv_errors(), true));
                                                       }

                                if (!$result2) {
                                     trigger_error('Invalid query: ' . $conn->error);
                                               }


                                              // $row1 = sqlsrv_fetch_array($result2);
                                              // echo " rows: ".$row1."<br/>";
                                              // echo htmlspecialchars($row1);
                                               while($row = sqlsrv_fetch_array($result2)){
                                                         echo htmlspecialchars($row['num_lot']);
                                                         $numlot=$row['num_lot'];
                                                          }
       
               //////////////////////////////////////////////////////////// ajouter code centre



                        $checkUserSql = "SELECT num_boite FROM dbo.[detail_lot] WHERE num_boite='$itemName'and  code_dr_interne='$cddrintern'and num_lot='$numlot' " ;
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
               // $insertItemSql1=  "SELECT TOP 1 (code_dr_interne) FROM dbo.[Bordereau_Versement] ORDER BY code_dr_interne DESC";
       $insertItemSql1=  "SELECT TOP 1 (code_dr_interne) FROM dbo.[Bordereau_Versement] ORDER BY IDb DESC";

                                echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>from anouther page</div>';;
                             $result1 = sqlsrv_query($conn, $insertItemSql1);
                            
                                 if($result1 === false){
                                      die( print_r( sqlsrv_errors(), true));
                                                       }

                                if (!$result1) {
                                     trigger_error('Invalid query: ' . $conn->error);
                                               }



                           
                                               while($row = sqlsrv_fetch_array($result1)){
                                                         echo htmlspecialchars($row['code_dr_interne']);
                                                         $i=$row['code_dr_interne'];
                                                          }
               
                   // $insertItemSql2=  "SELECT TOP 1 (num_lot) FROM dbo.[Bordereau_Versement] ORDER BY num_lot DESC";

                    $insertItemSql2=  "SELECT TOP 1 (num_lot) FROM dbo.[Bordereau_Versement] ORDER BY IDb DESC";
                    $result2 = sqlsrv_query($conn, $insertItemSql2);
                            
                                 if($result2 === false){
                                      die( print_r( sqlsrv_errors(), true));
                                                       }

                                if (!$result2) {
                                     trigger_error('Invalid query: ' . $conn->error);
                                               }


                                              // $row1 = sqlsrv_fetch_array($result2);
                                              // echo " rows: ".$row1."<br/>";
                                              // echo htmlspecialchars($row1);
                                               while($row = sqlsrv_fetch_array($result2)){
                                                         echo htmlspecialchars($row['num_lot']);
                                                         $j=$row['num_lot'];
                                                          }
                                                          // $i=$row['code_dr_interne'];
                                                          // $j=$row['num_lot'];
                                                          // echo " rows: ".$row1."<br/>";
 echo "<h2> numero de lot:" . $j . "</h2>";
 echo "<h2> code_dr_interne:" . $i . "</h2>";
 // $checkUserSqlcc = "SELECT code_centre FROM dbo.[agent] WHERE username ='$_usernm' and nom_agent = '$_nom' and  prenom_agent = '$_prnm' " ;
     
 //      // $checkUserSqlcc = "SELECT code_centre FROM dbo.[agent] WHERE username ='$_usernm' and nom_agent = '$_nom' and  prenom_agent = '$_prnm' " ;

 //      $resultcc = sqlsrv_query($conn, $checkUserSqlcc);
                            
 //                                 if($resultcc === false){
 //                                      die( print_r( sqlsrv_errors(), true));
 //                                                       }

 //                                if (!$resultcc) {
 //                                     trigger_error('Invalid query: ' . $conn->error);
 //                                               }


 //                                              // $row1 = sqlsrv_fetch_array($result2);
 //                                              // echo " rows: ".$row1."<br/>";
 //                                              // echo htmlspecialchars($row1);
 //                                               while($row = sqlsrv_fetch_array($resultcc)){
 //                                                         echo htmlspecialchars($row['code_centre']);
 //                                                         $codectre=$row['code_centre'];
 //                                                          }
 //                                     // $n=$codectre
                         $insertItemSql=  "INSERT INTO dbo.[detail_lot]([code_centre],[code_dr_interne], [num_lot], [num_boite],[nb_contrat_recu])
                                           VALUES('$_cdcentre','$i','$j', '$itemName','$discount')";

                         // $inserttoTraitement=  "INSERT INTO dbo.[traitement]([code_centre],[code_agent],[code_dr_interne], [num_lot], [num_boite],[date_affectaion],[date_restitution],[nb_recu],[nb_traite],[nb_rejete],[code_agent_dispatch],[type_op],[code_agence_interne])
                         //                   VALUES( '$i','$i','$i','$j','$itemName','3000-12-12','3000-12-12','00','00','00','$i','$i','$i')";

                                           //  $inserttoTraitement=  "INSERT INTO dbo.[traitement]( [num_boite])
                                           // VALUES( '$itemName')";
/////////////////////////////////////////////////////////////////////////////////////
                                           /////////////////////// ajouter au meme temps au autre tables traitement depouille saisie 

                                           // $inserttoTraitement=  "INSERT INTO dbo.[traitement]([num_boite]) SELECT [num_boite] FROM dbo.[detail_lot] WHERE num_boite='$itemName'";
                                           /////////////////
                                           //////////////
                                           // $inserttoTraitement=  "INSERT INTO dbo.[traitement]([num_boite]) SELECT [num_boite] FROM dbo.[detail_lot] WHERE num_boite='$itemName'";
                                           // $inserttoTraitement=  "INSERT INTO dbo.[traitement]([num_boite]) SELECT [num_boite] FROM dbo.[detail_lot] WHERE num_boite='$itemName'";
                                           //////////////////

                                           // $inserttoDepouille=  "INSERT INTO dbo.[depouille]([num_boite]) SELECT [num_boite] FROM dbo.[detail_lot] WHERE num_boite='$itemName'";

                                           // $inserttoSaisie=  "INSERT INTO dbo.[saisie]([num_boite]) SELECT [num_boite] FROM dbo.[detail_lot] WHERE num_boite='$itemName'";

                                           // $inserttoScan=  "INSERT INTO dbo.[scan]([num_boite]) SELECT [num_boite] FROM dbo.[detail_lot] WHERE num_boite='$itemName'";
                                           /////////////////////////////////

// ,[code_agent],


                             // $insertItemSql=  "INSERT INTO dbo.[detail_lot]([code_centre],[code_dr_interne], [num_lot], [num_boite],[nb_contrat_recu])
                         //                   VALUES('1',(SELECT code_dr_interne FROM dbo.[Bordereau_Versement] WHERE code_dr_interne=IDENT_CURRENT( 'Bordereau_Versement' ) ),(SELECT num_lot FROM dbo.[Bordereau_Versement] WHERE num_lot=IDENT_CURRENT( 'Bordereau_Versement' ) ), '$itemName','$discount')";




                           //  $insertItemSql=  "SELECT code_dr_interne FROM dbo.[Bordereau_Versement] WHERE code_dr_interne=IDENT_CURRENT( 'Bordereau_Versement') ),";
                           //    // echo htmlspecialchars($row['code_dr_interne']);
                           //   $result1 = sqlsrv_query($conn, $insertItemSql);
                           //       if($result1 === false){
                           //            die( print_r( sqlsrv_errors(), true));
                           //                             }

                           //      if (!$result1) {
                           //           trigger_error('Invalid query: ' . $conn->error);
                           //                     }



                           // if($row = sqlsrv_fetch_array($result1)){
                           //      echo htmlspecialchars($row['code_dr_interne']);

                           // }



                          // (SELECT code_dr_interne FROM dbo.[Bordereau_Versement] WHERE id=LAST_INSERT_ID())
                          // (SELECT code_dr_interne FROM dbo.[Bordereau_Versement] WHERE id=IDENT_CURRENT( 'Bordereau_Versement' ) )
                          


                         // insert into product(name, client_id) 
                     //           select 'myProd', client_id from client 




                          $insertItemStatement = sqlsrv_query($conn, $insertItemSql);  //$conn is your connection in 'connection.php'
                          ////////////////
                          // $insertItemStatement1 = sqlsrv_query($conn, $inserttoTraitement);
                          // $insertItemStatement2 = sqlsrv_query($conn, $inserttoDepouille);
                          // $insertItemStatement3 = sqlsrv_query($conn, $inserttoSaisie);
                          // $insertItemStatement4 = sqlsrv_query($conn, $inserttoScan);
                          //////////////////
                           // checks if the search was made

                           // if($insertItemStatement1 === false){
                           //        die( print_r( sqlsrv_errors(), true));
                           //                       }
                           // if($insertItemStatement2 === false){
                           //        die( print_r( sqlsrv_errors(), true));
                           //                       }
                           // if($insertItemStatement3 === false){
                           //        die( print_r( sqlsrv_errors(), true));
                           //                       }
                           // if($insertItemStatement4 === false){
                           //        die( print_r( sqlsrv_errors(), true));
                           //                       }

                    // $insertItemStatement = $conn->prepare($insertItemSql);
                    // $insertItemStatement->execute(['itemNumber' => $itemNumber, 'itemName' => $itemName, 'discount' => $discount, 'stock' => $quantity, 'unitPrice' => $unitPrice, 'status' => $status, 'description' => $description]);
                    echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>Item added to database traitement.</div>';
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

          echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>boite  exist dans la DB. Please click the <strong>Update</strong> button to update the details. Or use a different Item Number.</div>';
                    exit();
    }
    
#redirects user
    
    // header("Location: restrict.php");
}
               
               // Calculate the stock values
               // $stockSql = 'SELECT stock FROM item WHERE itemNumber=:itemNumber';
               // $stockStatement = $conn->prepare($stockSql);
               // $stockStatement->execute(['itemNumber' => $itemNumber]);
               // if($stockStatement->rowCount() > 0){
               //   //$row = $stockStatement->fetch(PDO::FETCH_ASSOC);
               //   //$quantity = $quantity + $row['stock'];
               //   echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>boite  exist dans la DB. Please click the <strong>Update</strong> button to update the details. Or use a different Item Number.</div>';
               //   exit();
               // } else {
               //   // Item does not exist, therefore, you can add it to DB as a new item
               //   // Start the insert process
               //   $insertItemSql = 'INSERT INTO item(itemNumber, itemName, discount, stock, unitPrice, status, description) VALUES(:itemNumber, :itemName, :discount, :stock, :unitPrice, :status, :description)';
               //   $insertItemStatement = $conn->prepare($insertItemSql);
               //   $insertItemStatement->execute(['itemNumber' => $itemNumber, 'itemName' => $itemName, 'discount' => $discount, 'stock' => $quantity, 'unitPrice' => $unitPrice, 'status' => $status, 'description' => $description]);
               //   echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>Item added to database.</div>';
               //   exit();
               // }

} else {
               // One or more mandatory fields are empty. Therefore, display a the error message
               echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Please enter all fields marked with a (*)</div>';
               exit();
          }
     }
?>