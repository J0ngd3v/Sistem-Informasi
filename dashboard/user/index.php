<?php
session_start();

include '../../config.php';
if(!isset($_SESSION['login'])){
	header("location:../../login.php?admin");
}

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $query = "DELETE FROM admin WHERE id_admin=$id";
    $hapus = mysqli_query($config , $query);
    if($hapus > 0){
        echo "<script>alert('Berhasil Manambah PelajAdminaran')</script>";
        header("location: index.php");
        exit;
    }else{
        echo"<script>alert('gagal hapus')</script>";
        header("location: index.php");
        exit;
    }
    
}

$selectsemua = mysqli_query($config , "SELECT * FROM admin");


    if(isset($_POST['tambah'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "INSERT INTO `admin` (`id_admin`, `password`, `username`) VALUES (NULL, '$password', '$username');";
        $kirim = mysqli_query($config , $query);
        if($kirim > 0){
            echo "<script>alert('berhasil')</script>";
            header("location: index.php");
            exit;
        }else{
            echo "<script>alert('gagal tambah')</script>";
            header("location: index.php");
            exit;
        }
    }

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
	<title><?php echo $title ?> Dashboard</title>

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
                                <table class="table table-dark text-center " border=1>
                                    <thead class="">
                                        <tr class="">
                                            <th>Nama</th>
                                            <th>Password</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody class="">
                                    <?php foreach($selectsemua as $admin){ ?>
                                        <tr>
                                            <td><?=$admin['username']; ?></td>
                                            <td><?=$admin['password'];?></td>
                                            <td>
                                                <a href="?id=<?= $admin['id_admin'];?>">Hapus</a>
                                                <a href="useradminedit.php?id=<?= $admin['id_admin'];?>">Edit</a>
                                            </td>
                                        </tr>
                                    <?php }?>
                                    </tbody>
                            </table>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                <h2 style="font-weight:bold;">Tambah Admin</h2>
                                <form action="" method="POST">                        
                                    <div class="form-group">
                                        <label for="">Username</label>
                                        <input type="text" class="form-control" name="username"  required>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="">Password</label>
                                        <input type="text" class="form-control " name="password" required>
                                    </div>
                                    <button type="submit" name="tambah" class="btn btn-primary mt-3">Tambah</button>
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