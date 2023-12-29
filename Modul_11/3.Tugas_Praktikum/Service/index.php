<!DOCTYPE html>
<html>
<head>
    <title>Formulir Layanan Sepeda Motor</title>    
    <link rel="stylesheet" type="text/css" href="style.css"> 
</head>
<body>

    <form>
        <img class="gbr" src="gambar/gbr2.jpg">
        <h2>Formulir Layanan Sepeda Motor</h2>
        
        <div class="form-row">

        <label for="nama">Nama Pemilik</label>
        <input type="text" id="nama" name="nama">

        <label for="tgl">Tanggal Service</label>
        <input type="date" id="tgl" name="tgl">

        <label for="merk">Merk Motor</label>
        <input type="text" id="merk" name="merk">

        <label for="jenis">Jenis Layanan</label>
        <select id="jenis" name="jenis">
            <option value="service_ringan">Service Ringan</option>
            <option value="service_berat" selected>Service Berat</option>
            <option value="ganti_oli">Ganti Oli</option>
            <option value="tune_up">Tune Up</option>
        </select>

        <button type="submit">Proses Layanan</button>

        </div>
    </form>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>ID Service</th>
                <th>Nama Pelanggan</th>
                <th>Tanggal Service</th>
                <th>Merk Motor</th>
                <th>Jenis Layanan</th>
            </tr>
        </thead>

        <?php
        include "koneksi.php";
        $nomor = 1;
        $data = mysqli_query($koneksi,"select * from service");
		while($d = mysqli_fetch_array($data)){
        ?>

        <tbody>
            <!-- Data dari formulir akan ditampilkan di sini -->
            <tr>
                <td><?php echo $nomor++; ?></td>
                <td><?php echo $d['id_service']; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['tgl']; ?></td>
                <td><?php echo $d['merk']; ?></td>
                <td><?php echo $d['jenis']; ?></td>
            </tr>
        </tbody>
        <?php
            }
        ?>
    </table>
</body>
</html>
