<?php // Awalan dari sebuah script PHP 
$x = 75;//deklarasi variabel x
$y = 25;//deklarasi variabel y
 
function addition() {
    /*
    $GLOBALS adalah  variabel global super yang digunakan untuk mengakses variabel global dari mana saja 
    */
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y']; // x + y = z(hasil)
}
 
addition();
echo $z; //output hasil penjumlahan
?> <!--Akhiran dari sebuah script PHP-->