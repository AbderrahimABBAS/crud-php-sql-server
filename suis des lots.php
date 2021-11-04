<?php
	session_start();
	
	
	require_once('inc/config/constants.php');
	require_once('inc/config/db.php');
	require_once('inc/header.html');
	require 'inc/navigation.php';


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

 echo "<h3>  num de lot : ".$numlot."</h3>";
 echo "<h3>  DR interne : ".$cddrintern."</h3>";

    
?>
  <body>
  	<style type="text/css">
.form-control {
  float: left;
  width: 100%;
  border: 3px solid #00B4CC;
  padding: 15px;
  height: 20px;
  border-radius: 5px;
  outline: none;
  color: #9DBFAF;
}
</style>
<!-- <
	require 'inc/navigation.php';
$discount = htmlentities($_POST['itemDetailsDiscount']);


$checkUserSql = "SELECT * FROM dbo.[detail_lot] WHERE num_boite='$discount'"  ;

$result = sqlsrv_query($conn, $checkUserSql);  //$conn is your connection in 'connection.php'

// checks if the search was made
if($result === false){
     die( print_r( sqlsrv_errors(), true));
}

if (!$result) {
    trigger_error('Invalid query: ' . $conn->error);
}



    
?> -->


<div class="container-fluid">
	  <div class="row">
		<div class="col-lg-2">
		<h1 class="my-4"></h1>
			<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
			 
			</div>
		</div>
<!-- Div to show the ajax message from validations/db submission -->
							<div id="itemDetailsMessage"></div>
<form>
	
                                <div class="form-row">
                               <!--  	<div class="form-group col-md-3">
								  <label for="itemDetailsItemName1">code_centre<span class="requiredIcon">*</span></label>
								  <input type="number" class="form-control" value="0" name="itemDetailsItemName1" id="itemDetailsItemName1">
								</div> -->
								<div class="form-group col-md-3">
								  <!-- <label for="itemDetailsDiscount">code dr interne</label>
								  <input type="number" class="form-control" value="0" name="itemDetailsDiscount" id="itemDetailsDiscount"> -->

								  <!-- <table style="width: 100%;">
                                    <thead>
                                         <tr>
                                      <th>code_dr_interne</th>
                                       <th>num_lot </th>
                                          </tr>
                                       </thead>
                                       <tbody id="productTable">
                                       < while($row = sqlsrv_fetch_array($result)) {

                                             ?>
                                            <tr>
       
                                      <td><!-- < echo htmlspecialchars($row['code_dr_interne']); ?></td>
                                      <td><!-- < echo htmlspecialchars($row['num_lot']); ?></td>
                                        </tr>
                                    <!--  <} ?> 
                                     </tbody>
                                     </table> --> 
								</div>
								<div class="form-group col-md-3">
								 <!--  <label for="itemDetailsItemName">num lot<span class="requiredIcon">*</span></label>
								  <input type="number" class="form-control" value="0" name="itemDetailsItemName" id="itemDetailsItemName"> -->
								   	
								  <!-- <label for="itemDetailsItemName1">code_centre<span class="requiredIcon">*</span></label>
								  <input type="number" class="form-control" value="0" name="itemDetailsItemName1" id="itemDetailsItemName1"> -->
								
          
								</div>
								<div class="form-group col-md-3">
								  <!-- <label for="itemDetailsUnitPrice">num boite<span class="requiredIcon">*</span></label>
								  <input type="number" class="form-control" value="0" name="itemDetailsUnitPrice" id="itemDetailsUnitPrice"> -->
								  <label for="itemDetailsDiscount">num boite<span class="requiredIcon">*</span></label>
								  <input type="number" class="form-control" value="0" name="itemDetailsDiscount" id="itemDetailsDiscount">
								</div>
								<div class="form-group col-md-3">
								  <!-- <label for="itemDetailsTotalStock">nb contrat recu</label>
								  <input type="number" class="form-control" value="0" name="itemDetailsUnitPrice" id="itemDetailsUnitPrice"> -->
								  <label for="itemDetailsQuantity">nb contrat recu<span class="requiredIcon">*</span></label>
								  <input type="number" class="form-control" value="0" name="itemDetailsQuantity" id="itemDetailsQuantity">
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
							<!-- 	<div class="form-group col-md-6" style="display:inline-block">
								  <label for="itemDetailsDescription">Description</label>
								  <textarea rows="4" class="form-control" placeholder="Description" name="itemDetailsDescription" id="itemDetailsDescription"></textarea>
								</div> -->
							  </div>
							 <div class="form-group col-md-6">
							  <button type="button" id="addItem" class="btn btn-success">Add Item</button>
							 <!--  <button type="button" id="updateItemDetailsButton" class="btn btn-primary">Update</button>
							  <button type="button" id="deleteItem" class="btn btn-danger">Delete</button> -->
							  <button type="reset" class="btn" id="itemClear">Clear</button>
							</div>
							</form>
  </div>
</div>

<?php
  require 'inc/footer.php';
?>
</body>





  <!-- <table style="width: 100%;">
      <thead>
        <tr>
          <th>code_dr_interne</th>
          <th>num_lot </th>
         </tr>
      </thead>
      <tbody id="productTable">

      
       <?php while($row = sqlsrv_fetch_array($result)) {

        ?>
     <tr>
       
       <td><?php echo htmlspecialchars($row['code_dr_interne']); ?></td>
       <td><?php echo htmlspecialchars($row['num_lot']); ?></td>
      
       
     </tr>
     <?php } ?> 


     

      </tbody>
    </table> -->

<!-- 
    /////////////////////////////////////////////////// -->
 <!--    <?php
$candidature="SELECT NumCandidature, DateCandidature, NomEntreprise, RefOffre, NomOffre, DateParution, LieuParution, VersionCV FROM MM_Candidature WHERE ReponseCandidature='' ORDER BY NumCandidature";
 
$res_candidature=mysql_query($candidature)
     or die (mysql_error());
 
$data = mysql_fetch_assoc($res_candidature);
 
 
 $nbCandidatures=count($data['NumCandidature']);
  if ($nbCandidatures <= 0)
   echo "<tr><td><font face='arial' size='2' color='#000066'>Aucune candidature en attente </font></ td></tr>";
  else
  {
   for ($i=0 ;$i < $nbCandidatures ; $i++)
   {
    echo "<tr></tr>";
    echo "<tr>";
	echo "<td><font face='arial' size='2' color='#000066'>".$data['NumCandidature'][$i]."</font></td>";
	echo "<td><font face='arial' size='2' color='#000066'>".$data['DateCandidature'][$i]."</font></td>";
	echo "<td><font face='arial' size='2' color='#000066'>".$data['NomEntreprise'][$i]."</font></td>";
	echo "<td><font face='arial' size='2' color='#000066'>".$data['RefOffre'][$i]."</font></td>";
	echo "<td><font face='arial' size='2' color='#000066'>".$data['NomOffre'][$i]."</font></td>";
	echo "<td><font face='arial' size='2' color='#000066'>".$data['DateParution'][$i]."</font></td>";
	echo "<td><font face='arial' size='2' color='#000066'>".$data['LieuParution'][$i]."</font></td>";
	echo "<td><font face='arial' size='2' color='#000066'>".$data['VersionCV'][$i]."</font></td>";
    echo "</tr>";
	}
   }
 
 
?> -->