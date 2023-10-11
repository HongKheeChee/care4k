 <!-- Header-->
 <header class="bg-dark py-5" id="main-header">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder"><?php echo $_settings->info('home_quote') ?></h1>
            <p class="lead fw-normal text-white-50 mb-0"></p>
        </div>
    </div>
</header>
<!-- Section-->
<style>
    .book-cover{
        object-fit:contain !important;
        height:auto !important;
    }
</style>


<style>
body {
  background-image: url('/uploads/Colourful hill.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
}
</style>




<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5 ">
        
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="./uploads/Colourful hill.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./uploads/HD-wallpaper-colorful-houses-colorful-houses.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
        
        
        <?php require_once('welcome_content.html') ?>
        
<div class="card-group">
  <div class="card">
    <img src="./uploads/HD-wallpaper-colorful-houses-colorful-houses.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <a href="./donation/index.php" class="btn btn-primary">Go there</a>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img src="./uploads/downloadvlt.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Volunteer</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <a href="./employ/index.php" class="btn btn-primary">Go there</a>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img src="./uploads/downloadnt.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Donation</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    <a href="./donation/index.php" class="btn btn-primary">Go there</a>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
</div>
        <div class="alert alert-light" role="alert">
  
</div>
        
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Monetory Donation</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
        <button class="btn btn-flat btn-primary" type="button" id="donation">Donate Now</button>
        
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">In Kind Donation</h5>
        <p class="card-text">We gather the daily needs and deliver to the respective homes</p>
        <P class="card-text">With supporting </p>
        <a href="./donation/index.php" class="btn btn-primary">Go there</a>
        
      </div>
    </div>
  </div>
</div>
        
<div class="card" style="width: 18rem;">
  <img src="../uploads/HD-wallpaper-colorful-houses-colorful-houses.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="./donation/index.php" class="btn btn-primary">Go somewhere</a>
  </div>
</div>       

<div class="card bg-dark text-white">
  <img src="MG_1404.jpg" class="card-img" alt="...">
  <div class="card-img-overlay">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text">Last updated 3 mins ago</p>
  </div>
</div>
        
<div class="card" style="width: 18rem;">
  <img src="./uploads/HD-wallpaper-colorful-houses-colorful-houses.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Volunteer Application</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="./employ/index.php" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
        
<div class="alert alert-primary" role="alert">
  A simple primary alert—check it out!
</div>
<div class="alert alert-secondary" role="alert">
  A simple secondary alert—check it out!
</div>
<div class="alert alert-success" role="alert">
  A simple success alert—check it out!
</div>
<div class="alert alert-danger" role="alert">
  A simple danger alert—check it out!
</div>
<div class="alert alert-warning" role="alert">
  A simple warning alert—check it out!
</div>
<div class="alert alert-info" role="alert">
  A simple info alert—check it out!
</div>
<div class="alert alert-light" role="alert">
  A simple light alert—check it out!
</div>
<div class="alert alert-dark" role="alert">
  A simple dark alert—check it out!
</div>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <?php    
            echo '<img src="../uploads/HD-wallpaper-colorful-houses-colorful-houses.jpg" alt="house" width="500" height="600">'
                    ?>
            
                    <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./uploads/c4k Logo.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./uploads/HD-wallpaper-colorful-houses-colorful-houses.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </div>
</section>





<div id="process" name="process"></div>

    
    </section>
