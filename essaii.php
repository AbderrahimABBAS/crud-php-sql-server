<?php
 echo '<pre>';
            print_r(filter_list());
            echo '</pre>';
        
            //////////////////////////
            function my_force_login() {
global $post;

if (!is_single()) return;

$ids = array(188); // array of post IDs that force login to read

if (in_array((int)$post->ID, $ids) && !is_user_logged_in()) {
auth_redirect();
}
} 
?>


///////////////////////////////////////////
<!--Start Header -->
<div class="form">
   <div class="container">
      <h1>تسجيل البيانات</h1>
   </div>
</div>
<!--End Header -->
<div class="form">
   <div class="container">
      <div class="feilds">
         <ul class="inputs">
            <li>
               <label>سنة الإشهار</label>
               <input type="text" />
               <label>رقم الإشهار</label>
               <input type="text" />
            </li>
            <li>
               <label>رقم التليفون</label>
               <input type="text" />
               <label>البريد الإلكترونى</label>
               <input type="text" />
            </li>
            <li>
               <label>المواقع على الانترنت</label>
               <input type="text" />
               <label>صفحة الفيس بوك</label>
               <input type="text" />
            </li>
            <li>
               <label>العنوان بالتفصيل</label>
               <input type="text" />
            </li>
            <li>
               <label>رؤية الجمعية</label>
               <input type="text" />
            </li>
            <li>
               <label>رسالة الجمعية</label>
               <input type="text" />
            </li>
         </ul>
         <ul class="select">
            <li>
               <label>ميادين عمل الجمعيه </label>
               <select>
                  <option value="-----" selected>---------</option>
                  <option value="-----" selected>---------</option>
                  <option value="-----" selected>---------</option>
                  <option value="-----" selected>---------</option>
                  <option value="-----" selected>---------</option>
               </select>
               <button>إضـــافه</button>
            </li>
            <li>
               <label>النوع الإجتماعى </label>
               <input class="user-data" type="checkbox" name="male" value="male"><span>ذكر</span>
               <input class="user-data" type="checkbox" name="male" value="male"> <span>انثى</span>
               <label class="num">رقم الموبايل</label>
               <input type="text">
            </li>
         </ul>
      </div>
   </div>
</div>
<!--End Feilds-->

<!--Start Feilds Userdata-->
<div class="userdata">
   <div class="container">
      <div class="feilds">
         <ul class="inputs">
            <li>
               <label>مسئول الفصل </label>
               <select>
                  <option value="-----" selected>هيام احمد عباس</option>
                  <option value="-----">---------</option>
                  <option value="-----">---------</option>
                  <option value="-----">---------</option>
                  <option value="-----">---------</option>
               </select>
               <label>اسم المكون </label>
               <select>
                  <option value="-----" selected>مكون النظافه الشخصية والتغذية</option>
                  <option value="-----">---------</option>
                  <option value="-----">---------</option>
                  <option value="-----">---------</option>
                  <option value="-----">---------</option>
               </select>
            </li>
            <li>
               <label>مكان الفصل</label>
               <input type="text" value="الوحدة الصحية" />
            </li>
            <li>
               <label>ميادين الفصول السابقة </label>
               <select>
                  <option value="-----" selected>---جميع ارقام الفصول---</option>
                  <option value="-----">---------</option>
                  <option value="-----">---------</option>
                  <option value="-----">---------</option>
                  <option value="-----">---------</option>
               </select>
               <label>رقم الفصل </label>
               <input type="text"></inpu>
            </li>
            <li>
               <label>تاريخ بدء الفصل</label>
               <input type="date" value="1-2-2000" />
               <label>تاريخ انتهاء الفصل </label>
               <input type="date" value="1-2-2000" />
            </li>
         </ul>
         <div class="tab">
            <table>
               <thead>
                  <tr>
                     <th>م</th>
                     <th>تاريخ الجلسة</th>
                     <th>حضور/غياب</th>
                     <th>موضوع الجلسة</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td>31</td>
                     <td>1/1/2000</td>
                     <td>
                        <select>
                           <option value="">حضور</option>
                           <option value="">غياب</option>
                        </select>
                     </td>
                     <td>النظافه الشخصية والطفيليات والديدان المعويه</td>
                  </tr>
                  <tr>
                     <td>32</td>
                     <td>1/1/2000</td>
                     <td>
                        <select>
                           <option value="">حضور</option>
                           <option value="">غياب</option>
                        </select>
                     </td>
                     <td>التغذيه السليمه</td>
                  </tr>
                  <tr>
                     <td>33</td>
                     <td>1/1/2000</td>
                     <td>
                        <select>
                           <option value="">حضور</option>
                           <option value="">غياب</option>
                        </select>
                     </td>
                     <td>كيفية تكوين وجبة غذائية سليمة</td>
                  </tr>
               </tbody>
            </table>
         </div>
         <ul class="gender">
            <li>
               <label>النوع الإجتماعى </label>
               <input class="user-data" type="checkbox" name="male" value="male"><span>ذكر</span>
               <input class="user-data" type="checkbox" name="male" value="male"> <span>انثى</span>
               <label class="num">رقم الموبايل</label>
               <input type="text">
            </li>
         </ul>
      </div>
      <div class="btn">
         <button>حفظ</button>
         <button>تسجيل</button>
      </div>
   </div>
</div>
<!-- ٍEnd Feilds Userdata -->




/////////////////////////////////////

