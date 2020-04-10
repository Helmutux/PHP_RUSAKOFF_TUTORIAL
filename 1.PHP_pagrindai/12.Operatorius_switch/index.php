<!-- 1. Sukurti forma i kuria vartotojas galetu ivesti  skaicius (nuo vieno iki 10)

2. Su switch-case isveskite tekstine skaiciaus reiksme . Tarkim, ivedus 3 butu isvesta "trys"

3. Jei vartotojas iveda skaiciu didesni uz 10 ar mazesni uz 1, sistema pranesa "tokios reiksmes nera" -->

<?php
    if(isset($_GET['number'])) {
        $skaicius = $_GET['number'];
        switch($skaicius){
            case 1:
                echo 'Vienas';
                break;
            case 2:
                echo 'Du';
                break;
            case 3:
                echo 'Trys';
                break;
            case 4:
                echo 'Keturi';
                break;  
            case 5:
                echo 'Penki';
                break;
            case 6:
                echo 'Šeši';
                break;
            case 7:
                echo 'Septyni';
                break;
            case 8:
                echo 'Aštuoni';
                break; 
            case 9:
                echo 'Devyni';
                break; 
            case 10:
                echo 'Dešimt';
            break;
            default:
                echo 'Tokios reiksmes nera';            
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch operatorius</title>
</head>
<body>
    <form action="" method="get">
        <input type="number" name="number">
        <input type="submit" value="pateikti skaiciu">
    </form>
</body>
</html>