<!DOCTYPE html>
<html>
  <head>
    <title> Formulaire d'inscription </title>
    <meta charset= "utf-8">
    <link rel="stylesheet" href="css/inscription.css">
    <link rel="stylesheet" href="css/main.css">

    <link rel="stylesheet" href="https://use.fonteaweome.com/releases/v5.13.0/css/all">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />   
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;700&display=swap" rel="stylesheet">
  </head>

  <body>


  <div class="keys">

                
      <div class="containerContact">
      
            <div class="box">

              <form method="post" action="traitement.php" id="form">

                <h2> Inscrivez-vous !</h2>

                <div class="inscription">

                    <div class="left">

                      <div class="form-control">
                          <label for="nom"></label>
                          <input name = "nom" type="text" placeholder="Nom" id="nom">
                          <small>Format incorrect</small>


                        </div>


                      
                        <div class="form-control">                            
                        <label for="prenom"></label>
                        <input name = "prenom" type="text" placeholder="Prenom" id="prenom">                          
                        <small>Format incorrect</small>

                        </div>


                        <div class="form-control">
                          <label for="naissance"></label>
                          <input name = "dateDeNaissance" type="date" placeholder="Date de naissance"id="dateDeNaissance" >
                          <small>Format incorrect</small>

                          </div>
                    

                          <div class="form-control">
                          <label for="ville"></label>
                          <input name = "ville" type="text" placeholder="Ville" id="ville">
                          <small>Format incorrect</small>

                          </div>
                        
                         
                        <div class="form-control">
                          <label for="adresse"></label>
                          <input name = "adresse" type="text" placeholder="Adresse" id="adresse">
                          <small>Format incorrect</small>

                         </div>

                    </div>


                      <div class="right">
                        
                      <div class="form-control">                            
                        <label for="cp"></label>
                        <input name = "codePostal" type="text" placeholder="Code Postale" id="codePostal">                          
                        <small>Format incorrect</small>

                        </div>
                        
                                           
                        <div class="form-control">                            
                        <label for="tel"></label>
                        <input name = "telephone" type="Téléphone" placeholder="Téléphone" id="telephone">                          
                        <small>Format incorrect</small>

                        </div>

                                         
                       <div class="form-control">
                          <label for="e-mail"></label>
                          <input  name = "email" type="text" placeholder="E-mail" id="email">
                          <small>Format incorrect</small>

                          </div>
                   
                          
                          <div class="form-control">                            
                        <label for="mdp"></label>
                        <input name = "mdp1" type="mdp1" placeholder="Mot de passe" id="mdp1">                          
                        <small>Format incorrect</small>
                        </div>

                        <div class="form-control">
                          <label for="mdp2"></label>
                          <input name = "mdp2" type="mdp2" placeholder="Confirmation du mot de passe" id="mdp2">
                          <small>Format incorrect</small>
                        </div>
        
                  </div>


              </div>

                <div class="bouton">
                  <button type="submit" >S'inscrire</a></button>
                    <button type="reset"> Effacer</button>
              </div>


    </form>

    </div>


</div>


<script src=" js/inscription.js"></script>
      <script src=" js/main.js"></script>


  </body>

  </html>
