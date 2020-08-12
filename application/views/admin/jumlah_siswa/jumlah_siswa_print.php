<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cetak Data Jumlah Siswa | TK ISLAM AL-WAKAF</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h2 style="text-align:center">DATA JUMLAH PESERTA DIDIK TK ISLAM AL-WAKAF</h2>
    <table class="table table-bordered" id="" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>#</th>
            <th>Tahun Ajaran</th>
            <th>Siswa Laki-Laki</th>
            <th>Siswa Perempuan</th>
            <th>Jumlah Siswa</th>
          </tr>
        </thead>
        <tbody style="text-align:center">
            <?php
            $no = 1;
            foreach ($row->result() as $key => $data) { ?>
          <tr>
            <td><?= $no++ ?>.</td>
            <td><?= $data->tahun_ajaran ?></td>
            <td><?= $data->siswa_laki_laki ?></td>
            <td><?= $data->siswa_perempuan ?></td>
            <td><?= $data->jumlah_siswa ?></td>
          </tr>
            <?php 
        } ?>
        </tbody>
      </table>
</body>
</html>