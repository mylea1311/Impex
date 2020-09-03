<!-- <?php

      $connexion = new PDO("mysql:host=localhost;dbname=IMPEX", "root", "");
      $sql = "SELECT * FROM client ";
      $stmt = $connexion->query($sql);
      $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
      ?> -->




<?php include 'header.php'; ?>

<body>

   <h1 class="site-heading text-center text-white d-none d-lg-block">
      <span class="site-heading-upper text-primary mb-3">Demande de devis</span>
      <a class="navbar-brand" href="index.html">
         <img style="margin-top: -20px;" alt="Logo" src="img/impx.png">
      </a>
   </h1>

   <!-- Navigation -->
   <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
      <div class="container">
         <img style="margin-top: -10px;" alt="Logo" src="img/impx.png">
         <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#"></a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarResponsive">
            <?php include 'menu.php'; ?>
         </div>
      </div>
   </nav>

   <section class="page-section about-heading">
      <div class="container">
         <div class="row">
            <div class="col-xl-7 mx-auto">
               <div class="bg-faded rounded p-4 text-center">
                  <form action="php/global.php" method="POST">

                     <p>
                        <label for="poidsColis">Poids de votre colis : </label><br>
                        <input type="number" min="12" max="120" step="1" id="pds" name="poids" placeholder="Poids de votre colis" pattern="\d+"><br>


                        <p>
                           <label for="lngColis">Longueur de votre colis : </label><br>
                           <input type="number" min="12" max="120" step="1" id="lng" name="lngColis" placeholder="Longueur de votre colis" pattern="\d+"><br>
                        </p>

                        <p>
                           <label for="lrgColis">Largeur de votre colis : </label><br>
                           <input type="number" id="lrg" name="lrgColis" placeholder="Largeur de votre colis" /><br>
                        </p>

                        <p>
                           <label for="hauteurColis">Hauteur de votre colis : </label><br>
                           <input type="number" id="haut" name="hauteur" placeholder="Hauteur de votre colis" /><br>
                        </p>
                        <p>
                           <p>Pays de livraison</p>
                           <select name="pays">
                              <option value="France" selected="selected">France </option>
                              <option value=""></option>
                              <option value=""></option>
                              <option value=""></option>
                              <option value=""></option>
                              <option value=""></option>
                           </select>
                        </p>

                        <p>
                           <label for="">Adresse de livraison : </label><br>
                           <input type="text" id="adr" name="adresse" placeholder="Adresse de livraison" /><br>
                           <br>
                           <p> Numéro :
                              <input type="number" id="num" name="numeroAdresse" style="position:left">
                              Code postal
                              <input type="text" id="num" name="numeroAdresse" style="position:left">
                           </p>

                           <p>
                              <label for="">Nom et prenom de livraison : </label><br>
                              <input type="text" id="adr" name="" placeholder="Nom et prénom" /><br>
                           </p>

                           <p>
                              <label for=""> Choix rapide : </label>
                              <input type="radio" name="choix" id="sexe" value="h" checked="checked">
                              <label for="sexe">Oui</label>
                              <input type="radio" name="choix_1" id="sexe" value="f" checked="checked">
                              <label for="sexe">Non</label>
                           </p>

                           <input type="submit" id="bla" value="Valider">

                  </form>
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

<!-- Script to highlight the active date in the hours list -->
<script>
   $('.list-hours li').eq(new Date().getDay()).addClass('today');
</script>

</html>