/****************************** Global ******************************/ css
<style type="text/css">
/* Start Global Rules */
* {
    padding: 0;
    margin: 0;
    -webkite-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

body{
font-family: 'Mirza', cursive;
    direction: rtl
}

input , button {
    outline: none;
    border: 0;
    cursor: pointer
}

/* End Global Rules */

/****************************** style Css ******************************/

/* Start Header */
h1{
    text-align: center;
    font-family: 'DroidArabicKufiRegular'; 
   font-weight: normal; 
   font-style: normal; 
    color: #006699;
    font-size: 40px
}

button{
    font-family: 'Cairo', sans-serif;
    transition: all .3s ease-in-out
}


/* End Header */

/* Start Feilds Form */
.form > div {
    width:100%;
    margin:auto;
    overflow: hidden

}

.form .feilds{
    background-color: #fff;
    margin: 0 1%;
    padding: 20px;
    overflow: hidden
    
}
.form .feilds ul{
    list-style:none
}

.form .feilds ul li {
    margin-bottom:1%
}

.form .feilds label,
.form .select lable{
    display:inline-block;
    width:15%;
    text-align:center;
    padding:10px;
    color: #332f2f;
    font-weight: 800;
    font-family: 'DroidArabicKufiRegular'; 
}

.form .feilds .inputs input  {
    border: 1px solid #888;
    width:84%;
    display:inline-block;
    padding:10px;
    font-family: 'Cairo', sans-serif;
}

.form .feilds .inputs input:focus{
   box-shadow: 0 5px 20px rgba(0,0,0,0.1), 0 10px 10px rgba(0,0,0,0.1);
    border: 1px solid #0275d8;
    
}

.form .feilds .inputs input:foucs{
    box-shadow: 1px 1px 1px #080
}

.form .feilds .inputs li:nth-child(n+1):nth-child(-n+3) input,
.form .select input:last-child{
    width: calc(68.4% / 2)
}

.form .select select{
    width: 70%;
    padding: 10px;
}


.form .select li:last-child .num {
    margin-right: 16.7%;
    text-align: center;
}

.form .select input:last-child{
    padding: 10px;
    float: left;
    margin-left: .5%;
    border: 1px solid #888;
}

.form .select  button{
    padding: 3px 0;
    background: #0275d8;
    width: 13%;
    float: left;
    margin-left: .6%;
    color: #fff;
    font-size: 18px;
    font-weight: bold;
    transition: all .3s ease-in-out
}

.form .select button:hover {
    border: 1px solid #0275d8;
    background-color: #fff;
    color: #0275d8;
    transition: all .3s ease-in-out
}

.form .select input{
    width: 5%;
}

.form .select span {
    font-size: 18px;
    display: inline-block;
    font-family: 'DroidArabicKufiRegular'; 
}

.form input[type='checkbox']{
    height: 18px;
    vertical-align: middle
}

.form .select input:nth-child(3){
    margin-right: 8%
}

/* End Feilds Form  */

/* Start Feilds Userdata */

.userdata{
    overflow: hidden;
    width: 100%;
}

.userdata  > div {
    width:100%;
    margin:auto;
    overflow: hidden;
    position: relative

}

.userdata  .feilds{
    border: 5px solid #2b75b4;
    border-radius: 5px;
    margin: 5% 1% 0;
    padding: 20px;
    overflow: hidden
    
}

.userdata .feilds ul{
    list-style:none
}

.userdata .feilds ul li {
    margin-bottom:1%
}

.userdata .feilds label{
    display:inline-block;
    width:15%;
    text-align:center;
    padding:10px 0;
    color: #000;
    font-weight: 800;
    font-family: 'DroidArabicKufiRegular';
}

.userdata .feilds .inputs input  {
    border: 1px solid #888;
    width:84%;
    display:inline-block;
    padding:10px;
    font-size: 18px;
    font-family: 'Cairo', sans-serif;
}

.userdata .feilds .inputs li:nth-child(2) input:focus{
   box-shadow: 0 5px 20px rgba(0,0,0,0.1), 0 10px 10px rgba(0,0,0,0.1);
    border: 1px solid #0275d8;
    
}

.userdata .feilds .inputs li select,
.userdata .feilds .inputs li:nth-child(3) input,
.userdata .feilds .inputs li:last-child input{
    width: calc(68.4% / 2)
}

.userdata .feilds .inputs li select{
    font-size: 18px;
    font-family: 'Cairo', sans-serif;
}

.userdata .feilds .inputs li:last-child input{
    direction: ltr
}
.userdata .feilds .inputs li:last-child input[type="date"]{
    text-align: right;
    padding: 10px;
}

.userdata  li  select{
    padding: 1px 0;
}

.userdata table {
    background: #fff;
    border-collapse: separate;
    box-shadow: inset 0 1px 0 #fff;
    font-size: 12px;
    line-height: 24px;
    margin: 30px auto;
    text-align: right;
    width: 100%;
    border: 2px solid #069;
}   

.userdata th {
    background: #006699;
    color: #fff;
    font-weight: bold;
    padding: 10px 15px;
    position: relative;
    font-size: 20px;
    font-family: 'DroidArabicKufiRegular'; 
}


.userdata th:first-child {
    width: 10%
}

.userdata th:last-child {
    width: 50%
}

.userdata td {
    padding: 10px;
    position: relative;
    border: 2px solid #069;
    font-size: 20px;
    font-family: 'Cairo', sans-serif;
}
.userdata td select{
    width: 100%;
    height: 100%;
    padding: 10px 0;
    border: none;
    background: transparent;
    outline: 0;
}

.userdata .btn {
    background: #fff;
    padding: 30px 0;
    margin: 5% 0 0;
    text-align: center
}

.userdata .btn button{
    padding: 10px 0;
    background: #0275d8;
    width: 10%;
    padding: 10px 5px;
    text-align: center;
    color: #fff;
    font-size: 18px;
    font-weight: bold;
    transition: all .3s ease-in-out
}

.userdata .btn  button:hover {
    border: 1px solid #0275d8;
    background-color: #fff;
    color: #0275d8;
    transition: all .3s ease-in-out;
    
}

.userdata .btn button:first-child{
    margin-left: 5%;
}
.userdata .btn button:last-child{
    margin-right: 5%;
}
.userdata .gender  span {
    font-size: 18px;
    display: inline-block;
    font-family: 'DroidArabicKufiRegular';
}
.userdata .gender input[type='checkbox'] {
    height: 18px;
    vertical-align: middle;
    width: 5%;
}

.userdata  .gender input:last-child{
    padding: 10px;
    float: left;
    margin-left: .5%;
    width: calc(68.4% / 2);
    border: 2px solid #888
}

.userdata  .gender  .num {
    margin-right: 10.7%;
    text-align: center;  
}

/* End Feilds Userdata */

/****************************** Media Query ******************************/

/* Mobile & Tablet Rules */
@media (max-width:767px) {
    
    /* Start Feilds Form */
    .form .feilds label,
    .form .select lable{
        width: 100% !important;
        text-align: right
    }
    
    .form .feilds .inputs input  {
        width:100% !important;
    }
    
    .form .feilds .inputs li:nth-child(n+1):nth-child(-n+3) input,
    .form .select input:last-child{
        width:100% !important;
    }
    
    .form .feilds .inputs li:nth-child(n+1):nth-child(-n+3) input:last-child{
        margin-top: 1%
    }

    .form .select select{
        width:60% !important;
    }
    
    .form .select button {
        padding: 5px !important;
        width: 13% !important;
        margin-left: 0 !important;
    }    
    
    .form .select li:last-child .num {
        margin-right: 0%;
        text-align: right;
        width: 100% !important;
    }
    .form .select input:last-child{
        width:98% !important;
    }
    
    .form .select input:nth-child(3) {
        margin-right: 32% !important;
    }
    
    .form .select input {
        width: 5%;
        margin: 0 2% !important;
    }
    
    .form .select  button{
        width: 27% !important;
        padding: 10px 0 !important;
    }
    
    .form .feilds  li:last-child label{
        width: 40% !important;
    }
    
    /* Start Feilds Userdata */
    .userdata  .feilds label{
        width: 100% !important;
    }
    
    .userdata  .feilds .inputs input  {
        width:100% !important;
    }
    
    .userdata .feilds .inputs li select,
    .userdata .feilds .inputs li:nth-child(3) input,
    .userdata .feilds .inputs li:last-child input{
        width: 100%
    }
    
    .userdata .feilds .inputs li:nth-child(n+2):nth-child(-n+4) input:last-child{
        margin-top: 1%
    }
    
    .userdata  .gender label:first-child{
        width:50% !important;
    }  
    .userdata  .gender input[type='checkbox']{
        width: 10% !important; 
    }
    .userdata  .gender li:last-child .num {
        margin-right: 0%;
        text-align: right;
        width: 100% !important;
    }
    
    .userdata  .gender input:last-child{
        width:100% !important;
    }
    
    .userdata .btn button{
        width: 27% !important;
    }
   
}

@media (min-width: 768px) and (max-width:991px) {
    .container {
        width: 750px;
    }
    
    /* Start Feilds Form */
    .form .feilds label, .form .select lable {
        width: 19% !important;
        font-size: 13px !important;
    }
    
    .form .feilds .inputs input {
        width: 78.5% !important;
    }
    
    .form .feilds .inputs li:nth-child(n+1):nth-child(-n+3) input,
    .form .select select, .form .select input:last-child {
    width: calc(58.4% / 2) !important;
    }
    
    .form .select select{
        width: 50% !important;
    }
    
    .form .select  button{
        margin-left: 2% !important;
    }
    
    .form .select span{
        font-size: 15px !important; 
    }
    
    .form .select li:last-child .num {
        margin-right: 5.7% !important;
    }
    .form .select input:last-child {
        margin-left: 2% !important;
    }
    
}

@media (min-width: 768px) and (max-width:880px){
    
    .form .feilds label, .form .select lable {
        width: 19% !important;
        font-size: 11px !important;
    };
}


/* Small Screen Rules */
@media (min-width: 768px) and (max-width:991px) {
    .container {
        width: 750px;
    }
    
    /* Start Feilds Form*/
    .form .feilds label, .form .select lable {
        width: 19% !important;
        font-size: 13px !important;
    }
    
    .form .feilds .inputs input {
        width: 78.5% !important;
    }
    
    .form .feilds .inputs li:nth-child(n+1):nth-child(-n+3) input,
    .form .select select, .form .select input:last-child {
    width: calc(58.4% / 2) !important;
    }
    
    .form .select select{
        width: 50% !important;
    }
    
    .form .select  button{
        margin-left: 2% !important;
    }
    
    .form .select span{
        font-size: 15px !important; 
    }
    
    .form .select li:last-child .num {
        margin-right: 5.7% !important;
    }
    .form .select input:last-child {
        margin-left: 2% !important;
    }
    
    /* Start Feilds Userdata */
    .userdata  .feilds label,
    .userdata .select lable{
        width: 25% !important;
    }
    
    .userdata .feilds .inputs li select,
    .userdata .feilds .inputs li:nth-child(3) input,
    .userdata .feilds .inputs li:last-child input,
    .userdata .feilds .inputs input{
        width:74% !important;
    }
    
    .userdata  .feilds .inputs li:nth-child(n+2):nth-child(-n+4) input,    
    .userdata  .feilds .inputs li:nth-child(n+2):nth-child(-n+4) input:last-child{
        margin-top: 1%
    }
    
}

@media (min-width: 768px) and (max-width:880px){
    
    /* Start Feilds Form*/
    .form .feilds label, .form .select lable {
        width: 19% !important;
        font-size: 11px !important;
    };
}

@media (min-width: 768px) and (max-width:880px){
    
    .form .feilds label, .form .select lable {
        width: 19% !important;
        font-size: 11px !important;
    };
}

/* Medium Screen Rules */
@media (min-width: 992px) and (max-width:1199px) {
    .container {
        width: 970px
    }
    
    /* Start Feilds Form*/
    .form .feilds label, .form .select lable {
    width: 20% !important;
}
    
    .form .feilds .inputs input  {
        width:79% !important;
    }
    
    .form .feilds .inputs li:nth-child(n+1):nth-child(-n+3) input, .form .select input:last-child {
    width: calc(58% / 2) !important;
    }
    
    .form .select select{
        width: 60% !important;
    }
    
    .form .select  button{
        margin-left: .4% !important;
    }
    

    /* Start Feilds Userdata */
    .userdata  .feilds label,
    .userdata .select lable{
        width: 25% !important;
    }
    
    .userdata .feilds .inputs li select,
    .userdata .feilds .inputs li:nth-child(3) input,
    .userdata .feilds .inputs li:last-child input,
    .userdata .feilds .inputs input{
        width:74% !important;
    }
    
    .userdata  .feilds .inputs li:nth-child(n+2):nth-child(-n+4) input,    
    .userdata  .feilds .inputs li:nth-child(n+2):nth-child(-n+4) input:last-child{
        margin-top: 1%
    }
}

/* Large Screen Rules */
@media (min-width: 1200px) {
    .container {
        width: 1170px
    }
    
    
}

/**************************** Framework *************************/

/* Start Framework */

.container {
    margin: auto;
    padding-left: 15px;
    padding-right: 15px;
}

</style>
/* End Framework */
//////////////////////////////////////////insertitem

<?php
    // require_once('../../inc/config/constants.php');
    // require_once('../../inc/config/db.php');
    //Affichage des erreurs php
    error_reporting(E_ALL);
 
    $initialStock = 0;
    $baseImageFolder = '../../data/item_images/';
    $itemImageFolder = '';

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
//                            //    echo htmlspecialchars($row['code_dr_interne'][length]);

//                            // }
//                                                // $i = 0;

//                                                while($row = sqlsrv_fetch_array($result1)){
//                                                         echo htmlspecialchars($row['code_dr_interne']);
//                                                         // $i++;

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
    //                          echo htmlspecialchars($row['code_dr_interne']);

    //                        }




    
    if(isset($_POST['itemDetailsItemName1'])){
        
        $itemNumber = htmlentities($_POST['itemDetailsItemName1']);
        $itemName = htmlentities($_POST['itemDetailsDiscount']);
        $discount = htmlentities($_POST['itemDetailsQuantity']);
        
        
        
        // Check if mandatory fields are not empty
        if(!empty($itemNumber) && !empty($itemName) && isset($discount)){
            
            // Sanitize item number
            // $itemNumber = filter_var($itemNumber, FILTER_SANITIZE_STRING);
            
            // Validate item quantity. It has to be a number
            if((filter_var($itemNumber, FILTER_VALIDATE_INT) === 0 || filter_var($itemNumber, FILTER_VALIDATE_INT))||(filter_var($itemName, FILTER_VALIDATE_INT) === 0 || filter_var($itemName, FILTER_VALIDATE_INT))||(filter_var($discount, FILTER_VALIDATE_INT) === 0 || filter_var($discount, FILTER_VALIDATE_INT))){
                // Valid quantity
                // echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button> valid number </div>';

            } else {
                // Quantity is not a valid number
                echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Please enter a valid number for quantity</div>';
                exit();
            }
            
            // // Validate unit price. It has to be a number or floating point value
            // if(filter_var($unitPrice, FILTER_VALIDATE_FLOAT) === 0.0 || filter_var($unitPrice, FILTER_VALIDATE_FLOAT)){
            //  // Valid float (unit price)
            // } else {
            //  // Unit price is not a valid number
            //  echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Please enter a valid number for unit price</div>';
            //  exit();
            // }
            
            // // Validate discount only if it's provided
            // if(!empty($discount)){
            //  if(filter_var($discount, FILTER_VALIDATE_FLOAT) === false){
            //      // Discount is not a valid floating point number
            //      echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Please enter a valid discount amount</div>';
            //      exit();
            //  }
            // }
            
            // // Create image folder for uploading images
            // $itemImageFolder = $baseImageFolder . $itemNumber;
            // if(is_dir($itemImageFolder)){
            //  // Folder already exist. Hence, do nothing
            // } else {
            //  // Folder does not exist, Hence, create it
            //  mkdir($itemImageFolder);
            // }[suivis_mobilis].[dbo].[detail_lot]



// ajouter num lot et code dr et centre dans les conditions



                     $checkUserSql = "SELECT num_boite FROM dbo.[detail_lot] WHERE num_boite='$itemName'" ;
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

                         $insertItemSql=  "INSERT INTO dbo.[detail_lot]([code_centre],[code_dr_interne], [num_lot], [num_boite],[nb_contrat_recu])
                                           VALUES('$itemNumber','$i','$j', '$itemName','$discount')";

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
                           //   echo htmlspecialchars($row['code_dr_interne']);

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
            //  //$row = $stockStatement->fetch(PDO::FETCH_ASSOC);
            //  //$quantity = $quantity + $row['stock'];
            //  echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>boite  exist dans la DB. Please click the <strong>Update</strong> button to update the details. Or use a different Item Number.</div>';
            //  exit();
            // } else {
            //  // Item does not exist, therefore, you can add it to DB as a new item
            //  // Start the insert process
            //  $insertItemSql = 'INSERT INTO item(itemNumber, itemName, discount, stock, unitPrice, status, description) VALUES(:itemNumber, :itemName, :discount, :stock, :unitPrice, :status, :description)';
            //  $insertItemStatement = $conn->prepare($insertItemSql);
            //  $insertItemStatement->execute(['itemNumber' => $itemNumber, 'itemName' => $itemName, 'discount' => $discount, 'stock' => $quantity, 'unitPrice' => $unitPrice, 'status' => $status, 'description' => $description]);
            //  echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>Item added to database.</div>';
            //  exit();
            // }

} else {
            // One or more mandatory fields are empty. Therefore, display a the error message
            echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Please enter all fields marked with a (*)</div>';
            exit();
        }
    }
?>
///////////////////////////////////////// pour ajouter un agent 

<!DOCTYPE html>
<html>
    <head>
      <meta charsef="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="style.css">
      <link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre&display=swap" rel="stylesheet">
        <title>Contact Us</title>
    </head>
    <body>
        <div class="header">
            <h1 id="title">Contact us</h1>
            <p id="description">We'll be glad to help you</p>
        </div>
        <div class="style-form">
        <main class="main-style">
            <form id="survey-form" name="contact">
                <section>
                    <label for="name" id="name-label" class="sctone">Name</label>
                    <input type="text" id="name" class="sctone"  name="name" value="" placeholder="Your name" required>
                    <label for="email" id="email-label" class="sctone">E-mail</label>
                    <input type="email" id="email" class="sctone" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" value="" placeholder="your@email.com" required>
                    <label for="age" id="number-label" class="sctone">Age</label>
                    <input type="number" min="10" max="99" id="number" class="sctone" name="age" value="" placeholder="Age" required>
                    <label for="adress" id="adress-label" class="sctone">Address</label>
                    <input type="text" id="address" class="sctone" name="address" value="" placeholder="1958 5th Ave" required>
                </section>
                    
                <section>
                    <p class=>How did you find us?</p>
                    <label for="facebook" class="container">
                    <input type="checkbox" id="facebook" class="check" name="facebook" value="facebook">Facebook</label>
                    <span class="checkmark"></span><br>

                    <label for="Instagram" class="container">
                    <input type="checkbox" id="instagram" class="check" name="instagram" value="instagram">Instagram</label>
                    <span class="checkmark"></span><br>

                    <label for="google" class="container">
                    <input type="checkbox" id="google" class="check" name="google" value="Google">Google</label>
                    <span class="checkmark"></span><br>

                    <label for="friend" class="container">
                    <input type="checkbox" id="friend" class="check" name="friend" value="friend">Friend Recommendation</label>
                    <span class="checkmark"></span><br>
                </section>

                <section>
                    <p class="lbl">Would you recommend our services to a friend?</p>
                    <input type="radio" id="yes" name="recommend" value="yes">
                    <label for="yes">Yes</label><br>
                    <input type="radio" id="no" name="recommend" value="no">
                    <label for="maybe">No</label><br>
                    <input type="radio" id="maybe" name="recommend" value="maybe">
                    <label for="maybe">Maybe</label>
                </section>

                <section>
                    <div class="select-custom">
                    <label for="reason-contact" class="sctone">What's the reason of your contact?</label>
                    <select id="dropdown" class="dropdown" name="msg" required>
                                <option class="disabled" disabled selected hidden value>Select a reason</option>
                                <option value="comment">A comment</option>
                                <option value="suggestion">A suggestion</option>
                                <option value="complaint">A complaint</option>
                                <option value="other">Other</option>
                    </select>
                    </div>
                </section>

                <section>
                    <label for="name" class="sctone" >Write your comment</label>
                    <textarea id="comment-text" class="txtarea" name="comment-text"
                            rows="5" cols="47" placeholder="Enter your comment here"></textarea>
                </section>
                <button type="submit" id="submit">Submit</button>
            </form>
         </main>
        </div>
    </body>
</html>
<style type="text/css">
body {
    background: whitesmoke;
    font-family: 'Abhaya Libre', serif;
    font-size: 16px;
}

.header {
    text-align: center;
}

form {
    width:340px;;
}


.style-form {
    width: 340px;
    margin: 0 auto;
    padding: 30px 80px 30px 80px;
    border-radius: 30px;
    background-color: #FFFFFF;
    box-shadow: 0 0 1em #CCCCCC;
}
.style-form input[type="text"]:focus,
.style-form input[type="email"]:focus,
.style-form input[type="number"]:focus,
.style-form input[type="time"]:focus,
.style-form select:focus,
.style-form textarea:focus{
    background-color: #b4d6ff;
    border: 1px solid transparent;
    outline: 0;
}   

.styleform label  {
    margin-bottom: 5px;
    font-weight: bolder;
}

.styleform p {
    font-weight: bolder;
}

.style-form input {
    border: 1px solid transparent;
    background: #D7E9FF;
    padding: 10px 0px 10px 0px;
    margin-bottom: 20px;
    box-shadow: 0px;
    border-radius: 0px 20px 20px 20px;
    text-indent: 15px;
    font-size: 1.000em;
}

input:-webkit-autofill,
textarea:-webkit-autofill,
select:-webkit-autofill {
    -webkit-box-shadow: 0 0 0px 1000px #D7E9FF inset;
}

.style-form p {
    margin-bottom: 5px;;
}

section {
    padding: 10px;
}

.style-form select {
    border: 1px solid transparent;
    border-radius: 0px 20px 20px 20px;
    padding: 10px 0px 10px 0px;
    margin-bottom: 40px;
    background: #D7E9FF;
    font-family: 'Abhaya Libre', serif;
    font-size: 16px;    
    width: 330px;
    text-indent: 15px;
    box-shadow: 0px;
}

.style-form select option {
    border-radius: 0px 20px 20px 20px;
    background: #D7E9FF;
    font-size: 16px;    
    width: 330px;
}

.style-form textarea {
    border: 1px solid transparent;
    background: #D7E9FF;
    border-radius: 0px 60px 60px 60px;
    padding: 10px 0px 10px 0px;
    margin-bottom: 40px;
    text-indent: 15px;
    font-size: 16px;;
}


.sctone {
    display: block;
    font-family: 'Abhaya Libre', serif;
    font-size: 16px;
    width: 330px;
}


.input {
    font-family: 'Abhaya Libre', serif;
}

.txtarea {
    width: 330px;
    resize: none;
    font-family: 'Abhaya Libre', serif;
}

button {
    font-family: Tahoma;
    font-size: 0.800em;
    font-weight: bolder;
    letter-spacing: 5px;
    text-transform: uppercase;
    color: #FFFFFF; 
    border: 1px solid transparent;
    background: #7CC728;
    border-radius: 60px;
    padding: 10px 30px 10px 30px;   
    margin-left: 60%;
    margin-right: 40%;
}

.style-form  button:hover {
    background: #68B113;
    border: 1px solid transparent;
    box-shadow: 0 0 1em #BFE791;
    outline: 0;
}
</style>
//////////////////////////////////////////////////
/////////////////////////////////////////////////
/////////////////////////////////////
//////////////////////////////////////////////////////
///////////////////////////voir ce modele

<form action="" method="post">
  <h1>機票訂位範例</h3>
  <label for="passportNumber">護照號碼</label>
  <input type="text" minlength="8"  maxlength="8" placeholder="你的護照號碼" name="passportNumber" id="passportNumber" autofocus required/>
  <br />
  <label for="email">Email</label>
  <input type="email" placeholder="你的信箱" name="email" id="email" required/>
  <br />
  <label for="password">Password</label>
  <input type="password" name="password" id="password" placeholder="你的密碼" required/>
  <br />
  <label for="travelerNumber">旅客人數</label>
  <input type="number" name="travelerNumber" id="travelerNumber" max="15" min="1" required/>
  <br />
  <label for="departTime">出發日期</label>
  <input type="date" name="departTime" id="departTime" required/>
  <label for="returnTime">回程日期</label>
  <input type="date" name="returnTime" id="returnTime" required/>
  <br />
  <h3>機票類型</h3>
  <label for="oneWayTicket">單程票</label>
  <input name="tripType" type="radio" value="oneWayTicket" id="oneWayTicket" required/>
  <label for="roundWayTicket">來回票</label>
  <input name="tripType" type="radio" value="roundWayTicket" id="roundWayTicket" required/>
  <br />
  <h3>額外服務</h3>
    <label for="additionLuggage">額外行李</label>
    <input type="checkbox" name="additionService[]" id="additionLuggage" value="additionLuggage" />
    <label for="chooseSeat">自選座位</label>
    <input type="checkbox" name="additionService[]" id="chooseSeat" value="chooseSeat" />
    <label for="orderMeal">預定餐點</label>
    <input type="checkbox" name="additionService[]" id="orderMeal" value="orderMeal" />
  <br />
  <h3>餐點選擇</h3>
  <select name="meal" id="meal">
    <option value="normal" selected>一般餐</option>
    <option value="vegetarian">素食餐</option>
    <option value="mikeEggVegetarian">奶蛋素食餐</option>
  </select>
  <br />
  <input type="submit" value="送出">
  <input type="reset" value="清除所有">
</form>

<style type="text/css">
body {
  background: #00897B;
}

* {
  font-family: '微軟正黑體';
  font-weight: 400;
}

h1,h3,label{
  color: #555;
}

form{
  background-color: white;
  max-width: 600px;
  margin: 30px auto;
  padding: 20px 30px;
  -webkit-box-shadow: 0 2px 10px rgba(0,0,0,0.3);
  -moz-box-shadow: 0 2px 10px rgba(0,0,0,0.3);
  box-shadow: 0 2px 10px rgba(0,0,0,0.3);
}

form label {
  letter-spacing: 1px;
  display: inline-block;
  min-width: 80px;
}

form input,form select {
  margin-bottom: 20px;
  margin-right: 20px;
}

form input[type="text"],
form input[type="email"],
form input[type="password"],
form input[type="date"],
form input[type="number"]{
  border: 1px solid #ccc;
  padding: 4px 8px
}

form input[type="text"]:focus,
form input[type="email"]:focus,
form input[type="password"]:focus,
form input[type="date"]:focus,
form input[type="number"]:focus{
  outline: none;
  border: 1px solid #009688;
}

form input[type="submit"],
form input[type="reset"]{
  padding: 6px 40px;
  font-size: 14px;
  border-style: none;
  color: white;
  cursor: pointer;
}

form input[type="submit"]{
  background-color: #009688;
}

form input[type="submit"]:hover {
  background-color: #00BFA5;
}

form input[type="reset"]{
  background-color: #F44336;
}

form input[type="reset"]:hover{
  background-color: #FF5252;
}
</style>
//////////////////////////
////////////////////////////////
/////////////////////////////////
///////////////////////////////
<div role="main" class="main-container container js-quickedit-main-content">

  <div class="region region-info-messages">

  </div>

  <div class="row">

  </div>
  <div class="row">

    <div class="col-sm-12">

      <div class="region region-content">
        <form class="contact-message-request-a-quote-form contact-message-form contact-form row" data-user-info-from-browser="" data-drupal-selector="contact-message-request-a-quote-form" action="/contact/request-a-quote" method="post" id="contact-message-request-a-quote-form"
          accept-charset="UTF-8" data-drupal-form-fields="edit-name,edit-mail,edit-field-quote-phone-0-value,edit-field-quote-company-0-value,edit-field-quote-timeframe,edit-field-services-1,edit-field-services-2,edit-field-services-3,edit-field-services-4,edit-field-services-5,edit-field-services-6,edit-field-quote-message-0-value,edit-field-quote-how,edit-submit">
          
          <div class="form-item js-form-item form-type-textfield js-form-type-textfield form-item-name js-form-item-name form-group input-field col col-12 col-md-6">
            <label for="edit-name" class="control-label js-form-required form-required">Your name</label>

            <input data-drupal-selector="edit-name" class="form-text required form-control" type="text" id="edit-name" name="name" value="" size="60" maxlength="255" required="required" aria-required="true">

          </div>
          
          <div class="form-item js-form-item form-type-email js-form-type-email form-item-mail js-form-item-mail form-group input-field col col-12 col-md-6">
            <label for="edit-mail" class="control-label js-form-required form-required">Your email address</label>

            <input data-drupal-selector="edit-mail" class="form-email required form-control" type="email" id="edit-mail" name="mail" value="" size="60" maxlength="254" required="required" aria-required="true">

          </div>
          
          <div class="field--type-telephone field--name-field-quote-phone field--widget-telephone-default form-group js-form-wrapper form-wrapper col col-12 col-md-6" data-drupal-selector="edit-field-quote-phone-wrapper" id="edit-field-quote-phone-wrapper">
            <div class="form-inline form-item js-form-item form-type-tel js-form-type-tel form-item-field-quote-phone-0-value js-form-item-field-quote-phone-0-value form-group input-field">
              <label for="edit-field-quote-phone-0-value" class="control-label js-form-required form-required">Phone number</label>

              <input data-drupal-selector="edit-field-quote-phone-0-value" class="form-tel required form-control" type="tel" id="edit-field-quote-phone-0-value" name="field_quote_phone[0][value]" value="" size="30" maxlength="128" required="required"
                aria-required="true">

            </div>

          </div>
          
          <div class="field--type-string field--name-field-quote-company field--widget-string-textfield form-group js-form-wrapper form-wrapper col col-12 col-md-6" data-drupal-selector="edit-field-quote-company-wrapper" id="edit-field-quote-company-wrapper">
            <div class="form-item js-form-item form-type-textfield js-form-type-textfield form-item-field-quote-company-0-value js-form-item-field-quote-company-0-value form-group input-field">
              <label for="edit-field-quote-company-0-value" class="control-label js-form-required form-required">Your company or organization</label>

              <input class="js-text-full text-full form-text required form-control" data-drupal-selector="edit-field-quote-company-0-value" type="text" id="edit-field-quote-company-0-value" name="field_quote_company[0][value]" value="" size="60" maxlength="255" required="required" aria-required="true">

            </div>

          </div>
          
          <div class="field--type-list-string field--name-field-quote-timeframe field--widget-options-select form-group js-form-wrapper form-wrapper col col-12" data-drupal-selector="edit-field-quote-timeframe-wrapper" id="edit-field-quote-timeframe-wrapper">
            <div class="form-item js-form-item form-type-select js-form-type-select form-item-field-quote-timeframe js-form-item-field-quote-timeframe form-group input-field">
              <label for="edit-field-quote-timeframe" class="control-label js-form-required form-required">Estimated timeframe</label>

              <div class="select-wrapper">
                <select data-drupal-selector="edit-field-quote-timeframe" class="form-select required form-control" id="edit-field-quote-timeframe" name="field_quote_timeframe" required="required" aria-required="true">
                  <option value=""></option><option value="0">Less than 2 months</option>
                  <option value="1">2 to 4 months</option>
                  <option value="2">Over 4 months</option>
                  <option value="3">Hourly maintenance or consulting</option>
                </select>
              </div>

            </div>
          </div>
          
          <div class="field--type-list-string field--name-field-services field--widget-options-select form-group js-form-wrapper form-wrapper col col-12" data-drupal-selector="edit-field-services-wrapper" id="edit-field-services-wrapper">
            
<div class="form-item js-form-item form-type-select js-form-type-select form-item-field-services js-form-item-field-services form-group input-field">
<label for="edit-field-services" class="control-label">What services do you need?</label>
<select data-drupal-selector="edit-field-services" multiple="multiple" name="field_services[]" class="form-select form-control" id="edit-field-services">
  <option value="1">Content Strategy</option>
  <option value="2">Design</option>
  <option value="3">Development</option>
  <option value="4">Training</option>
  <option value="5">Search Engine and Performance Optimization</option>
  <option value="6">Maintenance and Support</option>
  </select>
  </div>

</div>
          
          <div class="field--type-string-long field--name-field-quote-message field--widget-string-textarea form-group js-form-wrapper form-wrapper col col-12" data-drupal-selector="edit-field-quote-message-wrapper" id="edit-field-quote-message-wrapper">
            <div class="form-item js-form-item form-type-textarea js-form-type-textarea form-item-field-quote-message-0-value js-form-item-field-quote-message-0-value input-field">
              <label for="edit-field-quote-message-0-value" class="control-label">What else should we know about your project?</label>

              <div class="form-textarea-wrapper">
                <textarea class="js-text-full text-full form-textarea form-control resize-vertical materialize-textarea" data-drupal-selector="edit-field-quote-message-0-value" id="edit-field-quote-message-0-value" name="field_quote_message[0][value]" rows="5" cols="60"></textarea>
              </div>
            </div>
          </div>
          
          <div class="field--type-list-string field--name-field-quote-how field--widget-options-select form-group js-form-wrapper form-wrapper col col-12" data-drupal-selector="edit-field-quote-how-wrapper" id="edit-field-quote-how-wrapper">
            <div class="form-item js-form-item form-type-select js-form-type-select form-item-field-quote-how js-form-item-field-quote-how form-group input-field">
              <label for="edit-field-quote-how" class="control-label js-form-required form-required">How did you hear about us?</label>

              <div class="select-wrapper">
                <select data-drupal-selector="edit-field-quote-how" class="form-select required form-control" id="edit-field-quote-how" name="field_quote_how" required="required" aria-required="true">
                  <option value=""></option>
                  <option value="0">Drupal.org</option>
                  <option value="1">Search Engine</option>
                  <option value="2">Word of Mouth</option>
                  <option value="3">Link From Another Website</option>
                </select>
              </div>
            </div>
          </div>
          
          <div data-drupal-selector="edit-actions" class="form-actions form-group js-form-wrapper form-wrapper" id="edit-actions"><button data-drupal-selector="edit-submit" class="button button--primary js-form-submit form-submit btn-primary btn" type="submit" id="edit-submit" name="op" value="Submit">Submit</button></div>

        </form>

      </div>

    </div>

  </div>
</div>
//////////1
<style type="text/css">
/* Theme SASS Variables */
$white: #ffffff;
$green: #74b74a;
$green-hover: #4d7c32;
$light-gray: #dddddd;
$light-gray-2: #a8a8a8;
$light-gray-3: #f3f3f3;
$light-gray-4: #999999;
$dark: #333;
$orange: #ff912f;
$body-copy: #414a51;
$body-gray: #777777;
$map-gradient-1: #0d253b;
$map-gradient-2: #154062;
$newsletter-blue: #1379a7;
$background-gray: #f8f8f8;
$note: #ffffd3;
$contact-1: #3c4147;
$contact-2: #535c63;

$mailchimp-field-width: 322px;
$mailchimp-submit-width: 118px;

$zero: 0px;
$mobile: 320px;
$tablet: 768px;
$desktop: 992px;
$giant: 99999px;

$font-family-default: Montserrat;
$font-family-heading: Montserrat;

@mixin green_button() {
  background: $green;
  border: 1px solid transparent;
  border-radius: 3px;
  color: $white;
  cursor: pointer;
  display: inline-block;
  font-family: $font-family-heading;
  font-size: 13px;
  font-weight: bold;
  line-height: 1.846;
  margin: 20px 0.75rem;
  padding: 6px 16px;
  text-align: center;
  vertical-align: middle;
  white-space: nowrap;
  text-transform: uppercase;
  transition: 0.4s all;
  &:hover,
  &:focus {
    background-color: darken($green, 10%);
    color: $white;
    outline: 0;
    box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.3);
  }
}

