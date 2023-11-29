<?php
session_start();
include '../User_BE/config.php';
include '../Back_End/db_conn.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <!-- plugins:css -->
        <link rel="stylesheet" href="../User_FE/admin_design/vendors/feather/feather.css">
        <link rel="stylesheet" href="../User_FE/admin_design/vendors/mdi/css/materialdesignicons.min.css">
        <link rel="stylesheet" href="../User_FE/admin_design/vendors/ti-icons/css/themify-icons.css">
        <link rel="stylesheet" href="../User_FE/admin_design/vendors/typicons/typicons.css">
        <link rel="stylesheet" href="../User_FE/admin_design/vendors/simple-line-icons/css/simple-line-icons.css">
        <link rel="stylesheet" href="../User_FE/admin_design/vendors/css/vendor.bundle.base.css">
        
        <!-- inject:css -->
        <link rel="stylesheet" href="../User_FE/admin_design/css/vertical-layout-light/style.css">
        <!-- endinject -->
        <link rel="icon" href="/User_BE/uploads/c4k Logo.jpg" />
        
        
        <title>C4kids</title>
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

                <!-- Greeting Bar -->
                <div class="navbar-menu-wrapper d-flex align-items-top"> 
                    <ul class="navbar-nav">
                        <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
                            <h1 class="welcome-text">Event: <span class="text-black fw-bold">Notification</span></h1>
                            <h3 class="welcome-sub-text"></h3>
                        </li>
                    </ul>

                    <!-- Admin Settings -->
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown d-none d-lg-block user-dropdown">
                            <a class="nav-link" id="UserDropdown" href="" data-bs-toggle="dropdown" aria-expanded="false">
                                <p class="mb-1 mt-3 font-weight-semibold"><?=$_SESSION['name']?></p>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                                <a class="dropdown-item" href="../Worker/logout.php"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out</a>
                            </div>
                        </li>
                    </ul>

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
                
                <div class="main-panel">
                    <html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scheduling</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="./Phpcalender/css/bootstrap.min.css">
    <link rel="stylesheet" href="./Phpcalender/fullcalendar/lib/main.min.css">
    <script src="./Phpcalender/js/jquery-3.6.0.min.js"></script>
    <script src="./Phpcalender/js/bootstrap.min.js"></script>
    <script src="./Phpcalender/fullcalendar/lib/main.min.js"></script>
    <style>
        :root {
            --bs-success-rgb: 71, 222, 152 !important;
        }

        html,
        body {
            height: 100%;
            width: 100%;
            font-family: Apple Chancery, cursive;
        }

        .btn-info.text-light:hover,
        .btn-info.text-light:focus {
            background: #000;
        }
        table, tbody, td, tfoot, th, thead, tr {
            border-color: #ededed !important;
            border-style: solid;
            border-width: 1px !important;
        }
    </style>
</head>

<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark bg-gradient" id="topNavBar">
        <div class="container">
            <a class="navbar-brand" href="">
            Event
            </a>
            
            <div>
                <b class="text-light"></b>
            </div>
        </div>
    </nav>
    <div class="container py-5" id="page-container">
        <div class="row">
            <div class="col-md-9">
                <div id="calendar"></div>
            </div>
            <div class="col-md-3">
                <div class="cardt rounded-0 shadow">
                    <div class="card-header bg-gradient bg-primary text-light">
                        <h5 class="card-title">Schedule Form</h5>
                    </div>
                    <div class="card-body">
                        <div class="container-fluid">
                            <form action="save_schedule.php" method="post" id="schedule-form">
                                <input type="hidden" name="id" value="">
                                <div class="form-group mb-2">
                                    <label for="title" class="control-label">Title</label>
                                    <input type="text" class="form-control form-control-sm rounded-0" name="title" id="title" required>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="description" class="control-label">Description</label>
                                    <textarea rows="3" class="form-control form-control-sm rounded-0" name="description" id="description" required></textarea>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="start_datetime" class="control-label">Start</label>
                                    <input type="datetime-local" class="form-control form-control-sm rounded-0" name="start_datetime" id="start_datetime" required>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="end_datetime" class="control-label">End</label>
                                    <input type="datetime-local" class="form-control form-control-sm rounded-0" name="end_datetime" id="end_datetime" required>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="text-center">
                            <button class="btn btn-primary btn-sm rounded-0" type="submit" form="schedule-form"><i class="fa fa-save"></i> Save</button>
                            <button class="btn btn-default border btn-sm rounded-0" type="reset" form="schedule-form"><i class="fa fa-reset"></i> Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Event Details Modal -->
    <div class="modal fade" tabindex="-1" data-bs-backdrop="static" id="event-details-modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-0">
                <div class="modal-header rounded-0">
                    <h5 class="modal-title">Schedule Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body rounded-0">
                    <div class="container-fluid">
                        <dl>
                            <dt class="text-muted">Title</dt>
                            <dd id="title" class="fw-bold fs-4"></dd>
                            <dt class="text-muted">Description</dt>
                            <dd id="description" class=""></dd>
                            <dt class="text-muted">Start</dt>
                            <dd id="start" class=""></dd>
                            <dt class="text-muted">End</dt>
                            <dd id="end" class=""></dd>
                        </dl>
                    </div>
                </div>
                <div class="modal-footer rounded-0">
                    <div class="text-end">
                        <button type="button" class="btn btn-primary btn-sm rounded-0" id="edit" data-id="">Edit</button>
                        <button type="button" class="btn btn-danger btn-sm rounded-0" id="delete" data-id="">Delete</button>
                        <button type="button" class="btn btn-secondary btn-sm rounded-0" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Event Details Modal -->

