<?php

$connexion = new PDO("mysql:host=localhost;dbname=impex", "root", "");
$sql = "SELECT * FROM inscription";
$stmt = $connexion->query($sql);
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>



<?php include 'header.php'; ?>

<body>

   <h1 class="site-heading text-center text-white d-none d-lg-block">
      <span class="site-heading-upper text-primary mb-3">Inscription</span>
      <span class="site-heading-lower"> IMPEX </span><br>
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
                  <form method="POST" action="php/global.php">
                     <p>
                        <label for="nom">Enregistrer un identifiant : </label><br>
                        <input type="text" id="nom" name="nom" placeholder="Identifiant de connexion" />
                     </p>
                     <p>
                        <label for="age">Quel est votre âge ?</label><br>
                        <input type="number" min="12" max="120" step="1" id="age" name="age" placeholder="Saisir votre âge" pattern="\d+"><br>
                     </p>
                     <p>
                        <label for="email">Votre email</label><br>
                        <input type="text" id="email" name="email" placeholder="Votre email" /><br>
                     </p>
                     <p>
                        Enregistrer votre mot de passe : <br> <input name='mdp' type='password' value='' placeholder="Votre mot de passe"><br>
                        <p>
                           Confirmer votre mot de passe : <br> <input name='mdpConfirm' type='password' value='' placeholder="Confirmation mot de passe"><br>
                           <br> <input value='Valider' type='submit'>
                        </p>
                        <input type='hidden' value='1' name='inscription'>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </section>



   <!-- FOOTER -->
   <?php include 'footer.php'; ?>
   <!-- FIN FOOTER -->



   <!-- Bootstrap core JavaScript -->
   <script src="vendor/jquery/jquery.min.js"></script>
   <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

<!-- Script to highlight the active date in the hours list -->
<script>
   $('.list-hours li').eq(new Date().getDay()).addClass('today');
</script>

</html>