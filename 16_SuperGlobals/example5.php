<!--<html> Ini adalah tag pembuka dari keseluruhan halaman web-->
<html>
<!--<body> ini akan berisi semua elemen yang akan tampil pada halaman web-->
<body>

<?php  // Awalan dari sebuah script PHP 

/*
$ _GET digunakan untuk mengumpulkan data formulir setelah mengirimkan formulir HTML dengan metode = "mendapatkan".
$ _GET juga dapat mengumpulkan data yang dikirim dalam URL.
*/
echo "Study " . $_GET['subject'] . " at " . $_GET['web'];
/*
Ketika mengklik pada link "Uji $ GET", parameter "subjek" dan "web" dikirim ke "test_get.php", dan Anda 
kemudian dapat mengakses nilai-nilai mereka di "test_get.php" dengan $ _GET.
*/

?> <!--Akhiran dari sebuah script PHP-->
<a href="test_get.php?subject=PHP&web=W3schools.com">Test $_GET</a> <!--Sebuah link-->

</body>
</html>