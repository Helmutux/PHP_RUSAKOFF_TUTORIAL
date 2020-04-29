<?php
// paimti koda is ankstesnes uzduoties. pakeisti savybiu modifikatorius is public i private
//ismeginti tiesiogini savybiu paiekima. suprasti kas kodel nepavyksta
//pasinaudoti metodais GET ir SET pasiekiant ir pakeiciant private modifikatoriumi pazymetas savybes. pakeistas savybes atvaizduoti
class Point{

    //savybes (public modifikatorius pakeistas i private)
    private $x;
    private $y;

    //konstruktorius
    public function __construct($a, $b){
        $this->x=$a;
        $this->y=$b;
    }

    //get metodai
    public function getX(){
        return $this->x;
    }
    
    public function getY(){
        return $this->y;
    }

    //set metodai
    public function setX($a){
        $this->x = $a;
    }
    public function setY($a){
        $this->y = $a;
    }

    //destruktorius. istrins visus sukurtus objektus ir ju reiksmes
    public function __destruct(){
       echo '';
    }

}

//susikuriu Point klases objekta
$taskas = new Point(10, 20);

//bandau pasiekti susikurto objekto savybes.
//gaunu klaida, nes savybiu modifikatorius private neleidzia ju pasiekti
    //echo $taskas->x;
    //echo $taskas->y;

//pasinaudoju susikurta GET funkcijomis ir savybiu reiksmes pasiekiu
echo '<br>X reiksme: <br>';
echo $taskas->getX();

echo '<br>Y reiksme: <br>';
echo $taskas->getY();

//pasinaudoju susikurtomis SET funkcijomis ir keiciu savybiu reiksmes
$taskas->setX(95);
$taskas->setY(25);
    
//isvedu naujas savybiu reiksmes vel naudodamas GET funkcijas
echo '<br>Nauja X reiksme: <br>';
echo $taskas->getX();

echo '<br>Nauja Y reiksme: <br>';
echo $taskas->getY();
?>