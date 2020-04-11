<!-- 
    1. Sukurti trimati asociatyvu masyva

    2. Isveskite ji su print_r()

    3. Parasykite funkcija, kuri isvestu rezultata su print_r(), bet tag'o <pre> viduje

    4. Panaudoti funkcija paduodant jai masyva is 1 punkto

    5. Panaudoti ir suprasti var_dump
-->
<?php
//1.
$masyvas = [
    [
        ['name' => 'Piotr',
        'age' => 32
        ],
        [
        'name' =>'Grisha',
        'aeg' => 25
        ]

    ],
    [
        [
            1, 2, 3, 4
        ],
        [
           'vienas' => 'One',
           'du'=> 'Two',
           'trys' => 'Three',
           'keturi' => 'Four'
        ]

    ],
    [
        [
            false, 0, true, "error"
        ],
        [
            "kazkas", "atsitiko"
        ]
    ]   
        ];
    //2. print_r yra standartine php funkcija, dazniausiai naudojama isvedant i ekrana masyva, kuomet norima matyti sio turini
    // echo '<br>';    
    // print_r($masyvas);//gauname turini. noredami schematiskai pamatyti (jei nerodo) galime naudoti klavisu kompinacija Ctrl+U
       

    //3.
        function printink($x){
            echo '<pre>';
            print_r($x);
            echo '<pre>';
        }

    //4. 
    printink($masyvas);//isves strukturiskai teisingai

    //5.
    var_dump($masyvas);// <-- priemone(php standartine funkcija) suteikianti papildomai info apie visu masyvo elementu tipus ir ilgius
    echo '<br>';

    //6.
    var_export($masyvas);//funkcija analogiska var_dump, bet skirtingai nuo sios isveda rezultata kuris yra pilnavertis phph kodas
?>