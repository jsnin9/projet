<?php 
    $nbQualite = $_GET['nbQualite'];
    $nbBroyeur = $_GET['nbBroyeur'];
?>    


<table>


<thead>
    <tr>
        <th colspan="<?=$nbQualite;?>"> Consommation d’électricité d’un broyeur j pour fabriquer une tonne de produit k : Ej k , exprimée
en kilowatt-heure par tonne (kW h/t) </th>
    </tr>

</thead>
    <tbody>
        <tr>
            <th><span>j/k</span></th>

            <?php for ($k = 1;  $k <= $nbQualite; $k++ ):?>
                <th><?=$k;?></th>
            <?php endfor;?>
        </tr>

        <?php for ($j = 1; $j <= $nbBroyeur; $j++):?>

            <tr>
                <th><?=$j;?></th>
                    <?php for ($k = 1; $k <= $nbQualite; $k++):?>
                        <td><input value="0" name = "elec<?=$j.$k;?>" type="text" placeholder="..." id="elec<?=$j.$k;?>"></td>
                    <?php endfor;?>
                </tr>
        <?php endfor;?>
    </tbody>

    <tfoot>

<tr>
    <th colspan="<?=$nbQualite;?>">Table 2: Consommation électrique des broyeurs (en kW h/t )</th>
</tr>

</tfoot>

    </table>

<div class="bouton">
            <button onclick="hebdo()" >Valider</button>
            <button type="reset"> Effacer</button>
</div>

