<!-- Début Header -->
<?php include 'header.php'; ?>
<!-- Fin Header -->

<body>

  <h1 class="site-heading text-center text-white d-none d-lg-block">
    <span class="site-heading-upper text-primary mb-3"> Services proposés </span>
    <span class="site-heading-lower"> partout dans le monde ! </span><br>
    <a class="navbar-brand" href="index.html">
      <img style="margin-top: -20px;" alt="Logo" src="img/impx.png">
    </a>
  </h1>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
    <div class="container">
      <img style="margin-top: -10px;" alt="Logo" src="img/impx.png">
      <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#"> Services proposés </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">

        <!-- Début menu -->
        <?php include 'menu.php'; ?>
        <!-- Fin menu -->

      </div>
    </div>
  </nav>

  <section class="page-section about-heading">
    <div class="container">
      <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="" alt="">
      <div class="about-heading-content">
        <div class="row">
          <div class="col-xl-9 col-lg-10 mx-auto">
            <div class="bg-faded rounded p-5">
              <div class="card mb-3">
                <img src="img/devis.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Demander un devis pour votre expédition</h5>
                  <p class="card-text"><a href="demandeDevis.php" class="btn btn-primary"> Simuler votre devis en ligne
                    </a>
                    <p class="card-text"><small class="text-muted">Dernière utilisation il y a </small></p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Possibilité de faire suivre vos colis</h5>
                  <p class="card-text">
                    <a href="suivisColis.html" class="btn btn-primary"> Suivi de votre colis </a> </p>
                  <p class="card-text"><small class="text-muted">Dernière utilisation il y a 26min</small></p>
                </div>
                <img src="img/suiviColi.png" class="card-img-top" alt="...">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>
    </div>
  </section>

  <!-- Début Footer -->
  <?php include 'footer.php'; ?>
  <!--  Fin Footer -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>