<?php // Awalan dari sebuah script PHP 
function myTest() { //fungsi didalam ruang lingkup lokal
    //Sebuah variabel dideklarasikan didalam fungsi yang memiliki lingkup lokal
    $x = 5; // local scope
    echo "<p>Variable x inside function is: $x</p>"; //deklarasi variabel diatas dapat diakses disini, karena didalam fungsi
} 
myTest(); //fungsi diluar ruang lingkup lokal

// using x outside the function will generate an error
echo "<p>Variable x outside function is: $x</p>";//tidak dapat mengakses deklarasi variabel, karena diluar fungsi (outside function)
?> <!--Akhiran dari sebuah script PHP-->
