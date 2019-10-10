<?php // Awalan dari sebuah script PHP 
$cars = array("Volvo", "BMW", "Toyota"); //Sebuah array menyimpan 3 nilai (elemen) dalam satu variabel tunggal

rsort($cars);//rsort() yaitu array semacam agar descending (menurun dari z-a)

$clength = count($cars);
for($x = 0; $x < $clength; $x++) { //array ke-0 sampai semua elemen pada variabel $cars yaitu sampai array ke-2
    echo $cars[$x]; //output pada semua elemen yang ada di variabel $cars berdasarkan urutan abjad (menurun dari z-a)
    echo "<br>";
}
?> <!--Akhiran dari sebuah script PHP-->