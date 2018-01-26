<?php
include('recursos/head.php');
?>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/unoslider.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block texto-slider">
         <h2>Conoce mas sobre NOSOTROS </h2>
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
       </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/dosslider.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block texto-slider">
         <h2>Conoce mas sobre NOSOTROS </h2>
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
       </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/tresslider.jpg" alt="Third slide">
      <div class="carousel-caption d-none d-md-block texto-slider">
         <h2>Conoce mas sobre NOSOTROS </h2>
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
       </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="container-fluid">
  <div class="row seccion2-index">
    <div class="col-md-4">
      <div class="row">
        <div class="col-md-12 text-center">
          <h2>Caracteristica</h2>
        </div>
      </div>
      <div class="row caracteristicas-index">
        <div class="col-md-2">
          <div style="font-size:3em; color:Tomato;">
            <i class="fas fa-chart-pie"></i>
          </div>
        </div>
        <div class="col-md-10">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="row">
        <div class="col-md-12 text-center">
          <h2>Caracteristica</h2>
        </div>
      </div>
      <div class="row caracteristicas-index">
        <div class="col-md-2">
          <div style="font-size:3em; color:green;">
            <i class="fas fa-briefcase"></i>
          </div>
        </div>
        <div class="col-md-10">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="row">
        <div class="col-md-12 text-center">
          <h2>Caracteristica</h2>
        </div>
      </div>
      <div class="row caracteristicas-index">
        <div class="col-md-2">
          <div style="font-size:3em; color:blue;">
            <i class="far fa-lightbulb"></i>
          </div>
        </div>
        <div class="col-md-10">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
        </div>
      </div>
    </div>

  </div>
</div>

<?php
include('recursos/footer.php');
?>
