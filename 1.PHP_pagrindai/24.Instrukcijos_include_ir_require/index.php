<!-- 
1. apsirasyti funkcija atliekancia veiksmus is 23 uzduoties (t.y. priima eilute ,  apdoroja ir grazina ja be simboliu lyginese pozicijose).
2. Patalpinti funkcija i atskira faila, kuri padeti i direktorija 'lib' salia sio failo
3. Index.php faile pajungti susikurta funkcija apdorojant is formos gaunamus duomenis
 -->

<?php
require 'lib/functions.php';  //3.
if(isset($_POST['myform'])){
    $text = $_POST['manotekstas'] ?? false;
    echo 'Tekstas gautas!';
    echo '<br>';
    myfun($text); //issikvieciam veiksmu algoritma (funkcija is atskiro failo)
}
?>
<?php
    include 'form.php';//issikvieciam kodo dali(uzklausos forma) is kito failo
?>

<!-- 
    Pastaba:
        Skirtumo tarp include ir require praktiskai jokio - abu iterpia koda is kito failo. 
        Tik vienas niunsas kitoks - jei failas nerastas, tai 'include' pranes apie klaida, ir toliau bus vykdomas toliau einantis kodas.
        'Require' atveju, taip pat gausim pranesima apie klaida, bet tolimesnis kodo vykdymas bus sustabdytas.

    Pastaba 2:
        egzistuoja instrukcija require_once ir include_once. Naudojamos siekiant to paties, bet siekiant apsidrausti nuo pakartotinio kodo isvedimo.
 -->