<!-- Sukurti kintamaji su savo amziumi (50)

Isveskite i ekrana eilute "Man 50 metu", jei man 50 metu, arba eilute "Man maziau nei 50 metu" jei kintamasis maziau nei 50, arba eilute "Man daugiau nei 50 metu" jei kintamasis didesnis uz 50.

Sukurti paprasta amziaus ivedimo forma

Gaukite is formos duomenis ir irasykite juos i kintamaji

Ziurekite kaip keiciasi isvedamas tekstas priskiriant skirtingas kintamajam reiksmes

Padaryti visa tai naudojant if ir else -->

<?php

    //reiksmes paemimas per GET
    // 1.
    // if (isset($_GET['amzius'])) $myage = $_GET['amzius'];//kodas skaitomas: jei get uzklausa ne tuscia, kintamajam $myamzius priskiriama gaunama reiksme
    // else $myage = 50; //kitu atveju (get nieko neduoda), kintamasis turi reiksme 50

    //galima uzrasyti ir trumpiau:
    // 2.
    $myage = isset($_GET['amzius']) ? $_GET['amzius'] : 50;
    
    // ir dar trumpiau (siai uzduociai netinka) jei dirbam su loginem prasmem - laukiam tik 0 arba 1
    // 3.
    // $myage = isset($_GET['amzius']) ?? false;
    echo '<br>';
    if($myage == 50){
        echo "Man $myage metu";
    }
    elseif($myage > 50){
        echo "Man daugiau nei 50 metu";
    } else {
        echo "Man maziau nei 50 metu";
    }

    //papildomai susigalvota uzduotis su dviem kintamaisiais, sudeties/atimties veiksmu gaunamu per get ir if, elseif bei else 
    $number1 = 5;
    $number2 = 10;
    echo '<br>';
    echo "Turime kintamaji: number1 = ".$number1.'<br>';
    echo "Turime kintamaji: number1 = ".$number2.'<br>';
    
    $com = isset($_GET['com']) ? $com  = $_GET['com'] : false;

    if($com == 'suma') 
    {
        echo ($number1 + $number2);
    }
    elseif($com == 'daugyba')
    { 
        echo ($number1 * $number2);
    } else 
    {
        echo "Veiksmas nenurodytas";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operatoriai_if_else</title>
</head>
<body>
    <!-- apsirasom metoda get -->
    <form action="" method="get">
        <input type="number" min="0" name="amzius"> <!--ieskosim pagal name -->
        <input type="submit" value="pateikti amziu">
    </form>

    <!-- galima perguoti info ir per nuorodos adresa: com => perduos reiksme po = -->
    <a href="?com=suma">Sudeti</a>
    <a href="?com=daugyba">Daugyba</a>
</body>
</html>