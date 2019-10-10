<?php // Awalan dari sebuah script PHP 

//$ _SERVER adalah variabel global super yang memegang informasi tentang header, jalur, dan lokasi script
echo $_SERVER['PHP_SELF']; //Mengembalikan nama file dari script yang sedang dieksekusi
echo "<br>";
echo $_SERVER['SERVER_NAME']; //Mengembalikan nama server host
echo "<br>";
echo $_SERVER['HTTP_HOST']; //Mengembalikan header Host dari permintaan saat ini
echo "<br>";
echo $_SERVER['HTTP_REFERER']; /*Mengembalikan URL lengkap dari halaman saat ini (tidak dapat diandalkan karena 
                                tidak semua agen-pengguna mendukungnya)*/                             
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT']; //mengumpulkan beberapa informasi umum tentang pengunjung sistem mereka
echo "<br>";
echo $_SERVER['SCRIPT_NAME']; //Mengembalikan jalur skrip saat ini
?> <!--Akhiran dari sebuah script PHP-->