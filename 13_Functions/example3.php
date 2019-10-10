<?php // Awalan dari sebuah script PHP 
//Informasi dapat dikirimkan ke fungsi melalui argumen. Argumen adalah seperti variabel
function familyName($fname, $year) { //membuat dua buah argumen bernama $fname dan $year

/*
memanggil fungsi familyName (), juga menyampaikan nama (Hege, Stale, dll), 
dan argumen nama yang digunakan di dalam fungsi, dan juga argumen tahun yang digunakan dalam fungsi
*/
    echo "$fname Refsnes. Born in $year <br>";
}

familyName("Hege", "1975");
familyName("Stale", "1978");
familyName("Kai Jim", "1983");
?> <!--Akhiran dari sebuah script PHP-->