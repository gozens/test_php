<?
    // replacer un ou plusieur mots pas un autre dans un phrase
    function tri_word($no_word,$let){

        $r = [];
        foreach ($no_word as $word ) {
            $i = str_replace($let,'*',$word);
            array_push($r,$i);
        }
        return $r;
    }
    // convertion un de base 10 a la base 2
    function binaire($var ) {
        $b = '';
        while ($var > 0){
            
            $b = (string)($var%2) .$b;
            $var = (int)($var / 2);
        }
        return $b;
    }

    function chk($ch){
        return @$_POST['color'][0] == $ch ? 'checked' : '';
    }

    $parfurm = [
        'fraise' => 3,
        'chocolat' => 4,
        'vanille' => 1.5
    ];
    $couvert = [
        'cornet' => 2,
        'pot' => 5
    ];
    $spl = [
        'ch' => 4,
        'chan' => 2.5
    ];