<!-- 
1. Parasyti funkcija, kuri priima masyva ir apskaiciuoja jo elementu suma. 
    Jei paduodamas ne masyvas, ar jame nera elementu, ar kai kurie elementai nera skaiciai, grazinama rezultatas false.

2. Sukurti keleta masyvu sukurtai 1 punkte funkcijai patikrinti. 
    Masyvai turi buti ivairus, kad butu galima visapusiskai funkcija patikrinti

3. Perduokite masyvus funkcijai. Jei rezultatas "false", isveskite pranesima "netinkamas masyvas", 
    jei masyvas si skaiciu - praneskite "masyvo elementu suma lygi ..." -->


<?php
    //uzduotis patobulinta - vykdant funkcija gausime patikslinta pranesima kas ne taip su paduodamu masyvu    
    function sumuok($count)
    {
        if(!is_array($count)){
            echo 'Tai nera masyvas!';
            return;
        }
        elseif(count($count)<1){
            echo 'Masyvas neturi elementu, tad ju suma negalima!';
            return;
        }
        $sum = 0;
        
        for($i=0; $i<count($count); $i++){
            if(!is_int($count[$i])){
                echo 'Masyvas savyje turi elementu, kurie nera skaiciai, tad suma negalima!';
                return;
            }
            $sum += $count[$i];

        }
        echo 'Masyvo elementu suma lygi : '.$sum;
    }

    echo '<br>';
    
    //tinkamas elementu sudeciai masyvas
    $arr= [1, 2, 3, 4, 5];

    //netinkami elementu sudeciai masyvai
    $brr = [];
    $err = [1, 2, 5, 2, true];
    $z = 4;

    sumuok($arr);
    echo '<br>';
    sumuok($brr);
    echo '<br>';
    sumuok($err);
    echo '<br>';
    sumuok($z);
?>

