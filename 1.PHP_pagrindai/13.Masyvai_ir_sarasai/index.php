<!-- 1. Sukurti masyva is 10-ties skirtingu skaiciu
2. Surasti ir isvesti suma visu masyvo skaiciu su for ciklu
3. Surasti ir isvesti suma visu masyvo skaiciu su while ciklu -->
<?php
    $array = [15, 7, 87, 95, 25, 36, 64, 2, 10, 88];
    echo '<br>';
    echo "Duotas masyvas: \$array = [15, 7, 87, 95, 25, 36, 64, 2, 10, 88];";
    echo '<br>';
    echo 'Masyvo elementu suma paskaiciuota su for ciklu: ';
    echo '<br>';
    $sum = 0;
    for ($i=0; $i<count($array); $i++){
        $sum +=$array[$i];     
    }
    echo ($sum);
    echo '<br>';
    echo 'Masyvo elementu suma paskaiciuota su while ciklu: ';
    echo '<br>';
    $sum = 0;
    $i = 0;
    while ($i<count($array)){
        $sum +=$array[$i];
        $i++; 
    }
    echo ($sum);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masyvai ir sarasai</title>
</head>
<body>
    
</body>
</html>