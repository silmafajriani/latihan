<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><h1>Tampil Data Profile</h1></center>
    <center><a href="<?= base_url('profile/tambah_data')?>"> <p class="text-center"> Tambah Data </p> </a></center>
    <center><table border="1"></center>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Depan</th>
                <th>Nama Belakang</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Jenjang Pendidikan</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
    <?php $no = 1; foreach($profile as $p) { ?>
    <tr>
        <td><?= $no ?></td>
        <td><?= $p->nama_depan ?></td>
        <td><?= $p->nama_belakang ?></td>
        <td><?= $p->tempat_lahir ?></td>
        <td><?= $p->tanggal_lahir ?></td>
        <td><?= $p->jenis_kelamin ?></td>
        <td><?= $p->alamat ?></td>
        <td><?= $p->jenjang_pendidikan ?></td>
        <td><a href="<?= base_url('profile/update_data/'.$p->id)?>"> Edit </a></td>
        <td><a href="<?= base_url('profile/hapus_data/'.$p->id)?>"> Delete </a></td>
      
      
    </tr>
    <?php $no++; } ?>
    </tbody>
</body>
</html>