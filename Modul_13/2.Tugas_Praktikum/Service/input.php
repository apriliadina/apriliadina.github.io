<!DOCTYPE html>
<html>
<head>
    <title>Formulir Layanan Sepeda Motor</title>    
    <link rel="stylesheet" type="text/css" href="style.css">  
</head>
<body>

    <form action = "input_aksi.php" method = "post"> 
        <img class="gbr" src="gambar/gbr2.jpg">
        <h2>Formulir Layanan Sepeda Motor</h2>
        
        <div class="form-row">

             <label for="id_service">ID Service</label>
            <input type="text" id="id_service" name="id_service">

            <label for="nama">Nama Pemilik</label>
            <input type="text" id="nama" name="nama">

            <label for="tgl">Tanggal Service</label>
            <input type="date" id="tgl" name="tgl">

            <label for="merk">Merk Motor</label>
            <input type="text" id="merk" name="merk">

            <label for="jenis">Jenis Layanan</label>
            <select id="jenis" name="jenis">
                <option value="Service Ringan">Service Ringan</option>
                <option value="Service Berat" selected>Service Berat</option>
                <option value="Ganti Oli">Ganti Oli</option>
                <option value="Tune Up">Tune Up</option>
            </select>

            <button type="submit">Proses Layanan</button>
        </div>
    </form>

</body>
</html>
