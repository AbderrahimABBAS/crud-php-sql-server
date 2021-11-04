<?php
  session_start();
  
  
  require_once('inc/config/constants.php');
  require_once('inc/config/db.php');
  require_once('inc/header.html');
  

$insertItemSql1CD=  "SELECT TOP 1 (code_dr_interne) FROM dbo.[Bordereau_Versement] ORDER BY IDb DESC";

                                // echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>from anouther page</div>';
                             $result1c = sqlsrv_query($conn, $insertItemSql1CD);
                            
                                 if($result1c === false){
                                      die( print_r( sqlsrv_errors(), true));
                                                       }

                                if (!$result1c) {
                                     trigger_error('Invalid query: ' . $conn->error);
                                               }



                           
                                               while($row = sqlsrv_fetch_array($result1c)){
                                                         // echo htmlspecialchars($row['code_dr_interne']);
                                                         $cddrintern=$row['code_dr_interne'];
                                                          }
               
                   // $insertItemSql2=  "SELECT TOP 1 (num_lot) FROM dbo.[Bordereau_Versement] ORDER BY num_lot DESC";

                    $insertItemSql2n=  "SELECT TOP 1 (num_lot) FROM dbo.[Bordereau_Versement] ORDER BY IDb DESC";
                    $result2n = sqlsrv_query($conn, $insertItemSql2n);
                            
                                 if($result2n === false){
                                      die( print_r( sqlsrv_errors(), true));
                                                       }

                                if (!$result2n) {
                                     trigger_error('Invalid query: ' . $conn->error);
                                               }


                                              // $row1 = sqlsrv_fetch_array($result2);
                                              // echo " rows: ".$row1."<br/>";
                                              // echo htmlspecialchars($row1);

                                               while($row = sqlsrv_fetch_array($result2n)){
                                                         // echo htmlspecialchars($row['num_lot']);
                                                         $numlot=$row['num_lot'];
                                                          }



if (!$result1c) {
    trigger_error('Invalid query: ' . $conn->error);
}

 echo "<h2>  numero de lot: ".$numlot."</h2>";
 echo "<h2>  DR interne: ".$cddrintern."</h2>";
?>
    

   

    