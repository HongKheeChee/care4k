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
                            <img src="../Images/coventco_white.jpg" alt="logo" />
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
                            <h1 class="welcome-text">Edit Service: <span class="text-black fw-bold">Decoration</span></h1>
                            <h3 class="welcome-sub-text">Beautify with exciting decorations</h3>
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
                                <span class="menu-title">Discount</span>
                            </a>
                        </li>
                        <li class="nav-item nav-category">Company Management</li>
                        <li class="nav-item">
                            <a class="nav-link" href="employee.php" aria-expanded="false" aria-controls="auth">
                                <i class="menu-icon mdi mdi-account-circle-outline"></i>
                                <span class="menu-title">Employees</span>
                            </a>
                        </li>
                        <li class="nav-item nav-category">Information Editor</li>
                        <li class="nav-item">
                            <a class="nav-link" href="tnc.php">
                                <i class="menu-icon mdi mdi-file-document"></i>
                                <span class="menu-title">Terms and Condition</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="faq.php">
                                <i class="menu-icon mdi mdi-help-circle-outline"></i>
                                <span class="menu-title">Help</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            
                <!-- Main Panel Body -->
                <div class="main-panel">
                    <div class="content-wrapper">
                        <div class="row">
                            <div class="d-flex flex-row justify-content-lg-end mt-xl-5">
                                <button type="button" class="btn btn-primary btn-icon-text col-lg-2" aria-hidden="true"  data-bs-toggle="modal" data-bs-target="#decoModal">
                                    <i class="ti-plus btn-icon-prepend"></i>
                                    New Decoration
                                </button>
                            </div>
                            
                            <div class="col-lg-12 grid-margin stretch-card mt-xl-5">
                                <div class="card">
                                  <div class="card-body">
                                    <h4 class="card-title">Decorations</h4>
                                    <p class="card-description">
                                        Materials and Vibes 
                                    </p>
                                    <div class="table-responsive">
                                      <table id="DecoList" class="table table-hover">
                                        <thead>
                                          <tr>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Price</th>
                                            <th>Actions</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                            <script src="display_deco.js?v=<?=$version?>"></script>
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                </div>
                              </div>
                        </div>
                    </div>
                    
                    <!-- Add Deco Modal -->
                    <div class="modal fade" id="decoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Decorations for Event</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <form action="../Admin_Back_End/api/deco_api/handle_addDeco.php" method="POST">
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <input type="hidden" name="decoid" id="decoid"/>
                                            <div class="form-group">
                                                <label for="exampleInputUsername1">Decoration Name</label>
                                                <input type="text" name="name" class="form-control" placeholder="Halloween Theme" required>
                                              </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Decoration Description</label>
                                                <textarea class="form-control" name="desc" style="resize: vertical; height:auto;" rows="5" placeholder="Dark Lights" required></textarea>
                                              </div>
                                              <div class="form-group">
                                                <label for="exampleInputPassword1">Price (RM)</label>
                                                <input type="number" name="price" class="form-control" placeholder="1" required>
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
                    
                    
                    <!-- Edit Deco Modal -->
                    <div class="modal fade" id="editDecoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Edit Decoration</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <form action="../Admin_Back_End/api/deco_api/handle_editDeco.php" method="POST">
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <input type="hidden" name="id" id="editDeco" value=""/>
                                            
                                            <div class="form-group">
                                                <label for="exampleInputUsername1">Decoration Name</label>
                                                <input id="decoName" type="text" name="name" class="form-control" placeholder="Halloween Theme" required>
                                              </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Decoration Description</label>
                                                <textarea class="form-control" id="decoDesc" name="desc" style="resize: vertical; height:auto;" rows="5" placeholder="Purple Light" required></textarea>
                                              </div>
                                              <div class="form-group">
                                                <label for="exampleInputPassword1">Price (RM)</label>
                                                <input id="decoPrice" type="number" name="price" class="form-control"  placeholder="1" required>
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
                    
                    <!-- Delete Deco Modal -->
                    <div class="modal fade" id="deleteDecoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Delete Decorations</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <form action="../Admin_Back_End/api/deco_api/handle_deleteDeco.php" method="POST">
                                    <div class="modal-body">
                                        <div class="mb-3 text-center">
                                            <input type="hidden" id="deleteDeco" name="deleteDeco" value=""/>
                                            <b><label class="form-text" id="deleteDecoName"></label></b>
                                            <div id="emailHelp" class="form-text text-center">This will delete the item from the system</br>Are you sure?</div>

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
                            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Covent: Your Event Planning Partner</span>
                            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2022. All rights reserved.</span>
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
                $(document).on('click', '.editDeco', function(){
                    var decoID = $(this).data('id');
                    var decoName = $(this).data('name');
                    var decoDesc = $(this).data('desc');
                    var decoPrice = $(this).data('price');

                    $('#editDeco').val(decoID);
                    $('#decoDesc').val(decoDesc);
                    $('#decoName').val(decoName);
                    $('#decoPrice').val(decoPrice);
                });
            });
            
            $(document).ready(function(){
                $(document).on('click', '.deleteDeco', function(){
                    var decoID = $(this).data('id');
                    var decoName = $(this).data('name');

                    $('#deleteDeco').val(decoID);
                    $('#deleteDecoName').text(decoName);
                });
            });
        </script>
        
        <?php
        if(isset($_SESSION['createSuccess'])){ ?>
            <script>
                Swal.fire({
                icon: 'success',
                title: 'Decoration Created',
                text: 'You just created the Decoration'
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
                title: 'Decoration Updated',
                text: 'You just updated the Decoration'
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
                title: 'Decoration Deleted',
                text: 'You just deleted a Decoration'
                });
            </script>
        <?php
            unset($_SESSION['deleteSuccess']);
        }
        ?>
    </body>
</html>

