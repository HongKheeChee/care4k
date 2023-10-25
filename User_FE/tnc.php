<?php
session_start();
include '../User_BE/config.php';
include '../User_BE/api/tnc_api/dbcon.php';
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
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"/>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="../Admin_Front_End/admin_design/vendors/feather/feather.css">
        <link rel="stylesheet" href="../Admin_Front_End/admin_design/vendors/mdi/css/materialdesignicons.min.css">
        <link rel="stylesheet" href="../Admin_Front_End/admin_design/vendors/ti-icons/css/themify-icons.css">
        <link rel="stylesheet" href="../Admin_Front_End/admin_design/vendors/typicons/typicons.css">
        <link rel="stylesheet" href="../Admin_Front_End/admin_design/vendors/simple-line-icons/css/simple-line-icons.css">
        <link rel="stylesheet" href="../Admin_Front_End/admin_design/vendors/css/vendor.bundle.base.css">
        
        <!-- inject:css -->
        <link rel="stylesheet" href="../Admin_Front_End/admin_design/css/vertical-layout-light/style.css">
        <!-- endinject -->
        <link rel="icon" href="../Images/logo.png" />
        
        
        <title>Covent</title>
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
                            <h1 class="welcome-text">Details on: <span class="text-black fw-bold">Donation</span></h1>
                            <h3 class="welcome-sub-text">Donation </h3>
                        </li>
                    </ul>

                    <!-- Admin Settings -->
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown d-none d-lg-block user-dropdown">
                            <a class="nav-link" id="UserDropdown" href="" data-bs-toggle="dropdown" aria-expanded="false">
                                <p class="mb-1 mt-3 font-weight-semibold"><?=$_SESSION['name']?></p>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                                <a class="dropdown-item" href="../Worker/logout.php"><i class="dropdown-item-icon mdi mdi-power text-primary me-2" href=""></i>Sign Out</a>
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
                                <span class="menu-title">Donation </span>
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
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Inkind donation list
                                            <a href="http://localhost/charity/donation/index.php" class="btn btn-primary float-end">Donation</a>
                                        </h4>
                                    </div>
                                    <div class="card-body" style="overflow:auto">

                                        
                                        <table class="table table-stripped text-dark">
                        <colgroup>
                            <col width="10%">
                            <col width="15">
                            <col width="25">
                            <col width="25">
                            <col width="15">
                        </colgroup>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>DateTime</th>
                                <th>Transaction ID</th>
                                <th>Amount</th>
                                <th>Order Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $i = 1;
                                $qry = $con->query("SELECT o.*,concat(c.firstname,' ',c.lastname) as client from `orders` o inner join clients c on c.id = o.client_id where o.client_id = '1' order by unix_timestamp(o.date_created) desc ");
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
                    
                    
                    <footer class="footer">
                        <div class="d-sm-flex justify-content-center justify-content-sm-between">
                            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Care4kids</span>
                            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2022. All rights reserved.</span>
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
        
        <script type="text/javascript">
            $(document).ready(function(){
                $(document).on('click', '.editItem', function(){
                    var itemID = $(this).data('id');
                    var itemName = $(this).data('name');
                    var itemPrice = $(this).data('price');

                    $('#editItem').val(itemID);
                    $('#itemName').val(itemName);
                    $('#itemPrice').val(itemPrice);
                });
            });
            
            $(document).ready(function(){
                $(document).on('click', '.deleteItem', function(){
                    var itemID = $(this).data('id');
                    var itemName = $(this).data('name');

                    $('#deleteItem').val(itemID);
                    $('#deleteItemName').text(itemName);
                });
            });
        </script>
        
        <?php
        if(isset($_SESSION['createSuccess'])){ ?>
            <script>
                Swal.fire({
                icon: 'success',
                title: 'Item Created',
                text: 'You just created the Item'
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
                title: 'Item Updated',
                text: 'You just updated the Item'
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
                title: 'Item Deleted',
                text: 'You just deleted a Item'
                });
            </script>
        <?php
            unset($_SESSION['deleteSuccess']);
        }
        ?>
    </body>
</html>

