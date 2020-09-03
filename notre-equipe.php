<?php
include 'header.php';
?>



<body>

  <h1 class="site-heading text-center text-white d-none d-lg-block">
    <span class="site-heading-upper text-primary mb-3">Organisation</span>
    <span class="site-heading-lower">et cohésion</span><br>
    <a class="navbar-brand" href="index.html">
      <img style="margin-top: -20px;" alt="Logo" src="img/impx.png">
    </a>
  </h1>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
    <div class="container">
      <img style="margin-top: -10px;" alt="Logo" src="img/impx.png">
      <!-- Titre menu-->
      <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Team</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <!-- MENU -->
        <?php include 'menu.php'; ?>

        <!--Fin menu-->
      </div>
    </div>
  </nav>

  <section class="page-section about-heading">
    <div class="container">
      <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="img/team.jpg" alt="">
      <div class="about-heading-content">
        <div class="row">
          <div class="col-xl-9 col-lg-10 mx-auto">
            <div class="bg-faded rounded p-5">
              <h2 class="section-heading mb-4">
                <span class="section-heading-upper">La société, les liens, associés...</span>
                <span class="section-heading-lower">La Team</span>
              </h2>
              <p>Avec plus de 6000 structures dans le monde nous parvenons à travailler sur une plateforme qui nous
                permet de transporter n'importe quelle marchandise d'un point à un autre.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include 'footer.php'; ?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>