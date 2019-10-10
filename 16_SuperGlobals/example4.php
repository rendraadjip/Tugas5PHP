<!--<html> Ini adalah tag pembuka dari keseluruhan halaman web-->
<html>
<!--<body> ini akan berisi semua elemen yang akan tampil pada halaman web-->
<body>

<!--
$ _POST secara luas digunakan untuk mengumpulkan data formulir setelah mengirimkan formulir HTML dengan metode = "post". 
$ _POST juga banyak digunakan untuk lulus variabel.
$_SERVER['PHP SELF] Mengembalikan nama file dari script yang sedang dieksekusi
-->
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname"> <!--inputan nama yang akan didaftarkan pengguna-->
  <input type="submit"> <!--sebuah tombol submit untuk input data-->
</form>

<?php  // Awalan dari sebuah script PHP 
//$ _REQUEST untuk mengumpulkan nilai dari field input
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['fname'];
     //Jika nama kosong (tidak terisi), maka output "Name is empty"
    if (empty($name)) {
        echo "Name is empty";
    } else {
        //nama terisi, maka outputnya nama yang pengguna isi (daftarkan)
        echo $name;
    }
}
?>
 <!--Akhiran dari sebuah script PHP-->
</body>
</html>