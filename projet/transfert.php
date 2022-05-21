<?php 
    $nbQualite = $_GET['nbQualite'];
    $nbBroyeur = $_GET['nbBroyeur'];
?>    


<table>


<thead>
    <tr>
        <th colspan="<?=$nbQualite;?>"> Les coûts de transfert entre une unité de broyage j et un silo stockant le produit k dépendent de la
localisation des différentes unités. Ces coûts, Tj k , sont exprimés en e par tonne. </th>
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
                        <td><input value="0" name = "trans<?=$j.$k;?>" type="text" placeholder="..." id="trans<?=$j.$k;?>"></td>
                    <?php endfor;?>
                </tr>
        <?php endfor;?>
    </tbody>

    <tfoot>

<tr>
    <th colspan="<?=$nbQualite;?>">Table 5: Coûts de transfert entre un broyeur j et un silo k (en e/t )</th>
</tr>

</tfoot>

    </table>

<div class="bouton">
            <button onclick="versCalcul()" >Valider</button>
            <button type="reset"> Effacer</button>
</div>


<script type="text/javascript" src="click.js"></script>

