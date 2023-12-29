<!DOCTYPE html>
<html>
<head>
    <title>Formulir Perpustakaan Kota Madiun</title>
    <link rel="stylesheet" type="text/css" href="style.css">   
</head>
<body>

    <form action = "input_aksi.php" method = "post">    
        <h3>Formulir Peminjaman Buku</h3>
        <img class="gbr" src="gambar/gbr1.png">
        
        <div class="form-row">

            <content for="judul">ID Buku:</content>
            <input type="text" id="id_buku" name="id_buku">

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

</body>
</html>
