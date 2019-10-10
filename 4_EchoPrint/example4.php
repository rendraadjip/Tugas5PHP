<?php // Awalan dari sebuah script PHP 
$txt1 = "Learn PHP"; //deklarasi variabel teks
$txt2 = "W3Schools.com"; //deklarasi variabel teks
$x = 5; //deklarasi variabel x
$y = 4; //deklarasi variabel y

/* 
output teks dengan memanggil teks dari variabel txt1 dengan print yang berisi markup HTML <h2></h2> 
yang akan menampilkan font dengan ukuran tertentu dan bercetak tebal
*/
print "<h2>" . $txt1 . "</h2>";
/* 
output teks "Study PHP at" lalu memanggil variabel txt2 dengan print yang berisi markup HTML <br>
yang akan memberikan pengaruh enter sebaris
*/
print "Study PHP at " . $txt2 . "<br>";
/* 
echo mencetak output hasil pengoperasian nilai yang ada pada variabel x dijumlahkan 
dengan nilai yang ada pada variabel y
*/
print $x + $y;
?> <!--Akhiran dari sebuah script PHP-->