* {
  box-sizing: border-box;
}
input:-webkit-autofill,
input:-webkit-autofill:hover,
input:-webkit-autofill:focus input:-webkit-autofill,
textarea:-webkit-autofill,
textarea:-webkit-autofill:hover textarea:-webkit-autofill:focus,
select:-webkit-autofill,
select:-webkit-autofill:hover,
select:-webkit-autofill:focus {
  //border: 0;
  -webkit-text-fill-color: $body-copy;
  -webkit-box-shadow: 0 0 0px 1000px #fff inset !important;
  transition: background-color 5000s ease-in-out 0s;
}
body {
  color: $body-copy;
  font-family: $font-family-default;
  font-size: 16px;
  line-height: 24px;
}

section {
  max-width: 750px;
  margin: auto;
  padding: 40px;
}

// From _form.scss.
// Replace after we figure out what to do with overrides.
.form-required:after {
  content: "*";
  color: $green;
  display: inline-block;
  position: absolute;
  height: 7px;
  width: 7px;
  line-height: 1;
  margin-left: 2px;
  margin-top: 3px;
  opacity: 0.7;
}

// Materialize overrides
.materialize {
  input:not([type]),
  input[type="text"]:not(.browser-default),
  input[type="password"]:not(.browser-default),
  input[type="email"]:not(.browser-default),
  input[type="url"]:not(.browser-default),
  input[type="time"]:not(.browser-default),
  input[type="date"]:not(.browser-default),
  input[type="datetime"]:not(.browser-default),
  input[type="datetime-local"]:not(.browser-default),
  input[type="tel"]:not(.browser-default),
  input[type="number"]:not(.browser-default),
  input[type="search"]:not(.browser-default),
  textarea.materialize-textarea,
  .select-wrapper input.select-dropdown {
    font-family: inherit;
    box-sizing: border-box !important;
    transition: 0.4s all;
  }
  input:not([type]):focus:not([readonly]),
  input[type="text"]:not(.browser-default):focus:not([readonly]),
  input[type="password"]:not(.browser-default):focus:not([readonly]),
  input[type="email"]:not(.browser-default):focus:not([readonly]),
  input[type="url"]:not(.browser-default):focus:not([readonly]),
  input[type="time"]:not(.browser-default):focus:not([readonly]),
  input[type="date"]:not(.browser-default):focus:not([readonly]),
  input[type="datetime"]:not(.browser-default):focus:not([readonly]),
  input[type="datetime-local"]:not(.browser-default):focus:not([readonly]),
  input[type="tel"]:not(.browser-default):focus:not([readonly]),
  input[type="number"]:not(.browser-default):focus:not([readonly]),
  input[type="search"]:not(.browser-default):focus:not([readonly]),
  textarea.materialize-textarea:focus:not([readonly]),
  .select-wrapper input.select-dropdown:focus {
    border-bottom: 1px solid $green;
    -webkit-box-shadow: none;
    box-shadow: none;
  }
  .input-field label {
    max-width: calc(100% - 21px);
    padding-right: 14px;
    white-space: nowrap;
    overflow: hidden;
  }
  .input-field label.active {
    max-width: 100%;
    overflow: visible;
  }
  .input-field.focus label.active {
    color: $green;
  }
  textarea.materialize-textarea {
    box-shadow: none;
    box-sizing: content-box;
    border-style: none none solid;
    border-image: initial;
    border: 0;
    border-bottom: 1px solid rgb(158, 158, 158);
    border-radius: 0px;
    outline: none;
    margin: 0px 0px 8px;
    transition: box-shadow 0.3s, border 0.3s, -webkit-box-shadow 0.3s;
  }
  .select-wrapper {
    input.select-dropdown {
      padding-right: 24px;
    }
    select {
      display: none;
    }
  }
  .select-dropdown {
    label {
      overflow: visible;
    }
  }
  .dropdown-content li > a,
  .dropdown-content li > span,
  [type="checkbox"] + span:not(.lever) {
    color: $body-copy;
    font-size: 1rem;
  }
  .select-dropdown.dropdown-content li.selected.active span {
    color: $green;
  }
  [type="checkbox"]:checked + span:not(.lever):before {
    border-right: 2px solid $green;
    border-bottom: 2px solid $green;
  }
  #edit-submit {
    @include green_button();
  }
}
// END Materialize overrides
</style>
//////////////////////////////
:::::::::::://::::::::::::::::::::::1JS
////////////////
<script type="text/javascript">
function initMaterialize() {
  $('form').addClass('materialize');
  $('.form-item').not(':has(input)').each(function() {
    $(this).not('.js-form-type-textarea').find('label').addClass('active');
  });
  $('.form-item').addClass('input-field').find('input').removeAttr('placeholder');
  $('.form-item textarea').addClass('materialize-textarea');
  $('.form-item').each(function() {
    $(this).find('option').eq(0).val('').html('');
    $(this).find('select[multiple]').find('option').eq(0).remove();
  });
  $("select").change();
  M.updateTextFields();
  $('select').formSelect();
}

