<!-- Sukurti du kintamuosius su skaiciais

Isveskite rezultatus ju palyginimo: su >, <, ==, ===.

Parasykite pasirinktini logini palyginima naudodami skliaustelius, neigimas, ir, arba, be arba (tiksliai tik taip)

Isvesti i ekrana. Pasilyginti su paties supratimu (ar to tikejotes rasant) -->

<?php
    $number1 = 45;
    $number2 = 15;
    $string = '15';
    echo '<br>';
    echo "Ar skaicius \$number1 yra didesnis uz \$number2 ? (Jei true, gausime 1):".($number1>$number2);//true
    echo '<br>';
    echo "Ar skaicius \$number1 yra mazesnis uz \$number2 ? (Jei true, gausime 1):".($number1<$number2);//false
    echo '<br>';
    echo "Ar skaicius \$number2 yra lygus \$string?".($number2==$string);//reiksmes lygios, tad true
    echo '<br>';
    echo "Ar skaicius \$number2 yra ekvivalentiskas \$string?".($number2===$string);//reiksmes lygios, bet tipai skiriasi tad false
    echo '<br>';
    echo "Ar logine konstrukcija yra true? :".((!($number1>$number2) && ($number2===$string)) xor ($string*3)==$number1);

?>