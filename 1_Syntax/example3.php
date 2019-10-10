<!--<DOCTYPE html> berfungsi untuk memberikan informasi pada web browser bahwa dokumen ini adalah HTML.-->
<!DOCTYPE html>
<!--<html> Ini adalah tag pembuka dari keseluruhan halaman web-->
<html>
<!--<body> ini akan berisi semua elemen yang akan tampil pada halaman web-->
<body>

<?php // Awalan dari sebuah script PHP 

$color = "red"; 
echo "My car is " . $color . "<br>"; //disini berarti memanggil $color agar menampilkan nilai pada variabel $color
echo "My house is " . $COLOR . "<br>";
echo "My boat is " . $coLOR . "<br>";
/* hanya pernyataan pertama yang menampilkan nilai dari variabel $color. Hal ini karena $color, $COLOR, 
dan $coLOR diperlakukan sebagai tiga variabel yang berbeda */

?> <!--Akhiran dari sebuah script PHP-->

</body>
</html>