$(document).ready(function() {
  initMaterialize();
});
$("form .form-control").on("focus", function() {
  $(this)
    .closest(".form-item")
    .addClass("focus")
    .find("label")
    .addClass("active");
});
$("form .form-control").on("focusout", function() {
  $(this)
    .closest(".form-item")
    .removeClass("focus");
  if(!$(this).closest(".form-item").hasClass('hasval')) {
     $(this)
      .closest(".form-item")
      .find("label")
      .removeClass("active");
  }
});
$("form .form-control")
  .on("change", function() {
    if ($(this).val()) {
      $(this)
        .closest(".form-item")
        .addClass("hasval");
    } else {
      $(this)
        .closest(".form-item")
        .removeClass("hasval");
    }
  })
  .change();

$(document).on("change", "select", function(e) {
  if ($(this).val() == "") {
    $(this)
      .val("")
      .closest(".js-form-type-select")
      .find("label")
      .removeClass("active");
  } else {
    $(this)
      .closest(".js-form-type-select")
      .find("label")
      .addClass("active");
  }
});
</script>
//////////////////////2
////////////////////
//////////////////////////
/////////////////////////
//////////////////////////
<head>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>
  <form class='demo-form' action="/some-server-endpoint" method='post'>
      <h1>But how do you really feel?</h1>
 
    <fieldset name="contact-info">
      
      <legend>Contact info</legend>
      <label for="first-name">First name</label>
        <input placeholder='Dweezel' type="text" name='first-name' id='first-name' />

      <label for="last-name">Last name</label>
      <input type="text" name='last-name' id='last-name' placeholder='Zappa' />

      <label for="email">Email</label>
      <input type="email" name='email' id='email' />

      <label for="phone" required>Phone #</label>
      <input type='tel' pattern='[0-9/-]*' name='phone' id='phone' placeholder="888-888-8888" title="A typical phone number" required/>
    </fieldset>
    <section>
      <label class="question" for="feelings">How do you feel about it?</label>
      <select name="feelings" id='feelings' required>
        <option value="0">Great </option>
        <option value="1" selected>Pretty great</option>
        <option value="2">Definitely great</option>
      </select>

        <p class="question">How do you really feel, though?</p>
        <input type="radio" name="feelings-2" id="ans-great-1" value="0" checked><label for="ans-great-1">Great</label>
        <input type="radio" name="feelings-2" id="ans-great-2" value="1"><label for="ans-great-2">Seriously great</label>
        <input type="radio" name="feelings-2" id="ans-great-3" value="2"><label for="ans-great-3">Not that not great.</label>
    </section>

    <button type='submit'>Submit</button>
    <button type='reset'>Reset</button>
  </form>
