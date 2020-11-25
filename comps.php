

<?php

    include_once("db/dbconn.php");
    include_once("db/funcs.php");

    $table = "companies";
    $fields = array('*');
    $id_name = "company_id";
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

    <!-- Theme JS files -->
    <script src="../global_assets/js/plugins/tables/datatables/datatables.min.js"></script>
    <script src="../global_assets/js/plugins/tables/datatables/extensions/responsive.min.js"></script>
    <script src="../global_assets/js/plugins/forms/selects/select2.min.js"></script>


    <script src="../global_assets/js/demo_pages/datatables_responsive.js"></script>
    <script src="../global_assets/js/demo_pages/datatables_data_sources.js"></script>
    <!-- /theme JS files -->



    <script>



        // A $( document ).ready() block.
        $( document ).ready(function() {
            
            
            $(".delete_comp").click(function(e) {

                e.preventDefault();

                var hrf = $(this).attr('href');

                if(hrf != "#"){

                    if(hrf == "company_delete.php"){
                        hrf = "db/php/company_delete.php";
                        var target_tab_row = "#tab_row_" + $(this).attr('comp_id');
                        card_head = "الشركات";
                    }

                    
                    $.ajax({
                                    type: "POST",
                                    url: hrf,
                                    data: {"company_id": $(this).attr('comp_id')},
                                    success: function(msg){  
                                        //var compare = String(msg);
                                        alert(msg);
                                        var test = JSON.parse(msg);
                                        if(test[0] == "true"){
                                            alert("55");
                                            $(target_tab_row).remove();
                                        }
                                        else if(msg == "false"){
                                            alert("can't delete");
                                        }
                                    
                                    }
                                });
                        
                }


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

                            <table class="table datatable-responsive">
                                <thead>
                                    <tr>
                                        <th>Company Name</th>
                                        <th>Trading Name</th>
                                        <th>Owner</th>
                                        <th>Executive Director</th>
                                        <th>Category</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php

                                    if ($result) {

                                    // output data of each row
                                    while($row = mysqli_fetch_assoc($result)) {
 
                                ?>
                                    
                                    <tr id="tab_row_<?php echo $row["company_id"]; ?>">
                                        <td><?php echo $row["company_name"]; ?></td>
                                        <td><?php echo $row["company_trading_name"]; ?></td>
                                        <td><?php echo $row["company_owner"]; ?></td>
                                        <td><?php echo $row["company_name"]; ?></td>
                                        <td><span class="badge badge-success"><?php echo $row["company_cat"]; ?></span></td>
                                        <td class="text-center">
                                            <div class="list-icons">
                                                <div class="dropdown">
                                                    <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                        <i class="icon-menu9"></i>
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        
                                                        <a href="company_details.php" class="dropdown-item" comp_id="<?php echo $row["company_id"]; ?>"><i class="mi-pageview mr-3 mi-1x"></i></i>Show</a>
                                                        <a href="company_delete.php" class="dropdown-item delete_comp" comp_id="<?php echo $row["company_id"]; ?>"><i class="mi-delete mr-3 mi-1x"></i>Delete</a>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php

                                    }


                                    return $result;
                                    }

                                ?>     


                                </tbody>
                            </table>
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
	<!-- /page content -->

</body>
</html>
