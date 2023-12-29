<!DOCTYPE html>
<html>
<head>
    <title>Formulir Perpustakaan Kota Madiun</title>
    <link rel="stylesheet" type="text/css" href="style.css">   
</head>
<body>
    <?php
	include 'koneksi.php';
	$id_buku = $_GET['id_buku'];
	$data = mysqli_query($koneksi,"select * from buku where id_buku='$id_buku'");
	while($d = mysqli_fetch_array($data)){
	?>

    <form action = "edit_aksi.php" method = "post">    
        <h3> Edit Formulir Peminjaman Buku</h3>
        <img class="gbr" src="gambar/gbr1.png">
        
        <div class="form-row">

            <content for="judul">ID Buku:</content>
            <input type="text" id="id_buku" name="id_buku" value="<?php echo $d['id_buku']; ?>">

            <content for="judul">Judul Buku:</content>
            <input type="text" id="judul" name="judul" value="<?php echo $d['judul']; ?>">

            <content for="penulis">Penulis:</content>
            <input type="text" id="penulis" name="penulis" value="<?php echo $d['penulis']; ?>">

            <content for="tahun">Tahun Buku:</content>
            <input type="text" id="tahun" name="tahun" value="<?php echo $d['tahun']; ?>">

            <content for="peminjam">Peminjam:</content>
            <input type="text" id="peminjam" name="peminjam" value="<?php echo $d['peminjam']; ?>">

            <button type="submit">Submit</button>
        </div>
    </form>
    <?php
        }
    ?>
</body>
</html>
