<?php // Awalan dari sebuah script PHP 
$t = date("H"); //deklarasi waktu

if ($t < "10") {
    //jika waktu kurang dari 10, maka hasil output echo yaitu "Have a good morning!"
    echo "Have a good morning!";
} elseif ($t < "20") {
    //jika waktu kurang dari 20, maka hasil output echo yaitu "Have a good day!"
    echo "Have a good day!";
} else {
    //jika waktu tidak kurang dari 10 dan 20, maka hasil output echo yaitu "Have a good night!"
    echo "Have a good night!";
}
?> <!--Akhiran dari sebuah script PHP-->