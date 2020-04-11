

<!--
REKURSIJA - funkcijos iskvietimas savo pacios viduje 
1. Parasyti rekursyvine funkcija, kuri priimtu 2 parametrus: a ir b, bei grazintu skaiciu lygu a pakelta b laipsniu.
2. Iskvieskite ir patikrinkite funkcija
pastaba: esmine eilute bus kazkas tokio - return $a * func($a, $b – 1); - t.y. skaiciavimas butu gilyn iki tol kol b netaps nuliu ir negrazins 1.. 
-->
<?php
    function func($a, $b)
    {
        if($a<=0 || $b<0){
            echo 'Parametrais turi buti sveiki teigiami skaiciai';
        }
        elseif($b !== 0) {
            return $a * func($a, $b - 1);
        } 
        return 1;
    }
    echo '<br>';
    echo func(3,0).'<br>';
    echo func(3,5).'<br>';
    echo func(4,7).'<br>';  
?>
<!-- 
3. Parasyti rekursine funkcija faktorialui apskaiciuoti
4. Isbandyti funkcija 
-->

<?php
    function factor($f)
    {
        if($f <= 1) return 1;
        return $f * factor($f - 1);
    }
    echo '<br>';
    echo factor (5);
    echo '<br>';
    echo factor (8);
    echo '<br>';
    echo factor (12);
?>