</body>

////////////////2
<style type="text/css">
body {
  background-color: navy;
  padding-left: 30px;
  color: white;
  font-size: 16px;
  font-family: 'Roboto', helvetica, sans-serif;
}


h1 {
  font-size: 25px;
}

.demo-form fieldset {
  padding-left: 0;
  border: none;
}

.demo-form label {
  display: block;
  margin-bottom: 5px;
}

.demo-form input, .demo-form select {
  display: block;
  width: 250px;
  margin-bottom: 15px;
}

.demo-form input {
  padding: 3px;
}

.demo-form input::placeholder {
  color: red;
  margin-bottom: 10px;
}

.demo-form input::-webkit-input-placeholder { /* Chrome/Opera/Safari */
  color: gray;
}

.demo-form input::-moz-placeholder { /* Firefox 19+ */
  color: gray;
}

.demo-form input:-ms-input-placeholder { /* IE 10+ */
  color: gray;
}

.demo-form input:-moz-placeholder { /* Firefox 18- */
  color: gray;
}

.demo-form select {
  cursor: pointer;
}


.demo-form input:invalid {
  border: 2px red solid;
}

.radio-group label, .radio-group input{
  display: inline-block;
}

.demo-form button {
  width: 150px;
  padding: 10px;
  cursor: pointer;
}
</style>
////////////////////////////
////////////////////////////////////
/////////////////////////////////
///////////////////////////////////
///////////////////////////////////////
/////////////////////////////////////
<h1>Gravity Forms - Material Design Styling</h1>

