
<!-- 1. Sukurkite anonimine funkcija ir patalpinkite ja kintamajame. Funkcija turi gebeti priimti masyva ir grazinti jo elementu vidurki

Создайте функцию-генератор, принимающую двумерный массив и функцию. 
Эта функция на каждой итерации должна возвращать среднее значение текущего массива.

Создайте двумерный массив из чисел.
С помощью foreach выведите все средние значения элементов двумерного массива. -->
<?php

    $array = [5, 15, 5, 15, 15, 5, 10, 10];
    //1.
    $average = function ($array){
        $suma = 0;
        for($i=0; $i<count($array); $i++){
            $suma +=$array[$i];
        }
        return $suma/count($array);
    }
    echo $average;
    //2.

    
    //NEATLIKTA. TEMA nesuprasta
?>