<?php // Awalan dari sebuah script PHP 
$favcolor = "red"; //deklarasi bahwa $favcolor adalah "red"

//switch() yaitu pernyataan untuk melakukan tindakan yang berbeda berdasarkan kondisi yang berbeda.
switch ($favcolor) {
    case "red": //kasus pertama favorit red
        echo "Your favorite color is red!"; /*
                                            Output "Your favorite color is red!", karena telah dideklarasikan 
                                            diatas bahwa favorite color red
                                            */
        break;
    case "blue": //kasus kedua favorit blue
        echo "Your favorite color is blue!";
        break;
    case "green": //kasus ketiga favorit green
        echo "Your favorite color is green!";
        break;
    default: //default pernyataan digunakan jika tidak ada yang cocok dari kasus-kasus diatas
        echo "Your favorite color is neither red, blue, nor green!";
}
?> <!--Akhiran dari sebuah script PHP-->
