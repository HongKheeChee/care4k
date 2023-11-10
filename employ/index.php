<!DOCTYPE html>
<html lang="en">
    <?php
    session_start();
    include('admin/db_connect.php');
    ob_start();
    $query = $conn->query("SELECT * FROM system_settings limit 1")->fetch_array();
     foreach ($query as $key => $value) {
      if(!is_numeric($key))
        $_SESSION['setting_'.$key] = $value;
    }
    ob_end_flush();
    include('header.php');

	
    ?><!DOCTYPE html>


    <!--
    Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
    Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
    -->
    <html>
        <head>
            <meta charset="UTF-8">
            <title>Care4kids</title>
        </head>
        <body>
            <?php
            // put your code here
            ?>
        </body>
    </html>
    <!doctype html>
    <html lang="en">
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <meta name="description" content="">
        <meta name="author" content="">
    
        <title>Kind Heart Charity - Free Bootstrap 5.2.2 CSS Template</title>
    
        <!-- CSS FILES -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
    
        <link href="css/bootstrap-icons.css" rel="stylesheet">
    
        <link href="css/templatemo-kind-heart-charity.css" rel="stylesheet">
        <!--
    
    TemplateMo 581 Kind Heart Charity
    
    https://templatemo.com/tm-581-kind-heart-charity
    
    -->
    
    </head>
    
    <body id="section_1">
    
        <header class="site-header">
            <div class="container">
                <div class="row">
    
                    <div class="col-lg-8 col-12 d-flex flex-wrap">
                        <p class="d-flex me-4 mb-0">
                            <i class="bi-geo-alt me-2"></i>
                            Penang, Malaysia
                        </p>
    
                        <p class="d-flex mb-0">
                            <i class="bi-envelope me-2"></i>
    
                            <a href="mailto:info@company.com">
                                info@company.com
                            </a>
                        </p>
                    </div>
    
                    <div class="col-lg-3 col-12 ms-auto d-lg-block d-none">
                        <ul class="social-icon">
                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-twitter"></a>
                            </li>
    
                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-facebook"></a>
                            </li>
    
                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-instagram"></a>
                            </li>
    
                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-youtube"></a>
                            </li>
    
                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-whatsapp"></a>
                            </li>
                        </ul>
                    </div>
    
                </div>
            </div>
        </header>
    
        <nav class="navbar navbar-expand-lg bg-light shadow-lg">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img src="images/c4k logo.jpg" class="logo img-fluid" alt="Kind Heart Charity">
                    <span>
                        Care4kids
                        <small>Penang</small>
                    </span>
                </a>
    
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
    
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="/charity/indexpg.php">Home</a>
                        </li>
    
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="/charity/indexpg.php#section_2">Abouts</a>
                        </li>
    
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="/charity/indexpg.php#section_3">Causes</a>
                        </li>
    
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="/charity/indexpg.php#section_4">Volunteer</a>
                        </li>
    
                        <li class="nav-item dropdown">
                            <a class="nav-link click-scroll dropdown-toggle" href="#section_5"
                                id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">News</a>
    
                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                <li><a class="dropdown-item" href="news.html">News Listing</a></li>
    
                                <li><a class="dropdown-item" href="news-detail.html">News Detail</a></li>
                            </ul>
                        </li>
    
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="/charity/events.php">Contact</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="/charity/donation/index.php">Daily Needs</a>
                        </li>
    
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="http://localhost/charity/?p=articles&t=e4da3b7fbbce2345d7772b0674a318d5">Shelter</a>
                        </li>
    
                        <li class="nav-item ms-3">
                            <a class="nav-link custom-btn custom-border-btn btn" href="/charity/Userlogin/login.php" id="donation" >Login</a>
                            
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    

    <style>
    	header.masthead {
		  background: url(admin/assets/img/<?php echo $_SESSION['setting_cover_img'] ?>);
		  background-repeat: no-repeat;
		  background-size: cover;
		}
    </style>
    <style>
    body {
  background-image: url('./admin/assets/img/Colourful hill.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
}
</style>
    <body id="page-top">
        <!-- Navigation-->
        <div class="toast" id="alert_toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-body text-white">
        </div>
      </div>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
                
<style>
/* Style The Dropdown Button */
.dropbtn {
  background-color: #0d1f0d;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}
</style>




                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        
                        
                     
                    </ul>
                </div>
            </div>
        </nav>
       
        <?php 
        $page = isset($_GET['page']) ?$_GET['page'] : "home";
        include $page.'.php';
        ?>
       

<div class="modal fade" id="confirm_modal" role='dialog'>
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title">Confirmation</h5>
      </div>
      <div class="modal-body">
        <div id="delete_content"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id='confirm' onclick="">Continue</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="uni_modal" role='dialog'>
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title"></h5>
      </div>
      <div class="modal-body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id='submit' onclick="$('#uni_modal form').submit()">Save</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="uni_modal_right" role='dialog'>
    <div class="modal-dialog modal-full-height  modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span class="fa fa-arrow-righ t"></span>
        </button>
      </div>
      <div class="modal-body">
      </div>
      </div>
    </div>
  </div>
  <div id="preloader"></div>
        <footer class="bg-light py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="mt-0">Contact us</h2>
                        <hr class="divider my-4" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
                        <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
                        <div><?php echo $_SESSION['setting_contact'] ?></div>
                    </div>
                    <div class="col-lg-4 mr-auto text-center">
                        <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
                        <!-- Make sure to change the email address in BOTH the anchor text and the link target below!-->
                        <a class="d-block" href="mailto:<?php echo $_SESSION['setting_email'] ?>"><?php echo $_SESSION['setting_email'] ?></a>
                    </div>
                </div>
            </div>
            <br>
            <div class="container"><div class="small text-center text-muted">Welcome - <?php echo $_SESSION['setting_name'] ?> | <a href="/charity/index.php" target="_blank">Care4kids</a></div></div>
        </footer>
  <p></p><!-- comment -->
  <p></p><!-- comment -->
  <p></p>
  <br></br>
  
       <?php include('footer.php') ?>
    </body>

    <?php $conn->close() ?>

</html>
