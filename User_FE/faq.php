<?php
session_start();
include '../User_BE/config.php';
include '../User_BE/api/Faq/dbcon.php';
include '../User_BE/api/Faq/message.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <!-- plugins:css -->
        <link rel="stylesheet" href="../Admin_Front_End/admin_design/vendors/feather/feather.css">
        <link rel="stylesheet" href="../Admin_Front_End/admin_design/vendors/mdi/css/materialdesignicons.min.css">
        <link rel="stylesheet" href="../Admin_Front_End/admin_design/vendors/ti-icons/css/themify-icons.css">
        <link rel="stylesheet" href="../Admin_Front_End/admin_design/vendors/typicons/typicons.css">
        <link rel="stylesheet" href="../Admin_Front_End/admin_design/vendors/simple-line-icons/css/simple-line-icons.css">
        <link rel="stylesheet" href="../Admin_Front_End/admin_design/vendors/css/vendor.bundle.base.css">
        
        <!-- inject:css -->
        <link rel="stylesheet" href="../Admin_Front_End/admin_design/css/vertical-layout-light/style.css">
        <!-- endinject -->
        <link rel="icon" href="/User_BE/uploads/c4k Logo.jpg" />
        
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        
        
        <title>volunteer</title>
    </head>
    <body>
        <div class="container-scroller">
          
            <!--Navigation Bar -->
            <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
                <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
                    <!-- Expand Button -->
                    <div class="me-3">
                        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
                            <span class="icon-menu"></span>
                        </button>
                    </div>

                    <div>
                        <a class="navbar-brand brand-logo" href="index.php">
                            <img src="../uploads/c4k Logo.jpg" alt="logo" />
                        </a>
                        <a class="navbar-brand brand-logo-mini" href="index.php">
                            <img src="../uploads/c4k Logo.jpg" alt="logo" />
                        </a>
                    </div>
                </div>

                

                     
                     
                    <style>
.dropbtn {
  background-color: #3498DB;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #2980B9;
}

