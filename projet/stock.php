<?php 
    $nbQualite = $_GET['nbQualite'];
?>    


<table>


<thead>
    <tr>
        <th colspan="<?=$nbQualite;?>">Pour le produit k le stock initial (disponible en début de semaine), S Ik , et le stock de sécurité, SSk ,
dont on doit disposer en fin de semaine, exprimés en tonnes, sont fournis par le tableau suivant. </th>
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
                <th><span>Stock initial</span></th>
                    <?php for ($k = 1; $k <= $nbQualite; $k++):?>
                        <td><input value="0" name = "si<?=$k;?>" type="text" placeholder="..." id="si<?=$k;?>"></td>
                    <?php endfor;?>
            </tr>


            <tr>
                <th><span>Stock de sécurité</span></th>
                    <?php for ($k = 1; $k <= $nbQualite; $k++):?>
                        <td><input value="0" name = "ss<?=$k;?>" type="text" placeholder="..." id="ss<?=$k;?>"></td>
                    <?php endfor;?>
            </tr>
    
    </tbody>

    <tfoot>

<tr>
    <th colspan="<?=$nbQualite;?>"> Table 4: Stocks initial et de sécurité du produit k (en t )</th>
</tr>

</tfoot>
    </table>

<div class="bouton">
            <button onclick="transfert()" >Valider</button>
            <button type="reset"> Effacer</button>
</div>