<div class="gf_browser_chrome gform_wrapper" id="gform_wrapper_1"><a id="gf_1" class="gform_anchor"></a>    <form method="post" enctype="multipart/form-data" target="gform_ajax_frame_1" id="gform_1" action="/contact/#gf_1" _lpchecked="1">
    <div class="gform_body"><ul id="gform_fields_1" class="gform_fields top_label form_sublabel_below description_below"><li id="field_1_1" class="gfield w50 gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible"><label class="gfield_label" for="input_1_1">Full Name<span class="gfield_required">*</span></label><div class="ginput_container ginput_container_text"><input name="input_1" id="input_1_1" type="text" value="" class="medium" aria-required="true" aria-invalid="false" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAAXNSR0IArs4c6QAAAfBJREFUWAntVk1OwkAUZkoDKza4Utm61iP0AqyIDXahN2BjwiHYGU+gizap4QDuegWN7lyCbMSlCQjU7yO0TOlAi6GwgJc0fT/fzPfmzet0crmD7HsFBAvQbrcrw+Gw5fu+AfOYvgylJ4TwCoVCs1ardYTruqfj8fgV5OUMSVVT93VdP9dAzpVvm5wJHZFbg2LQ2pEYOlZ/oiDvwNcsFoseY4PBwMCrhaeCJyKWZU37KOJcYdi27QdhcuuBIb073BvTNL8ln4NeeR6NRi/wxZKQcGurQs5oNhqLshzVTMBewW/LMU3TTNlO0ieTiStjYhUIyi6DAp0xbEdgTt+LE0aCKQw24U4llsCs4ZRJrYopB6RwqnpA1YQ5NGFZ1YQ41Z5S8IQQdP5laEBRJcD4Vj5DEsW2gE6s6g3d/YP/g+BDnT7GNi2qCjTwGd6riBzHaaCEd3Js01vwCPIbmWBRx1nwAN/1ov+/drgFWIlfKpVukyYihtgkXNp4mABK+1GtVr+SBhJDbBIubVw+Cd/TDgKO2DPiN3YUo6y/nDCNEIsqTKH1en2tcwA9FKEItyDi3aIh8Gl1sRrVnSDzNFDJT1bAy5xpOYGn5fP5JuL95ZjMIn1ya7j5dPGfv0A5eAnpZUY3n5jXcoec5J67D9q+VuAPM47D3XaSeL4AAAAASUVORK5CYII=&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;"></div></li><li id="field_1_2" class="gfield w50 field_sublabel_below field_description_below gfield_visibility_visible"><label class="gfield_label" for="input_1_2">Company Name</label><div class="ginput_container ginput_container_text"><input name="input_2" id="input_1_2" type="text" value="" class="medium" aria-invalid="false"></div></li><li id="field_1_3" class="gfield w50 gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible"><label class="gfield_label" for="input_1_3">Email Address<span class="gfield_required">*</span></label><div class="ginput_container ginput_container_email">
                                <input name="input_3" id="input_1_3" type="text" value="" class="medium" aria-required="true" aria-invalid="false">
                            </div></li><li id="field_1_4" class="gfield w50 field_sublabel_below field_description_below gfield_visibility_visible"><label class="gfield_label" for="input_1_4">Phone Number</label><div class="ginput_container ginput_container_phone"><input name="input_4" id="input_1_4" type="text" value="" class="medium" aria-invalid="false"></div></li><li id="field_1_6" class="gfield field_sublabel_below field_description_below gfield_visibility_visible"><label class="gfield_label" for="input_1_6">Enter your address</label><div class="ginput_container ginput_container_text"><input name="input_6" id="input_1_6" type="text" value="" class="medium" aria-invalid="false"></div></li><li id="field_1_5" class="gfield field_sublabel_below field_description_below gfield_visibility_visible"><label class="gfield_label" for="input_1_5">Message</label><div class="ginput_container ginput_container_textarea"><textarea name="input_5" id="input_1_5" class="textarea medium" aria-invalid="false" rows="10" cols="50"></textarea></div></li>
                                </ul></div>
            <div class="gform_footer top_label"> <input type="submit" id="gform_submit_button_1" class="gform_button button" value="Submit" onclick="if(window[&quot;gf_submitting_1&quot;]){return false;}  window[&quot;gf_submitting_1&quot;]=true;  " onkeypress="if( event.keyCode == 13 ){ if(window[&quot;gf_submitting_1&quot;]){return false;} window[&quot;gf_submitting_1&quot;]=true;  jQuery(&quot;#gform_1&quot;).trigger(&quot;submit&quot;,[true]); }"> <input type="hidden" name="gform_ajax" value="form_id=1&amp;title=&amp;description=&amp;tabindex=0">
                <input type="hidden" class="gform_hidden" name="is_submit_1" value="1">
                <input type="hidden" class="gform_hidden" name="gform_submit" value="1">

                <input type="hidden" class="gform_hidden" name="gform_unique_id" value="">
                <input type="hidden" class="gform_hidden" name="state_1" value="WyJbXSIsImJmM2E3ZDY5NzMwNzg0NTY1YjM5Mjc3MzRlYThjNjg3Il0=">
                <input type="hidden" class="gform_hidden" name="gform_target_page_number_1" id="gform_target_page_number_1" value="0">
                <input type="hidden" class="gform_hidden" name="gform_source_page_number_1" id="gform_source_page_number_1" value="1">
                <input type="hidden" name="gform_field_values" value="">

    </div>
  </form>
