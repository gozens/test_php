<?
include 'module.php';

$key = [
    'parfume' => $parfurm ,
    'couvert' => $couvert,
    'supl' => $spl
];
$prix = [];

foreach ($key as $keys => $value) {
    if (isset($_GET[$keys])){
        $i = 0;
        foreach ($_GET[$keys] as $name => $values) {

            $i += $value[$values];
        }
        $prix[] = $i;
    }
}


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <link rel="stylesheet" href="vente.css">
  
</head>
<body>
    <header>
        <div class="titre">cette commande vous coutera </div>
    </header>
    <div class="res">
        <div class="items vt">
            montant parfum : <span>$ <?= @$prix[0]? @$prix[0] : 0 ?> </span>
        </div>
        <div class="items vt">
            montant cornet : <span>$ <?=  @$prix[1]? @$prix[1] : 0?> </span>
        </div>
        <div class="items vt">
            montant supplement : <span>$ <?= @$prix[2]? @$prix[2] : 0?> </span>
        </div>
    </div>
    <center>
        <div class="prix">
            <span>$<?= array_sum($prix)?></span> 
        </div>
        <div class="btn">
           <a href="/">nouvelle commande</a>
        </div>
    </center>

</body>
</html>