<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.5">
    <link href="index.css" rel="stylesheet" />

    <link rel="stylesheet" href="css/resolution.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Document</title>
</head>
<body>
<?php require 'header.php';?>

<div class="grande">
<div class="formul1">


                <div class="">
                    <label for="nbContraintes"></label>
                    <input value="5" type=""name = "nbContraintes" type="text" placeholder="nbContraintes" id="nbContraintes">
                </div>

                <div class="">
                    <label for="nbVariables"></label>
                    <input value="5" name = "nbVariables" type="text" placeholder="nbVariables" id="nbVariables">
                </div>

                <div class="bouton" >
                    <div class="valider">
                        <button onclick="tableau()" type="submit" class="">Valider</button>
                        <button type="reset"> Effacer</button>
                </div>
       

</div>



<div class="formul2" id="formul2"> </div>

</div>




<div class="bas">
     <?php require 'footer.php';?>
</div>

<script type="text/javascript" src="click.js"></script>


        </body>
</html>