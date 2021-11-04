<?php
	session_start();
	
	
	require_once('inc/config/constants.php');
	require_once('inc/config/db.php');
	require_once('inc/header.html');
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
  /*#9DBFAF*/
}
</style>
<?php
	require 'inc/navigation.php';
?>

<div class="container-fluid">
	  <div class="row">
		<div class="col-lg-2">
		<h1 class="my-4"></h1>
			<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
			 
			</div>
		</div>
<!-- Div to show the ajax message from validations/db submission -->
							<div id="itemDetailsMessage"></div>
							//////////////////////////////////

<form action="insertItem3BV.php" method="post" class="my-form">
  <div class="container">
    <!-- <h1>Get in touch!</h1> -->
    <ul>
      <li>

        <select for="itemDetailsItemNumber1" name="itemDetailsItemNumber1"id="itemDetailsItemNumber1">
         <option selected disabled>-- Please choose an DR --</option>
         <option class="form-control"  value="ALGER">DR ALGER</option>
         <option class="form-control"  value="ORAN">DR ORAN</option>
         <option class="form-control"  value="CHLEF">DR CHLEF</option>
         <option class="form-control"  value="CONSTANTINE">DR CONSTANTINE</option>
         <option class="form-control"  value="SUD">DR SUD</option>      
        </select>
      </li>

      <!-- <label for="itemDetailsItemName2">num_lot<span class="requiredIcon">*</span></label>
                                  <input type="number" class="form-control" value="0" name="itemDetailsItemName2" id="itemDetailsItemName2"> -->
     <!-- <label for="itemDetailsQuantity3">nb_contrat<span class="requiredIcon">*</span></label>
                                  <input type="number" class="form-control" value="0" name="itemDetailsQuantity3" id="itemDetailsQuantity3"> -->
      <li>
        <div class="grid grid-2">
          <input type="number" placeholder="num_lot" type="number" class="form-control"  name="itemDetailsItemName2" id="itemDetailsItemName2" required>  
          <input type="number" placeholder="nb_contrat" class="form-control"  name="itemDetailsQuantity3" id="itemDetailsQuantity3" required>
        </div>
      </li>
      <li>

             <!-- <label for="itemImageItemNumber4">nb_boite<span class="requiredIcon">*</span></label>
                                  <input type="number" class="form-control" value="0" name="itemImageItemNumber4" id="itemImageItemNumber4"> -->
        <!-- <label for="itemDetailsQuantity7">code_agence_interne<span class="requiredIcon">*</span></label>
        <input type="number" class="form-control" name="itemDetailsQuantity7" id="itemDetailsQuantity7"> -->

        <div class="grid grid-2">
          <input type="number" placeholder="code_agence_interne" type="number" class="form-control" name="itemDetailsQuantity7" id="itemDetailsQuantity7" required>  
          <input type="number" placeholder="nb_boite" class="form-control" name="itemImageItemNumber4" id="itemImageItemNumber4" required>
        </div>
      </li> 
      <li>
<!-- <label for="itemImageItemNumber5">date_versement<span class="requiredIcon">*</span></label>
                                  <input type="date" class="form-control"  name="itemImageItemNumber5" id="itemImageItemNumber5"> -->

