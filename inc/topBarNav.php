<!DOCTYPE html>


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
                <img src="images/c4k Logo.jpg" class="logo img-fluid" alt="c4klogo">
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
                        <a class="nav-link click-scroll" href="../charity/indexpg.php">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="../charity/indexpg.php#section_2">Abouts</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="../charity/indexpg.php#section_3">Causes</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="../charity/indexpg.php#section_4">Volunteer</a>
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
                        <a class="nav-link click-scroll" href="http://localhost/charity/?p=events">Events</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="/charity/donation/index.php">Daily Needs</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="http://localhost/charity/?p=articles&t=e4da3b7fbbce2345d7772b0674a318d5">Shelter</a>
                    </li>

                    <li class="nav-item ms-3">
                        <a class="nav-link custom-btn custom-border-btn btn"  id="donation" >Donate</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5 ">
                <button class="navbar-toggler btn btn-sm" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                

                <!--<div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="<?php echo base_url ?>">Home</a></li>
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="<?php echo base_url ?>donation/index.php">Donation</a></li>
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="<?php echo base_url ?>?p=events">Events</a></li>
                        <?php 
                        $cat_qry = $conn->query("SELECT * FROM topics where status = 1  limit 3");
                        $count_cats =$conn->query("SELECT * FROM topics where status = 1 ")->num_rows;
                        while($crow = $cat_qry->fetch_assoc()):
                        ?>
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="<?php echo base_url ?>?p=articles&t=<?php echo md5($crow['id']) ?>"><?php echo $crow['name'] ?></a></li>
                        <?php endwhile; ?>
                        <?php if($count_cats > 3): ?>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url ?>?p=view_topics">All Topics</a></li>
                        <?php endif; ?>
                        <li class="nav-item"><a class="nav-link" href="/charity/employ/index.php">Volunteer</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url ?>admin/index.php">Admin</a></li>
                        <li class="nav-item"><a class="nav-link" href="/charity/Userlogin/login.php">User</a></li>
                    </ul>
                    <div class="d-flex align-items-center">
                    </div>
                </div>
                
                -->
                
                <form class="form-inline ml-4 mr-2 pl-2" id="search-form">
                  <div class="input-group">
                    <input class="form-control form-control-sm form " type="search" placeholder="Search" aria-label="Search" name="search"  value="<?php echo isset($_GET['search']) ? $_GET['search'] : "" ?>"  aria-describedby="button-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-outline-success btn-sm m-0" type="submit" id="button-addon2"><i class="fa fa-search"></i></button>
                    </div>
                  </div>
                </form>
            </div>
            
        </nav> 
<script>
  $(function(){
    $('#login-btn').click(function(){
      uni_modal("","login.php")
    })
    $('#navbarResponsive').on('show.bs.collapse', function () {
        $('#mainNav').addClass('navbar-shrink')
    })
    $('#navbarResponsive').on('hidden.bs.collapse', function () {
        if($('body').offset.top == 0)
          $('#mainNav').removeClass('navbar-shrink')
    })

    $('#search-form').submit(function(e){
      e.preventDefault()
      var sTxt = $('[name="search"]').val()
      if(sTxt != '')
        location.href = './?p=search&search='+sTxt;
    })
    
    $('#donation').click(function(){
      uni_modal('Donation','donate.php')
    })
  })
</script>