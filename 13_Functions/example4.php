<?php // Awalan dari sebuah script PHP 

// menambahkan nomor(numerik) dan string tanpa itu strict persyaratan
function addNumbers(int $a, int $b) { //fungsi menambahkan nomor a, dan b bertipe data integer
    return $a + $b;//pengoperasian variabel a ditambah variabel b
}
echo addNumbers(5, "5 days"); //berisi nomor(numerik) dan string
// since strict is NOT enabled "5 days" is changed to int(5), and it will return 10
?> <!--Akhiran dari sebuah script PHP-->