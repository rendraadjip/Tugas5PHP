<?php // Awalan dari sebuah script PHP 
//Sebuah variabel dideklarasikan di luar fungsi yang memiliki lingkup lokal
$x = 5; // global scope
 
function myTest() { //fungsi didalam ruang lingkup lokal
    // using x inside this function will generate an error
    echo "<p>Variable x inside function is: $x</p>"; //tidak dapat mengakses deklarasi variabel, karena didalam fungsi (inside function)
} 
myTest(); //fungsi diluar ruang lingkup lokal

echo "<p>Variable x outside function is: $x</p>"; //deklarasi variabel diatas dapat diakses disini, karena diluar fungsi
?> <!--Akhiran dari sebuah script PHP-->
