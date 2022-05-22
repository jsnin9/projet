<?php


exec("python pit1.py");
exec("python trouve2.py");

echo "oui";

/*

    $donnees = file_get_contents('test.json');
    $donnees = json_decode($donnees, true);
    
    echo $donnees['res'][0][0];
*/
?>