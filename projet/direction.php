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



$deb = array();

$nbBroyeur = $_GET['nbBroyeur'];
$nbQualite = $_GET['nbQualite'];


for ($j = 1; $j < $nbBroyeur; $j++){

    for ( $k = 1; $k < $nbQualite; $k++){

        $deb[] = $_GET['deb'.$j.$k];

    }
}

$elec = array();



for ($j = 1; $j < $nbBroyeur; $j++){

    for ( $k = 1; $k < $nbQualite; $k++){

        $elec[] = $_GET['elec'.$j.$k];

    }
}


$hebdo = array();

    for ( $k = 1; $k < $nbQualite; $k++){

        $hebdo[] = $_GET['hebdo'.$k];
    }


$si = array();

    for ( $k = 1; $k < $nbQualite; $k++){

        $si[] = $_GET['si'.$k];
    }


$ss = array();

    for ( $k = 1; $k < $nbQualite; $k++){

        $ss[] = $_GET['ss'.$k];
}




$trans = array();

$nbBroyeur = $_GET['nbBroyeur'];
$nbQualite = $_GET['nbQualite'];


for ($j = 1; $j < $nbBroyeur; $j++){

    for ( $k = 1; $k < $nbQualite; $k++){

        $trans[] = $_GET['trans'.$j.$k];

    }
}

$inf = array();

$inf['nbQualite'] = $nbQualite;

$inf['nbBroyeur'] = $nbQualite;

$inf['debit'] = $deb;

$inf['electricite'] = $elec;

$inf['demandeHebdo'] = $hebdo;

$inf['stockInitial'] = $si;

$inf['stockSecurite'] = $ss;

$inf['coutTransfert'] = $trans;


$js = file_get_contents('test.json');

$js = json_decode($js, true);

$js[] = $inf;

$js = json_encode($js);

file_put_contents('test.json', $js);










?>