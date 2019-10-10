<?php // Awalan dari sebuah script PHP 
$cars = array("Volvo", "BMW", "Toyota");  //Sebuah array menyimpan 3 nilai (elemen) dalam satu variabel tunggal
sort($cars); //sort() yaitu array semacam dalam urutan abjad (menaik dari a-z)

$clength = count($cars);
for($x = 0; $x < $clength; $x++) { //array ke-0 sampai semua elemen pada variabel $cars yaitu sampai array ke-2
    echo $cars[$x]; //output pada semua elemen yang ada di variabel $cars berdasarkan urutan abjad (menaik dari a-z)
    echo "<br>";
}
?> <!--Akhiran dari sebuah script PHP-->