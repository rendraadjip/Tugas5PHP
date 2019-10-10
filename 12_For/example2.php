<?php // Awalan dari sebuah script PHP 
$colors = array("red", "green", "blue", "yellow");//deklarasi variabel colors pada array

//foreach Loop bekerja hanya pada array, dan digunakan untuk loop melalui setiap pasangan kunci / nilai dalam array.
foreach ($colors as $value) { 
/*
setiap loop, nilai elemen array saat ditugaskan untuk $value dan array pointer digerakkan oleh satu,
hingga mencapai elemen array terakhir
*/
    echo "$value <br>";

}
?> <!--Akhiran dari sebuah script PHP-->