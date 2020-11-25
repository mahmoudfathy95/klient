
<?php

$company_id = $_GET['company_id'];

echo $company_id;



?>



    

    <!DOCTYPE html>
<html lang="en">

<!-- head  -->
    <?php include 'components/head.php'; ?>

    <!-- Theme JS files -->
    <script src="../global_assets/js/plugins/media/fancybox.min.js"></script>

    <script>

        // A $( document ).ready() block.
        $( document ).ready(function() {
            
            // Image lightbox
            $('[data-popup="lightbox"]').fancybox({
                    padding: 3
                });
            // Initialize module
            // ------------------------------

            document.addEventListener('DOMContentLoaded', function() {
            CardsContent.init();
            });


        });


    </script>



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



                    <div class="card">
                        <div class="card-header header-elements-inline">
                            <h6 class="card-title">Company Information</h6>
                            <div class="header-elements">
                                <div class="list-icons">
                                    <a class="list-icons-item" data-action="collapse"></a>
                                    <a class="list-icons-item" data-action="reload"></a>
                                    <a class="list-icons-item" data-action="remove"></a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <ul class="nav nav-tabs nav-tabs-solid bg-slate border-0 nav-justified rounded">
                                <li class="nav-item"><a href="#colored-rounded-justified-tab1" class="nav-link rounded-left active" data-toggle="tab">Basic Information</a></li>
                                <li class="nav-item"><a href="#colored-rounded-justified-tab2" class="nav-link" data-toggle="tab">Communication Information</a></li>
                                <li class="nav-item"><a href="#colored-rounded-justified-tab3" class="nav-link" data-toggle="tab">Company Details</a></li>
                                <li class="nav-item"><a href="#colored-rounded-justified-tab4" class="nav-link" data-toggle="tab">Inactive</a></li>
                                
                            </ul>

                            <div class="tab-content">


                                <!-- tab 1 -->

                                    <div class="tab-pane fade show active" id="colored-rounded-justified-tab1">



                                        <div class="row">

                                            <div class="col-md-3">

                                                <!-- Below card header -->
                                                    <div class="card">
                                                        <div class="card-header header-elements-inline">
                                                            <h6 class="card-title">Company Logo</h6>
                                                            <div class="header-elements">
                                                                <span class="badge bg-info">Logo</span>
                                                            </div>
                                                        </div>

                                                        <div class="card-img-actions" style="width:130px;height:130px;margin:auto;">
                                                            <img class="img-fluid" src="../global_assets/images/placeholders/placeholder.jpg" alt="">
                                                            <div class="card-img-actions-overlay">
                                                                <a href="../global_assets/images/placeholders/placeholder.jpg" style="width:80px;padding:5px;" class="btn btn-outline bg-white text-white border-white border-2" data-popup="lightbox">
                                                                    Preview
                                                                </a>
                                                            
                                                            </div>
                                                        </div>

                                                        <div class="card-body">
                                                            <p class="card-text"><span>company name<span></p>
                                                        </div>

                                                        <div class="card-footer border-light">
                                                            test
                                                        </div>
                                                    </div>
                                                <!-- /below card header -->

                                            </div>

                                            <div class="col-md-3">

                                                <!-- Below card header -->
                                                    <div class="card">
                                                        <div class="card-header header-elements-inline">
                                                            <h6 class="card-title">Company Owner</h6>
                                                            <div class="header-elements">
                                                            
                                                            </div>
                                                        </div>

                                                        <div class="card-img-actions" style="width:130px;height:130px;margin:auto;">
                                                            <img class="img-fluid" src="../global_assets/images/placeholders/placeholder.jpg" alt="">
                                                            <div class="card-img-actions-overlay">
                                                                <a href="../global_assets/images/placeholders/placeholder.jpg" style="width:80px;padding:5px;" class="btn btn-outline bg-white text-white border-white border-2" data-popup="lightbox">
                                                                    Preview
                                                                </a>
                                                            
                                                            </div>
                                                        </div>

                                                        <div class="card-body">
                                                            <p class="card-text"><span>company owner name<span></p>
                                                        </div>

                                                        <div class="card-footer border-light">
                                                            test
                                                        </div>
                                                    </div>
                                                <!-- /below card header -->

                                            </div>

                                            <div class="col-md-6">

                                                <div class="card">
                                                    <div class="card-header header-elements-inline">
                                                        <h3 class="card-title">Basic Info</h3>
                                                        <div class="header-elements">
                                                            
                                                        </div>
                                                        
                                                    </div>

                                                    <div class="card-body">
                                                    
                                                        <div class="row col-md-12">

                                                                <div class="col-md-6">
                                                                
                                                                    
                                                                        <label>Trading Name</label>
                                                                        <div>
                                                                            <span class="badge badge-flat border-primary text-primary col-md-12" style="font-size:20pt;font-weight:bold;">text here</span>
                                                                        </div>
                                                                        
                                                                
                                                                </div>

                                                                <div class="col-md-6">

                                                                        <label>Company Establish Date</label>
                                                                        <div>
                                                                            <span class="badge badge-flat border-primary text-primary col-md-12" style="font-size:20pt;font-weight:bold;">text here</span>
                                                                        </div>
                                                                    
                                                                </div>
                                                            
                                                        </div>

                                                        <br>

                                                        <div class="row col-md-12">

                                                                <div class="col-md-6">
                                                                
                                                                        <label>Company Category</label>
                                                                        <div>
                                                                            <span class="badge badge-flat border-primary text-primary col-md-12" style="font-size:20pt;font-weight:bold;">text here</span>
                                                                        </div>
                                                                
                                                                </div>

                                                                <div class="col-md-6">

                                                                        <label>Executive Director</label>
                                                                        <div>
                                                                            <span class="badge badge-flat border-primary text-primary col-md-12" style="font-size:20pt;font-weight:bold;">text here</span>
                                                                        </div>
                                                                    
                                                                </div>
                                                            
                                                        </div>

                                                        <br>

                                                        <div class="row col-md-12">

                                                                <div class="col-md-6">
                                                                
                                                                        <label>Director</label>
                                                                        <div>
                                                                            <span class="badge badge-flat border-primary text-primary col-md-12" style="font-size:20pt;font-weight:bold;">text here</span>
                                                                        </div>
                                                                
                                                                </div>

                                                                <div class="col-md-6">

                                                                    <label>Auditor</label>
                                                                    <div>                                                            
                                                                        <span class="badge badge-flat border-primary text-primary col-md-12" style="font-size:20pt;font-weight:bold;">text here</span>
                                                                    </div>
                                                                    
                                                                </div>
                                                            
                                                        </div>

                                                    </div>
                                                    
                                                    
                                                </div>

                                            </div>

                                            <div class="col-md-12">
                
                                                <div class="form-group">
                                                    <label>Company Breif : </label>
                                                    <div class="badge badge-flat border-primary text-primary col-md-12" style="width:100%;height:auto;text-align:left;font-size:20pt;font-weight:bold;">kdhejb</div>

                                                </div>

                                            </div>
                                        

                                        </div>                                    
                                    
                                    
                                    
                                    </div>


                                <!-- tab 1 -->




                                <!-- tab 2 -->

                                    <div class="tab-pane fade" id="colored-rounded-justified-tab2">


                                        
                                        <div class="card">
                                            <div class="card-header header-elements-inline">
                                                <h3 class="card-title">Communication Details</h3>
                                                <div class="header-elements">
                                                    
                                                </div>
                                            </div>

                                            <div class="card-body">


                                                <!-- company_country & address -->  

                                                    <div class="row">
                                                            


                                                        <!-- company_location -->


                                                            <div class="col-md-6">


                                                                    <div class="row">

                                                                        <div class="col-md-4">
                                                                            <label>Country</label>
                                                                            <div>
                                                                                <span class="badge badge-flat border-primary text-primary col-md-12" style="font-size:20pt;font-weight:bold;">text here</span>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-4">
                                                                            <label>State</label>
                                                                            <div>
                                                                                <span class="badge badge-flat border-primary text-primary col-md-12" style="font-size:20pt;font-weight:bold;">text here</span>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-4">
                                                                            <label>City</label>
                                                                            <div>
                                                                                <span class="badge badge-flat border-primary text-primary col-md-12" style="font-size:20pt;font-weight:bold;">text here</span>
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                


                                                                
                                                            </div>

                                                        <!-- /company_location -->


                                                        <!-- company_address -->
                                                            
                                                            <div class="col-md-6">
                                                                <label>Company Address</label>
                                                                <div>
                                                                    <span class="badge badge-flat border-primary text-primary col-md-12" style="font-size:20pt;font-weight:bold;">text here</span>
                                                                </div>
                                                            </div>

                                                        <!-- /company_address -->

                                                    

                                                    </div>

                                                <!-- /company_country & address -->  

                                                <br>

                                                <!-- company comm details --> 
                                                    <div class="row">

                                                                            


                                                        <!-- company Phone & Fax --> 


                                                            <div class="col-md-6">

                                                                    <div class="row">

                                                                        <div class="col-md-6">
                                                                            <label>Company Phone</label>
                                                                            <div>
                                                                                <span class="badge badge-flat border-primary text-primary col-md-12" style="font-size:20pt;font-weight:bold;">text here</span>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <label>Company Fax</label>
                                                                            <div>
                                                                                <span class="badge badge-flat border-primary text-primary col-md-12" style="font-size:20pt;font-weight:bold;">text here</span>
                                                                            </div>
                                                                        </div>

                                                                    </div>                                
                                                                
                                                            </div>

                                                        <!-- company Phone & Fax --> 

                                                        <!-- company postal & zip --> 


                                                            <div class="col-md-6">


                                                                    <div class="row">

                                                                        <div class="col-md-6">
                                                                            <label>Postal Code</label>
                                                                            <div>
                                                                                <span class="badge badge-flat border-primary text-primary col-md-12" style="font-size:20pt;font-weight:bold;">text here</span>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <label>ZIP Code</label>
                                                                            <div>
                                                                                <span class="badge badge-flat border-primary text-primary col-md-12" style="font-size:20pt;font-weight:bold;">text here</span>
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                
                                                                
                                                            </div>

                                                        <!-- company postal & zip --> 


                                                    </div>

                                                <!-- /company comm details --> 


                                                <br>


                                                <!-- company website & email --> 

                                                    <div class="row">

                                                                
                                                        <!-- company website --> 

                                                            <div class="col-md-6">
                                                                <label>Company Website</label>
                                                                <div>
                                                                    <span class="badge badge-flat border-primary text-primary col-md-12" style="font-size:20pt;font-weight:bold;">text here</span>
                                                                </div>
                                                            </div>

                                                        <!-- companywebsite --> 


                                                        <!-- company email-->                          

                                                            <div class="col-md-6">
                                                                <label>Company E-Mail</label>
                                                                <div>
                                                                    <span class="badge badge-flat border-primary text-primary col-md-12" style="font-size:20pt;font-weight:bold;">text here</span>
                                                                </div>
                                                            </div>                

                                                        <!-- company email --> 


                                                    </div>

                                                <!-- /company website & email --> 







                                            </div>



                                        </div>
                                    
                                    </div>

                                <!-- /tab 2 -->











                                <div class="tab-pane fade" id="colored-rounded-justified-tab3">


                                    <div class="card">
                                        <div class="card-header header-elements-inline">
                                            <h3 class="card-title">Details</h3>
                                            <div class="header-elements">
                                                
                                            </div>
                                        </div>

                                        <div class="card-body">


                                            <!-- company comm details --> 
                                                <div class="row">

                                                                        


                                                    <!-- company Phone & Fax --> 


                                                        <div class="col-md-6">

                                                                <div class="row">

                                                                    <div class="col-md-6">
                                                                        <label>Experience Years</label>
                                                                        <div>
                                                                            <span class="badge badge-flat border-primary text-primary col-md-12" style="font-size:20pt;font-weight:bold;">text here</span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <label>Registeration Number</label>
                                                                        <div>
                                                                            <span class="badge badge-flat border-primary text-primary col-md-12" style="font-size:20pt;font-weight:bold;">text here</span>
                                                                        </div>
                                                                    </div>

                                                                </div>                                
                                                            
                                                        </div>

                                                    <!-- company Phone & Fax --> 

                                                    <!-- company postal & zip --> 


                                                        <div class="col-md-6">


                                                                <div class="row">

                                                                    <div class="col-md-6">
                                                                        <label>Tax No</label>
                                                                        <div>
                                                                            <span class="badge badge-flat border-primary text-primary col-md-12" style="font-size:20pt;font-weight:bold;">text here</span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <label>VAT NO</label>
                                                                        <div>
                                                                            <span class="badge badge-flat border-primary text-primary col-md-12" style="font-size:20pt;font-weight:bold;">text here</span>
                                                                        </div>
                                                                    </div>


                                                                </div>

                                                            
                                                            
                                                        </div>

                                                    <!-- company postal & zip --> 


                                                </div>

                                            <!-- /company comm details --> 

                                            <br>
                                            
                                            <!-- company comm details --> 

                                                <div class="row">

                                                    <!-- company Phone & Fax --> 


                                                        <div class="col-md-6">

                                                            <div class="row">

                                                                <div class="col-md-6">
                                                                    <label>Start Of Accounting Year</label>
                                                                    <div>
                                                                        <span class="badge badge-flat border-primary text-primary col-md-12" style="font-size:20pt;font-weight:bold;">text here</span>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <label>End Of Accounting Year</label>
                                                                    <div>
                                                                        <span class="badge badge-flat border-primary text-primary col-md-12" style="font-size:20pt;font-weight:bold;">text here</span>
                                                                    </div>
                                                                </div>

                                                            </div>                                

                                                        </div>

                                                    <!-- company Phone & Fax --> 

                                                    <!-- company postal & zip --> 


                                                        <div class="col-md-6">


                                                            <div class="row">

                                                                <div class="col-md-6">
                                                                    <label>Bank</label>
                                                                    <div>
                                                                        <span class="badge badge-flat border-primary text-primary col-md-12" style="font-size:20pt;font-weight:bold;">text here</span>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <label>Capital Stack</label>
                                                                    <div>
                                                                        <span class="badge badge-flat border-primary text-primary col-md-12" style="font-size:20pt;font-weight:bold;">text here</span>
                                                                    </div>
                                                                </div>

                                                            </div>



                                                        </div>

                                                    <!-- company postal & zip --> 


                                                </div>

                                            <!-- /company comm details --> 

                                            <br>


                                            <!-- company comm details --> 

                                                <div class="row">

                                                            


                                                    <!-- company Phone & Fax --> 


                                                        <div class="col-md-6">

                                                            <div class="row">

                                                                <div class="col-md-6">
                                                                    <label>Annual Sales</label>
                                                                    <div>
                                                                        <span class="badge badge-flat border-primary text-primary col-md-12" style="font-size:20pt;font-weight:bold;">text here</span>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <label>Number Of Employees</label>
                                                                    <div>
                                                                        <span class="badge badge-flat border-primary text-primary col-md-12" style="font-size:20pt;font-weight:bold;">text here</span>
                                                                    </div>
                                                                </div>

                                                            </div>                                

                                                        </div>

                                                    <!-- company Phone & Fax --> 

                                                    <!-- company postal & zip --> 


                                                        <div class="col-md-6">


                                                            <div class="row">

                                                                <div class="col-md-6">
                                                                    <label>Daily Work Hours</label>
                                                                    <div>
                                                                        <span class="badge badge-flat border-primary text-primary col-md-12" style="font-size:20pt;font-weight:bold;">text here</span>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <label>Daily Work Start At</label>
                                                                    <div>
                                                                        <span class="badge badge-flat border-primary text-primary col-md-12" style="font-size:20pt;font-weight:bold;">text here</span>
                                                                    </div>
                                                                </div>

                                                            </div>



                                                        </div>

                                                    <!-- company postal & zip --> 


                                                </div>

                                            <!-- /company comm details --> 

                                            <br>


                                            <!-- company comm details --> 

                                                <div class="row">

                                                            


                                                    <!-- company Phone & Fax --> 


                                                        <div class="col-md-6">

                                                            <div class="row">

                                                                <div class="col-md-6">
                                                                    <label>Day Work End At</label>
                                                                    <div>
                                                                        <span class="badge badge-flat border-primary text-primary col-md-12" style="font-size:20pt;font-weight:bold;">text here</span>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <label>Activation Day</label>
                                                                    <div>
                                                                        <span class="badge badge-flat border-primary text-primary col-md-12" style="font-size:20pt;font-weight:bold;">text here</span>
                                                                    </div>
                                                                </div>

                                                            </div>                                

                                                        </div>

                                                    <!-- company Phone & Fax --> 

                                                    <!-- company postal & zip --> 


                                                        <div class="col-md-6">


                                                            <div class="row">

                                                                <div class="col-md-6">
                                                                    <label>Overtime Hours</label>
                                                                    <div>
                                                                        <span class="badge badge-flat border-primary text-primary col-md-12" style="font-size:20pt;font-weight:bold;">text here</span>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <label>Payment Terms</label>
                                                                    <div>
                                                                        <span class="badge badge-flat border-primary text-primary col-md-12" style="font-size:20pt;font-weight:bold;">text here</span>
                                                                    </div>
                                                                </div>

                                                            </div>



                                                        </div>

                                                    <!-- company postal & zip --> 


                                                </div>

                                            <!-- /company comm details --> 





                                        </div>

                                    </div>
                               
                               
                               
                               
                               
                                </div>



















                                <div class="tab-pane fade" id="colored-rounded-justified-tab4">
                                    Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
                                </div>





                            </div>
                        </div>
                    </div>

						
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
	<!-- /page content -->

</body>
</html>

