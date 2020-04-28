<?php
    //ankstesniame darbe sukurtoje klaseje apsirasyti konstruktoiu priimanti x ir y
    //konstruktoriaus viduje padaryti gaunamu paarmetru priskyrima savybems 
    //apsirasyti get ir set metodus
    //pasitikrinti veikima (susikurti objekta ir isvesti tinkamas reiksmes i ekrana)
    //sukurti destruktoriu

    class Point{

        //savybes
        public $x;
        public $y;

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
            echo 'Objektas ir jo reiksmes istrinti';
        }
    
    } 

    //susikuriu nauja objekta pasinaudodamas klase (konstruktoriumi)   
    $taskas = new Point(4, 5);

    //isvedu i ekrana reiksmes
    echo '<br>';
    echo ('Tasko x koordinate yra: '.$taskas->x.'<br>');
    echo ('Tasko y koordinate yra: '.$taskas->y.'<br>');

    //panaudoju get funkcijas
    echo $taskas->getX().'<br>';
    echo $taskas->getY().'<br>';
    
    //panaudoju set funkcijas
    $taskas->setX(30);
    $taskas->setY(50);

    //isvedu i  ekrana naujas reiksmes
    echo $taskas->getX().'<br>';
    echo $taskas->getY().'<br>';
?>