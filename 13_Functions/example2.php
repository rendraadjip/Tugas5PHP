<?php // Awalan dari sebuah script PHP 
//Informasi dapat dikirimkan ke fungsi melalui argumen. Argumen adalah seperti variabel
function familyName($fname) { //membuat sebuah argumen bernama $fname
/*
memanggil fungsi familyName (), juga menyampaikan nama (Jani, Hege, dll), 
dan nama yang digunakan di dalam fungsi, yang output beberapa nama pertama berbeda, tapi nama belakang sama 
*/
    echo "$fname Refsnes.<br>"; 
}
//fungsi familyName
familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");
?> <!--Akhiran dari sebuah script PHP-->