</div>
////////////////////////
<style type="text/css">
$gutter: 50px;

*,
*:before,
*:after {
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
}

h1 {
  font-family: "Montserrat", Arial;
  text-align: center;
}

form {
  font-family: "Montserrat", Arial;
  padding: 50px;
  ul {
    font-size: 16px;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    list-style-type: none;
    padding: 0;
    margin: 0;
    li {
      padding: 0;
      text-indent: 0;
      position: relative;
      margin: 0;
      margin-bottom: 30px;
      font-size: 1em;
      width: 100%;

      &.w50 {
        width: calc(50% - #{$gutter / 2});

        @media (max-width: 767px) {
          width: 100%;
        }
      }

      label {
        font-size: 17px;
        font-weight: 600;
        letter-spacing: 0.025em;
        color: #73808a;
        position: absolute;
        top: 25px;
        left: 25px;
        transition: all 0.3s ease;

        &.focused {
          font-size: 13px;
          top: 10px;
          color: #81c342;
        }
      }

      input,
      textarea {
        width: 100%;
        height: 70px;
        border-radius: 5px;
        border: 1px solid #d0d5d9;
        padding: 20px 25px 5px 25px;
        transition: all 0.2s ease;
        font-size: 17px;
        line-height: 1.3em;
        letter-spacing: 0.025em;
        color: #73808a;

        &:focus {
          outline: none;
          border-color: #81c342;
        }
      }

      textarea {
        height: 100px;
        resize: none;
      }

      &.gfield_error {
        input,
        textarea {
          border-color: red;
        }
        .gfield_description {
          font-size: 14px;
          margin-top: 5px;
          color: red;
        }
      }
    } //li
  } //ul

  input.button {
    width: 100%;
    height: 70px;
    background-color: #81c342;
    border-radius: 5px;
    color: white;
    font-family: "Montserrat", Arial;
    font-size: 18px;
    font-weight: 600;
    cursor: pointer;
    border: none;

    &:focus {
      outline: none;
    }
  }
} 
</style>
//
//////////////////////////////////////////////////////

//GRAVITY FORMS - MATERIAL DSIGN - ADD FOCUS TO LABEL
        <script type="text/javascript"></script>
$('form input, form textarea, form select').focusin(function(){
  $(this).parent().siblings('label').addClass('focused');
});

$('form input, form textarea, form select').focusout(function(){
  var input = $(this);
  if( input.val().length === 0 ){
    input.parent().siblings('label').removeClass('focused');
  }
});
//on ajax submission
$('#gform_ajax_frame_1, #gform_ajax_frame_2, #gform_ajax_frame_3').on( 'load', function(){
  $('form input, form textarea, form select').focusin(function(){
    $(this).parent().siblings('label').addClass('focused');
  });
  $('form input, form textarea, form select').focusout(function(){
    var input = $(this);
    if( input.val().length === 0 ){
      input.parent().siblings('label').removeClass('focused');
    }
  });
  $('form input, form textarea, form select').each(function(){
    if( $(this).val().length != 0 ){
      $(this).parent().siblings('label').addClass('focused');
    }
  });
});
</script>
//////////////////////////////////////
//////////////////////////////////////
//////////////////////////////////
//////////////////////////////////////
////////////////////////////////////////
<form class="my-form">
  <div class="container">
    <h1>Get in touch!</h1>
    <ul>
      <li>
        <select>
          <option selected disabled>-- Please choose an option --</option>
          <option>Request Quote</option>
          <option>Send Resume</option>
          <option>Other</option>      
        </select>
      </li>
      <li>
        <div class="grid grid-2">
          <input type="text" placeholder="Name" required>  
          <input type="text" placeholder="Surname" required>
        </div>
      </li>
      <li>
        <div class="grid grid-2">
          <input type="email" placeholder="Email" required>  
          <input type="tel" placeholder="Phone">
        </div>
      </li>    
      <li>
        <textarea placeholder="Message"></textarea>
      </li>   
      <li>
        <input type="checkbox" id="terms">
        <label for="terms">I have read and agreed with <a href="">the terms and conditions.</a></label>
      </li>  
      <li>
        <div class="grid grid-3">
          <div class="required-msg">REQUIRED FIELDS</div>
          <button class="btn-grid" type="submit" disabled>
            <span class="back">
              <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/email-icon.svg" alt="">
            </span>
            <span class="front">SUBMIT</span>
          </button>
          <button class="btn-grid" type="reset" disabled>
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
<footer>
  <div class="container">
    <small>Made with <span>❤</span> by <a href="http://georgemartsoukos.com/" target="_blank">George Martsoukos</a>
    </small>
  </div>
</footer>
::::::::////////////////////////////////////////
//////

<style type="text/css">
@import url("https://fonts.googleapis.com/css?family=Open+Sans:400,700");

/* RESET RULES
–––––––––––––––––––––––––––––––––––––––––––––––––– */
:root {
  --white: #afafaf;
  --red: #e31b23;
  --bodyColor: #292a2b;
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
:::::::::::://////////////////////////////////////////
///////////////
<script type="text/javascript"></script>
const checkbox = document.querySelector('.my-form input[type="checkbox"]');
const btns = document.querySelectorAll(".my-form button");

checkbox.addEventListener("change", function() {
  const checked = this.checked;
  for (const btn of btns) {
    checked ? (btn.disabled = false) : (btn.disabled = true);
  }
});

</script>