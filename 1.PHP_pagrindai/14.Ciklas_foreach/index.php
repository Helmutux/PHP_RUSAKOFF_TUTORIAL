<!-- 1. Sukurti asociatyvu darbuotoju masyva, kur kiekvienas darbuotojas aprasytas dviem parametrais - vardas ir amzius.(realiai gausime dvimati masyva)

2. Naudojant cikla foreach surasti vidutini visu darbuotoju amziu ir isvesti i ekrana

(pastaba) amziaus vidurkiui rasti butina  gauti suma visu amziu ir padalinti is darbuotoju skaiciaus. -->

<?php
    $darbuotojai = [
        [
        "name"=>"Jonas",
        "age" => 30
        ],
        [
        "name"=>"Petras",
        "age" => 25
        ],
        [
        "name"=>"Vytas",
        "age" => 40
        ],
        [
        "name"=>"Darius",
        "age" => 55
        ],
        [
        "name"=>"Kostas",
        "age" => 42
        ]
    ];
    print_r($darbuotojai);
    echo '<br>';
    
        $sum = 0;
        for($i=0; $i<count($darbuotojai); $i++){
            foreach( $darbuotojai[$i] as $key => $value){
            if($key=='age'){
                $sum +=$value;
                }
            }
        }
    echo ('Vidutinis darbuotoju amzius yra '.($sum/count($darbuotojai)).' metu.');
    echo '<br>';
?>