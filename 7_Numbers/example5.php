<?php // Awalan dari sebuah script PHP 

/*
is_numeric () fungsi dapat digunakan untuk menemukan apakah suatu variabel numerik. 
fungsi mengembalikan nilai true jika variabel adalah angka atau string numerik, false jika tidak
*/
$x = 5985; //deklarasi variabel x
var_dump(is_numeric($x)); //output true karena x merupakan data numerik

$x = "5985"; //deklarasi variabel x
var_dump(is_numeric($x)); //output true karena x merupakan data numerik

$x = "59.85" + 100; //deklarasi variabel x
var_dump(is_numeric($x)); //output true karena x merupakan data numerik

$x = "Hello"; //deklarasi variabel x
var_dump(is_numeric($x)); //output false karena x merupakan data non numerik

?> <!--Akhiran dari sebuah script PHP-->
