<?php 
    $nbVariables = $_GET['nbVariables'];
    $nbContraintes = $_GET['nbContraintes'];
?>    

<table>
    <thead><th>Fonction objectif</th>
    <tr>
            <?php for ($k = 1; $k <= ($nbVariables-1); $k++):?>
                <td ><input value="5" name = "coef<?=$k;?>"  type="text" placeholder="..." id="coef<?=$k;?>"> X<?=$k;?> +</td>
            <?php endfor;?>
                <td><input value="5" name = "coef<?=$nbVariables;?>"  type="text" placeholder="..." id="coef<?=$k;?>"> X<?=$nbVariables;?></td>
    </tr>

</thead>

    <tbody>
        <?php for ($j = 1; $j <= $nbContraintes; $j++):?>
            <tr>
                    <?php for ($k = 1; $k <= ($nbVariables-1); $k++):?>
                        <td ><input value="5" name = "cntr<?=$j.$k;?>"  type="text" placeholder="..." id="cntr<?=$j.$k;?>"> X<?=$k;?> + </td>
                    <?php endfor;?>
                        <td><input value="5" name = "cntr<?=$j.$k;?>"  type="text" placeholder="..." id="cntr<?=$j.$k;?>"> X<?=$nbVariables;?></td>
                    <td>&le;</td>
                    <td><input value="5" name = "scnd<?=$j;?>"  type="text" placeholder="..." id="scnd<?=$j;?>"></td>
            </tr>
        <?php endfor;?>
    </tbody>

</table>

<div class="bouton">
            <button onclick="versCalcul()" type="submit" class="">Valider</button>
            <button type="reset"> Effacer</button>
</div>
