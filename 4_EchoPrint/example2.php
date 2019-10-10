<?php // Awalan dari sebuah script PHP 
$txt1 = "Learn PHP"; //deklarasi variabel txt1 berisi sebuah text
$txt2 = "W3Schools.com"; //deklarasi variabel txt2 berisi sebuah text
$x = 5; //deklarasi variabel x berisi sebuah nilai 
$y = 4; //deklarasi variabel y berisi sebuah nilai 

/* 
output teks dengan memanggil teks dari variabel txt1 dengan echo yang berisi markup HTML <h2></h2> 
yang akan menampilkan font dengan ukuran tertentu dan bercetak tebal
*/
echo "<h2>" . $txt1 . "</h2>"; 
/* 
output teks "Study PHP at" lalu memanggil variabel txt2 dengan echo yang berisi markup HTML <br>
yang akan memberikan pengaruh enter sebaris
*/
echo "Study PHP at " . $txt2 . "<br>";
/* 
echo mencetak output hasil pengoperasian nilai yang ada pada variabel x dijumlahkan 
dengan nilai yang ada pada variabel y
*/
echo $x + $y;
?> <!--Akhiran dari sebuah script PHP-->
