<?php // Awalan dari sebuah script PHP 
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
arsort($age); //arsort() yaitu array semacam asosiatif dalam urutan, menurut nilai (menurun dari besar-kecil)

foreach($age as $x => $x_value) {//terdapat dua variabel yang akan dicetak semua
    echo "Key=" . $x . ", Value=" . $x_value;//output key(elemen variabel $age), Value(elemen $x_value)
    echo "<br>";
}
?> <!--Akhiran dari sebuah script PHP-->