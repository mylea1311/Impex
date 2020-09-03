<?php include 'header.php'; ?>

<body>

  <h1 class="site-heading text-center text-white d-none d-lg-block">
    <span class="site-heading-upper text-primary mb-3">L'histoire de</span>
    <span class="site-heading-lower">la société</span><br>
    <a class="navbar-brand" href="index.html">
      <img style="margin-top: -20px;" alt="Logo" src="img/impx.png">
    </a>
  </h1>


  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
    <div class="container">
      <img style="margin-top: -10px;" alt="Logo" src="img/impx.png">
      <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">à propos..</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <?php include 'menu.php'; ?>
      </div>
    </div>
  </nav>

  <section class="page-section cta">

    <div class="container">
      <div class="text-center mb-80">
        <img src="img/histoire.jpg">
        <h2 class="section-title">Ce que nos clients ont dit</h2>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-6">
          <div class="cta-inner text-center rounded">
            <h2 class="section-heading mb-4">
              <span class="section-heading-upper">Confiance totale</span>
            </h2>
            <p class="mb-0">
              IMPEX a su instaurer une atmosphère de grande confiance en apportant des conseils justes, avec du
              recul, une réelle expertise, et au final une aide à faire des choix qui se sont trouvés très payants. Je
              recommande les yeux fermés, dans un milieu si opaque, un tel partenaire fait du bien et rassure.
            </p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="cta-inner text-center rounded">
            <h2 class="section-heading mb-4">
              <span class="section-heading-upper">Très bons conseils et bonne expertise</span>
            </h2>
            <p class="mb-0">Nous avons pu obtenir un prêt immobilier bien plus avantageux (durée, mensualités) ainsi
              qu'une assurance de prêt beaucoup plus efficace (meilleure couverture pour un prix inférieur à ce qui
              était proposé par la banque).</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="cta-inner text-center rounded">
            <h2 class="section-heading mb-4">
              <span class="section-heading-upper">Excellent</span>
            </h2>
            <p class="mb-0">Excellente écoute et bonne analyse des besoins. Conseils avisés. Mise en œuvre rapide et
              efficace.
              Très professionnels, je recommande vivement.
            </p>
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