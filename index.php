<?php include 'header.php'; ?>

<body>

  <h1 class="site-heading text-center text-white d-none d-lg-block">
    <span class="site-heading-upper text-primary mb-3"> BIENVENUE ! </span>
    <span class="site-heading-lower"> IMPEX </span><br>
    <a class="navbar-brand" href="index.html">
      <img style="margin-top: -20px;" alt="Logo" src="img/impx.png">
    </a>
  </h1>


  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
    <div class="container">
      <img style="margin-top: -10px;" alt="Logo" src="img/impx.png">
      <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">IMPORTEXPORT</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <?php include 'menu.php'; ?>
      </div>
    </div>
  </nav>

  <section class="page-section clearfix">
    <div class="container">
      <div class="intro">
        <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="img/cargo.jpg" alt="">
        <div class="intro-text left-0 text-center bg-faded p-5 rounded">
          <h2 class="section-heading mb-4">

            <span class="section-heading-lower">IMPEX</span>
          </h2>
          <p class="mb-3"> <strong>IMPEX</strong> est un salon international exclusivement dedié au déstockage òu
            l’offre et la demande peuvent se
            rencontrer. Les différentes sociétés spécialisées dans le déstockage font d’Eurotrade une plateforme idéale
            pour faire des affaires. Eurotrade offre un assortiment complet de marchandises dans un marché du déstockage
            dynamique. Le salon Eurotrade regroupe à chaque éditions de exposants de toute l'Europe spécialisés dans les
            invendus, fins de séries, surplus de stocks, lots de liquidations, fins de stocks, stock morts, surstock et
            la vente en gros de lots de de produits en destockage.
          </p>
          <div class="intro-button mx-auto">
            <a class="btn btn-primary btn-xl" href="#">WELCOME</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="page-section cta">
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <div class="bg-faded rounded p-4 text-center">
            <h2 class="section-heading mb-4">
              <span class="section-heading-upper">contactez nous</span>
              <span class="section-heading-lower"><a href="contact.php">ici</a></span>
            </h2>
            <p class="mb-0">IMPEX offre des ressources, des avantages et des services aux entreprises faisant du
              commerce
              international, ainsi que des outils les aidant à faire du commerce au niveau global.</p>
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