<?php


/*

Author     : Rysnanto.
Support    : Febiana.Inc , JongDev , M.Faizin.
Version    : 0.1
Technology : HTML , CSS (Bootstrap) , PHP , AnimateCSS.

*/


// File Konfigurasi Koneksi ke Database , Untuk Struktur DB nya ada di project ini.
define('hostdb','localhost');
define('userdb','root');
define('passdb','');
define('namadb','jong_rpl');

$config = mysqli_connect(hostdb,userdb,passdb,namadb);

// belajar parsing data json menggunakan api sendiri
$data = file_get_contents('https://jongrpl1.eu.org/api/Siswa');
$result = json_decode($data , true);

// $haram = file_get_contents('https://api.akuari.my.id/asupan/ukhty');
// $harams = json_decode($haram, true);

// Konfigurasi Halaman Utama

$title = 'Official RPL -';
$footer = "&copy Developer by ".$result['Siswa'][23]['nama_siswa'];



/* Admin Edit Menu Dan Link di config*/
$dashadmin = "Official RPL";
$menu = [
    
    [
       'namamenu' => 'Pelajaran',
       'url' => 'Pelajaran',
       'icon' => ''
    ],
    [
        'namamenu' => 'User',
        'url' => 'User',
        'icon' => ''
    ],
    [
        'namamenu' => 'Buku',
        'url' => 'buku',
        'icon' => ''
    ],
    [
        'namamenu' => 'Komentar',
        'url' => 'komentar',
        'icon' => 'log-out'
    ],
    [
        'namamenu' => 'Logout',
        'url' => '../logout.php',
        'icon' => 'log-out'
    ],


];
/* Akhir Dashboard Admin*/




//Konfigurasi Medsos , Silahkan Di Edit
$github = array(
    "https://github.com/Ghonge1337",
    "https://img.icons8.com/external-tal-revivo-green-tal-revivo/100/000000/external-github-a-web-based-hosting-service-for-version-control-logo-green-tal-revivo.png"
);

$whatsapp = array(
    "https://wa.me/+6281225599141",
    "Resource/Gambar/wh.png"
);

$twitter = array(
    "https://twitter.com/Rysnant01",
    "Resource/Gambar/twit.png"
);

