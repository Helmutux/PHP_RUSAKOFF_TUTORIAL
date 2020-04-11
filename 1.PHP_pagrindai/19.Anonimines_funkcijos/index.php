<!-- 
1. Sukurti anonimine funkcija ir ikelkite ja i kintamojo reiksme. Funkcija turi tiesiog grazinti dvieju jai duodamu parametru reiksme.
2. Iskvieskite susikurta funkcija kintamojo pagalba 
3. Sukurkite dar viena funkcija, kuri priima masyva su lyginiu elementu kiekiu, taip pat priima antru parametru funkcja. 
    Viduje susikurtos funkcijos perrinkite is karto po du perduodamo masyvo elementus ir isveskite rezultata anudojantis parametruose perduota funkcija, perduodant siai tuos 2 masyvo elementus.
4. Iskvieskite funkcija is 3 uzduoties ir duokite jai kaip parametrus masyva is 4 skaiciu, bei funkcija is pirmos uzduoties 
-->

<?php
    //1.
    //2.
    $x = function($a, $b){
        return $a+$b;
    };
    echo $x(15, 5);
  

    //3.
    $array = [5, 5, 45, 15, 3, 7, 12, 18]; 

    function sumaArray($array, $func)
        {
            if(!is_array($array) && (count($array))%2 != 0){
                echo 'Parametruose butina masyvas su lyginiu elementu skaiciumi';
            }
            else{
            
            for($i=0; $i<count($array); $i+2){
            echo $func($array[$i], $array[$i+1]) ;
                }
            }
        }
    echo sumaArray($array, function($x1,$y1){
        $array2 = [];
        array_push($array2, ($x1 + $y1));
        return $array2;
    });
        
?>
<!-- NEATLIKTAS! -->