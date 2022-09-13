<?php



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php include 'config.php'; echo $title; ?> Home</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="Resource/css/bootstrap.min.css">
    <link rel="stylesheet" href="Resource/css/custome.css">
    <link rel="stylesheet" href="Resource/css/bootstrap.min.css.map">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <style>
        .card:hover{
            background-color:rgb(86,106,232) !important;
            color:white;
        }
        a {
            color :black;
            text-decoration:none;
        }
        a:hover {
            text-decoration:none;
            color:white;
        }
    </style>
</head>
<body oncontextmenu="return false" onkeydown="return false;" onmousedown="return false;">
<!-- <audio hidden  loop autoplay>
    <source src="Resource/woro.mp3" type="audio/mpeg">
    Browsermu tidak mendukung tag audio
  </audio>  -->
<div class="container animate__animated animate__fadeIn">
   <div class="row mt-4">
        <div class="col-md-5">
            <img class="rounded mx-auto float-md-right d-block" width="180px" src="Resource/Gambar/logo-rpl.png" alt="">
        </div>
        <div class="col-md-4">
            <h2 class="mt-md-5 text-center text-md-left" style="color:white;font-weight:bold;">Aplikasi Sistem Informasi Kelas RPL 1.</h2>     
        </div>
    </div>
    <div class="row mt-5" >
        <div class="col-md-4">
            <a href="cek-pelajaran">
                <div class="card mb-3"  style="max-width: 540px;opacity:0.8;border-radius:20px;" >
                    <div class="row no-gutters ">
                        <div class="col-md-4">
                            <img class="mx-auto mt-3 float-md-right d-block" src="Resource/Gambar/user.png" width="80px;" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body text-center text-md-left ">
                                <h5 class="card-title mt-md-1" style="margin-top:-15px;" >Cek Pelajaran</h5>
                                <p class="card-text" style="margin-top:-12px" >Mencari Informasi Jadwal Pelajaran</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="cek-piket">
                <div class="card mb-3" style="max-width: 540px;opacity:0.8;border-radius:20px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img class="mx-auto mt-3 float-md-right d-block" src="Resource/Gambar/piket.png" width="80px;" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body text-center text-md-left ">
                                <h5 class="card-title mt-md-1" style="margin-top:-15px;">Cek Jadwal Piket</h5>
                                <p class="card-text" style="margin-top:-12px" >Informasi Tentang Jadwal Piket Harian</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="buku-online">
                <div class="card mb-3" style="max-width: 540px;opacity:0.8;border-radius:20px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img class="mx-auto mt-3 float-md-right d-block" src="Resource/Gambar/buku.png" width="80px;" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body text-center text-md-left ">
                                <h5 class="card-title mt-md-1" style="margin-top:-15px;" >Buku Online</h5>
                                <p class="card-text" style="margin-top:-12px" >Kumpulan Repository Buku Atau Kisi - Kisi tes.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4">
        <a href="api/docs">
                <div class="card mb-3" style="max-width: 540px;opacity:0.8;border-radius:20px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img class="mx-auto mt-3 float-md-right d-block" src="https://img.icons8.com/color/48/000000/document--v1.png" width="80px;" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body text-center text-md-left ">
                                <h5 class="card-title mt-md-1" style="margin-top:-10px;" >Docs API <span style="color:blue;">.New</span></h5>
                                <p class="card-text" style="margin-top:-12px" >Dokumentasi API data dari jongrpl</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>        
        <div class="col-md-4">
            <a href="forum/index.php">
                <div class="card mb-3" style="max-width: 540px;opacity:0.8;border-radius:20px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img class="mx-auto mt-3 float-md-right d-block" src="Resource/Gambar/forum.png" width="80px;" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body text-center text-md-left ">
                                <h5 class="card-title mt-md-1" style="margin-top:-10px;" >Forum</h5>
                                <p class="card-text" style="margin-top:-12px" >Seputar coding dan informasi lainnya</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>        <div class="col-md-4">
           
        </div>
       
        <ul class="inline-list  mx-auto " style="width: 300px;margin-top:160px;">
            <div class="op" style="padding-left:45px;">
            <li class="list-inline-item " style="margin-right:20px;"><a href="<?= $github[0]; ?>"><img width="30px" src="<?= $github[1]; ?>" alt=""></a></li>
                <li class="list-inline-item " style="margin-right:20px;"><a href="<?= $whatsapp[0]; ?>"><img width="30px" src="<?= $whatsapp[1]; ?>" alt=""></a></li>
                <li class="list-inline-item " style="margin-right:20px;"><a href="<?= $twitter[0]; ?>"><img width="30px" src="<?= $twitter[1]; ?>" alt=""></a></li>
                
            </div>
                
                <p style="color:white;padding-left:16px;"><?= $footer?></p>
        </ul>
      </div>

    <script src="Resource/jss/bootstrap.bundle.min"></script>
    <script src="Resource/jss/bootstrap.bundle.main.min.js.map"></script>
</body>
</html>