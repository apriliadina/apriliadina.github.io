<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/pages-blank.html" />

	<title>SIBuTam | Sistem Informasi Buku Tamu</title>

	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.html">
          			<span class="align-middle">SIBuTam </span>
        		</a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Dashboard
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="sibutam.php">
              				<i class="align-middle" data-feather="book-open"></i> <span class="align-middle">Buku Tamu</span>
            			</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="laporan.php">
             			 	<i class="align-middle" data-feather="clipboard"></i> <span class="align-middle">Laporan</span>
            			</a>
					</li>				

				</ul>			

			</div>

		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
          			<i class="hamburger align-self-center"></i>
        		</a>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">				
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                				<i class="align-middle" data-feather="settings"></i>
              				</a>

							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                				<img src="img/avatars/admin.png" class="avatar img-fluid rounded me-1" alt="Charles Hall" /> <span class="text-dark">Admin</span>
              				</a>

							  <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="profil.php"><i class="align-middle me-1" data-feather="user"></i> Profile</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="logout.php">Log out</a>
							</div>

						</li>
					</ul>
				</div>
			</nav>


			<!--Main -->
			<main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3">Tambah Data Tamu</h1>

					<div class="row">
						<div class="col-12">
							<div class="card">
                                <div class="card-body">
    <?php
        // Tampilkan pesan jika ada
        if(isset($_SESSION['pesan'])) {
            echo "<div class='pesan'>".$_SESSION['pesan']."</div>";
            unset($_SESSION['pesan']);
        }
    ?>
								
                        <form action = "input_aksi.php" method = "post"> 
								
                                        <h4>ID Tamu</h4>
                                        <input type="text" class="form-control" id="id" name="id">
                                        <br>

                                        <h4>Nama</h4>
                                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Isikan Nama Lengkap Anda">
                                        <br>

                                        <h4>Alamat</h4>
                                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Ex. Madiun">
                                        <br>

                                        <h4>Nomor Telp.</h4>
                                        <input type="text" class="form-control" id="no_telp" name="no_telp">
                                        <br>

                                        <h4>Tanggal Datang</h4>
                                        <input type="date" class="form-control" id="tgl" name="tgl">
                                        <br>

                                        <h4>Pesan</h4>
                                        <textarea class="form-control"   rows="2" id="pesan" name="pesan"></textarea>
                                        <br>                                   
                                    
								</div>
                                
                                <div class="card-header">
                                																	
									<button type="submit" class="btn btn-success">Tambah Data</button>
                                                                
                                    <a href="sibutam.php">																	
									<button class="btn btn-secondary">Kembali</button>
                                    </a>

                        </form>
								</div>

							</div>

						</div>
					</div>

				</div>
			</main>


			<!--Footer -->
			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-start">
							<p class="mb-0">
								<a class="text-muted" href="#" target="_blank"><strong>Tria Aprilia Dina Sunaryo</strong></a> - <a class="text-muted" href="#" target="_blank"><strong>Teknik Informatika</strong></a>								&copy;
							</p>
						</div>						
					</div>
				</div>
			</footer>
		</div>
	</div>

	<script src="js/app.js"></script>

</body>

</html>