<!-- 
1. Sukurti du int tipo kintamuosius

2. Parasykite funkcija, kuri paims 1 punkte sukurtus kintamuosius ir galetu suskaiciuoti bei isvesti ju suma

3. Iskvieskite sukurta funkcija
 -->

 <?php
    $int1 = 20;
    $int2 = 30;

    function sumavimas($a, $b)
    {
        echo ('Pateiktu kintamuju suma:'. ($a + $b));
    }
    sumavimas($int1, $int2);

 ?>
<!-- 
 4. Sukurkite int kintamaji x 
 5. Sukurkite funkcija, pakeiciancia ko reiksme vienetu
 6. Iskvieskite funkcija ir isitikinkite ar veikia, jei ne, panaudokite globalius kintamuosius -->


 <?php
    $x = 10;

    function pliusvienas() 
    {
        //galimi du budai
        //1.
        global $x; //sukuriamas GLOBALUS kintamasis
        $x++;
        //2.
        // $GLOBALS['x']++;

        //abiem atvejais funkcijoje esancio ir paduodamo kintamojo vardai turi sutapti
    }

    pliusvienas($x);
    echo $x;
    echo '<br>';
 ?>
<!-- 
 7. Sukurti funkcija, kurios viduje butu kintamasis keiciantis reiksme kiekviena karta isvieciant funkcija
 8.Isbandyti funkcija praktiskai -->

 <?php
    function counteris()
    {
        static $count = 0; //sukuriamas STATINIS kintamasis, nepasiekiamas funkcijos isoreje, bet atsimenantis savo reiksme(s pokycius) funkc.viduje
        $count++;
        return $count;
    }
    echo counteris().'<br>';
    echo counteris().'<br>';
    echo counteris().'<br>';
    echo counteris().'<br>';
 ?>
