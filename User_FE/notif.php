<?php
session_start();
include "../User_BE/api/project_api/dbcon.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"/>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"/>
        

        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.0.2/css/responsive.dataTables.min.css"></script>
        <!-- plugins:css -->
        <link rel="stylesheet" href="../User_FE/admin_design/vendors/feather/feather.css">
        <link rel="stylesheet" href="../User_FE/admin_design/vendors/mdi/css/materialdesignicons.min.css">
        <link rel="stylesheet" href="../User_FE/admin_design/vendors/ti-icons/css/themify-icons.css">
        <link rel="stylesheet" href="../User_FE/admin_design/vendors/typicons/typicons.css">
        <link rel="stylesheet" href="../User_FE/admin_design/vendors/simple-line-icons/css/simple-line-icons.css">
        <link rel="stylesheet" href="../User_FE/admin_design/vendors/css/vendor.bundle.base.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href='https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css' rel='stylesheet' type='text/css'>
        
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <link rel="stylesheet" href="../User_FE/admin_design/css/vertical-layout-light/style.css">
        <link rel="icon" href="../uploads/c4k Logo.jpg">
        
        <title>Care4kids</title>
        
        <style>
.paginate_button:hover
{
  background:none !important;
  border:none !important;
}
        </style>
        
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
                        <img src="../Images/coventco_white.jpg" alt="logo" />
                    </a>
                </div>
            </div>

            <!-- Greeting Bar -->
            <div class="navbar-menu-wrapper d-flex align-items-top"> 
                <ul class="navbar-nav">
                    <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
                        <h1 class="welcome-text">Greetings, <span class="text-black fw-bold"><?=$_SESSION['name']?></span></h1>
                        <h3 class="welcome-sub-text">Welcome to Care4kids Dashboard</h3>
                    </li>
                </ul>
                
                <!-- Admin Settings -->
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown d-none d-lg-block user-dropdown">
                        <a class="nav-link" id="UserDropdown" href="" data-bs-toggle="dropdown" aria-expanded="false">
                            <p class="mb-1 mt-3 font-weight-semibold"><?=$_SESSION['name']?></p>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                            <a class="dropdown-item" href="../Worker/logout.php"> <i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out</a>
                        </div>
                    </li>
                </ul>
                
                <!-- Expand Button -->
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>
        
          <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_settings-panel.html -->
            
            <!-- Sidebar & Colors Customization -->
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
                    <li class="nav-item nav-category"></li>
                    <li class="nav-item">
                        <a class="nav-link" href="notif.php" aria-expanded="false" aria-controls="ui-basic">
                            <i class="menu-icon mdi mdi-mail"></i>
                            <span class="menu-title">Notification</span>
                        </a>
                    </li>
                    <li class="nav-item nav-category"></li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#editservice" aria-expanded="false" aria-controls="form-elements">
                            <i class="menu-icon mdi mdi-card-text-outline"></i>
                            <span class="menu-title">Help</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="editservice">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="fnd.php">Food and Drinks</a></li>
                                <li class="nav-item"> <a class="nav-link" href="item.php">Items</a></li>
                                <li class="nav-item"> <a class="nav-link" href="http://localhost/charity/courier/index.php?page=track">Donation Tracking</a></li>
                                <li class="nav-item"> <a class="nav-link" href="conu.php">Contact Us</a></li>
                            </ul>
                        </div>
                        
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="event.php" aria-expanded="false" aria-controls="icons">
                            <i class="menu-icon mdi mdi-layers-outline"></i>
                            <span class="menu-title">Event</span>
                        </a>
                    </li>
                    
                    
                    
                    <li class="nav-item">
                        <a class="nav-link" href="donate.php" aria-expanded="false" aria-controls="icons">
                            <i class="menu-icon mdi mdi-file-document"></i>
                            <span class="menu-title">Donation</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="volunt.php" aria-expanded="false" aria-controls="icons">
                            <i class="menu-icon mdi mdi-account-multiple"></i>
                            <span class="menu-title">Volunteer</span>
                        </a>
                    </li>
                </ul>
            </nav>
            
            <!-- Main Panel Body -->
            
            <div class="container-fluid">
            <h3 class="text-center"><b>Notifications</b></h3>
            <hr class="mx-auto border-dark bg-opacity-100 my-2" style="width:50px; border-width:3px;">
            <?php 
            $task_query = $conn->query("SELECT *, COALESCE((SELECT CONCAT(`lastname`, ', ', `firstname`) FROM `users` 
            where `users`.id = `reminder_list`.`user_id`) , 'User Does Not Exist') as user_fullname FROM `reminder_list` 
            where ('".date('Y-m-d')."' BETWEEN `remind_from` and `remind_to` OR `remind_from` = '".date('Y-m-d')."' OR `remind_to` = '".date('Y-m-d')."') and `status` = 1 ");
            if($task_query->num_rows > 0):
                $i=1;
            ?>
            <div id="taskSlider">
                <div class="reminders">
                <?php while($row = $task_query->fetch_assoc()): ?>
                    <div class="p-1 w-100 reminders-item <?= $i == 1 ? "active" : "" ?>">
                        <div class="card rounded-0 card-outline card-navy">
                            <div class="card-header rounded-0">
                                <div class="card-title"><b><?= $row['user_fullname'] ?></b></div>
                            </div>
                            <div class="card-body rounded-0">
                                <div class="container-fluid">
                                    <h3 class="text-center"><b><?= $row['title'] ?></b></h3>
                                    <div class="truncate-3"><?= $row['description'] ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php $i++; ?>
                <?php endwhile; ?>
                </div>
            </div>
            <?php else: ?>
                <div class="text-center text-muted">No Task Reminder Today</div>
            <?php endif; ?>
  
                
        <!-- Main Panel Body 
                <div class="content-wrapper">
                    <div class="row flex-grow">
                        <div class="col-lg-12 d-flex flex-column">
                              <div class="card card-rounded">
                                    <div class="card-body">
                                        <table id="projectTable" class="table table-bordered table-striped mb-0 table-responsive" style="box-shadow: 2px 2px 10px #888888; width:100%; overflow-x: auto;">
                                            <thead>
                                                <tr align="center">
                                                    <th>Service ID</th>
                                                    <th>Task</th>
                                                    <th>Description</th>
                                                    <th>Person-In-Charge</th>
                                                    <th>Status</th>
                                                    <th>Progress Check</th>
                                                    <th>Progress Description</th>
                                                    <th>Quotation</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                
                <!-- Edit Modal -->
                <div class="modal fade" id="assignModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Task Assign</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                            <form action="../Admin_Back_End/api/project_api/handle_assignProject.php" method="POST">
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label">Employee</label>

                                        <input type="hidden" id="service" name="service" value=""/>

                                        <select class="form-select" aria-label="Default select example" name="username">
                                            <option id="selectedWorker"></option>
                                            <option>-</option>
                                            <!--MODAL POP UP FOR ASSIGN EMPLOYEE-->
                                            <?php
                                            $sql = "SELECT username FROM accounts WHERE NOT username = 'admin' AND NOT EXISTS "
                                                    . "(SELECT worker_name FROM service WHERE accounts.username=service.worker_name);";
                                            $result = $conn->query($sql);

                                            if ($result->num_rows > 0) {
                                                // output data of each row
                                                while($row = $result->fetch_assoc()) {
                                                    echo '<option>'.$row["username"].'</option>';
                                                }
                                            }
                                            ?>
                                        </select>
                                        <div id="emailHelp" class="form-text">Assign an employee for the task</div>

                                    </div>
                                </div>

                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Delete Modal -->
                <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Warning: Project Deletion</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                            <form action="../Admin_Back_End/api/project_api/handle_deleteProject.php" method="POST">
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label">Are you sure to delete this project?</label>

                                        <input type="hidden" id="deleteService" name="deleteService" value=""/>

                                        <b><p id="deleteServiceID"></p></b>
                                        <div id="emailHelp" class="form-text">Project cannot be return and will be deleted permanently!</div>

                                    </div>
                                </div>

                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-danger">Delete</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- View Progress Description Modal -->
                <div class="modal fade" id="progressModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Progress Description</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                            <div class="modal-body">
                                <div class="mb-3">

                                    <label id="progressText" class="form-label"></label>



                                </div>
                            </div>

                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                -->
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Covent: Your Event Planning Partner</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2022. All rights reserved.</span>
                    </div>
                </footer>
                <!-- partial -->
          </div>
          <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
      </div>
      <!-- container-scroller -->

      <?php
        if(isset($_SESSION['deleteSuccess'])){ ?>
            <script>
                Swal.fire({
                icon: 'success',
                title: 'Deleted',
                text: 'Project Deleted Successfully'
                });
            </script>
        <?php
            unset($_SESSION['deleteSuccess']);
        }
        ?>
        
        <?php
        if(isset($_SESSION['updateSuccess'])){ ?>
            <script>
                Swal.fire({
                icon: 'success',
                title: 'Task Updated',
                text: 'Task has been updated'
                });
            </script>
        <?php
            unset($_SESSION['updateSuccess']);
        }
        ?>
      
      
      <!-- Get the Service Details from the bootstrap modal when the "editBtn" or "deleteBtn" is triggered -->
    <!-- Set the value to the HTML input element and passed it to the form-->
    <script type="text/javascript">
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        // Close the dropdown if the user clicks outside of it
        window.onclick = function(e) {
          if (!e.target.matches('.dropbtn')) {
          var myDropdown = document.getElementById("myDropdown");
            if (myDropdown.classList.contains('show')) {
              myDropdown.classList.remove('show');
            }
          }
        }
        
        $(document).ready(function(){
            $(document).on('click', '.editBtn', function(){
                var serviceId = $(this).data('id');
                //var serviceId = $(this).closest('tr').find('#service_id').text();
                //var serviceId = $('#service_id').text();
                var workerName = $('#worker_name').text();

                $('#service').val(serviceId);
                $('#selectedWorker').val(workerName);
            });
        });

        $(document).ready(function(){
            $(document).on('click', '.deleteBtn', function(){
                //var serviceId = $(this).closest('tr').find('#service_id').text();
                var serviceId = $(this).data('id');
                $('#deleteService').val(serviceId);
                document.getElementById("deleteServiceID").innerHTML = "Service ID: "+ serviceId;
            });
        });

        $(document).ready(function(){
            $(document).on('click', '.viewProgressBtn', function(){
                var progress_desc = $(this).data('id');

                if(progress_desc === "-"){
                    $('#progressText').text("No update from the employee");
                }else{
                    $('#progressText').text(progress_desc);
                }


            });
        });

        $(document).ready(function(){
            var projectDataTable = $('#projectTable').DataTable({
                scrollX : true,
                'processing': true,
                'serverSide': true,
                'serverMethod': 'post',
                'ajax': {
                    'url':'dataTableAjax.php'
                },
                pageLength: 10,
                'columnDefs': [
                    {
                        "targets": 0, // your case first column
                        "className": "text-center",
                   },
                   {
                        "targets": 2, // your case first column
                        "className": "text-center",
                   },
                   {
                        "targets": 3, // your case first column
                        "className": "text-center",
                   },
                   {
                        "targets": 4, // your case first column
                        "className": "text-center",
                   },
                   {
                        "targets": 5, // your case first column
                        "className": "text-center",
                   },
                   {
                        "targets": 6, // your case first column
                        "className": "text-center",
                   },
                   {
                        "targets": 7, // your case first column
                        "className": "text-center",
                   },
                   {
                        "targets": 8, // your case first column
                        "className": "text-center",
                   },
                   {    "searchable": false, 
                            "targets": [6, 7, 8] 
                   },
                    {    "orderable": false,
                         "targets": [5, 6, 7, 8] 
                    }
                ],
                'columns': [
                    { data: 'service_id' },
                    { data: 'service_type' },
                    { data: 'service_desc' },
                    { data: 'worker_name' },
                    { data: 'project_status' },
                    { data: 'progress_check' },
                    { data: 'progress_desc' },
                    { data: 'quotation' },
                    { data: 'actions' }
                ]
            });
        });


      </script>
      
      
      

      <!-- End plugin js for this page -->
      <!-- inject:js -->
      <script src="../User_FE/admin_design/js/off-canvas.js"></script>
      <script src="../User_FE/admin_design/js/hoverable-collapse.js"></script>
      <script src="../User_FE/admin_design/js/template.js"></script>
      <script src="../User_FE/admin_design/js/settings.js"></script>
      <!-- endinject -->
      <!-- Custom js for this page-->
      <script src="../User_FE/admin_design/js/jquery.cookie.js" type="text/javascript"></script>
      <!-- End custom js for this page-->
    </body>

</html>

