<?php
//1.Prideti i susikurta Point klase statine savybe counter (skaitiklis) su pradine reiksme 0 
//2.prideti i konstruktoriu sios statines savybes inkrementa. tai bus objektu skaitiklis
//3.prideti statini metoda grrazinanti counter savybes reiksme
//4.sukurti 3 objektus ir isveskite counter reiksme. Isitikinkite, kad ji lygi 3

class Point{

        //1.susikuriu private static savybe counter
    private static $counter = 0;

    //savybes (public modifikatorius pakeistas i private)
    private $x;
    private $y;

    //konstruktorius
    public function __construct($a, $b){
        $this->x=$a;
        $this->y=$b;
        //2.i konstruktoriu ikeliu counter savybes inkrementa
        self::$counter++;//kadangi counter yra static, naudoju ne `->`, o `::`
    }

    //get metodai
    public function getX(){
        return $this->x;
    }
    
    public function getY(){
        return $this->y;
    }
        //3.susikuriu counter grazinimo metoda
    public function getCounter(){
        return self::$counter;//kadangi counter yra static, naudoju ne `->`, o `::` kartu su self (vietoje this)
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

//4. susikuriu 3 Point klases objektus
$taskas1 = new Point(10, 20);
$taskas2 = new Point(5, 10);
$taskas3 = new Point(25, 5);

//isvedu i ekrana counter reiksme 
echo 'Klase `Point` buvo panaudota sukuriant '.Point::getCounter().' objektus';

?>