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
<!-- 	<script src="assets/js/scripts1.js"></script>
 -->

<div class="container-fluid">


	  <div class="row">
	  	<link rel="stylesheet" href="menu.css" />
<nav class="dropdownmenu">
  <ul>
   <!-- <li><a href="administration.php">ajouter un agent</a></li> -->
    <li><a href="ajouteragent.php">ajouter un agent</a></li>
    	<li><a href="filterTable.php">Tableau D affichage</a></li>
    <li><a href="administration1.php">administration</a></li>
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
<form  action="insertItem1.php" method="post" >
	
                                <div class="form-row">
                                		<div id="itemDetailsMessage"></div>
                                		
								<div class="form-group col-md-3">
								  <!-- <label for="itemDetailsDiscount">code dr interne</label>
								  <input type="number" class="form-control" value="0" name="itemDetailsDiscount" id="itemDetailsDiscount"> -->

								  <!-- <label for="itemDetailsItemNumber1">code_centre<span class="requiredIcon">*</span></label>
								  <input type="number" class="form-control" value="0" name="itemDetailsItemNumber1" id="itemDetailsItemNumber1"> -->
								</div>
								<div class="form-group col-md-3">
								  <!-- <label for="itemDetailsItemName2">code_agent<span class="requiredIcon">*</span></label>
								  <input type="number" class="form-control" value="0" name="itemDetailsItemName2" id="itemDetailsItemName2"> -->
								</div>
								<div class="form-group col-md-3">
								  <!-- <label for="itemDetailsUnitPrice">num boite<span class="requiredIcon">*</span></label>
								  <input type="number" class="form-control" value="0" name="itemDetailsUnitPrice" id="itemDetailsUnitPrice"> -->
								  <!-- <label for="itemDetailsDiscount3">nom_agent<span class="requiredIcon">*</span></label>
								  <input type="number" class="form-control" value="0" name="itemDetailsDiscount3" id="itemDetailsDiscount3"> -->

								  <div class="form-group col-md-12" style="display:inline-block">
								  <!-- <label for="itemDetailsDiscount3">nom_agent<span class="requiredIcon">*</span></label>
								  <input type="text" class="form-control" name="itemDetailsDiscount3" id="itemDetailsDiscount3" autocomplete="off">
								  <div id="itemImageItemNumberSuggestionsDiv" class="customListDivWidth"></div> -->
								</div>


								  <!-- <div class="form-group col-md-4">
									<label for="itemImageItemName">nom_agent</label>
									<input type="text" class="form-control" name="itemImageItemName" id="itemImageItemName" readonly>
								</div> -->

								</div>
								<div class="form-group col-md-3">
								  <!-- <label for="itemDetailsTotalStock">nb contrat recu</label>
								  <input type="number" class="form-control" value="0" name="itemDetailsUnitPrice" id="itemDetailsUnitPrice"> -->
								  <!-- <label for="itemDetailsQuantity4">prenom_agent<span class="requiredIcon">*</span></label>
								  <input type="number" class="form-control" value="0" name="itemDetailsQuantity4" id="itemDetailsQuantity4"> -->

								   <div class="form-group col-md-12" style="display:inline-block">
								  <!-- <label for="itemDetailsQuantity4">prenom_agent<span class="requiredIcon">*</span></label>
								  <input type="text" class="form-control" name="itemDetailsQuantity4" id="itemDetailsQuantity4" autocomplete="off">
								  <div id="itemImageItemNumberSuggestionsDiv" class="customListDivWidth"></div> -->
								</div>

                  <!-- <div class="form-group col-md-4">
									<label for="itemImageItemName">prenom_agent</label>
									<input type="text" class="form-control" name="itemImageItemName" id="itemImageItemName" readonly>
								</div> -->

								</div>
								<div class="form-group col-md-3">
								  <!-- <label for="itemDetailsTotalStock">nb contrat recu</label>
								  <input type="number" class="form-control" value="0" name="itemDetailsUnitPrice" id="itemDetailsUnitPrice"> -->
								  <!-- <label for="itemDetailsQuantity">poste<span class="requiredIcon">*</span></label>
								  <input type="number" class="form-control" value="0" name="itemDetailsQuantity" id="itemDetailsQuantity"> -->

                  <div class="form-group col-md-12" style="display:inline-block">
								  <!-- <label for="itemImageItemNumber5">poste<span class="requiredIcon">*</span></label>
								  <input type="text" class="form-control" name="itemImageItemNumber5" id="itemImageItemNumber5" autocomplete="off">
								  <div id="itemImageItemNumberSuggestionsDiv" class="customListDivWidth"></div> -->
								</div>

								<!-- <div class="form-group col-md-4">
									<label for="itemImageItemName">poste</label>
									<input type="text" class="form-control" name="itemImageItemName" id="itemImageItemName" readonly>
								</div> -->

								</div>
								<div class="form-group col-md-3">
								  <!-- <label for="itemDetailsTotalStock">nb contrat recu</label>
								  <input type="number" class="form-control" value="0" name="itemDetailsUnitPrice" id="itemDetailsUnitPrice"> -->
								  <!-- <label for="itemDetailsQuantity">etat<span class="requiredIcon">*</span></label>
								  <input type="number" class="form-control" value="0" name="itemDetailsQuantity" id="itemDetailsQuantity"> -->
                   
                   <div class="form-group col-md-12" style="display:inline-block">
								  <!-- <label for="itemImageItemNumber6">etat<span class="requiredIcon">*</span></label>
								  <input type="text" class="form-control" name="itemImageItemNumber6" id="itemImageItemNumber6" autocomplete="off">
								  <div id="itemImageItemNumberSuggestionsDiv" class="customListDivWidth"></div> -->
								</div>

								<!-- <div class="form-group col-md-4">
									<label for="itemImageItemName">etat</label>
									<input type="text" class="form-control" name="itemImageItemName" id="itemImageItemName" readonly>
								</div> -->
                

								</div>
								<div class="form-group col-md-3">
								  <!-- <label for="itemDetailsTotalStock">nb contrat recu</label>
								  <input type="number" class="form-control" value="0" name="itemDetailsUnitPrice" id="itemDetailsUnitPrice"> -->
								  <!-- <label for="itemDetailsQuantity7">num_cle<span class="requiredIcon">*</span></label>
								  <input type="number" class="form-control" value="0" name="itemDetailsQuantity7" id="itemDetailsQuantity7"> -->
                 </div>



								<div class="form-group col-md-3">
								  <!-- <label for="itemDetailsTotalStock">nb contrat recu</label>
								  <input type="number" class="form-control" value="0" name="itemDetailsUnitPrice" id="itemDetailsUnitPrice"> -->
								  <!-- <label for="itemDetailsQuantity8">num_puce<span class="requiredIcon">*</span></label>
								  <input type="number" class="form-control" value="0" name="itemDetailsQuantity8" id="itemDetailsQuantity8"> -->
								</div>
								<div class="form-group col-md-3">
								  <!-- <label for="itemDetailsTotalStock">nb contrat recu</label>
								  <input type="number" class="form-control" value="0" name="itemDetailsUnitPrice" id="itemDetailsUnitPrice"> -->
								  <!-- <label for="itemDetailsQuantity">nom_user<span class="requiredIcon">*</span></label>
								  <input type="number" class="form-control" value="0" name="itemDetailsQuantity" id="itemDetailsQuantity"> -->


                <div class="form-group col-md-3" style="display:inline-block">
								  <!-- <label for="itemImageItemNumber9">nom_user<span class="requiredIcon">*</span></label>
								  <input type="text" class="form-control" name="itemImageItemNumber9" id="itemImageItemNumber9" autocomplete="off">
								  <div id="itemImageItemNumberSuggestionsDiv" class="customListDivWidth"></div> -->
								</div>

								<!-- <div class="form-group col-md-4">
									<label for="itemImageItemName">nom_user</label>
									<input type="text" class="form-control" name="itemImageItemName" id="itemImageItemName" readonly>
								</div> -->

								</div>
								<div class="form-group col-md-3">
								  <!-- <label for="itemDetailsTotalStock">nb contrat recu</label>
								  <input type="number" class="form-control" value="0" name="itemDetailsUnitPrice" id="itemDetailsUnitPrice"> -->
								  <!-- <label for="itemDetailsQuantity10">mp<span class="requiredIcon">*</span></label>
								  <input type="number" class="form-control" value="0" name="itemDetailsQuantity10" id="itemDetailsQuantity10"> -->
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
							 
							  <!-- <button type="button" id="addItem1"  class="btn btn-success">Add Item</button>
							  <button type="button" onclick="addItem1" id="updateItemDetailsButton" class="btn btn-primary">Update</button>
							  <button type="button" id="deleteItem" class="btn btn-danger">Delete</button>
							  <button type="reset" class="btn" id="itemClear">Clear</button> -->
							</form>
  </div>
