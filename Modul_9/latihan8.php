<!--Array Satu Dimensi-->
<!DOCTYPE html>
<html>
<head>
    <title>Latihan 8 Pemrograman Web</title>
</head>   
<body>
    <?php
    #cara pertama mendeklarasikan array 1 dimensi
    print ("<b>Cara Pertama Mendeklarasikan ARRAY 1 DIMENSI: </b><br/>");
    $kota[0] = "Yogyakarta";
    $kota[1] = "Jakarta";
    $kota[2] = "Malang";
    print ("Kota Pilihanmu: $kota[2]"); //print adalah cara lain mencetak selain echo

    echo "<br/><br/><br/>";

    #cara kedua mendeklarasikan array 1 dimensi
    print ("<b>Cara Kedua Mendeklarasikan ARRAY 1 DIMENSI: </b><br/>");
    $kota2 = array(0=>"Jember", 1=>"Bondowoso", 2=>"Surabaya");    
    print ("Kota Pilihanmu: $kota2[0]");

    echo "<br/><br/><br/>";

    #cara ketiga mendeklarasikan array dengan nilai index berupa teks, bukan angka
    print ("<b>Cara Ketiga Mendeklarasikan ARRAY SATU DIMENSI: </b><br/>");
    $inisialkota = array("JBR"=>"Jember", "SDA"=>"Sidoarjo", "SBY"=>"Surabaya");
    echo "Inisial JBR adalah kota: ".$inisialkota["JBR"]."";
    ?>
</body>
</html>