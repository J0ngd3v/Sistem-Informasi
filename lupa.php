<?php 

if(isset($_POST['lupa'])){
    $username = $_POST['username'];
    header("location: https://wa.me/+6281225599141?text=Saya Lupa password dengan username $username , tolong di reset password saya. Terima Kasih");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php include 'config.php'; echo $title;?> Admin</title>
     <!-- Bootstrap -->
    <link rel="stylesheet" href="Resource/css/bootstrap.min.css">
    <link rel="stylesheet" href="Resource/css/bootstrap.min.css.map">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
        body {
            background-image: url(Resource/Gambar/bg-sister.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed ;
            font-family: 'Poppins', sans-serif;
            font-size:15px !important;
        }
        .custome.card {
         
            border-radius:15px;
            background-color:none;
        }
        input{
            background-color:#f0eceb !important;
            border:none !important;
            border-radius:5px !important;
            padding-top:25px !important;
            padding-bottom:25px !important;
            font-size:15px !important;
        }
        .btn{
            border-radius:8px;
            padding-top:10px !important;
            padding-bottom:10px !important;
        }
    </style>
</head>
<body>
 
    <div class="container">
        <div class="row justify-content-center" style="margin-top:130px;">
            <div class="col-md-5">
                <div class="custome card">
                    <div class="title mx-auto">
                        <img class="rounded mx-auto float-md-right d-block" width="170px" src="Resource/Gambar/logo-rpl.png" alt="">
                   
                    </div>
                    <div class="body">
                        <form action="" method="POST">
                            <div class="form-group">
                                <div class="row justify-content-center">
                                    <div class="col-8">
                                        <input name="username" required placeholder="Masukkan Username Disini" type="text" class="form-control">
                                        
                                    </div>
                                </div>
                            </div>
                           
                            <div class="form-group">
                                <div class="row justify-content-center">
                                        <div class="col-8">
                                            <a href="login.php?admin" style="font-size:14px;">Sudah Ingat?</a>
                                        </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row justify-content-center">
                                        <div class="col-8">
                                            <button name="lupa" class="btn btn-primary btn-block">Kirim</button>
                                        </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <script src="Resource/js/bootstrap.bundle.min"></script>
    <script src="Resource/js/bootstrap.bundle.main.min.js.map"></script>
</body>
</html>
