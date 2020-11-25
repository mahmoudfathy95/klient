

<?php

include_once("db/dbconn.php");
include_once("db/funcs.php");

$table = "categories";
$fields = array('*');
$id_name = "category_id";
$id = 38;
$st_id = 0;
$limit = "0";
$asc_desc = "ASC";
$result = db_select($conn,$table,$fields,$id_name,$id,$st_id,$limit,$asc_desc); 



?>



<!DOCTYPE html>
<html lang="en">

<!-- head  -->
    <?php include 'components/head.php'; ?>

    <!-- for forms -->
    <script src="../global_assets/js/plugins/forms/styling/uniform.min.js"></script>

    <!-- /for forms -->


	<!-- Theme JS files -->
	<script src="../global_assets/js/plugins/extensions/jquery_ui/interactions.min.js"></script>
	<script src="../global_assets/js/plugins/extensions/jquery_ui/widgets.min.js"></script>
	<script src="../global_assets/js/plugins/extensions/jquery_ui/effects.min.js"></script>
	<script src="../global_assets/js/plugins/extensions/mousewheel.min.js"></script>
	<script src="../global_assets/js/plugins/extensions/jquery_ui/globalize/globalize.js"></script>
	<script src="../global_assets/js/plugins/extensions/jquery_ui/globalize/cultures/globalize.culture.de-DE.js"></script>
    <script src="../global_assets/js/plugins/extensions/jquery_ui/globalize/cultures/globalize.culture.ja-JP.js"></script>
    
    <!-- Theme JS files -->
    <script src="../global_assets/js/plugins/visualization/d3/d3.min.js"></script>
	<script src="../global_assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
	<script src="../global_assets/js/plugins/forms/styling/switchery.min.js"></script>
	<script src="../global_assets/js/plugins/ui/moment/moment.min.js"></script>
	<script src="../global_assets/js/plugins/pickers/daterangepicker.js"></script>

	<!-- Theme JS files -->
	<script src="../global_assets/js/plugins/forms/wizards/steps.min.js"></script>
	<script src="../global_assets/js/plugins/forms/selects/select2.min.js"></script>
	<script src="../global_assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script src="../global_assets/js/plugins/forms/inputs/inputmask.js"></script>
	<script src="../global_assets/js/plugins/forms/validation/validate.min.js"></script>
	<script src="../global_assets/js/plugins/extensions/cookie.js"></script>

	<script src="../global_assets/js/demo_pages/form_wizard.js"></script>
	<!-- /theme JS files -->



    <!-- /theme JS files -->



<!-- /head  -->

<body>

<!-- Main navbar -->
    <?php include 'components/navbar.php'; ?>
<!-- /main navbar -->


