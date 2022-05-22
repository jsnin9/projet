<?php
   // require "db.class.php";
   // $DB = new DB();


    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bouton.css">

    <title>redirection</title>
        

</head>
<body>

<?php

if (isset($_POST['nom'])){

    $message = array();
    $message['nom'] = $_POST['nom'];
    $message['prenom'] = $_POST['prenom'];
    $message['nom'] = $_POST['nom'];
    $message['dateDeNaissance'] = $_POST['dateDeNaissance'];
    $message['ville'] = $_POST['ville'];
    $message['codePostal'] = $_POST['codePostal'];
    $message['adresse'] = $_POST['adresse'];
    $message['telephone'] = $_POST['telephone'];
    $message['email'] = $_POST['email'];
    $message['mdp1'] = $_POST['mdp1'];
    $message['mdp2'] = $_POST['mdp2'];


    

    $js = file_get_contents('test.json');

    $js = json_decode($js, true);

    $js[] = $message;

    $js = json_encode($js);

    file_put_contents('test.json', $js);

/*

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $dateDeNaissance = $_POST['dateDeNaissance'];
    $ville = $_POST['ville'];
    $codePostal = $_POST['codePostal'];
    $adresse= $_POST['adresse'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'];
    $mdp= $_POST['mdp1'];
*/



   // $req = "INSERT INTO Client(nom, prenom, dateDeNaissance, ville, adresse, codePostal, telephone, email, motDePasse) VALUES('$nom','$prenom','$dateDeNaissance','$ville','$adresse', '$codePostal','$telephone', '$email','$mdp' )";

    

  //  $query = $DB->query($req );

  exec("test.py");


    echo "Inscription réussie !";

}

else{
    echo "erreur d'enregistrement!";
}

?>


<div align="center" class="bouton">
    <button type="submit"><a href="index.php">Appuyer pour retourner à la page d'acceuil</a></button>
</div>
    
</body>
</html>
