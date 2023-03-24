<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <link rel="stylesheet" href="vente.css">
   <style>
    .container .btn a{
        margin: 0;
        padding: 0;
    }
    .items{

        position: relative;
    }
    label{
        margin: 7px 0;
        display: inline-block;

    }
    label span{
        font-size: 20px;
        position: absolute;
        right: 0;
    }
   </style>
</head>
<body>
    <header>
        <div class="titre">consultation de l'étiquette </div>
    </header>
    <div class="container">

        
        <div class="items" id="parfum">
            <div class="tit">onglet parfurm</div>
            <?
                include 'module.php';
                foreach ($parfurm as $key => $value) :
            ?>
                <label for="fr"><?= $key?> <span>$<?=$value?></span></label><br>
            
            <?endforeach?>

        </div>
        <div class="items" id="cornets">
        <div class="tit">onglet cornet</div>
        <? foreach ($couvert as $key => $value) :?>
            <label for="fr"><?= $key?> <span>$<?=$value?></span></label><br>
        <?endforeach?>
        </div>
        <div class="items" id="sup">
        <div class="tit">onglet supplement</div>
        <? foreach ($spl as $key => $value) :?>
            <label for="fr"><?= $key?> <span>$<?=$value?></span></label><br>
        <?endforeach?>
        </div>
        <center>
            <div class="btn">
                <a href="/"><input type="submit" value="commander"></a>
            </div>
        </center>
        <a href="/tarif_vente.php" class="tarif">tarif</a>
    </div>
</body>
</html>