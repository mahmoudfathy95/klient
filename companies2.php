
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
	<script src="../global_assets/js/plugins/forms/selects/select2.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../global_assets/js/demo_pages/datatables_advanced.js"></script>
	<!-- /theme JS files -->
    



<script>

$(function() {

    $("#company_delete").click(function(e) {

            e.preventDefault();

            var hrf = $(this).attr('href');
            alert(hrf);

                    
            


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

						<!-- Basic card -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Basic card</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">


                                <!-- Basic responsive configuration -->

                                    <table class="table table-bordered table-hover datatable-highlight" id="comps_table">
                                        <thead>
                                            <tr>
                                                <th>اسم الشركة</th>
                                                <th>الاسم التجارى</th>
                                                <th>مالك الشركة</th>
                                                <th>المدير التنفيذى</th>
                                                <th>نشاط الشركة</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        <?php

                                            if ($result) {
                                            // output data of each row
                                            
                                            while($row = mysqli_fetch_assoc($result)) {
                                                //echo json_encode(array_keys($row));
                                                //  echo "id: " . $row["id"]. " - username: " . $row["username"] . "<br>";


                                        ?>

                                            <tr id="tab_row_<?php echo $row["company_id"]; ?>">
                                                <td><?php echo $row["company_name"]; ?></td>
                                                <td><a href="#"><?php echo $row["company_trading_name"]; ?></a></td>
                                                <td><?php echo $row["company_owner"]; ?></td>
                                                <td><?php echo $row["company_name"]; ?></td>
                                                <td><span class="badge badge-success"><?php echo $row["company_cat"]; ?></span></td>

                                                <td class="text-center">
                                                    <div class="list-icons">
                                                        <div class="dropdown">
                                                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                                <i class="icon-menu9"></i>
                                                            </a>

                                                            <div class="dropdown-menu" id="comp_actions">

                                                                <a href="company_details.php" class="dropdown-item"><i class="mi-pageview mr-3 mi-1x"></i></i>عرض</a>
                                                                <a href="company_delete.php" class="dropdown-item" id="company_delete" comp_id="<?php echo $row["company_id"]; ?>"><i class="mi-delete mr-3 mi-1x"></i>حذف</a>
                                                                
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
				
			                	<!-- /basic responsive configuration -->               


                            </div>
						</div>
						<!-- /basic card -->



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
