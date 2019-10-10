<?php // Awalan dari sebuah script PHP  
declare(strict_types=1); // strict requirement
function sum(int $x, int $y) { //memberikan fungsi penjumlahan variabel x dan variabel y yang bertipe data integer
    $z = $x + $y; //variabel z ini merupakan penjumlahan dari variabel x dan variabel y
    return $z; //fungsi memanggil kembali variabel z
}

echo "5 + 10 = " . sum(5, 10) . "<br>"; // penjumlahan 5+10=15 
echo "7 + 13 = " . sum(7, 13) . "<br>"; // penjumlahan 7+13=20
echo "2 + 4 = " . sum(2, 4); // penjumlahan 2+4=6
?> <!--Akhiran dari sebuah script PHP-->