<!-- Page content -->
<div class="page-content">

    <!-- Main sidebar -->
        <?php include 'components/main_sidebar.php'; ?>
    <!-- /main sidebar -->


    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Page header -->
            <?php include 'components/page_header.php'; ?>
        <!-- /page header -->


        <!-- Content area -->
        <div class="content pt-0">

            <!-- Inner container -->
            <div class="d-flex align-items-start flex-column flex-md-row">

                <!-- Left content -->
                <div class="w-100 order-2 order-md-1">


                <!-- Basic responsive configuration -->
                    <div class="card">
                        <div class="card-header header-elements-inline">
                            <h5 class="card-title">Companies</h5>
                            <div class="header-elements">
                                <div class="list-icons">
                                    <a class="list-icons-item" data-action="collapse"></a>
                                    <a class="list-icons-item" data-action="reload"></a>
                                    <a class="list-icons-item" data-action="remove"></a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            The <code>Responsive</code> extension for DataTables can be applied to a DataTable in one of two ways; with a specific <code>class name</code> on the table, or using the DataTables initialisation options. This method shows the latter, with the <code>responsive</code> option being set to the boolean value <code>true</code>. The <code>responsive</code> option can be given as a boolean value, or as an object with configuration options.
                        </div>

                        <form class="wizard-form steps-state-saving" id="add_form" action="db/php/add_company_db.php" data-fouc>
                    
                    
						<h6>Basic Information</h6>
						<fieldset>

                            <!-- logo & company name -->

                                <div class="row">

                                        <!-- logo -->

                                            <div class="col-md-2">
                                                <a href="#">
                                                    <img src="../global_assets/images/placeholders/placeholder.jpg" width="100" height="100" class="rounded-round" alt="">
                                                </a>
                                            </div>     

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="d-block">Company Logo</label>
                                                    <input type="file" name="company_logo" class="form-input-styled" data-fouc>
                                                    <span class="form-text text-muted">Accepted Files : jpg,PNG. Max file size 2Mb</span>
                                                </div>
                                            </div>

                                        <!-- /logo -->
                                    
                                    
                                        <!-- company name -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Company Name<span class="text-danger">*</span></label>
                                                    <input type="text" name="company_name" class="form-control" id="company_name" placeholder="اسم الشركة">
                                                </div>
                                            </div>
                                        <!-- /ompany name -->
                                </div>

                            <!-- /logo & company name -->

							
                            <!-- owner image & owner name -->

                                <div class="row">

                                        <!-- owner image -->

                                            <div class="col-md-2">
                                                <a href="#">
                                                    <img src="../global_assets/images/placeholders/placeholder.jpg" width="100" height="100" class="rounded-round" alt="">
                                                </a>
                                            </div>     

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="d-block">Owner Image :</label>
                                                    <input type="file" name="company_owner_img" class="form-input-styled" data-fouc>
                                                    <span class="form-text text-muted">Accepted Formats : jpg,PNG. Max file size 2Mb</span>
                                                </div>
                                            </div>

                                        <!-- /owner image -->
                                    
                                    
                                        <!-- owner name -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label> Owner Name :  <span class="text-danger">*</span></label>
                                                    <input type="text" name="company_owner" class="form-control" placeholder="اسم مالك الشركة">
                                                </div>
                                            </div>
                                        <!-- /owner name -->

                                </div>

                            <!-- /owner image & owner name -->


                            <!-- company_trading_name & company_date_of_birth -->

                                <div class="row">

                                    <!-- company_trading_name name -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Trading Name : <span class="text-danger">*</span></label>
                                                <input type="text" name="company_trading_name" class="form-control" placeholder="الاسم التجارى">
                                            </div>
                                        </div>
                                    <!-- /company_trading_name name -->




                                    <!-- company_date_of_birth -->
                                    <div class="col-md-6">
                                            <label>Company Establish Date :</label>
                                            <div class="mb-4">
                                                <div class="input-group">
                                                    <span class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="icon-calendar"></i>
                                                        </span>
                                                    </span>
                                                    <input type="text" name="company_establish_date" class="form-control datepicker-format" placeholder="Pick a date&hellip;">
                                                </div>
                                            </div>
                                        </div>
                                    <!-- /company_date_of_birth -->





                                </div>

                            <!-- /company_trading_name & company_date_of_birth -->



                            <!-- rest of basic info -->

                                <div class="row">


                                    <!-- executive_director name -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Company Executive Director :  <span class="text-danger">*</span></label>
                                                <input type="text" name="company_executive_director" class="form-control" placeholder="اسم المدير التنفيذى">
                                            </div>
                                        </div>
                                    <!-- /executive_director name -->


                                    <!-- company_director name -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Company Director : <span class="text-danger">*</span></label>
                                                <input type="text" name="company_director" class="form-control" placeholder="اسم مدير الشركة">
                                            </div>
                                        </div>
                                    <!-- /company_director name -->

                                </div>


                                <div class="row">


                                    <!-- company_auditor name -->
                                        <div class="col-md-6">


                                            <div class="form-group">
                                                <label>Company Auditor :  <span class="text-danger">*</span></label>
                                                <input type="text" name="company_auditor" class="form-control" placeholder="اسم مدير الحسابات">
                                            </div>


                                            <div class="form-group">
                                                <label>Company Categories</label>
                                                <select data-placeholder="اختر النشاط" name="company_cat[]" multiple="multiple" class="form-control select2" data-fouc>
                                                    
                                                    <optgroup label="نشاط الشركة">
                                                        <option value=" " data-icon="wordpress2">اختر النشاط</option>
                                                       
                                                        <option value="1" data-icon="wordpress2">type</option>
                                                        <option value="2" data-icon="wordpress2">type</option>
                                                        <option value="3" data-icon="wordpress2">type</option>
                                                        <option value="4" data-icon="wordpress2">type</option>
                                                        
                                                    </optgroup>
        
                                                </select>
                                            </div>


                                        </div>
                                    <!-- /company_auditor name -->

                                    


                                    <!-- company_breif -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Company Breif :  <span class="text-danger">*</span></label>
                                                <textarea name="company_breif" rows="4" cols="4" placeholder="نبذة عن الشركة" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    <!-- /company_breif -->

                                </div>

                            <!-- /rest of basic info -->

						</fieldset>





						<h6>Communication Information</h6>
						<fieldset>


                            <!-- company_country & address -->                        
                                <div class="row">


                                    <!-- company_location -->


                                        <div class="col-md-6">

                                            <label>Company Location :</label>
                                            <div class="row">

                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <select name="company_country" data-placeholder="Country" class="form-control form-control-select2 select2" data-fouc>
                                                            <option></option>
                                                            <option value="1">January</option>
                                                            <option value="2">February</option>
                                                            <option value="3">March</option>
                                                            <option value="4">April</option>
                                                            <option value="5">May</option>
                                                            <option value="6">June</option>
                                                            <option value="7">July</option>
                                                            <option value="8">August</option>
                                                            <option value="9">September</option>
                                                            <option value="10">October</option>
                                                            <option value="11">November</option>
                                                            <option value="12">December</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <select name="company_state" data-placeholder="State" class="form-control form-control-select2  select2" data-fouc>
                                                            <option></option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                            <option value="9">9</option>
                                                            <option value="...">...</option>
                                                            <option value="31">31</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <select name="company_city" data-placeholder="City" class="form-control form-control-select2 select2" data-fouc>
                                                            <option></option>
                                                            <option value="1">1980</option>
                                                            <option value="2">1981</option>
                                                            <option value="3">1982</option>
                                                            <option value="4">1983</option>
                                                            <option value="5">1984</option>
                                                            <option value="6">1985</option>
                                                            <option value="7">1986</option>
                                                            <option value="8">1987</option>
                                                            <option value="9">1988</option>
                                                            <option value="10">1989</option>
                                                            <option value="11">1990</option>
                                                        </select>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    <!-- /company_location -->


                                    <!-- company_address -->
                                        
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Company Address<span class="text-danger">*</span></label>
                                                <input type="text" name="company_address" placeholder="Address" class="form-control">
                                            </div>
                                        </div>

                                    <!-- /company_address -->

                                    
                                </div>
                            <!-- /company_country & address -->  



                            <!-- company phone & Fax-->

                                <div class="row">

                                    <!-- /company_phone -->

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Company Phone # :</label>
                                                <input type="text" name="company_phone" class="form-control" placeholder="+99-99-9999-9999" data-mask="+99-99-9999-9999">
                                            </div>
                                        </div>

                                    <!-- company_phone -->

                                    <!-- company_fax -->
                                            
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Company Fax<span class="text-danger">*</span></label>
                                                <input type="text" name="company_fax" placeholder="Company Fax" class="form-control">
                                            </div>
                                        </div>

                                    <!-- /company_fax -->

                                </div>

                            <!-- /company phone & Fax-->



                            <!-- company Postal & ZIP Codes -->

                                <div class="row">

                                    <!-- company Postal Code -->

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Postal Code<span class="text-danger">*</span></label>
                                                <input type="text" name="company_postal_code" placeholder="Postal Code" class="form-control">
                                            </div>
                                        </div>

                                    <!-- /company Postal Code -->

                                    <!-- company ZIP Code -->
                                            
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>ZIP Code<span class="text-danger">*</span></label>
                                                <input type="text" name="company_zip_code" placeholder="ZIP Code" class="form-control">
                                            </div>
                                        </div>

                                    <!-- /company ZIP Code -->

                                </div>

                            <!-- /company Postal & ZIP Codes -->



                            <!-- company Website & E-Mail -->

                                <div class="row">

                                    <!-- company Website -->

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Company Website<span class="text-danger">*</span></label>
                                                <input type="text" name="company_website" placeholder="Company Website" class="form-control">
                                            </div>
                                        </div>

                                    <!-- /company Website -->


                                    <!-- company E-Mail -->
                                            
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Company E-Mail<span class="text-danger">*</span></label>
                                                <input type="text" name="company_email" placeholder="Company E-Mail" class="form-control">
                                            </div>
                                        </div>

                                    <!-- /company E-Mail -->

                                </div>

                            <!-- /company Website & E-Mail -->





						</fieldset>







						<h6>Details</h6>
						<fieldset>

                            <!-- company details -->

                                <div class="row">

                                    <!-- company start details -->                                   

                                        <div class="col-md-6">

                                            <label>Company Details</label>

                                            

                                            <div class="row">  

                                                <div class="col-md-6">

                                                    <div class="form-group">
                                                        <label>Experience Years<span class="text-danger">*</span></label>
                                                        <input type="text" name="company_experince_years" placeholder="Experience Years" class="form-control">
                                                    </div>
                                                                                           
                                                </div>

                                                <div class="col-md-6">


                                                    <div class="form-group">
                                                        <label>Registeration Number<span class="text-danger">*</span></label>
                                                        <input type="text" name="company_reg_no" placeholder="Registeration Number" class="form-control">
                                                    </div>
             
                                                                                           
                                                </div>            
                                            
                                            </div>

                                            <div class="row">  


                                                <div class="col-md-6">

                                                    <div class="form-group">
                                                        <label>Tax NO<span class="text-danger">*</span></label>
                                                        <input type="text" name="company_tax_reg_no" placeholder="Tax NO" class="form-control">
                                                    </div>
                                                                                           
                                                </div>

                                                <div class="col-md-6">

                                                    <div class="form-group">
                                                        <label>VAT NO<span class="text-danger">*</span></label>
                                                        <input type="text" name="company_vat_no" placeholder="VAT NO" class="form-control">
                                                    </div>
                                                                                           
                                                </div>            
                                            
                                            </div>

                                            <div class="row">  


                                                <div class="col-md-6">

                                                    <label>Start Of Accounting Year</label>
                                                    <div class="mb-4">
                                                        <div class="input-group">
                                                            <span class="input-group-prepend">
                                                                <span class="input-group-text">
                                                                    <i class="icon-calendar"></i>
                                                                </span>
                                                            </span>
                                                            <input type="text" name="company_start_of_acc_year" class="form-control datepicker-format" placeholder="Pick a date&hellip;">
                                                        </div>
                                                    </div>
                                                                                           
                                                </div>

                                                <div class="col-md-6">

                                                    <label>End Of Accounting Year</label>
                                                    <div class="mb-4">
                                                        <div class="input-group">
                                                            <span class="input-group-prepend">
                                                                <span class="input-group-text">
                                                                    <i class="icon-calendar"></i>
                                                                </span>
                                                            </span>
                                                            <input type="text" name="company_end_of_acc_year" class="form-control datepicker-format" placeholder="Pick a date&hellip;">
                                                        </div>
                                                    </div>
                                                                                           
                                                </div>            
                                            
                                            </div>
                                            

                                            <div class="row">  


                                                <div class="col-md-6">

                                                    <div class="form-group">
                                                        <label>Bank<span class="text-danger">*</span></label>
                                                        <input type="text" name="company_bank" placeholder="Bank" class="form-control">
                                                    </div>
                                                                                           
                                                </div>

                                                <div class="col-md-6">

                                                    <div class="form-group">
                                                        <label>Capital Stack<span class="text-danger">*</span></label>
                                                        <input type="text" name="company_capital_stack" placeholder="Capital Stack" class="form-control">
                                                    </div>
                                                                                           
                                                </div>            
                                            
                                            </div>

                                            
                                            <div class="row">  


                                                <div class="col-md-6">

                                                    <div class="form-group">
                                                        <label>Annual Sales<span class="text-danger">*</span></label>
                                                        <input type="text" name="company_annual_sales" placeholder="Annual Sales" class="form-control">
                                                    </div>
                                                                                           
                                                </div>
           
                                            
                                            </div>



                                            
                                        </div>

                                    <!-- /company start details -->





                                    <!-- company work details -->

                                        <div class="col-md-6">

                                            <label>Work Details</label>

                                            <div class="row">  


                                                <div class="col-md-6">

                                                    <div class="form-group">
                                                        <label>Number Of Employees<span class="text-danger">*</span></label>
                                                        <input type="text" name="company_num_employees" placeholder="Number Of Employees" class="form-control">
                                                    </div>
                                                                                        
                                                </div>

                                                <div class="col-md-6">

                                                    <div class="form-group">
                                                        <label>Work Hours<span class="text-danger">*</span></label>
                                                        <input type="text" name="company_daily_work_hours" placeholder="Work Hours" class="form-control">
                                                    </div>
                                                                                        
                                                </div>            

                                            </div>

                                            <div class="row">  


                                                <div class="col-md-6">

                                                    <div class="form-group">
                                                        <label>Day Start At<span class="text-danger">*</span></label>
                                                        <input type="text" name="company_start_work_at" placeholder="Day Start At" class="form-control">
                                                    </div>
                                                                                        
                                                </div>

                                                <div class="col-md-6">

                                                    <div class="form-group">
                                                        <label>Day End At<span class="text-danger">*</span></label>
                                                        <input type="text" name="company_end_work_at" placeholder="Day End At" class="form-control">
                                                    </div>
                                                                                        
                                                </div>           

                                            </div>

                                            <div class="row">  

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Activation Day<span class="text-danger">*</span></label>
                                                        <select name="company_activation_day" data-placeholder="Activation Day" class="form-control form-control-select2 select2" data-fouc>
                                                            <option></option>
                                                            <option value="1">January</option>
                                                            <option value="2">February</option>
                                                            <option value="3">March</option>
                                                            <option value="4">April</option>
                                                            <option value="5">May</option>
                                                            <option value="6">June</option>
                                                            <option value="7">July</option>
                                                            <option value="8">August</option>
                                                            <option value="9">September</option>
                                                            <option value="10">October</option>
                                                            <option value="11">November</option>
                                                            <option value="12">December</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">

                                                    <div class="form-group">
                                                        <label>Overtime Hours<span class="text-danger">*</span></label>
                                                        <input type="text" name="company_overtime_threshold" placeholder="Overtime Hours" class="form-control">
                                                    </div>
                                                                                        
                                                </div>           

                                            </div>

                                            

                                            <div class="row">  


                                                <div class="col-md-12">

                                                    <div class="form-group">
                                                        <label>Payment Terms :</label>
                                                        <select data-placeholder="Payment Terms" name="company_payment_terms[]" multiple="multiple" class="form-control select-multiple-drag select2" data-fouc>
                                                            
                                                            <optgroup label="Payment Terms">
                                                            
                                                                <?php

                                                                while($row = mysqli_fetch_assoc($payment_terms)) {

                                                                ?>
                                                                    <option value="<?php echo $row["payment_term_id"]; ?>" data-icon="wordpress2"><?php echo $row["payment_name"]; ?></option>
                                                                <?php

                                                                    }

                                                                ?>
                                                            </optgroup>
                
                                                        </select>
                                                    </div>

                                                                                           
                                                </div>         
                                            
                                            </div>
                                        
                                        
                                        </div>
                                            
                                        

                                    <!-- /company work details -->

                                </div>

                            <!-- /company details -->					
                                    

						</fieldset>







						<h6>المجالات و التقنيات</h6>
						<fieldset>

                            <!-- company details -->

                                <div class="row">

                                    <!-- company start details -->                                   

                                        <div class="col-md-6">

                                            <label>المجالات</label>


                                            <div class="row">  


                                                <div class="col-md-12">

                                                    <div class="form-group">
                                                        <label>أنواع المنتجات</label>
                                                        <select data-placeholder="اختر أنواع المنتجات" name="company_product_range[]" multiple="multiple" class="form-control select-multiple-drag select2" data-fouc>
                                                            <optgroup label="المنتجات">
                                                                <option value=" " data-icon="wordpress2">اختر المنتجات</option>

                                                                <?php

                                                                while($row = mysqli_fetch_assoc($product_ranges)) {

                                                                ?>
                                                                    <option value="<?php echo $row["product_range_id"]; ?>" data-icon="wordpress2"><?php echo $row["product_range_name"]; ?></option>
                                                                <?php

                                                                    }

                                                                ?>
                                                            </optgroup>
                
                                                        </select>
                                                    </div>

                                                                                           
                                                </div>         
                                            
                                            </div>

                                            

                                            <div class="row">  


                                                <div class="col-md-12">

                                                    <div class="form-group">
                                                        <label>أنواع الأسواق</label>
                                                        <select data-placeholder="اختر أنواع الأسواق" name="company_key_markets[]" multiple="multiple" class="form-control select-multiple-drag select2" data-fouc>
                                                            
                                                            <optgroup label="الأسواق">
                                                                <option value=" " data-icon="wordpress2">اختر الأسواق</option>

                                                                <?php

                                                                while($row = mysqli_fetch_assoc($key_markets)) {

                                                                ?>
                                                                    <option value="<?php echo $row["key_market_id"]; ?>" data-icon="wordpress2"><?php echo $row["key_market_name"]; ?></option>
                                                                <?php

                                                                    }

                                                                ?>
                                                            </optgroup>
                
                                                        </select>
                                                    </div>

                                                                                           
                                                </div>         
                                            
                                            </div>


                                            <div class="row">  


                                                <div class="col-md-12">

                                                    <div class="form-group">
                                                        <label>أنواع التجار</label>
                                                        <select data-placeholder="اختر أنواع التجار" name="company_dealers_type[]" multiple="multiple" class="form-control select-multiple-drag select2" data-fouc>
                                                            
                                                            <optgroup label="التجار">
                                                                <option value=" " data-icon="wordpress2">اختر التجار</option>

                                                                <?php

                                                                while($row = mysqli_fetch_assoc($dealers_types)) {

                                                                ?>
                                                                    <option value="<?php echo $row["dealer_type_id"]; ?>" data-icon="wordpress2"><?php echo $row["dealer_type_name"]; ?></option>
                                                                <?php

                                                                    }

                                                                ?>
                                                            </optgroup>
                
                                                        </select>
                                                    </div>

                                                                                           
                                                </div>         
                                            
                                            </div>


                                            <div class="row">  


                                                <div class="col-md-12">

                                                    <div class="form-group">
                                                        <label>أنواع الزبائن</label>
                                                        <select data-placeholder="اختر أنواع الزبائن" name="company_key_customers[]" multiple="multiple" class="form-control select-multiple-drag select2" data-fouc>
                                                            
                                                            <optgroup label="الزبائن">
                                                                <option value=" " data-icon="wordpress2">اختر الزبائن</option>

                                                                <?php

                                                                while($row = mysqli_fetch_assoc($key_customers)) {

                                                                ?>
                                                                    <option value="<?php echo $row["key_customer_id"]; ?>" data-icon="wordpress2"><?php echo $row["key_customer_name"]; ?></option>
                                                                <?php

                                                                    }

                                                                ?>
                                                            </optgroup>
                
                                                        </select>
                                                    </div>

                                                                                           
                                                </div>         
                                            
                                            </div>

                                           


                                            
                                        </div>

                                    <!-- /company start details -->





                                    <!-- company work details -->

                                        <div class="col-md-6">

                                            <label>المواد و التقنيات</label>

                                            <div class="row">  


                                                <div class="col-md-12">

                                                    <div class="form-group">
                                                        <label> المواد المستخدمة</label>
                                                        <select data-placeholder="المواد المستخدمة" name="company_materials_used[]" multiple="multiple" class="form-control select-multiple-drag select2" data-fouc>
                                                            
                                                            <optgroup label="المواد المستخدمة">
                                                                <option value=" " data-icon="wordpress2">المواد المستخدمة</option>

                                                                <?php

                                                                while($row = mysqli_fetch_assoc($materials)) {

                                                                ?>
                                                                    <option value="<?php echo $row["material_id"]; ?>" data-icon="wordpress2"><?php echo $row["material_name"]; ?></option>
                                                                <?php

                                                                    }

                                                                ?>
                                                            </optgroup>
                
                                                        </select>
                                                    </div>

                                                                                           
                                                </div>         
                                            
                                            </div>

                                            <div class="row">  


                                                <div class="col-md-12">

                                                    <div class="form-group">
                                                        <label> التقنيات المستخدمة</label>
                                                        <select data-placeholder="التقنيات المستخدمة" name="company_techniques_used[]" multiple="multiple" class="form-control select-multiple-drag select2" data-fouc>
                                                            
                                                            <optgroup label="التقنيات المستخدمة">
                                                                <option value=" " data-icon="wordpress2">التقنيات المستخدمة</option>

                                                                <?php

                                                                while($row = mysqli_fetch_assoc($techniques)) {

                                                                ?>
                                                                    <option value="<?php echo $row["technique_id"]; ?>" data-icon="wordpress2"><?php echo $row["technique_name"]; ?></option>
                                                                <?php

                                                                    }

                                                                ?>
                                                            </optgroup>
                
                                                        </select>
                                                    </div>

                                                                                           
                                                </div>         
                                            
                                            </div>


                                            <div class="row">

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>الوقت اللازم لتوصيل العينة<span class="text-danger">*</span></label>
                                                        <input type="text" name="company_sample_lead_time" placeholder="الوقت اللازم لتوصيل العينة" class="form-control">
                                                    </div>                                                                                      
                                                    
                                                </div>
                                                
								        	</div>


                                            <div class="row">

                                                <div class="col-md-12">
                             
                                                    <div class="form-group">
                                                        <label>الوقت اللازم لتوصيل المنتج<span class="text-danger">*</span></label>
                                                        <input type="text" name="company_production_lead_time" placeholder="الوقت اللازم لتوصيل المنتج" class="form-control">
                                                    </div>                                                                                      
                                                    
                                                </div>
                                                
								        	</div>


                                            <div class="row">  


                                                <div class="col-md-12">

                                                    <div class="form-group">
                                                        <label>أقل كمية للطلب<span class="text-danger">*</span></label>
                                                        <input type="text" name="company_minimum_quantity" placeholder="أقل كمية للطلب" class="form-control">
                                                    </div>
                                                                                        
                                                </div>
          

                                            </div>

                                        
                                        </div>
                                            
                                        

                                    <!-- /company work details -->

                                </div>

                            <!-- /company details -->					
                                    

						</fieldset>












                    </form>
                    


                    </div>
                <!-- /basic responsive configuration -->




                </div>
                <!-- /left content -->


                <!-- Right sidebar component -->
                    <?php //include 'components/right_sidebar.php'; ?>
                <!-- /right sidebar component -->

            </div>
            <!-- /inner container -->

        </div>
        <!-- /content area -->


        <!-- Footer -->
            <?php include 'components/footer.php'; ?>
        <!-- /footer -->

    </div>
    <!-- /main content -->

</div>
   <!-- Page script -->
   <script>
      $(function () {
        //Initialize Select2 Elements
        $(".select2").select2();
        // Initialize with tags
        
        $(".datepicker-format").datepicker();

      });

      
</script>

</body>
</html>
