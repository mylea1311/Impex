<?php
$connexion = new PDO("mysql:host=localhost;dbname=IMPEX", "root", "");
$sql = "SELECT * FROM client ";
$stmt = $connexion->query($sql);
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<?php include 'header.php'; ?>

<body>

  <h1 class="site-heading text-center text-white d-none d-lg-block">
    <span class="site-heading-upper text-primary mb-3">CONTACT</span>
    <span class="site-heading-lower">Prise de contact</span><br>
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
                <label for="nom">Votre nom</label><br>
                <input type="text" id="nom" name="nom" placeholder="Votre nom" />
              </p>
              <p>
                <label for="prenom">Votre prenom</label><br>
                <input type="text" id="prenom" name="prenom" placeholder="Votre prenom" />
              </p>
              <p>
                <label for="age">Quel est votre âge ?</label><br>
                <!-- L'attribut pattern peut servir de recours pour les navigateurs dont le type number n'est
                       pas implémenté pour input mais qui prennent en charge l'attribut pattern. Veuillez noter
                       que les navigateurs prenant en charge l'attribut pattern ne signalent pas d'erreur quand
                       il est utilisé avec un champ number. Seule son utilisation ici agit en tant que recours. -->
                <input type="number" min="12" max="120" step="1" id="age" name="age" placeholder="Saisir votre âge" pattern="\d+">
              </p>
              <p>
                <label for="email">Votre email</label><br>
                <input type="text" id="email" name="email" placeholder="Saisir votre email" />
              </p>


              <input type="radio" name="sexe" id="sexe" value="h" checked="checked">
              <label for="sexe">une homme</label>

              <input type="radio" name="sexe" id="sexe" value="f" checked="checked">

              <label for="sexe">une femme</label>

              </p>
              <p>
                <label for="memo">Tapez un commentaire sur le contact</label><br>
                <textarea name="com" id="memo" cols="30" rows="10" placeholder="Commentaire"></textarea>

              </p>
              <label for="groupe">Groupe de contacts</label><br>
              <select name="groupe" id="groupe">
                <option value="famille">famille</option>
                <option value="travail">travail</option>
                <option value="ami">ami</option>
                <option value="autres">autres</option>
              </select>
              <br>
              <br>
              <input type="submit" id="bla" value="Enregistrer">
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