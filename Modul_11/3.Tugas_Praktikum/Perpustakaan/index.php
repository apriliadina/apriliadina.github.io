<!DOCTYPE html>
<html>
<head>
    <title>Formulir Perpustakaan Kota Madiun</title>    
    <link rel="stylesheet" type="text/css" href="style.css">    
</head>
<body>

    <form>
        <h3>Formulir Peminjaman Buku</h3>
        <img class="gbr" src="gambar/gbr1.png">
        
        <div class="form-row">

        <content for="judul">Judul Buku:</content>
        <input type="text" id="judul" name="judul">

        <content for="penulis">Penulis:</content>
        <input type="text" id="penulis" name="penulis">

        <content for="tahun">Tahun Buku:</content>
        <input type="text" id="tahun" name="tahun">

        <content for="peminjam">Peminjam:</content>
        <input type="text" id="peminjam" name="peminjam">

        <button type="submit">Pinjam Buku</button>

        </div>
    </form>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>ID Buku</th>
                <th>Judul Buku</th>
                <th>Penulis</th>
                <th>Tahun Buku</th>
                <th>Peminjam</th>
            </tr>
        </thead>

        <?php
        include "koneksi.php";
        $nomor = 1;
        $data = mysqli_query($koneksi,"select * from buku");
		while($d = mysqli_fetch_array($data)){
        ?>

        <tbody>
            <!-- Data dari formulir akan ditampilkan di sini -->
            <tr>
                <td><?php echo $nomor++; ?></td>
                <td><?php echo $d['id_buku']; ?></td>
                <td><?php echo $d['judul']; ?></td>
                <td><?php echo $d['penulis']; ?></td>
                <td><?php echo $d['tahun']; ?></td>
                <td><?php echo $d['peminjam']; ?></td>
            </tr>
        </tbody>
        <?php
            }
        ?>
    </table>
</body>
</html>