<!-- <label for="itemDetailsQuantity6">date_reception<span class="requiredIcon">*</span></label>
                                  <input type="date" class="form-control" name="itemDetailsQuantity6" id="itemDetailsQuantity6"> -->
                                  <div class="grid grid-2">
                                    <label style="color:black;" for="itemImageItemNumber5">date_versement<span class="requiredIcon">*</span></label>
                                    <label style="color:black;" for="itemDetailsQuantity6">date_reception<span class="requiredIcon">*</span></label>
                                  </div>


        <div class="grid grid-2">
            <!-- <label for="itemImageItemNumber5">date_versement</label> -->
          <input type="date" placeholder="date_versement"class="form-control"  name="itemImageItemNumber5" id="itemImageItemNumber5">  

          <!-- <label for="itemDetailsQuantity6">date_reception</label> -->

          <input type="date" placeholder="date_reception" class="form-control" name="itemDetailsQuantity6" id="itemDetailsQuantity6">
        </div>
      </li>  

       <!-- <input type="date" class="form-control"  name="itemImageItemNumber5" id="itemImageItemNumber5">  --> 
      <!-- <li>
        <textarea placeholder="Message"></textarea>
      </li>   --> 
      <!-- <li>
        <input type="checkbox" id="terms">
        <label for="terms">I have read and agreed with <a href="">the terms and conditions.</a></label>
      </li>   -->
      <li>
        <div class="grid grid-3">
          <!-- <div class="required-msg">REQUIRED FIELDS</div> -->
          <button class="btn-grid" type="button" id="addItem3" >
            <span class="back">
              <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/email-icon.svg" alt="">
            </span>
            <span class="front">Add Item</span>
          </button>

          <button class="btn-grid" type="button" id="addItem4" onclick="document.location.href='suis des lots.php'">
            <span class="back">
              <img src="" alt="">
            </span>
            <span class="front">Suivant</span>
          </button> 

          <button class="btn-grid" type="reset">
            <span class="back">
              <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/eraser-icon.svg" alt="">
            </span>
            <span class="front">RESET</span>
          </button> 
        </div>
      </li>    
    </ul>
  </div>
</form>
<!-- <footer>
  <div class="container">
    <small>Made with <span>❤</span> by <a href="http://georgemartsoukos.com/" target="_blank">George Martsoukos</a>
    </small>
  </div>
</footer> -->
::::::::////////////////////////////////////////
//////

<style type="text/css">
@import url("https://fonts.googleapis.com/css?family=Open+Sans:400,700");

/* RESET RULES
–––––––––––––––––––––––––––––––––––––––––––––––––– */
:root {
  --white: #ffffff;
  --red: #e31b23;
  
  /*--bodyColor: #292a2b;*/
  --bodyColor: #FFFFFF;
  --borderFormEls: hsl(0, 0%, 10%);
  --bgFormEls: hsl(0, 0%, 14%);
  --bgFormElsFocus: hsl(0, 7%, 20%);
}

* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  outline: none;
}

a {
  color: inherit;
}

input,
select,
textarea,
button {
  font-family: inherit;
  font-size: 100%;
}

button,
label {
  cursor: pointer;
}

select {
  appearance: none;
}

/* Remove native arrow on IE */
select::-ms-expand {
  display: none;
}

/*Remove dotted outline from selected option on Firefox*/
/*https://stackoverflow.com/questions/3773430/remove-outline-from-select-box-in-ff/18853002#18853002*/
/*We use !important to override the color set for the select on line 99*/
select:-moz-focusring {
  color: transparent !important;
  text-shadow: 0 0 0 var(--white);

}

textarea {
  resize: none;
}

ul {
  list-style: none;
}

body {
  font: 18px/1.5 "Open Sans", sans-serif;
  background: var(--bodyColor);
  color: var(--white);
  margin: 1.5rem 0;
}

.container {
  max-width: 800px;
  margin: 0 auto;
  padding: 0 1.5rem;
}


/* FORM ELEMENTS
–––––––––––––––––––––––––––––––––––––––––––––––––– */
.my-form h1 {
  margin-bottom: 1.5rem;
}

.my-form li,
.my-form .grid > *:not(:last-child) {
  margin-bottom: 1.5rem;
}

.my-form select,
.my-form input,
.my-form textarea,
.my-form button {
  width: 100%;
  line-height: 1.5;
  padding: 15px 10px;
  border: 1px solid var(--borderFormEls);
  color: var(--white);

  background: var(--bgFormEls);
  transition: background-color 0.3s cubic-bezier(0.57, 0.21, 0.69, 1.25),
    transform 0.3s cubic-bezier(0.57, 0.21, 0.69, 1.25);
}

.my-form textarea {
  height: 170px;
}

.my-form ::placeholder {
  color: inherit;
  /*Fix opacity issue on Firefox*/
  opacity: 1;
}

.my-form select:focus,
.my-form input:focus,
.my-form textarea:focus,
.my-form button:enabled:hover,
.my-form button:focus,
.my-form input[type="checkbox"]:focus + label {
  background: var(--bgFormElsFocus);
}

