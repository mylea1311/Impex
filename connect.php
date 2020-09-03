<!DOCTYPE html>
<html lang="en">

<head>

   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="">
   <meta name="author" content="">
   <link rel="stylesheet" href="style.css">
   <title></title>

   <!-- Bootstrap core CSS -->
   <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

   <!-- Custom fonts for this template -->
   <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

   <!-- Custom styles for this template -->
   <link href="css/business-casual.min.css" rel="stylesheet">
   <link rel="icon" type="image/gif" href="img/animated_favicon1.gif">
</head>

<body>

   <h1 class="site-heading text-center text-white d-none d-lg-block">
      <span class="site-heading-upper text-primary mb-3">CONNEXION</span><br>
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
            <ul class="navbar-nav mx-auto">
               <li class="nav-item active px-lg-4">
                  <a class="nav-link text-uppercase text-expanded" href="index.html">Accueil
                     <span class="sr-only"></span>
                  </a>
               </li>
               <li class="nav-item px-lg-4">
                  <a class="nav-link text-uppercase text-expanded" href="livraison.html">Nos points livraisons</a>
               </li>
               <li class="nav-item px-lg-4">
                  <a class="nav-link text-uppercase text-expanded" href="produits.html">Nos services</a>
               </li>
               <li class="nav-item px-lg-4">
                  <a class="nav-link text-uppercase text-expanded" href="notre-equipe.html">Notre équipe</a>
               </li>
               <li class="nav-item px-lg-4">
                  <a class="nav-link text-uppercase text-expanded" href="histoire.html">Notre histoire</a>
               </li>
               <li class="nav-item px-lg-4">
                  <a class="nav-link text-uppercase text-expanded" href="contact.html">Contact</a>
               </li>
            </ul>
         </div>
      </div>
   </nav>

   <section class="page-section about-heading">
      <div class="container">
         <div class="row">
            <div class="col-xl-7 mx-auto">
               <div class="bg-faded rounded p-4 text-center">
                  <form method="POST" action="co.php">
                     <p>
                        <label for="email"> Identifiant de connexion : </label><br>
                        <input type="text" id="email" name="email" placeholder="Saisir votre Identifiant" required />
                     </p>
                     <p>
                        Votre mot de passe : <br> <input name='pass' type='password' value='' placeholder="Saisir votre mot de passe" required><br>
                        <br>
                        <input type="submit" name="submit" value="Connexion">
                     </p>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </section>

   <footer class="footer text-faded text-center py-5">
      <div class="container">
         <p class="m-0 small"> &copy; Mélanie 2019</p>
      </div>
   </footer>

   <!-- Bootstrap core JavaScript -->
   <script src="vendor/jquery/jquery.min.js"></script>
   <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

<!-- Script to highlight the active date in the hours list -->
<script>
   $('.list-hours li').eq(new Date().getDay()).addClass('today');
</script>

</html>