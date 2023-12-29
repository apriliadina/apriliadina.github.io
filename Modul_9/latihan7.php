<!--Penerapan Method Get Pada Form-->
<!DOCTYPE html>
<html>
<head>
    <title>Latihan 7 Pemrograman Web</title>
</head>   
<body>
    <form method="get">
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama"/></td>
            </tr>
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td><input type="text" name="nim"/></td>
            </tr>            
            <tr align="center">
                <td colspan="3"><input type="submit" name="submit" value="Simpan"/>&nbsp;
                <input type="reset" name="Reset" value="Reset"/></td>
            </tr>
        </table>
    </form>

    <?php
        if(isset($_GET['submit'])){ //pengecekkan jika diproses tombol submit, maka bernilai true
            $nama = $_GET['nama']; //variabel untuk mengambil nilai dari URL nama
            $nim = $_GET['nim']; //variabel untuk mengambil nilai dari URL nim

            echo "<br/><br/><b>INI OUTPUT SESUAI INPUTAN DARI FORM DIATAS </b><br/>";
            echo "<b>Nama :</b>" .$nama;
            echo "<br/><b>NIM :</b>" .$nim;
        }
    ?>
</body>
</html>