.my-form select:focus,
.my-form input:focus,
.my-form textarea:focus {
  transform: scale(1.02);
}

.my-form *:required,
.my-form select {
  background-repeat: no-repeat;
  background-position: center right 12px;
  background-size: 15px 15px;
}

.my-form *:required {
  background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/asterisk.svg);  
}

.my-form select {
  background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/down.svg);
}

.my-form *:disabled {
  cursor: default;
  filter: blur(2px);
}


/* FORM BTNS
–––––––––––––––––––––––––––––––––––––––––––––––––– */
.my-form .required-msg {
  display: none;
  background: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/asterisk.svg)
    no-repeat center left / 15px 15px;
  padding-left: 20px;
}

.my-form .btn-grid {
  position: relative;
  overflow: hidden;
  transition: filter 0.2s;
}

.my-form button {
  font-weight: bold;
}

.my-form button > * {
  display: inline-block;
  width: 100%;
  transition: transform 0.4s ease-in-out;
}

.my-form button .back {
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-110%, -50%);
}

.my-form button:enabled:hover .back,
.my-form button:focus .back {
  transform: translate(-50%, -50%);
}

.my-form button:enabled:hover .front,
.my-form button:focus .front {
  transform: translateX(110%);
}


/* CUSTOM CHECKBOX
–––––––––––––––––––––––––––––––––––––––––––––––––– */
.my-form input[type="checkbox"] {
  position: absolute;
  left: -9999px;
}

.my-form input[type="checkbox"] + label {
  position: relative;
  display: inline-block;
  padding-left: 2rem;
  transition: background 0.3s cubic-bezier(0.57, 0.21, 0.69, 1.25);
}

.my-form input[type="checkbox"] + label::before,
.my-form input[type="checkbox"] + label::after {
  content: '';
  position: absolute;
}

.my-form input[type="checkbox"] + label::before {
  left: 0;
  top: 6px;
  width: 18px;
  height: 18px;
  border: 2px solid var(--white);
}

.my-form input[type="checkbox"]:checked + label::before {
  background: var(--red);
}

.my-form input[type="checkbox"]:checked + label::after {
  left: 7px;
  top: 7px;
  width: 6px;
  height: 14px;
  border-bottom: 2px solid var(--white);
  border-right: 2px solid var(--white);
  transform: rotate(45deg);
}


/* FOOTER
–––––––––––––––––––––––––––––––––––––––––––––––––– */
footer {
  font-size: 1rem;
  text-align: right;
  backface-visibility: hidden;
}

footer a {
  text-decoration: none;
}

footer span {
  color: var(--red);
}


/* MQ
–––––––––––––––––––––––––––––––––––––––––––––––––– */
@media screen and (min-width: 600px) {
  .my-form .grid {
    display: grid;
    grid-gap: 1.5rem;
  }

  .my-form .grid-2 {
    grid-template-columns: 1fr 1fr;
  }

  .my-form .grid-3 {
    grid-template-columns: auto auto auto;
    align-items: center;
  }

  .my-form .grid > *:not(:last-child) {
    margin-bottom: 0;
  }

  .my-form .required-msg {
    display: block;
  }
}

@media screen and (min-width: 541px) {
  .my-form input[type="checkbox"] + label::before {
    top: 50%;
    transform: translateY(-50%);
  }

  .my-form input[type="checkbox"]:checked + label::after {
    top: 3px;
  }
}
</style>
  </div>
</div>

<!-- <select>
<option value="1">Yes</options>
<option value="2">No</options>
<option value="3">Fine</options>
</select>
<input type="text" value="" name="name">
<input type="submit" value="go" name="go"> -->

<!-- <select><?php
    $the_key = 1; // or whatever you want
    foreach(array(
        1 => 'Yes',
        2 => 'No',
        3 => 'Fine',
    ) as $key => $val){
        ?><option value="<?php echo $key; ?>"<?php
            if($key==$the_key)echo ' selected="selected"';
        ?>><?php echo $val; ?></option><?php
    }
?></select>
<input type="text" value="" name="name">
<input type="submit" value="go" name="go"> -->

<?php
  require 'inc/footer.php';



?>
</body>