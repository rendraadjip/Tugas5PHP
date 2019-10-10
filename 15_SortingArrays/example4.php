<?php // Awalan dari sebuah script PHP 
$numbers = array(4, 6, 2, 22, 11); //Sebuah array menyimpan 5 nilai (elemen) dalam satu variabel tunggal
rsort($numbers);//rsort() yaitu array semacam agar descending (menurun besar-kecil)

$arrlength = count($numbers);
for($x = 0; $x < $arrlength; $x++) { //array ke-0 sampai semua elemen pada variabel $numbers yaitu sampai array ke-4
    //output pada semua elemen yang ada di variabel $numbers berdasarkan urutan nomor (menaik dari besar-kecil)
    echo $numbers[$x];
    echo "<br>";
}
?> <!--Akhiran dari sebuah script PHP-->