.dropdown {
    float: right;
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
   right: 0;
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
</style>
</head>
<body>

<h2></h2>
<p></p>

<div class="dropdown">
  <button onclick="myFunction()" class="dropbtn"><?=$_SESSION['name']?></button>
  <div id="myDropdown" class="dropdown-content">
    <a href="../Worker/logout.php">Logout</a>
    
  </div>
</div>

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

                    <!-- Expand Button -->
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
                        <span class="mdi mdi-menu"></span>
                    </button>
                </div>
            </nav>
            
            <div class="container-fluid page-body-wrapper">
                <div class="theme-setting-wrapper">
                    <div id="settings-trigger"><i class="ti-settings"></i></div>
                    <div id="theme-settings" class="settings-panel">
                        <i class="settings-close ti-close"></i>
                        <p class="settings-heading">SIDEBAR SKINS</p>
                        <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border me-3"></div>Light</div>
                        <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border me-3"></div>Dark</div>
                        <p class="settings-heading mt-2">HEADER SKINS</p>
                        <div class="color-tiles mx-0 px-4">
                            <div class="tiles success"></div>
                            <div class="tiles warning"></div>
                            <div class="tiles danger"></div>
                            <div class="tiles info"></div>
                            <div class="tiles dark"></div>
                            <div class="tiles default"></div>
                      </div>
                    </div>
                </div>
            
                <!--Left Sidebar-->
                <nav class="sidebar sidebar-offcanvas" id="sidebar">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">
                                <i class="mdi mdi-grid-large menu-icon"></i>
                                <span class="menu-title">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item nav-category">Projects</li>
                        <li class="nav-item">
                            <a class="nav-link" href="projects.php" aria-expanded="false" aria-controls="ui-basic">
                                <i class="menu-icon mdi mdi-floor-plan"></i>
                                <span class="menu-title">Manage Tasks</span>
                            </a>
                        </li>
                        <li class="nav-item nav-category">Service Management</li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="collapse" href="#editservice" aria-expanded="false" aria-controls="form-elements">
                                <i class="menu-icon mdi mdi-card-text-outline"></i>
                                <span class="menu-title">Edit Service</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="collapse" id="editservice">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item"> <a class="nav-link" href="fnd.php">Food and Drinks</a></li>
                                    <li class="nav-item"> <a class="nav-link" href="item.php">Items</a></li>
                                    <li class="nav-item"> <a class="nav-link" href="decoration.php">Decorations</a></li>
                                    <li class="nav-item"> <a class="nav-link" href="fun.php">Fun and Entertainment</a></li>
                                </ul>
                            </div>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="discount.php" aria-expanded="false" aria-controls="icons">
                                <i class="menu-icon mdi mdi-layers-outline"></i>
                                <span class="menu-title">Event</span>
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="tnc.php" aria-expanded="false" aria-controls="icons">
                                <i class="menu-icon mdi mdi-file-document"></i>
                                <span class="menu-title">Donation</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="faq.php" aria-expanded="false" aria-controls="icons">
                                <i class="menu-icon mdi mdi-help-circle-outline"></i>
                                <span class="menu-title">Volunteer</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            
                <!-- Main Panel Body -->
                <div class="main-panel">
                    <div class="content-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Volunteer
                                                <a href="http://localhost/charity/employ/index.php" class="btn btn-primary float-end">Volunteer</a>
                                            </h4>
                                        </div>
                                        <div class="card-body" style="overflow: auto">
                                            
                                            
                                            <table class="table table-bordered table-hover">
							<colgroup>
								<col width="10%">
								<col width="30%">
								<col width="20%">
								<col width="30%">
							</colgroup>
							<thead>
								<tr>
									<th class="text-center">#</th>
									<th class="text-center">Applicant Information</th>
									<th class="text-center">Status</th>
									<th class="text-center">Action</th>
                                                                        <th class="text-center">Date</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								$i = 1;
								$stats = $con->query("SELECT * FROM recruitment_status order by id asc");
								$stat_arr[0] = "New";
								while ($row = $stats->fetch_assoc()) {
									$stat_arr[$row['id']] = $row['status_label'];
								}
								$awhere = '';
								if(isset($_GET['pid']) && $_GET['pid'] >= 0){
									$awhere = " where a.process_id = '".$_GET['pid']."' ";
								}
								if(isset($_GET['position_id']) && $_GET['position_id'] > 0){
									if(empty($awhere))
									$awhere = " where a.position_id = '".$_GET['position_id']."' ";
									else
									$awhere .= " and a.position_id = '".$_GET['position_id']."' ";

								}
								$application = $con->query("SELECT a.*,v.position FROM application a inner join vacancy v on v.id = a.position_id where a.position_id = '7' $awhere order by a.id asc");
								while($row=$application->fetch_assoc()):
								?>
								<tr>
									<td class="text-center"><?php echo $i++ ?></td>
									<td class="">
										<p>Name : <b><?php echo ucwords($row['lastname'].', '.$row['firstname'].' '.$row['middlename']) ?></b></p>
										<p>Applied for : <b><?php echo $row['position'] ?></b></p>
									</td>
									<td class="text-center">
										<?php echo $stat_arr[$row['process_id']] ?>
									</td>
									<td class="text-center">
										<button class="btn btn-sm btn-primary view_application" type="button" data-id="<?php echo $row['id'] ?>" >View</button>
										<button class="btn btn-sm btn-primary edit_application" type="button" data-id="<?php echo $row['id'] ?>" >Edit</button>
										<button class="btn btn-sm btn-danger delete_application" type="button" data-id="<?php echo $row['id'] ?>">Delete</button>
									</td>
                                                                        <td class="text-center">
										<?php echo $row['date_created'] ?>
									</td>
								</tr>
								<?php endwhile; ?>
							</tbody>
						</table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <footer class="footer">
                        <div class="d-sm-flex justify-content-center justify-content-sm-between">
                            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Care4kids</span>
                            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2023. All rights reserved.</span>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
      
        <script src="../Admin_Front_End/admin_design/vendors/js/vendor.bundle.base.js"></script>
        <script src="../Admin_Front_End/admin_design/vendors/chart.js/Chart.min.js"></script>
        <script src="../Admin_Front_End/admin_design/js/off-canvas.js"></script>
        <script src="../Admin_Front_End/admin_design/js/hoverable-collapse.js"></script>
        <script src="../Admin_Front_End/admin_design/js/template.js"></script>
        <script src="../Admin_Front_End/admin_design/js/settings.js"></script>
        <script src="../Admin_Front_End/admin_design/js/jquery.cookie.js" type="text/javascript"></script>
        <script src="../Admin_Front_End/admin_js/performanceLine.js" type="text/javascript"></script>
        <script src="../Admin_Front_End/admin_js/doughnutChart.js?v=<?=$version?>" type="text/javascript"></script>
    </body>
</html>

<script>
	$('.filter_status').each(function(){
		if($(this).attr('data-id') == '<?php echo $pid ?>')
			$(this).addClass('btn-primary')
		else
			$(this).addClass('btn-info')

	})
	$('table').dataTable()
	$("#new_application").click(function(){
		uni_modal("New Application","manage_application.php","mid-large")
	})
	$(".edit_application").click(function(){
		uni_modal("Edit Application","manage_application.php?id="+$(this).attr('data-id'),"mid-large")
	})
        
	$(".view_application").click(function(){
		uni_modal("","view_application.php?id="+$(this).attr('data-id'),"mid-large")
	})

	$('.delete_application').click(function(){
		_conf("Are you sure to delete this Applicant?","delete_application",[$(this).attr('data-id')])
	})
	function displayImg(input,_this) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
        	$('#cimg').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}
$('.filter_status').click(function(){
	location.href = "index.php?page=applications&pid="+$(this).attr('data-id')+'&position_id=<?php echo $position_id ?>'
})
$('#position_filter').change(function(){
	location.href = "index.php?page=applications&position_id="+$(this).val()+'&pid=<?php echo $pid ?>'
})
	function delete_application($id){
		start_load()
		$.ajax({
			url:'ajax.php?action=delete_application',
			method:'POST',
			data:{id:$id},
			success:function(resp){
				if(resp==1){
					alert_toast("Data successfully deleted",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
			}
		})
	}
</script>

