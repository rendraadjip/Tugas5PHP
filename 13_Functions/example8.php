<?php // Awalan dari sebuah script PHP 
declare(strict_types=1); // strict requirement

//memberikan fungsi variabel a dan variabel b yang bertipe data float dan hasil jumlah bertipe data float
function addNumbers(float $a, float $b) : float { 
    return $a + $b;  //fungsi memanggil kembali hasil penjumlahan variabel a dan variabel b
}
echo addNumbers(1.2, 5.2); // 1.2(variabel a) + 5.2(variabel b) = 6.4(hasil jumlah)
?> <!--Akhiran dari sebuah script PHP-->