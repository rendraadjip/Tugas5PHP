<?php // Awalan dari sebuah script PHP 
declare(strict_types=1); // strict requirement

//memberikan fungsi variabel a dan variabel b yang bertipe data float dan hasil jumlah bertipe data integer
function addNumbers(float $a, float $b) : int {
    return (int)($a + $b);   //fungsi memanggil kembali hasil penjumlahan variabel a dan variabel b bertipe data integer
}
echo addNumbers(1.2, 5.2);//1.2(variabel a) + 5.2(variabel b) = 6.4(hasil). Karena tipe data integer maka output = 6
?> <!--Akhiran dari sebuah script PHP-->