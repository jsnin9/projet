<?php 
    $nbVariables = $_GET['nbVariables'];
    $nbContraintes = $_GET['nbContraintes'];
?>    

<table>
    <thead><th>Fonction objectif</th>
    <tr>
            <?php for ($k = 1; $k <= ($nbVariables-1); $k++):?>
                <td> <div class="aligne"><input value="5" name = "coef<?=$k;?>"  type="text" placeholder="..." id="coef<?=$k;?>"><div class="plus"> <p>X<?=$k;?></p> <p>+</p> </div></div></td>
            <?php endfor;?>
            <td><div class="aligne"><input value="5" name = "coef<?=$nbVariables;?>"  type="text" placeholder="..." id="coef<?=$k;?>"><div class="plus"> <p>X<?=$nbVariables;?></p></div></div></td>
    </tr>

</thead>

    <tbody>
        <?php for ($j = 1; $j <= $nbContraintes; $j++):?>
            <tr>
                    <?php for ($k = 1; $k <= ($nbVariables-1); $k++):?>
                        <td ><div class="aligne"><input value="5" name = "cntr<?=$j.$k;?>"  type="text" placeholder="..." id="cntr<?=$j.$k;?>"><div class="plus"> <p>X<?=$k;?></p> <p>+</p> </div></div></td>
                    <?php endfor;?>
                        <td><div class="aligne"><input value="5" name = "cntr<?=$j.$k;?>"  type="text" placeholder="..." id="cntr<?=$j.$k;?>"> <p>X<?=$nbVariables;?></p></div></td>
                    <td><span>&le;</span</td>
                    <td><div class="aligne"><input value="5" name = "scnd<?=$j;?>"  type="text" placeholder="..." id="scnd<?=$j;?>"></div></td>
            </tr>
        <?php endfor;?>
    </tbody>

</table>

<div class="bouton">
            <button onclick="versCalcul()" type="submit" class="">Valider</button>
            <button type="reset"> Effacer</button>
</div>
