<?php
    //sukurti klase point (taskas). prideti i ja 2 savybes - x ir y (koordinates). Sukurti point tipo objekta ir priskirti savybems x ir y reiksmes 3 ir 5. Isvesti sukurto objekto x ir y reiksmes i ekrana
    class Point{

        //susikuriu savybes
        public $x;
        public $y;

    }

    // sukuriu nauja objekta pasinaudodamas susikurta Point klase
    $taskas = new Point();

    //priskiriu naujai susikurto objekto savybems reiksmes
    $taskas->x = 5;
    $taskas->y = 3;
    
    //isvedu reiksmes i ekrana
    echo '<br>';
    echo $taskas->x.'<br>';
    echo $taskas->y.'<br>';

?> 