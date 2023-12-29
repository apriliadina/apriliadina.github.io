<!DOCTYPE html>
<html>
<head>
    <title>Formulir Perpustakaan Kota Madiun</title>    
    <link rel="stylesheet" type="text/css" href="style1.css">    
</head>
<body>
    
    <div class="container">
        <div class="data-container">
            <h1>Data Peminjam Buku </h1>

            <a href="input.php">
                <button id="tambahDataBtn">+ Tambah Data</button>
            </a>

            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID Buku</th>
                        <th>Judul</th>
                        <th>Penulis</th>
                        <th>Tahun Buku</th>
                        <th>Peminjam</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <?php
                    include "koneksi.php";
                    $nomor = 1;
                    $data = mysqli_query($koneksi, "SELECT * FROM buku");
                    while($d = mysqli_fetch_array($data)){
                ?>

                <tbody>
                    <tr>
                        <td><?php echo $nomor++; ?></td>
                        <td><?php echo $d['id_buku']; ?></td>
                        <td><?php echo $d['judul']; ?></td>
                        <td><?php echo $d['penulis']; ?></td>
                        <td><?php echo $d['tahun']; ?></td>
                        <td><?php echo $d['peminjam']; ?></td>
                        <td>
                        <a href="edit.php?id_buku=<?php echo $d['id_buku']; ?>">
                            <button id="update-btn">Update</button>
                        </a>
                        <a href="hapus.php?id_buku=<?php echo $d['id_buku']; ?>">
                            <button id="aksi-btn">Delete</button>
                        </a>
                        </td>                        
                <?php
                    }
                ?>                       
                    </tr>                    
                </tbody>
            </table>
        </div>
    </div>

               

    <script>
        function tambahData() {
            // Redirect ke halaman formulir untuk menambah data baru
            window.location.href = 'input.php';
        }
    </script>
</body>
</html>
