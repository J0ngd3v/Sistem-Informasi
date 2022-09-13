<?php
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Haram</title>
</head>
<body>
<button onClick="window.location.reload();">Ganti Vidio</button>
<video width="320" height="240" controls>
  <source src="<?= $harams['respon']?>" type="video/mp4">
</video>
</body>
</html>