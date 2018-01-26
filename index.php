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
  <div class="row margenes-secciones">
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
<div class="container">
  <div class="row margenes-secciones">
    <div class="col-md-2">

    </div>
    <div class="col-md-8">
      <img src="img/video.jpg" alt="">
    </div>
  </div>
</div>
<div class="container">
  <div class="row margenes-secciones">
    <div class="col-md-6">
      <div class="card" style="width: 27rem;">
        <img class="card-img-top" src="img/pagos.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">PLAN MENSUAL</h5>
          <p class="card-text">este plan contempla el uso de la plataforma por un perioro de un mes y con acceso total al contenido multimedia</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">renovacion cada mes</li>
          <li class="list-group-item">10% menos </li>
          <li class="list-group-item">Vestibulum at eros</li>
        </ul>
        <div class="card-body">
          <a href="#" class="card-link">Registrarse</a>
          <a href="#" class="card-link">ver mas</a>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card" style="width: 27rem;">
        <img class="card-img-top" src="img/pagos.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">PLAN MENSUAL</h5>
          <p class="card-text">este plan contempla el uso de la plataforma por un perioro de un mes y con acceso total al contenido multimedia</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">renovacion cada mes</li>
          <li class="list-group-item">10% menos </li>
          <li class="list-group-item">Vestibulum at eros</li>
        </ul>
        <div class="card-body">
          <a href="#" class="card-link">Registrarse</a>
          <a href="#" class="card-link">ver mas</a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
include('recursos/footer.php');
?>
