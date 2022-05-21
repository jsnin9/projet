<?php 
    $nbQualite = $_GET['nbQualite'];
?>    


<table>


<thead>
    <tr>
        <th colspan="<?=$nbQualite;?>"> Demande hebdomadaire pour le produit k : Vk exprimé en tonnes. </th>
    </tr>

</thead>
    <tbody>
        <tr>
            <th><span>k</span></th>

            <?php for ($k = 1;  $k <= $nbQualite; $k++ ):?>
                <th><?=$k;?></th>
            <?php endfor;?>
        </tr>

      

            <tr>
                <th><span>Demande</span></th>
                    <?php for ($k = 1; $k <= $nbQualite; $k++):?>
                        <td><input value="0" name = "hebdo<?=$k;?>" type="text" placeholder="..." id="hebdo<?=$k;?>"></td>
                    <?php endfor;?>
            </tr>
    
    </tbody>

    <tfoot>

<tr>
    <th colspan="<?=$nbQualite;?>"> Table 3: Demande hebdomadaire du produit k (en t )</th>
</tr>

</tfoot>

    </table>

<div class="bouton">
            <button onclick="stock()" >Valider</button>
            <button type="reset"> Effacer</button>
</div>
