<!-- 
    Panaudojant globalu kintamaji $_SERVER isvesti informacija :
    "Mano IP adresas yra - xxxxxxx ,
    mano naudojama narsykle yra - xxxxxxx." 
    
-->
<?php
    
    
    echo 'Mano IP adresas yra - '.$_SERVER['SERVER_ADDR'].',<BR>';
    echo 'mano naudojama narsykle yra - '.$_SERVER['HTTP_USER_AGENT'].'.<BR>';
    // ksort($_SERVER); //del patogumo surusiuoju pagal key 
    // print_r($_SERVER);//perziureti visus parametrus galima cia
?>