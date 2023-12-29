<!DOCTYPE html>
<html>
<head>
    <title>Formulir Klinik Kesehatan</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    
    <?php
        // Tampilkan pesan jika ada
        if(isset($_SESSION['pesan'])) {
            echo "<div class='pesan'>".$_SESSION['pesan']."</div>";
            unset($_SESSION['pesan']);
        }
    ?>

    <form action = "input_aksi.php" method = "post">      

            <img class="logo" src="gambar/gbr5.png">
            <h2>Formulir Klinik Kesehatan</h2>

        <div class="form-row">
            
            <label for="id_pasien">ID Pasien:</label>
            <input type="text" id="id_pasien" name="id_pasien">

            <label for="nama">Nama Pasien:</label>
            <input type="text" id="nama" name="nama">

            <label for="usia">Usia:</label>
            <input type="number" id="usia" name="usia">

            <label for="jenis-kelamin">Jenis Kelamin:</label>
            <select id="jenis-kelamin" name="jenis-kelamin">
                <option value="laki-laki">Laki-laki</option>
                <option value="perempuan">Perempuan</option>
            </select>

            <label for="keluhan">Keluhan:</label>
            <textarea id="keluhan" name="keluhan" rows="5" cols="20"></textarea>

            <button type="submit">Kirim Formulir</button>
            
        </div>
    </form>

</body>
</html>
