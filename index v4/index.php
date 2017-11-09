<?php
    include_once 'head.php';
?>

  <body>
    <script src="js/nav-bar.js"></script>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark " >
      <div class="container">
        <a class="navbar-brand" href="index.php"> 4ITEC 4.<i class="material-icons">fingerprint</i><img src="" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
               <a class="nav-link" href="index.php">    <i class="material-icons">home</i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Actualités</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Conferences</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Partenaires</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Problematique</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="login.php"> <i class="material-icons">lock_open</i> </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

  <?php
    	include_once 'header.php';
  ?>


  <!-- Page Content -->
  <div class="container">

    <div class="row">
      <div class="col-sm-8">
        <h2 class="mt-4">Qui sommes nous?</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A deserunt neque tempore recusandae animi soluta quasi? Asperiores rem dolore eaque vel, porro, soluta unde debitis aliquam laboriosam. Repellat explicabo, maiores!</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis optio neque consectetur consequatur magni in nisi, natus beatae quidem quam odit commodi ducimus totam eum, alias, adipisci nesciunt voluptate. Voluptatum.</p>
        <p>
          <a class="btn btn-info btn-md" href="#">Voir Plus &raquo;</a>
        </p>
      </div>
      <div class="col-sm-4">
        <h2 class="mt-4">Recherche</h2>
        <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Recherche</button>
    </form>
        <h2 class="mt-4">Contact Us</h2>
        <address>
          <strong>Start Bootstrap</strong>
          <br>3481 Melrose Place
          <br>Beverly Hills, CA 90210
          <br>
        </address>
        <address>
          <abbr title="Phone">P:</abbr>
          (123) 456-7890
          <br>
          <abbr title="Email">E:</abbr>
          <a href="mailto:#">name@example.com</a>
        </address>
      </div>
    </div>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <img class="d-block img-fluid" src="..." alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block img-fluid" src="..." alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block img-fluid" src="..." alt="Third slide">
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

    <!-- card carousel -->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
<div class="carousel-inner">
  <!-- first slide -->
  <div class="carousel-item active">
    <!-- row1 -->
    <div class="row">
      <div class="col-sm-4 my-4">
        <div class="card">
          <img class="card-img-top" src="img/tech.jpg" alt="">
          <div class="card-body">
            <h4 class="card-title">Actualités</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque sequi doloribus.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-info">En savoir plus</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4 my-4">
        <div class="card">
          <img class="card-img-top" src="img/conference.jpg" alt="">
          <div class="card-body">
            <h4 class="card-title">Conferences</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque sequi doloribus totam ut praesentium aut.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-info">En savoir plus</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4 my-4">
        <div class="card">
          <img class="card-img-top" src="img/psa_logo.jpg" alt="">
          <div class="card-body">
            <h4 class="card-title">Partenaires</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-info">En savoir plus</a>
          </div>
        </div>
      </div>
    </div>
    <!-- /row1 -->
  </div>
  <!-- /first slide -->

  <!-- second slide -->
  <div class="carousel-item">
    <!-- row2 -->
    <div class="row">
      <div class="col-sm-4 my-4">
        <div class="card">
          <img class="card-img-top" src="img/handshake.jpg" alt="">
          <div class="card-body">
            <h4 class="card-title">Actualités</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque sequi doloribus.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-info">En savoir plus</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4 my-4">
        <div class="card">
          <img class="card-img-top" src="img/calcul.jpg" alt="">
          <div class="card-body">
            <h4 class="card-title">Conferences</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque sequi doloribus totam ut praesentium aut.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-info">En savoir plus</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4 my-4">
        <div class="card">
          <img class="card-img-top" src="img/vw.jpg" alt="">
          <div class="card-body">
            <h4 class="card-title">Partenaires</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-info">En savoir plus</a>
          </div>
        </div>
      </div>
    </div>
    <!-- /row2 -->
  </div>
  <!-- /second slide -->

  <!-- third slide -->
  <div class="carousel-item">
    <!-- row3 -->
    <div class="row">
      <div class="col-sm-4 my-4">
        <div class="card">
          <img class="card-img-top" src="img/frenchtech.png" alt="">
          <div class="card-body">
            <h4 class="card-title">Actualités</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque sequi doloribus.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-info">En savoir plus</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4 my-4">
        <div class="card">
          <img class="card-img-top" src="img/social.jpg" alt="">
          <div class="card-body">
            <h4 class="card-title">Conferences</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque sequi doloribus totam ut praesentium aut.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-info">En savoir plus</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4 my-4">
        <div class="card">
          <img class="card-img-top" src="img/frenchtechconf.jpg" alt="">
          <div class="card-body">
            <h4 class="card-title">Partenaires</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-info">En savoir plus</a>
          </div>
        </div>
      </div>
    </div>
    <!-- /row3 -->
  </div>
  <!-- /third slide -->
</div>
</div>
<!-- /card carousel -->




  </div>
  <!-- /.container -->


<?php
	include_once 'footer.php';
?>
