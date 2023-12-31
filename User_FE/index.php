<?php
session_start();
include '../User_BE/config.php';
include '../User_BE/db_conn.php';

?>




<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
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
        <link rel="icon" href="../uploads/c4k Logo.jpg" />
        
        
        <title>Userdb</title>
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
                            <h1 class="welcome-text">Greetings, <span class="text-black fw-bold"><?=$_SESSION['name']?></span></h1>
                            
                            <h3 class="welcome-sub-text">Welcome to User Dashboard</h3>
                        </li>
                    </ul>

                    <!-- Admin Settings -->
                    <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                            <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                            <i class="icon-mail icon-lg"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="notificationDropdown">
                            <a class="dropdown-item py-3 border-bottom" href="notif.php">
                                <p class="mb-0 font-weight-medium float-left">You have new notifications </p>
                                <span class="badge badge-pill badge-primary float-right">View all</span>
                            </a>
                        </li>
                        <br>
                        <li class="nav-item dropdown d-none d-lg-block user-dropdown">
                            <a class="nav-link" id="UserDropdown" href="" data-bs-toggle="dropdown" aria-expanded="false">
                                <p class="mb-1 mt-3 font-weight-semibold"><?=$_SESSION['name']?></p>
                            </a>
                            
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                                <a class="dropdown-item" href="../Userlogin/logout.php"><i class="dropdown-item-icon mdi mdi-power text-primary me-2" href=""></i>Sign Out</a>
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
              <div class="content-wrapper">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="home-tab">
                      <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                        <ul class="nav nav-tabs" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link active border-0" id="home-tab" data-bs-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Overview</a>
                        </ul>
                      </div>
                      <div class="tab-content tab-content-basic">
                        <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview"> 
                            
                            
                            
                            <!-- Sales Line Chart -->
                            <div class="row">
                                <div class="col-lg-12 d-flex flex-column">
                                    <div class="row flex-grow">
                                        <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                                            <div class="card card-rounded">
                                                <div class="card-body">
                                                    <div class="d-sm-flex justify-content-between align-items-start">
                                                        <div>
                                                            <h4 class="card-title card-title-dash">Donation Line Chart</h4>
                                                        </div>
                                                        <div id="performance-line-legend"></div>
                                                    </div>
                                                    <div class="chartjs-wrapper mt-5">
                                                        <canvas id="performaneLine"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-lg-6 d-flex flex-column">
                                    <!-- Progress Ratio Doughnut Chart -->
                                    <div class="row flex-grow">
                                        <div class="col-12 grid-margin stretch-card">
                                            <div class="card card-rounded">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-12 my-auto">
                                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                                <h4 class="card-title card-title-dash">Donation Status</h4>
                                                            </div>
                                                            <canvas class="my-auto" id="doughnutChart" height="200"></canvas>
                                                            <div id="doughnut-chart-legend" class="mt-5 text-center "></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 d-flex flex-column">
                                    <div class="row">
                                        <div class="col-12 grid-margin stretch-card">
                                            <div class="card card-rounded">
                                                <div class="card-body">
                                                    <div class="d-sm-flex justify-content-between align-items-start">
                                                        <div>
                                                            <h4 class="card-title card-title-dash">Donation Status</h4>
                                                        </div>
                                                    </div>
                                                    <div class="table-responsive  mt-1">
                                                        <table class="table select-table">
                                                            <thead>
                                                                <tr>
                                                                    <th>no.</th>
                                                                    <th>Date</th>
                                                                    <th>Donation Id</th>
                                                                    <th>Amount</th>
                                                                    <th>Status</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                        <?php 
                                $i = 1;
                                $currentAcc = $_SESSION['name'];
                                $qry = $conn->query("SELECT o.*,concat(c.firstname,' ',c.lastname) as client from `orders` o inner join clients c on c.id = o.client_id 
                                where c.firstname = '$currentAcc' order by unix_timestamp(o.date_created) desc ");
                                while($row = $qry->fetch_assoc()):
                            ?>
                                <tr>
                                    <td><?php echo $i++ ?></td>
                                    
                                    <td><?php echo date("Y-m-d H:i",strtotime($row['date_created'])) ?></td>
                                    
                                    <td><a href="javascript:void(0)" class="view_order" data-id="<?php echo $row['id'] ?>"><?php echo md5($row['id']); ?></a></td>
                                    
                                    <td><?php echo number_format($row['amount']) ?> </td>
                                    
                                    <td class="text-center">
                                            <?php if($row['status'] == 0): ?>
                                                <span class="badge badge-light text-dark">Pending</span>
                                            <?php elseif($row['status'] == 1): ?>
                                                <span class="badge badge-primary">Packed</span>
                                            <?php elseif($row['status'] == 2): ?>
                                                <span class="badge badge-warning">Out for Delivery</span>
                                            <?php elseif($row['status'] == 3): ?>
                                                <span class="badge badge-success">Delivered</span>
                                            <?php else: ?>
                                                <span class="badge badge-danger">Cancelled</span>
                                            <?php endif; ?>
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
                            </div>
                            
                            
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
                
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <footer class="footer">
              <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Care4kids</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2023. All rights reserved.</span>
              </div>
            </footer>
            <!-- partial -->
          </div>
          <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
      </div>
      <!-- container-scroller -->

      
      <script src="../User_FE/admin_design/vendors/js/vendor.bundle.base.js"></script>
      <script src="../User_FE/admin_design/vendors/chart.js/Chart.min.js"></script>

      <!-- End plugin js for this page -->
      <!-- inject:js -->
      <script src="../User_FE/admin_design/js/off-canvas.js"></script>
      <script src="../User_FE/admin_design/js/hoverable-collapse.js"></script>
      <script src="../User_FE/admin_design/js/template.js"></script>
      <script src="../User_FE/admin_design/js/settings.js"></script>
      <!-- endinject -->
      <!-- Custom js for this page-->
      <script src="../User_FE/admin_design/js/jquery.cookie.js" type="text/javascript"></script>
      <script src="../User_FE/admin_js/performanceLine.js?v=<?=$version?>" type="text/javascript"></script>
      <script src="../User_FE/admin_js/doughnutChart.js?v=<?=$version?>" type="text/javascript"></script>
      <script src="../User_FE/admin_js/doughnutChart.js?v=<?=$version?>" type="text/javascript"></script>
      
      <!-- End custom js for this page-->
    </body>

</html>
<script>
    function cancel_book($id){
        start_loader()
        $.ajax({
            url:_base_url_+"classes/Master.php?f=update_book_status",
            method:"POST",
            data:{id:$id,status:2},
            dataType:"json",
            error:err=>{
                console.log(err)
                alert_toast("an error occured",'error')
                end_loader()
            },
            success:function(resp){
                if(typeof resp == 'object' && resp.status == 'success'){
                    alert_toast("Book cancelled successfully",'success')
                    setTimeout(function(){
                        location.reload()
                    },2000)
                }else{
                    console.log(resp)
                    alert_toast("an error occured",'error')
                }
                end_loader()
            }
        })
    }
    $(function(){
        $('.view_order').click(function(){
            uni_modal("Order Details","/charity/donation/admin/orders/view_order.php?view=user&id="+$(this).attr('data-id'),'large')
        })
        $('table').dataTable();

    })
</script>

