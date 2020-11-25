<?php

include_once("../dbconn.php");
include_once("../funcs.php");



//$company_phone = $_POST['company_phone'];

//echo $company_phone;



$company_name = mysqli_real_escape_string($conn,$_POST['company_name']);
//echo $company_name;
$company_trading_name = mysqli_real_escape_string($conn,$_POST['company_trading_name']);
//$company_cat = mysqli_real_escape_string($conn,$_POST['company_cat']);
//$company_cat = "cat";
$company_phone = mysqli_real_escape_string($conn,$_POST['company_phone']);

$company_email = mysqli_real_escape_string($conn,$_POST['company_email']);
$company_website = mysqli_real_escape_string($conn,$_POST['company_website']);
$company_postal_code = mysqli_real_escape_string($conn,$_POST['company_postal_code']);
//$company_physical_address = mysqli_real_escape_string($conn,$_POST['company_physical_address']);

$company_fax = mysqli_real_escape_string($conn,$_POST['company_fax']);
/*
$company_country = mysqli_real_escape_string($conn,$_POST['company_country']);
$company_state = mysqli_real_escape_string($conn,$_POST['company_state']);
$company_city = mysqli_real_escape_string($conn,$_POST['company_city']);
*/
$company_address = mysqli_real_escape_string($conn,$_POST['company_address']);
$company_zip_code = mysqli_real_escape_string($conn,$_POST['company_zip_code']);

$company_owner = mysqli_real_escape_string($conn,$_POST['company_owner']);
//$company_owner_img = mysqli_real_escape_string($conn,$_POST['company_owner_img']);
$company_executive_director = mysqli_real_escape_string($conn,$_POST['company_executive_director']);
$company_director = mysqli_real_escape_string($conn,$_POST['company_director']);
$company_auditor = mysqli_real_escape_string($conn,$_POST['company_auditor']);

$company_establish_date = mysqli_real_escape_string($conn,$_POST['company_establish_date']);
$company_reg_no = mysqli_real_escape_string($conn,$_POST['company_reg_no']);
$company_tax_reg_no = mysqli_real_escape_string($conn,$_POST['company_tax_reg_no']);
$company_vat_no = mysqli_real_escape_string($conn,$_POST['company_vat_no']);

$company_bank = mysqli_real_escape_string($conn,$_POST['company_bank']);
$company_capital_stack = mysqli_real_escape_string($conn,$_POST['company_capital_stack']);
$company_annual_sales = mysqli_real_escape_string($conn,$_POST['company_annual_sales']);

$company_payment_terms = "";

if (isset($_POST['company_payment_terms']) && count($company_payment_terms) != 0) {
    $company_payment_terms = mysqli_real_escape_string($conn,json_encode($_POST['company_payment_terms']));
}

/*
if (isset($_POST['company_payment_terms'])) {
    # code...
    $company_payment_terms = $_POST['company_payment_terms'];
    if(count($company_payment_terms) == 0){
        $company_payment_terms = " ";
    }
    else{
        $company_payment_terms = mysqli_real_escape_string($conn,json_encode($company_payment_terms));
    }

}else{$company_payment_terms = " ";}
*/

$company_num_employees = mysqli_real_escape_string($conn,$_POST['company_num_employees']);
$company_daily_work_hours = mysqli_real_escape_string($conn,$_POST['company_daily_work_hours']);
$company_start_work_at = mysqli_real_escape_string($conn,$_POST['company_start_work_at']);
$company_end_work_at = mysqli_real_escape_string($conn,$_POST['company_end_work_at']);

//$company_activation_day = mysqli_real_escape_string($conn,$_POST['company_activation_day']);
$company_experince_years = mysqli_real_escape_string($conn,$_POST['company_experince_years']);
$company_start_of_acc_year = mysqli_real_escape_string($conn,$_POST['company_start_of_acc_year']);
$company_end_of_acc_year = mysqli_real_escape_string($conn,$_POST['company_end_of_acc_year']);


$company_cat = "";

$company_product_range = "";
$company_key_markets = "";
$company_key_customers = "";
$company_dealers_type = "";
$company_materials_used = "";
$company_techniques_used = "";

$company_country = "";
$company_state = "";
$company_city = "";
$company_activation_day = "";

if (isset($_POST['company_country']) && count($_POST['company_country']) != 0) {
    $company_country = mysqli_real_escape_string($conn,json_encode($_POST['company_country']));
}

