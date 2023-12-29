<!--Perhitungan Angka di PHP-->
<!DOCTYPE html>
<html>
<head>
    <title>Latihan 5 Pemrograman Web</title>
</head>   
<body>
        <?php
        $nim = "2205101010P"; //sesuai dengan nim
        $nama= "TRIA APRILIA DINA SUNARYO"; //sesuai dengan nama
        $angka1 = 10; //nilai angka --> integer
        $angka2 = 15; //nilai angka --> integer

        $hasiljumlah = $angka1 + $angka2;

        echo "<b>NIM : </b>".$nim. "<br/>";
        echo "<b>NAMA : </b>".$nama. "<br/>";
        echo "<b>Hasil Penjumlahan dari  ".$angka1." dan ".$angka2." </b>  ==>  ".$angka1." + ".$angka2." = ".$hasiljumlah."<br/>";
        ?>
    </body>
</html>