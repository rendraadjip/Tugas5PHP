<?php // Awalan dari sebuah script PHP 
$x = 5; //deklarasi variabel x memiliki nilai 5
$y = 10; //deklarasi variabel y memiliki nilai 10

function myTest() { //fungsi didalam ruang lingkup lokal
    global $x, $y; //deklarasi variabel x dan variabel y pada global didalam ruang lingkup
    $y = $x + $y; //sebuah kode penjumlahan antara variabel x dan variabel y
} 

myTest();  // run function
echo $y; // output the new value for variable $y (berisi output berupa hasil penjumlahan variabel x dan variabel y)
?> <!--Akhiran dari sebuah script PHP-->
