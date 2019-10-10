<?php // Awalan dari sebuah script PHP 
//PHP Object

//Disini mendeklarasikan sebuah kelas yang didalamnya terdapat struktur fungsi (metode) dan properti 
class Car {
    function Car() { //deklarasi sebuah fungsi
        $this->model = "VW"; //deklarasi sebuah properti
    }
}

// create an object (disini membuat object herbie yang memanggil "class car")
$herbie = new Car();

// show object properties (mencetak output dari sebuah properti dengan echo)
echo $herbie->model;
?> <!--Akhiran dari sebuah script PHP-->
