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
                            <h1 class="welcome-text">Edit Service: <span class="text-black fw-bold">Food and Drinks</span></h1>
                            <h3 class="welcome-sub-text">Prepare and provide the victuals as a package</h3>
                            
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
                            <a class="nav-link" href="tnc.php" aria-expanded="false" aria-controls="icons">
                                <i class="menu-icon mdi mdi-file-document"></i>
                                <span class="menu-title">Terms and Condition</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="faq.php" aria-expanded="false" aria-controls="icons">
                                <i class="menu-icon mdi mdi-help-circle-outline"></i>
                                <span class="menu-title">Help</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            
                <!-- Main Panel Body -->
                <div class="main-panel">
                


                <head>
    <title>Notification Using PHP AJAX</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <br /><br />
    <div class="container">
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">PHP AJAX </a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span
                                class="label label-pill label-danger count" style="border-radius:10px;"></span> <span
                                class="glyphicon glyphicon-bell" style="font-size:18px;"></span></a>
                        <ul class="dropdown-menu"></ul>
                    </li>
                </ul>
            </div>
        </nav>
        <br />
        <form method="post" id="comment_form">
            <div class="form-group">
                <label>Enter Subject</label>
                <input type="text" name="subject" id="subject" class="form-control">
            </div>
            <div class="form-group">
                <label>Enter Comment</label>
                <textarea name="comment" id="comment" class="form-control" rows="5"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" name="post" id="post" class="btn btn-info" value="Post" />
            </div>
        </form>

    </div>
</body>

</html>

<script>
    $(document).ready(function () {

        function load_unseen_notification(view = '') {
            $.ajax({
                url: "fetch.php",
                method: "POST",
                data: {
                    view: view
                },
                dataType: "json",
                success: function (data) {
                    $('.dropdown-menu').html(data.notification);
                    if (data.unseen_notification > 0) {
                        $('.count').html(data.unseen_notification);
                    }
                }
            });
        }

        load_unseen_notification();

        $('#comment_form').on('submit', function (event) {
            event.preventDefault();
            if ($('#subject').val() != '' && $('#comment').val() != '') {
                var form_data = $(this).serialize();
                $.ajax({
                    url: "insert.php",
                    method: "POST",
                    data: form_data,
                    success: function (data) {
                        $('#comment_form')[0].reset();
                        load_unseen_notification();
                    }
                });
            } else {
                alert("Both Fields are Required");
            }
        });

        $(document).on('click', '.dropdown-toggle', function () {
            $('.count').html('');
            load_unseen_notification('yes');
        });

        setInterval(function () {
            load_unseen_notification();;
        }, 5000);

    });
</script>
                    
                                
                                
<div class="content-wrapper">
                        
                        <div class="row">
                            
                            <div class="d-flex flex-row justify-content-lg-end mt-xl-5">
                            <button type="button" class="btn btn-primary btn-icon-text col-lg-2" aria-hidden="true"  data-bs-toggle="modal" data-bs-target="#fndModal">
                                    <i class="ti-plus btn-icon-prepend"></i>
                                    New Package
                                </button>
                            </div>
                            
                            <div class="col-lg-12 grid-margin stretch-card mt-xl-5">
                                <div class="card">
                                  <div class="card-body">     
                                    <h4 class="card-title">Packages</h4>
                                    


                                    <p class="card-description">
                                        Specialize in food and drinks. 
                                    </p>
                                    <div class="table-responsive">
                                      <table id="packageList" class="table table-hover">
                                        <thead>
                                          <tr>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Price</th>
                                            <th>Actions</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                            <script src="display_fnd.js?v=<?=$version?>"></script>
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                </div>
                              </div>
                        </div>
                    </div>
                    
                    <!-- Add Package -->
                    <div class="modal fade" id="fndModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Food and Drinks</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <form action="../Admin_Back_End/api/fnd_api/handle_addFND.php" method="POST">
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <input type="hidden" name="id" id="fndid"/>
                                            <div class="form-group">
                                                <label for="exampleInputUsername1">Package Name</label>
                                                <input type="text" name="name" class="form-control" id="exampleInputUsername1" placeholder="Shining Calories" required>
                                              </div>
                                              <div class="form-group">
                                                <label for="exampleInputEmail1">Package Description</label>
                                                <textarea class="form-control" name="desc" style="resize: vertical; height:auto;" rows="5" placeholder="KFC Chicken..." required></textarea>
                                              </div>
                                              <div class="form-group">
                                                <label for="exampleInputPassword1">Price (RM)</label>
                                                <input type="number" name="price" class="form-control" id="exampleInputPassword1" placeholder="150" required>
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
                    
                    
                    <!-- Edit Modal -->
                    <div class="modal fade" id="editPackageModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Edit Food Package</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <form action="../Admin_Back_End/api/fnd_api/handle_editFND.php" method="POST">
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <input type="hidden" name="id" id="editFnd" value=""/>
                                            
                                            <div class="form-group">
                                                <label for="exampleInputUsername1">Package Name</label>
                                                <input id="packName" type="text" name="name" class="form-control" placeholder="Shining Calories" required>
                                              </div>
                                              <div class="form-group">
                                                <label for="exampleInputEmail1">Package Description</label>
                                                <textarea id="packDesc" class="form-control" name="desc" style="resize: vertical; height:auto;" rows="5" placeholder="KFC Chicken..." required></textarea>
                                              </div>
                                              <div class="form-group">
                                                <label for="exampleInputPassword1">Price (RM)</label>
                                                <input id="packPrice" type="number" name="price" class="form-control"  placeholder="150" required>
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
                    
                    <!-- Delete Modal -->
                    <div class="modal fade" id="deletePackageModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Delete Package</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <form action="../Admin_Back_End/api/fnd_api/handle_deleteFND.php" method="POST">
                                    <div class="modal-body">
                                        <div class="mb-3 text-center">

                                            <input type="hidden" id="deleteFND" name="deleteFND" value=""/>

                                            <b><label class="form-text" id="deleteFNDName"></label></b>
                                            <div id="emailHelp" class="form-text text-center">This will delete the package from the system</br>Are you sure?</div>

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
                $(document).on('click', '.editPackage', function(){
                    var packageID = $(this).data('id');
                    var packageName = $(this).data('name');
                    var packageDesc = $(this).data('desc');
                    var packagePrice = $(this).data('price');

                    $('#editFnd').val(packageID);
                    $('#packName').val(packageName);
                    $('#packDesc').text(packageDesc);
                    $('#packPrice').val(packagePrice);
                });
            });
            
            $(document).ready(function(){
                $(document).on('click', '.deletePackage', function(){
                    var packageID = $(this).data('id');
                    var packageName = $(this).data('name');

                    $('#deleteFND').val(packageID);
                    $('#deleteFNDName').text(packageName);
                });
            });
        </script>
        
        <?php
        if(isset($_SESSION['createSuccess'])){ ?>
            <script>
                Swal.fire({
                icon: 'success',
                title: 'Package Created',
                text: 'You just created the Package'
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
                title: 'Package Updated',
                text: 'You just updated the Package'
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
                title: 'Package Deleted',
                text: 'You just deleted a package'
                });
            </script>
        <?php
            unset($_SESSION['deleteSuccess']);
        }
        ?>
    </body>
</html>

