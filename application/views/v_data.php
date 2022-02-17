<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Tampil Data Profile</h2>
    <a href="<?=base_url('profile/tambah_data')?>">~ Tambah Data ~</a>
    <P>Ini adalah file pada function data</p>
    <P>Ini data hasil parsing dari parameter 1 <?= $nama ?></p>
    <P>Ini data hasil parsing dari parameter 1 <?= $kelas ?></p>
    <P>Ini data hasil parsing dari parameter 1 <?= $ttl ?></p>
    <P>Ini data hasil parsing dari parameter 1 <?= $alamat ?></p>

</body>
</html>