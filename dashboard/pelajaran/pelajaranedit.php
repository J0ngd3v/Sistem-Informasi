<?php
// Session cek untuk login
session_start();
include '../../config.php';
if(!isset($_SESSION['login'])){
	header("location:../login.php?admin");
}

// menampilkan sesuai id
	$id = $_GET['id'];
	$selectsemua = "SELECT * FROM jadwal_pelajaran WHERE id_pelajaran=$id";
	$tampil = mysqli_query($config , $selectsemua);
// end menampilkan

// update data
	if(isset($_POST['update'])){
		$id = $_GET['id'];
		$namapelajaran = $_POST['nama'];
		$haripelajaran = $_POST['hari'];
		$gurupelajaran = $_POST['guru'];

		$query = "UPDATE `jadwal_pelajaran` SET `nama` = '$namapelajaran', `hari` = '$haripelajaran', `guru` = '$gurupelajaran' WHERE `jadwal_pelajaran`.`id_pelajaran` = $id;";
		$eksekusi = mysqli_query($config , $query);
		if($eksekusi > 0){
			header("location: index.php");
		}
	}
// end update
?>
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
	<link rel="shortcut icon" href="../../Resource/Gambar/logo-rpl.png" type="image/x-icon">
	<title><?php echo $title ?> Edit Pelajaran</title>

	<link href="../asset/css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.php">
          <span class="align-middle"><?= $dashadmin; ?></span>
        </a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Menu
					</li>
			
					<li class="sidebar-item active">
						<a class="sidebar-link" href="../">
						<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
						</a>
					</li>
			<?php foreach($menu as $menus){ ?>
				<li class="sidebar-item">
						<a class="sidebar-link" href="../<?= $menus['url']; ?>">
						<i class="log-out" data-feather="sliders"></i> <span class="log-out"><?= $menus['namamenu']; ?></span>
						</a>
					</li>
			<?php } ?>
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
                <img src="../img/avatars/avatar.jpg" class="avatar img-fluid rounded me-1" alt="Charles Hall" /> <span class="text-dark"><?= $_SESSION['username'];?></span>
              </a>
							<div class="dropdown-menu dropdown-menu-end">
								<a class="dropdown-item" href="../../logout.php">Log out</a>
							</div>
						</li>
					</ul>
				</div>
	</nav>

			<main class="content">
				<div class="container-fluid p-0">

                    <div class="row ">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-body">
                                <h2 style="font-weight:bold;">Edit Pelajaran</h2>
                            <form action="" method="POST">
							<?php foreach($tampil as $tampils){?>
                                <div class="form-group">
                                    <label for="">Nama Pelajaran</label>
                                    <input type="text" value="<?= $tampils['nama']?>" class="form-control" name="nama" required>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="">Hari</label>
                                    <select name="hari" id="" class="form-control">
										<option value="<?= $tampils['hari']?>"><?= $tampils['hari']?></option>
                                        <option value="senin">Senin</option>
                                        <option value="selasa">Selasa</option>
                                        <option value="rabu">Rabu</option>
                                        <option value="kamis">Kamis</option>
                                        <option value="jumat">Jumat</option>
                                        <option value="sabtu">Sabtu</option>
                                    </select>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="">Guru Pengajar</label>
                                    <input type="text" value="<?= $tampils['guru']?>" class="form-control" name="guru" required>
                                </div>
                                    <button type="submit" name="update" class="btn btn-primary mt-3">Update</button>
									<?php } ?>
                            </form>
                            
                                </div>
                            </div>
                        </div>
                    </div>

				</div>
			</main>

		</div>
	</div>

	<script src="../asset/js/app.js"></script>


</body>

</html>