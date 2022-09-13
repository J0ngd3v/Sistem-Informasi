<?php
 header('Content-Type: application/json');  
include "../config.php";

$query = "SELECT * FROM jadwal_pelajaran";
$pelajaran = mysqli_query($config , $query);
$pljrn = mysqli_fetch_assoc($pelajaran);

foreach($pelajaran as $pljrn){
   $hasil[] = $pljrn;
  
}

echo json_encode(
 array(
    'Message' => 'Data pelajaran berhasil tampil',
    'Pelajaran' => $hasil,
 ),true
);



