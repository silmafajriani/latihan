<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> From Tambah Data </h1>
    <from action="<?= base_url('profile/action_tambah_data') ?>" method="post">
         <table>
            <tr>
                 <td>Nama Depan</td>
                 <td>:</td>
                 <td><input type="text" name="nama_depan" class="form-control"></td>
            </tr>
            <tr>
                 <td>Nama Belakang</td>
                 <td>:</td>
                 <td><input type="text" name="nama_belakang" class="form-control"></td>
            </tr>
                 <td>Tempat Lahir</td>
                 <td>:</td>
                 <td><input type="text" name="tempat_lahir" class="form-control"></td>
            </tr>
                 <td>Tanggal Lahir</td>
                 <td>:</td>
                 <td><input type="date" name="tanggal_lahir" class="form-control"></td>
            </tr>
                 <td>Jenis Kelamin`</td>
                 <td>:</td>
                 <td>
                     <input type="radio" name="jenis_kelamin" value="L" >L
                     <input type="radio" name="jenis_kelamin" value="P" >P
                 </td>
            </tr>
            </tr>
                 <td>Alamat</td>
                 <td>:</td>
                 <td><textarea type="text" name="alamat" class="form-control"></textarea></td>
            </tr>
                 <td>Jenjang Pendidikan</td>
                 <td>:</td>
                 <td>
                     <select name="jenjang_pendidikan" id="" class="form-control">
                         <option value="SMK">SMK Sederajat</option>
                         <option value="SMK">D3</option>
                         <option value="SMK">S1</option>
                         <option value="SMK">S2</option>
                    </select>
                 </td>
            </tr>
            <tr>
                 <td colspan="3"><hr></td>
            </tr>
            <tr>
                 <td colspen="3" class="text-center">
                 <button type="submit" class="btn btn-primary">Simpan</button>
                 <button type="submit" class="btn btn-warning">Kembali</button>
                 </td>
            </tr>
        </table>
    </form>         
</body>
</html>