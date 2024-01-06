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


			<!--Content -->
			<main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3">Data Tamu</h1>

					<div class="row">
						<div class="col-12">
							<div class="card">
								
								<div class="card-header">
									<a href="input.php">																	
										<button class="btn btn-info">Tambah Data Tamu</button>
									</a>
								</div>

								<div class="card-body">
									<table class="table table-hover my-0">
										<thead>
											<tr>
												<th>No.</th>
												<th>Nama</th>
												<th>Alamat</th>
												<th>Tanggal</th>
												<th>Opsi</th>
											</tr>
										</thead>

										<?php
                    						include "koneksi.php";
											$nomor = 1;
											$data = mysqli_query($koneksi, "SELECT * FROM tamu");
											while($d = mysqli_fetch_array($data)){
										?>

										<tbody>
											<tr>
												<td><?php echo $nomor++; ?></td>
												<td><?php echo $d['nama']; ?></td>
												<td><?php echo $d['alamat']; ?></td>
												<td><?php echo $d['tgl']; ?></td>
												<td>
												<a href="detail.php?id=<?php echo $d['id']; ?>">
													<button class="btn btn-primary">Detail</button>
												</a>

												<a href="edit.php?id=<?php echo $d['id']; ?>">
													<button class="btn btn-warning">Edit</button>
												</a>

												<a href="delete.php?id=<?php echo $d['id']; ?>">
													<button class="btn btn-danger">Delete</button>
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