<?php 
$schedules = $conn->query("SELECT * FROM `schedule_list`");
$sched_res = [];
foreach($schedules->fetch_all(MYSQLI_ASSOC) as $row){
    $row['sdate'] = date("F d, Y h:i A",strtotime($row['start_datetime']));
    $row['edate'] = date("F d, Y h:i A",strtotime($row['end_datetime']));
    $sched_res[$row['id']] = $row;
}
?>
<?php 
if(isset($conn)) $conn->close();
?>
</body>
<script>
    var scheds = $.parseJSON('<?= json_encode($sched_res) ?>')
</script>
<script src="./Phpcalender/js/script.js"></script>

</html>

                    <div class="content-wrapper">
                        <div class="row" style="margin-top:2%; width:100%; padding:30px;">
                            
                            
                            
                        </div>
                    </div>
                    
                    <!-- Add Discount -->
                    <div class="modal fade" id="discountModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Discount</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <form action="../Admin_Back_End/api/discount_api/handle_addDiscount.php" method="POST">
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            
                                                <div class="form-group">
                                                    
                                                    <label>Discount Name</label>
                                                    <input type="text" class="form-control" name="name" required/>
                                                    
                                                    <label>Discount Status</label>
                                                    <select class="form-select" name="status" required>
                                                        <option>enabled</option>
                                                        <option>disabled</option>
                                                    </select>
                                                    
                                                    <label>Discount Percentage (%)</label>
                                                    <input type="number" name="percent" class="form-control" placeholder="1" required>
                                                </div>
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                      <button type="submit" class="btn btn-primary">Create</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                    
                    <!-- Edit Discount Modal -->
                    <div class="modal fade" id="editDiscountModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Edit Discount</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <form action="../Admin_Back_End/api/discount_api/handle_editDiscount.php" method="POST">
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <input type="hidden" name="discountid" id="editDiscount" value=""/>
                                            
                                                <div class="form-group">
                                                    <label>Discount Name</label>
                                                    <input id="discountName" type="text" class="form-control" name="name" required/>
                                                    
                                                    <label>Discount Percentage (%)</label>
                                                    <input id="discountPercent" type="number" name="percent" class="form-control" placeholder="1" required>
                                                    
                                                    <label>Discount Status</label>
                                                    <select id="discountStatus" class="form-select" name="status" required>
                                                        <option>enabled</option>
                                                        <option>disabled</option>
                                                    </select>
                                                    
                                                    
                                                </div>
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
                    
                    <!-- Delete Discount Modal -->
                    <div class="modal fade" id="deleteDiscountModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Delete Discount</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <form action="../Admin_Back_End/api/discount_api/handle_deleteDiscount.php" method="POST">
                                    <div class="modal-body">
                                        <div class="mb-3 text-center">

                                            <input type="hidden" id="deleteDiscount" name="deleteDiscount" value=""/>

                                            <b><label class="form-text" id="deleteDiscountName"></label></b>
                                            <div id="emailHelp" class="form-text text-center">This will delete the discount from the system</br>Are you sure?</div>

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
                    

                    <footer class="footer">
                        <div class="d-sm-flex justify-content-center justify-content-sm-between">
                            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Care4kids</span>
                            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2023. All rights reserved.</span>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
        

      
        <script src="../User_FE/admin_design/vendors/js/vendor.bundle.base.js"></script>
        <script src="../User_FE/admin_design/vendors/chart.js/Chart.min.js"></script>
        <script src="../User_FE/admin_design/js/off-canvas.js"></script>
        <script src="../User_FE/admin_design/js/hoverable-collapse.js"></script>
        <script src="../User_FE/admin_design/js/template.js"></script>
        <script src="../User_FE/admin_design/js/settings.js"></script>
        <script src="../User_FE/admin_design/js/jquery.cookie.js" type="text/javascript"></script>
        <script src="../User_FE/admin_js/performanceLine.js" type="text/javascript"></script>
        <script src="../User_FE/admin_js/doughnutChart.js?v=<?=$version?>" type="text/javascript"></script>
        
        <script type="text/javascript">
            $(document).ready(function(){
                $(document).on('click', '.editDiscount', function(){
                    var discountID = $(this).data('id');
                    var discountName = $(this).data('name');
                    var discountStatus = $(this).data('status');
                    var discountPercent = $(this).data('percent');

                    $('#editDiscount').val(discountID);
                    $('#discountName').val(discountName);
                    $('#discountStatus').val(discountStatus);
                    $('#discountPercent').val(discountPercent);
                });
            });
            
            $(document).ready(function(){
                $(document).on('click', '.deleteDiscount', function(){
                    var discountID = $(this).data('id');
                    var discountName = $(this).data('name');

                    $('#deleteDiscount').val(discountID);
                    $('#deleteDiscountName').text(discountName);
                });
            });
        </script>
        
        <?php
        if(isset($_SESSION['createSuccess'])){ ?>
            <script>
                Swal.fire({
                icon: 'success',
                title: 'Discount Created',
                text: 'You just created the Discount'
                });
            </script>
        <?php
            unset($_SESSION['createSuccess']);
        }
        ?>
        
        <?php
        if(isset($_SESSION['updateSuccess'])){ ?>
            <script>
                Swal.fire({
                icon: 'success',
                title: 'Discount Updated',
                text: 'You just updated the Discount'
                });
            </script>
        <?php
            unset($_SESSION['updateSuccess']);
        }
        ?>
            
        <?php
        if(isset($_SESSION['deleteSuccess'])){ ?>
            <script>
                Swal.fire({
                icon: 'success',
                title: 'Discount Deleted',
                text: 'You just deleted a Discount'
                });
            </script>
        <?php
            unset($_SESSION['deleteSuccess']);
        }
        ?>
    </body>
</html>

