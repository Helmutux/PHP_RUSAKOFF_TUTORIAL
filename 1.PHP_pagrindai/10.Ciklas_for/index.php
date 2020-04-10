<!-- 1. Sukurti paprasciausia forma skaiciams ivesti

2. Jei vartotojas i ves skaiciu maziau uz nuli, tai isvesti pranesima "skaicius turi buti lygus ar didesnis uz nuli"

3. Jei skaicius ivestas korektiskai, tai isveskite ivestojo skaiciaus faktoriala
-->
<?php
echo '<br>';
    if(isset($_POST['number'])) {
        $numer = $_POST['number']; 
        $factorial = 1;
            if($numer < 0){
                echo 'skaicius turi buti lygus ar didesnis uz nuli';
            }
            else{
                for($i=1; $i<=$numer; $i++) 
                {
                $factorial *=$i;
                
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
    <title>Ciklas "for"</title>
</head>
<body>
    <form action="" method="post">
        <label for="number">Pasirinkite skaiciu</label>
        <input type="number" name="number">
        <input type="submit" value="skaiciuoti faktoriala">
    </form>
</body>
</html>
