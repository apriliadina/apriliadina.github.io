<!DOCTYPE html>
<html>
<head>
    <title>Formulir Klinik Kesehatan</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php
	include 'koneksi.php';
	$id_pasien = $_GET['id_pasien'];
	$data = mysqli_query($koneksi,"select * from pasien where id_pasien='$id_pasien'");
	while($d = mysqli_fetch_array($data)){
	?>

    <form action = "edit_aksi.php" method = "post">      

            <img class="logo" src="gambar/gbr5.png">
            <h2> Edit Formulir Klinik Kesehatan</h2>

        <div class="form-row">
            
            <label for="id_pasien">ID Pasien:</label>
            <input type="text" id="id_pasien" name="id_pasien" value="<?php echo $d['id_pasien']; ?>">

            <label for="nama">Nama Pasien:</label>
            <input type="text" id="nama" name="nama" value="<?php echo $d['nama']; ?>">

            <label for="usia">Usia:</label>
            <input type="number" id="usia" name="usia" value="<?php echo $d['usia']; ?>">

            <label for="jenis-kelamin">Jenis Kelamin:</label>
            <select id="jenis_kelamin" name="jenis_kelamin" value="<?php echo $d['jenis_kelamin']; ?>">
                <option value="laki-laki">Laki-laki</option>
                <option value="perempuan">Perempuan</option>
            </select>

            <label for="keluhan">Keluhan:</label>
            <textarea id="keluhan" name="keluhan" rows="5" cols="20" value="<?php echo $d['keluhan']; ?>"></textarea>

            <button type="submit">Kirim Formulir</button>
            
        </div>
    </form>
    <?php
        }
    ?>
</body>
</html>