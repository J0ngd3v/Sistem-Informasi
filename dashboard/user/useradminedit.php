<?php
session_start();
include '../../config.php';
if(!isset($_SESSION['login'])){
	header("location:../../login.php?admin");
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
                        <div class="col-8">
							<?php
							    $id = $_GET['id']; 
								$query = "SELECT * FROM admin WHERE id_admin='$id'";
								$tampil = mysqli_query($config , $query);

								if(isset($_POST['update'])){

									$id = $_GET['id'];
									$username = $_POST['username'];
									$password = $_POST['password'];

									$query = "UPDATE `admin` SET `password` = '$password', `username` = '$username' WHERE `admin`.`id_admin` = $id;";
									$update = mysqli_query($config , $query);

									if($update > 0 ){
										echo"<script>alert('Berhasil Update')</script>";
										header("location: ../user/index.php");
										exit;
									}else{
										echo"<script>alert('Gagal Hapus')</script>";
        								header("location: ../user/index.php");
        								exit;
									}
								}
							?>
                               <form action="" method="POST">
                                <?php foreach($tampil as $tampils){?>
                                    <div class="form-group">
                                        <label for="">Username</label>
                                        <input type="text" name="username" class="form-control" value="<?= $tampils['username']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Username</label>
                                        <input type="text" name="password" class="form-control" value="<?= $tampils['password']; ?>">
                                    </div>
									<div class="form-group mt-2">
									   <button type="submit" name="update" class="btn btn-primary">Update</button>
										</div>
                                <?php } ?>
                               </form>
                        </div>
                        <div class="col-4">
                           
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