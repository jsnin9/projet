<?php

if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') 
  $url = "https"; 
else
  $url = "http"; 
  
// Ajoutez // à l'URL.
$url .= "://"; 
  
// Ajoutez l'hôte (nom de domaine, ip) à l'URL.
$url .= $_SERVER['HTTP_HOST']; 
  
// Ajouter l'emplacement de la ressource demandée à l'URL
$url .= $_SERVER['REQUEST_URI']; 
    
// Afficher l'URL
echo $url; 




$nbContraintes = $_GET['nbContraintes'];
$nbVariables = $_GET['nbVariables'];

echo $nbContraintes;
echo $nbVariables;


$cntr = array();

for ($j = 1; $j <= $nbContraintes; $j++){
    $objet = array();
    for ( $k = 1; $k <= $nbVariables; $k++){
        $objet[] = $_GET['cntr'.$j.$k];
    }
    $cntr[] = $objet;
}


$coef = array();

for ( $k = 1; $k <= $nbVariables; $k++){
    $coef[] = $_GET['coef'.$k];
}

$scnd = array();

for ( $j = 1; $j <= $nbContraintes; $j++){
    $scndMembre[] = $_GET['scnd'.$j];
}










$inf = array();

$inf['nbVariables'] = $nbVariables;

$inf['nbContraintes'] = $nbContraintes;

$inf['contraintes'] = $cntr;

$inf['coefficients'] = $coef;

$inf['scndMembre'] = $scnd;




$js = file_get_contents('data.json');

$js = json_decode($js, true);

$js[] = $inf;

$js = json_encode($js);

file_put_contents('data.json', $js);



//header("location:recupDonnee.php")

?>

<a href="recupDonnee.php"><button type="button">appuyer là</button></a>