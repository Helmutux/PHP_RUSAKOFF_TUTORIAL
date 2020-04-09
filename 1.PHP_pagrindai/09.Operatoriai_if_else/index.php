<!-- Sukurti kintamaji su savo amziumi (50)

Isveskite i ekrana eilute "Man 50 metu", jei man 50 metu, arba eilute "Man maziau nei 50 metu" jei kintamasis maziau nei 50, arba eilute "Man daugiau nei 50 metu" jei kintamasis didesnis uz 50.

Sukurti paprasta amziaus ivedimo forma

Gaukite is formos duomenis ir irasykite juos i kintamaji

Ziurekite kaip keiciasi isvedamas tekstas priskiriant skirtingas kintamajam reiksmes

Padaryti visa tai naudojant if ir else -->

<?php
    $myage = 52;
    if($myage == 50){
        echo "Man $myage metu";
    }
    elseif($myage > 50){
        echo "Man daugiau nei 50 metu";
    } else {
        echo "Man maziau nei 50 metu";
    }
?>