<?php // Awalan dari sebuah script PHP 
$x = 5; //deklarasi variabel x memiliki nilai 5
$y = 10; //deklarasi variabel y memiliki nilai 10

function myTest() {
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y']; // variabel global x + variabel global y = y(hasil)
} 

myTest();
echo $y; // output hasil jumlah variabel x dan variabel y
?> <!--Akhiran dari sebuah script PHP-->
