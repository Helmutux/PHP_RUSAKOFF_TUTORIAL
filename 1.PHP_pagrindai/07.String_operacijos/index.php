<!-- 1.Sukurti 2 String tipo kintamuosius: "mano amzius" ir "50 metu"
2. Sukurti trecia string tipo kintamajai kaip pirmo ir antro string kintamojo konkatenacija (su tarpu tarp ju)
3. Isvesti treciaji kintamaji i ekrana
4. Pavaizduoti ekrane teksta, kuriame butu 3 pasvirus bruksniai (\\\).

5. Atidaryti tekstini faila su "bloknotu" ar kitu redaktoriumi naudojant php scripta //keista uzduotis, ne pagal tema. atsakas butu toks:
$file = file_get_contents("text.txt");
$file = iconv("windows-1251", "utf-8", $file);
echo $file; -->



<?php
$string1 = 'Mano amzius';
$string2 = '50 metu';
$string3 = $string1.' '.$string2;
echo '<br>';
echo $string3;
echo '<br>';
echo 'Atvaizduoju data naudodamas tris bruksnius: 2020\\04\\09\\';
echo '<br>';

//papildoma info is pamokos
$res = `date`;//nauja! nezinoma! paanudojus atvirkscias viengubas kabutes gauname komanda
echo $res;//siuo atveju isves esama laika su pasiulymu ivesti nauja laika
?>