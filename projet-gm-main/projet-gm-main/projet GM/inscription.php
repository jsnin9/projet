<!DOCTYPE html>
<html>

<head>
  <title> Formulaire d'inscription </title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/inscription.css">


  <link rel="stylesheet" href="https://use.fonteaweome.com/releases/v5.13.0/css/all">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
  <?php require 'header.php';?>

  <div class="box">

    <form method="post" action="traitement.php">

    <h2> Inscrivez-vous !</h2>

      <div class="inscription">

        <div class="left">


          <div class="left2">
            <label for="nom"></label>
            <input type="text" placeholder="Nom" id="nom">
          </div>

          <div class="left2">
            <label for="prenom"></label>
            <input type="text" placeholder="Prenom" id="prenom">
          </div>

          <div class="left2">
            <label for="statut"></label>
            <input type="text" placeholder="Statut dans la société " id="statut">
          </div>

          <div class="left2">
            <label for="Société"></label>
            <input type="text" placeholder="Nom de la société" id="Société">
          </div>

          <div class="left2">
            <label for="Type"></label>
            <input type="text" placeholder="Type de société" id="Type">
          </div>

        </div>

        <div class="right">

          <div class="right2">
            <label for="Siret"></label>
            <input type="text" placeholder="Numéro de Siret" id="Siret">
          </div>

          <div class="right2">
            <label for="Téléphone"></label>
            <input type="text" placeholder="Numéro de Téléphone" id="Téléphone">
          </div>

          <div class="right2">
            <label for="mail"></label>
            <input type="text" placeholder="mail" id="mail">
          </div>

          <div class="right2">
            <label for="mdp"></label>
            <input type="password" placeholder="Mot de passe" id="mdp">
          </div>

          <div class="right2">
            <label for="mdp2"></label>
            <input type="password" placeholder="Confirmation du mot de passe" id="mdp2">
          </div>

        </div>

        <div align="center" class="s'inscrire">
          <button type="submit"><a href="mailto:okoncamille17@outlook.fr"
              style="text-decoration: none; color: white;">S'inscrire</a></button>
          <button type="reset"> Effacer</button>
        </div>

    </form>

  </div>
  <div class="bas">
  <?php require 'footer.php'; ?>
  </div>

</body>

</html>