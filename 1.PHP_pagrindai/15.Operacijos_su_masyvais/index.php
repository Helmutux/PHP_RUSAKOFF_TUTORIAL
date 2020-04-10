<!-- 
1. Sukurti 2 masyvus su sveikais skaiciais. pirmaji is 5, antraji is 7 elementu

2. Sujunkite abu masyvus i viena

3. Isveskite i ekrana visus lyginius skaicius is naujojo masyvo -->

<?php
    //1. sukuriu su masyvus pagal salyga
    $array1 = [2, 45, 75, 12, 22];
    $array2 = [774, 5, 65, 100, 37, 4, 48];
    // $array3 = $array1+$array2;
    // echo'<br>';
    // print_r($array3);//sudejus tokiu budu masyvo elementai su vienodu key nesusideda, prisides tik elementai, kuriu 1 masyve nebuvo
    // echo'<br>';

    //2. apsjungiu masyvus, for ciklo pagalba prie pirmojo pridedamas antrojo elementus
    for($i=0; $i<count($array2); $i++){
        array_push($array1, $array2[$i]);
    }

    //3. is naujai gauto apjungto masyvo i nauja masyva pervedu visus lyginius skaicius, ir ji atvaizduoju
    $lygus = [];
    for($i=0; $i<count($array1); $i++){
        if($array1[$i]%2 == 0){
        array_push($lygus, $array1[$i]);
        }
    }
    print_r($lygus);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operacijos su masyvais</title>
</head>
<body>
    
</body>
</html>