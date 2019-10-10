<?php  // Awalan dari sebuah script PHP 

//menambahkan nomor dan string dengan para strict persyaratan
declare(strict_types=1); // strict requirement

function addNumbers(int $a, int $b) {//fungsi menambahkan nomor a, dan b bertipe data integer
    return $a + $b;//pengoperasian variabel a ditambah variabel b
}
echo addNumbers(5, "5 days");//berisi nomor(numerik) dan string
// since strict is enabled and "5 days" is not an integer, an error will be thrown
?> <!--Akhiran dari sebuah script PHP-->