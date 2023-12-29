<!DOCTYPE html>
<html>
<head>
    <title>Formulir Layanan Sepeda Motor</title>    
    <link rel="stylesheet" type="text/css" href="style.css">  
</head>
<body>
    <?php
	    include 'koneksi.php';
	    $id_service = $_GET['id_service'];
	    $data = mysqli_query($koneksi,"select * from service where id_service='$id_service'");
	    while($d = mysqli_fetch_array($data)){
	?>

    <form action = "edit_aksi.php" method = "post"> 
        <img class="gbr" src="gambar/gbr2.jpg">
        <h2> Edit Formulir Layanan Sepeda Motor</h2>
        
        <div class="form-row">

             <label for="id_service">ID Service</label>
            <input type="text" id="id_service" name="id_service" value="<?php echo $d['id_service']; ?>">

            <label for="nama">Nama Pemilik</label>
            <input type="text" id="nama" name="nama" value="<?php echo $d['nama']; ?>">

            <label for="tgl">Tanggal Service</label>
            <input type="date" id="tgl" name="tgl" value="<?php echo $d['tgl']; ?>">

            <label for="merk">Merk Motor</label>
            <input type="text" id="merk" name="merk" value="<?php echo $d['merk']; ?>">

            <label for="jenis">Jenis Layanan</label>
            <select id="jenis" name="jenis" value="<?php echo $d['jenis']; ?>">
                <option value="Service Ringan">Service Ringan</option>
                <option value="Service Berat" selected>Service Berat</option>
                <option value="Ganti Oli">Ganti Oli</option>
                <option value="Tune Up">Tune Up</option>
            </select>

            <button type="submit">Submit</button>
        </div>
    </form>
    <?php
        }
    ?>
</body>
</html>