if (isset($_POST['company_state']) && count($_POST['company_state']) != 0) {
    $company_state = mysqli_real_escape_string($conn,json_encode($_POST['company_state']));
}

if (isset($_POST['company_city']) && count($_POST['company_city']) != 0) {
    $company_city = mysqli_real_escape_string($conn,json_encode($_POST['company_city']));
}

if (isset($_POST['company_activation_day']) && count($_POST['company_activation_day']) != 0) {
    $company_activation_day = mysqli_real_escape_string($conn,json_encode($_POST['company_activation_day']));
}




$company_sample_lead_time = mysqli_real_escape_string($conn,$_POST['company_sample_lead_time']);
$company_production_lead_time = mysqli_real_escape_string($conn,$_POST['company_production_lead_time']);



if($company_name != ''){

$company_logo = '';
$company_owner_img = '';    

//$img= mysqli_real_escape_string($conn,$_POST['img']);

    if(isset($_FILES["company_logo"]["name"])){
    
            $target_dir = "../../uploads/";        
            $target_file = $target_dir . basename($_FILES["company_logo"]["name"]);
            if (move_uploaded_file($_FILES["company_logo"]["tmp_name"], $target_file)) 
            {             
                $company_logo = $_FILES['company_logo']['name'];
                $img_up_state = 1;
            } 
            else {
                //echo "Sorry, there was an error uploading your file!<br>";
                $img_up_state = 0;

            }
        
    
    }
    
    if(isset($_FILES["company_owner_img"]["name"])){
    
            $target_dir = "../../uploads/";        
            $target_file = $target_dir . basename($_FILES["company_owner_img"]["name"]);
            if (move_uploaded_file($_FILES["company_owner_img"]["tmp_name"], $target_file)) 
            {             
                $company_owner_img = $_FILES['company_owner_img']['name'];
                $img_up_state = 1;
            } 
            else {
                //echo "Sorry, there was an error uploading your file!<br>";
                $img_up_state = 0;

            }
        
    
    }    



$company_fields = [
    'company_name','company_trading_name','company_cat','company_phone','company_logo',
    'company_email','company_website','company_postal_code','company_address',
    'company_fax','company_country','company_state','company_city','company_zip_code',
    'company_owner','company_owner_img','company_executive_director','company_director','company_auditor',
    'company_establish_date','company_reg_no','company_tax_reg_no','company_vat_no',
    'company_bank','company_capital_stack','company_annual_sales','company_payment_terms',
    'company_num_employees','company_daily_work_hours','company_start_work_at','company_end_work_at',
    'company_activation_day','company_experince_years','company_start_of_acc_year','company_end_of_acc_year',
    'company_product_range','company_key_markets','company_key_customers','company_dealers_type',
    'company_materials_used','company_techniques_used','company_sample_lead_time','company_production_lead_time'
];

$fields = "(";
foreach($company_fields as $field){
    $fields .= $field . ",";
}


$company_values = [
    $company_name,$company_trading_name,$company_cat,$company_phone,$company_logo,
    $company_email,$company_website,$company_postal_code,$company_address,
    $company_fax,$company_country,$company_state,$company_city,$company_zip_code,
    $company_owner,$company_owner_img,$company_executive_director,$company_director,$company_auditor,
    $company_establish_date,$company_reg_no,$company_tax_reg_no,$company_vat_no,
    $company_bank,$company_capital_stack,$company_annual_sales,$company_payment_terms,
    $company_num_employees,$company_daily_work_hours,$company_start_work_at,$company_end_work_at,
    $company_activation_day,$company_experince_years,$company_start_of_acc_year,$company_end_of_acc_year,
    $company_product_range,$company_key_markets,$company_key_customers,$company_dealers_type,
    $company_materials_used,$company_techniques_used,$company_sample_lead_time,$company_production_lead_time
];

$values = "(";
foreach($company_values as $value){
    $values .= "'{$value}'" . ",";
}

$table = "companies";



$fields = substr($fields,0,-1).")";
$values = substr($values,0,-1).")";


$get_last_id = 0;

$insert_arr = db_insert($conn,$table,$fields,$values,$get_last_id);

if ($insert_arr[1] == 1) {
    # code...
    echo "تمت اضافة الشركة بنجاح";
    //echo $company_payment_terms;
}

if ($insert_arr[0] != 0) {
    # code...
    $last_id = $insert_arr[0];
}
 

}

else{
    echo "من فضلك ادخل اسم الشركة";
}



?>