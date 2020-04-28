<?php
    //sukurti klase point (taskas). prideti i ja 2 savybes - x ir y (koordinates). Sukurti point tipo objekta ir priskirti savybems x ir y reiksmes 3 ir 5. Isvesti sukurto objekto x ir y reiksmes i ekrana
    class Point{

        public $x;
        public $y;

    }

    $taskas = new Point();

    $taskas->x = 5;
    $taskas->y = 3;
    echo '<br>';
    echo $taskas->x.'<br>';
    echo $taskas->y.'<br>';

?>