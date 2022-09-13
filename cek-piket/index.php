
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php include '../config.php'; echo $title;?> Cek Pelajaran</title>
     <!-- Bootstrap -->
     <link rel="stylesheet" href="../Resource/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Resource/css/bootstrap.min.css.map">
    <link rel="stylesheet" href="../Resource/css/custome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>


</head>
<body>
    
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-4 col-8" style="margin-top:200px;">
          <form action="" method="POST">
            <div class="row justify-content-center">
                <div class="col-md-12">
                  <!--<input type="text" class="form-control" name="jadwal" placeholder="Masukkan Hari">-->
                  <select name="jadwal" class="form-control">
                    <option value="#">-- Pilih Hari --</option>
                    <option value="senin">Senin</option>
                    <option value="selasa">Selasa</option>
                    <option value="rabu">Rabu</option>
                    <option value="kamis">Kamis</option>
                    <option value="jumat">Jumat</option>
                    <option value="sabtu">Sabtu</option>
                 </select>
                  <button name="cari" class="btn btn-primary mt-2 " style="margin-left:90px;">Cek Piket</button>
                </div>
            </div>
          </form>
      </div>
  </div>
  <?php
                         
        if(isset($_POST['cari'])){
        $query = mysqli_query($config , "SELECT * FROM jadwal_piket INNER JOIN user on jadwal_piket.user_id=user.no_absen where hari='".$_POST['jadwal']."'");
    while($hasil = mysqli_fetch_assoc($query)){
?>
  <div class="row justify-content-center">
        <div class="col-md-4">
        <div class="card mt-2" style="opacity:0.7;">
                   <tr><td><?= $hasil['nama_siswa'];?></td><td></td></tr>
                </div>
        </div>
  </div>
  <?php } ?>
  <?php } ?>
</div>
  <!-- <iframe src="https://free.timeanddate.com/countdown/i8fe3f3h/n666/cf12/cm0/cu4/ct0/cs0/ca0/cr0/ss0/cac000/cpc000/pcfff/tcfff/fs100/szw320/szh135/tatAplikasi%20Sedang%20Di%20Perbaiki/tac000/tptTime%20since%20Event%20started%20in/tpc000/mac000/mpc000/iso2022-07-29T00:00:00" allowtransparency="true" frameborder="0" width="244" height="69"></iframe> -->
      
 <script src="../Resource/js/bootstrap.bundle.min"></script>
    <script src="../Resource/js/bootstrap.bundle.main.min.js.map"></script>
</body>
</html>

