<?php
//1,2.(Uzduoties pirmos, antros dalies ispildymas)
function myfun($text){
    $masyvas = [];  
   if(strlen($text)>0){
        for ($i=0; $i<strlen($text); $i++){
            array_push($masyvas, $text[$i]);
        }

        for($j=0; $j<count($masyvas); $j++){
            echo ($masyvas[$j]);
            $j++;
        } 
    }
}
?>