<?php // Awalan dari sebuah script PHP 
$cars = array("Volvo", "BMW", "Toyota"); //Sebuah array menyimpan 3 nilai (elemen) dalam satu variabel tunggal
$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++) { //mencetak semua nilai-nilai array yang ada diindeks
    echo $cars[$x];//output semua elemen pada array
    echo "<br>";//output enter sebaris per elemen yang dicetak
}
?> <!--Akhiran dari sebuah script PHP-->