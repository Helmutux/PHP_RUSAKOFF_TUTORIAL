
<!-- 1. Sukurti paprasciausia forma skaiciams ivesti

2. Jei vartotojas i ves skaiciu maziau uz nuli, tai isvesti pranesima "skaicius turi buti lygus ar didesnis uz nuli"

3. Jei skaicius ivestas korektiskai, tai isveskite ivestojo skaiciaus faktoriala while ciklo pagalba

4. Suskaiciuokite ir isveskite i ekrana suma visu lyginiu skaiciu nuo 10 iki 40. t.y 10+12+14+...36+38+40

-->
<?php
echo '<br>';
$k=10;
$n=40;
$sum=$k;
while($k<$n)
{   
    $k+=2;
    $sum +=$k; 
}
echo ('visu lyginiu skaiciu nuo 10 iki 40 suma yra lygi:'.$sum);

echo '<br>';
    if(isset($_POST['number'])) {
        $numer = $_POST['number']; 
        $factorial = 1;
            if($numer < 0){
                echo 'skaicius turi buti lygus ar didesnis uz nuli';
            }
            else{
                $i=1;
                while($i<=$numer) 
                {
                $factorial *=$i;
                $i++;
                }
                print_r('Duotojo skaiciaus faktorialas yra: '.$factorial.'<br>');
            }   
        }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciklas "while"</title>
</head>
<body>
    <form action="" method="post">
        <label for="number">Pasirinkite skaiciu</label>
        <input type="number" name="number">
        <input type="submit" value="skaiciuoti faktoriala">
    </form>
</body>
</html>