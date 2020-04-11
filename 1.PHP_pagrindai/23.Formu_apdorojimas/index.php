<!-- 
1. Sukurti forma su metodu post 
2. Formoje turi buti teksto sritis (textarea) ir submit mygtukas
3. Priimantis kodas turi gebeti priimti string eilute is textarea
4. Sukurti masyva, kurio kiekvienas elementas butu simbolis is gauto teksto
5. Istrinti kas antra elementa is sukurto masyvo
6. Isvesti likusisu masyvo elementus i viena eilute ir aprodyti ekrane
-->

<?php
    //3.
    if(isset($_POST['myform'])){
        $text = $_POST['manotekstas'] ?? false;
        echo 'Tekstas gautas!';
        echo '<br>';   
        $masyvas = [];  
    //4.
        if(strlen($text)>0){
            for ($i=0; $i<strlen($text); $i++){
                array_push($masyvas, $text[$i]);
            }
           
            echo '<br>';
    //5.
            for($j=1; $j<count($masyvas); $j++){
                echo ($masyvas[$j]); //6.
                $j++;
            }
            }
        }
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Darbas su formomis</title>
</head>

<body>
    <!-- 1, 2 -->
    <form action="<?=$_SERVER['REQUEST_URI']?>" method="post" name="myform">
        <textarea name="manotekstas" cols="30" rows="10"></textarea>
        <input type="submit" value="Siusti teksta" name="myform">
    </form>
</body>

</html>