</div>
<!-- <script>
function addItem1() {
	var itemDetailsItemNumber1 = $('#itemDetailsItemNumber1').val();
	var itemDetailsItemName2 = $('#itemDetailsItemName2').val();
	var itemDetailsDiscount3 = $('#itemDetailsDiscount3').val();
	var itemDetailsQuantity4 = $('#itemDetailsQuantity4').val();
	var itemImageItemNumber5 = $('#itemImageItemNumber5').val();
	var itemImageItemNumber6 = $('#itemImageItemNumber6').val();
	var itemDetailsQuantity7 = $('#itemDetailsQuantity7').val();
	var itemDetailsQuantity8 = $('#itemDetailsQuantity8').val();
	var itemImageItemNumber9 = $('#itemImageItemNumber9').val();
	var itemDetailsQuantity10 = $('#itemDetailsQuantity10').val();
	
	
	$.ajax({
		url: 'model/item/insertItem1.php',
		method: 'POST',
		data: {
			itemDetailsItemNumber1:itemDetailsItemNumber1,
			itemDetailsItemName2:itemDetailsItemName2,
			itemDetailsDiscount3:itemDetailsDiscount3,
			itemDetailsQuantity4:itemDetailsQuantity4,
			itemImageItemNumber5:itemImageItemNumber5,
			itemImageItemNumber6:itemImageItemNumber6,
			itemDetailsQuantity7:itemDetailsQuantity7,
			itemDetailsQuantity8:itemDetailsQuantity8,
			itemImageItemNumber9:itemImageItemNumber9,
			itemDetailsQuantity10:itemDetailsQuantity10,
			
			
		},
		success: function(data){
			$('#itemDetailsMessage').fadeIn();
			$('#itemDetailsMessage').html(data);
		},
		complete: function(){
			// populateLastInsertedID(itemLastInsertedIDFile, 'itemDetailsProductID');
			// getItemStockToPopulate('itemDetailsItemNumber', getItemStockFile, itemDetailsTotalStock);
			// searchTableCreator('itemDetailsTableDiv', itemDetailsSearchTableCreatorFile, 'itemDetailsTable');
			// reportsTableCreator('itemReportsTableDiv', itemReportsSearchTableCreatorFile, 'itemReportsTable');
		}
	});
}

<?php
  require 'inc/footer.php';
?> 
</script> 
<!--   	<script src="assets/js/scripts1.js"></script>
 -->
</body>