<!DOCTYPE html>
<html>
<head>
    <title>Formulir Kesehatan dan Tabel Data</title>
    <link rel="stylesheet" type="text/css" href="style.css">    
</head>
<body>
    
    <form>
            <img class="logo" src="gambar/gbr5.png">
            <h2>Formulir Kesehatan</h2>

        <div class="form-row">            

            <label for="nama">Nama Pasien:</label>
            <input type="text" id="nama" name="nama" required>

            <label for="usia">Usia:</label>
            <input type="number" id="usia" name="usia" required>

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

    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>ID Pasien</th>
                <th>Nama Pasien</th>
                <th>Usia</th>
                <th>Jenis Kelamin</th>
                <th>Keluhan</th>
            </tr>
        </thead>

        <?php
        include "koneksi.php";
        $nomor = 1;
        $data = mysqli_query($koneksi,"select * from pasien");
		while($d = mysqli_fetch_array($data)){
        ?>

        <tbody>
            <!-- Data dari formulir akan ditampilkan di sini -->
            <tr>
                <td><?php echo $nomor++; ?></td>
                <td><?php echo $d['id_pasien']; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['usia']; ?></td>
                <td><?php echo $d['jenis_kelamin']; ?></td>
                <td><?php echo $d['keluhan']; ?></td>
            </tr>
        </tbody>
        <?php
            }
        ?>
    </table>
</body>
</html>
