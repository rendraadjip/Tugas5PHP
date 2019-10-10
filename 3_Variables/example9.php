<?php // Awalan dari sebuah script PHP 
function myTest() {
    static $x = 0; //gunakan static untuk kata kunci ketika pertama kali mendeklarasikan sebuah variabel
    echo $x; //output variabel x
    $x++;  //$x akan meningkat 1 setiap kali fungsi dipanggil
}
/*
setiap kali fungsi dipanggil, variabel yang masih memiliki informasi yang terkandung dari 
terakhir kali fungsi dipanggil.
*/
myTest(); //fungsi dipanggil pertama (ouput 0)
echo "<br>";
myTest(); //fungsi dipanggil kedua (ouput 1)
echo "<br>";
myTest(); //fungsi dipanggil ketiga (ouput 2)
?>  <!--Akhiran dari sebuah script PHP-->
