<?php 
    $nbQualite = $_GET['nbQualite'];
    $nbBroyeur = $_GET['nbBroyeur'];
?>    

<table>

<thead>
    <tr>
        <th colspan="<?=$nbQualite;?>"> Débit d’un broyeur j pour la qualité de ciment k : Dj k , exprimé en tonne/heure (t/h) </th>
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
                        <td><input value="0" name = "deb<?=$j.$k;?>"  type="text" placeholder="..." id="deb<?=$j.$k;?>"></td>
                    <?php endfor;?>
            </tr>
        <?php endfor;?>


    </tbody>

    <tfoot>

    <tr>
        <th colspan="<?=$nbQualite;?>"> Table 1: Débit des broyeurs (en t/h)</th>
    </tr>

    </tfoot>


    </table>

<div class="bouton">
            <button onclick="elec()" type="submit" class="">Valider</button>
            <button type="reset"> Effacer</button>
</div>
