<?php
//1. Prideti i ankstesnes uzduoties (Point klases) koda metoda __toString() ir ji realizuoti grazinant toki string'a "Taskas su koordinatemis (x, y)", kur vietoje x ir y turi buti konkrecios reiksmes 
//2. Sukurti 3 skirtingus klases Point objektus ir juos ataizduokite echo pagalba
//3. Realizuoti metoda __get(), kuris, kreipiantis i neegzistuojancia klases savybe z, grazintu pranesima "Klase Point dirba tik dvimateje erdveje"
//4. Analogiskai sukurti metoda __set(), pranesanti analogiska zinia, bandant pakeisti neegzistuojancia z savybe
//5. Realizuoti metoda __call(), kuris veiktu analogiskai 3 punktui tarkim bandant paleisti neegzistuojanti metoda (funkcija). Pvz.: setZ(), ar getZ()
//6. Sukurti Point klase objekta ir padarykite jo klona. Isitikinti, kad klonavimas sekmingas, keiciant abieju savybiu reiksmes ir isvedant i ekrana. Reiksmes turi skirtis

    class Point{

    private static $counter = 0;

    //savybes (public modifikatorius pakeistas i private)
    private $x;
    private $y;

    //konstruktorius
    public function __construct($a, $b){
        $this->x=$a;
        $this->y=$b;
        self::$counter++;//kadangi counter yra static, naudoju ne `->`, o `::`
    }

    //get metodai
    public function getX(){
        return $this->x;
    }
    
    public function getY(){
        return $this->y;
    }
        
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

        //1.Apsirasau 'magic' metoda __toString, grazinanti reikiama reiksme 
    public function __toString(){
        $a = $this->getX();
        $b = $this->getY();
        return $tekstas ="Taskas su koordinatemis ($a, $b)";
    }

        //3.apsirasau metoda __get() pagal nurodytaja salyga. 
        //Jei uzklausoje bus egzistuojanti koordinate, suveiks atitinkamas metodas (getX() arba getY()). Kitu atveju - reikalaujamas pagal uzduoties salyga pranesimas
    public function __get($name)
        {
        if(isset($name) &&  $name == 'x')
            {
            return $this->getX();
            } 
            elseif(isset($name) && $name == 'y')
                {
                return $this->getY();
                }
                else {
                    return 'Klase Point dirba tik dvimateje erdveje';
                    }
        }

        //4. Apsirasau metoda __set() pagal nurodytaja salyga.
        //Jei uzklausoje bus egzistuojanti koordinate, suveiks atitinkamas metodas (setX($a) arba setY($a)). Kitu atveju - reikalaujamas pagal uzduoties salyga pranesimas
    public function __set($name, $value)
    {
    if(isset($name) && $name == 'x')
        {
            return $this->setX($value);
        }
        elseif(isset($name) && $name == 'y')
            {
                return $this->setY($value);
            }
            else {
                return 'Klase Point dirba tik dvimateje erdveje';
                }
    }
        //5. Apsirasau metoda __call(). Jis suveiks, jei bandysime paleisti klaseje neapsirasyta (neegzistuojanti) metoda
    public function __call($method, $args)
    {
        echo 'Metodas neegzistuoja, todel ivykdyti jo nera galimybes';
        // echo "Perduoti parametrai".print_r($args, true); //nebutina kodo eilute
    }

        //6. Apsirasau metoda __clone()
        //jis sukurs identiska objekta klonuojamajam, tik koordinaciu reiksme pakeis +10
    public function __clone()
    {
        $this->x+=10;
        $this->y+=10;
    }
    

    //destruktorius. istrins visus sukurtus objektus ir ju reiksmes
    public function __destruct(){
       echo '';
    }

}
//Klases Point pabaiga. Toliau - metodu panaudojimas _________________________________________________________________________________________

    //2. Sukuriu 3 klases Point objektus ir atvaizduoju su echo
$taskas1 = new Point(10, 20);
$taskas2 = new Point(5, 25);
$taskas3 = new Point(30, 15);

echo '<br>';
echo $taskas1;
echo '<br>';
echo $taskas2;
echo '<br>';
echo $taskas3;
//__toString metodo pagalba ekrane gaunu:
// Taskas su koordinatemis (10, 20)
// Taskas su koordinatemis (5, 25)
// Taskas su koordinatemis (30, 15)


//Tiesiogines kreipties pagalba noriu gauti objekto kooordinaciu reiksme. 
//Suveikia metodas __get(): Jei uzklausoje `x` ar `y`, gaunu reikiam skaiciu, jei kitas simbolis (tarkim `z`), gaunu reikiama pranesima
echo '<br>';
echo 'Trecio objekto x koordinate: ';
echo $taskas3->x;//gausiu prasoma nurodyto objekto koordinate, nes tokia yra

echo '<br>';
echo 'Antro objekto y koordinate: ';
echo $taskas2->y;//gausiu prasoma nurodyto objekto koordinate, nes tokia yra

echo '<br>';
echo 'Trecio objekto z koordinate: ';
echo $taskas3->z;//gausiu pranesima, kad objektas dvimatis (tokios koordinates nera)

//Tiesiogines kreipties pagalba noriu pakeisti egzistuojanciu objekto kooordinaciu reiksmes. 
//suveikia metodas __set():  Jei uzklausoje `x` ar `y`, gaunu norima reiksmiu pakeitima, jei kitas simbolis (tarkim `z`), gaunu reikiama pranesima
echo '<br>';
$taskas2->y=150;
echo 'Pakeista antro objekto y koordinate: ';
echo $taskas2->y;//gausiu prasoma pakeista nurodyto objekto koordinate, nes tokia yra

echo '<br>';
$taskas3->z=150;
echo 'Pakeista trecio objekto z koordinate: ';
echo $taskas3->z;//gausiu pranesima, kad objektas dvimatis (tokios koordinates nera)


//6. Klonuoju 3 susikurta objekta ir isvedu klono koordinates
echo '<br>';
$taskas4 = clone $taskas3;
echo $taskas4; //klonas igavo teisingas koordinates
//keiciu $taskas3 koordinaciu reiksmes ir isvedu patikrinimui tiek taskas3, tiek taskas4, tam, kad isitikinciau, jog taskas4 koordinaets nepakito
$taskas3->setX(125);
$taskas3->setY(250);
echo '<br>';
echo $taskas3;//koordinates pasikeite
echo '<br>';
echo $taskas4;//koordinates nepasikeite
//keiciu taskas4 reiksmes ir vel isvedu
$taskas4->setX(-50);
$taskas4->setY(-300);
echo '<br>';
echo $taskas4;//koordinates pasikeite


//bandau iskviesti neegzistuojant metoda (priskirti reiksme neegzistuojanciai koordinatei)
//jei metodo nesuras, bus iskviesta(s) __call() funkcija(metodas)
echo '<br>';
echo $taskas4->setZ(50);//gaunu __call metode apsirasyta pranesima
?>