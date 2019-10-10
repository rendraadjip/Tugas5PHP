<?php // Awalan dari sebuah script PHP 
declare(strict_types=1); // strict requirement
function setHeight(int $minheight = 50) { // memberikan nilai default yaitu 50
    echo "The height is : $minheight <br>"; //Output teks the height is (value)
}

setHeight(350); //value 350
setHeight(); // will use the default value of 50 (fungsi setHeight() tanpa argumen dibutuhkan nilai default sebagai argumen)
setHeight(135); //value 135
setHeight(80); //value 80
?> <!--Akhiran dari sebuah script PHP-->