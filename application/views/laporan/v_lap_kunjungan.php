<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>


    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css">

    <style>
        .table-bordered th,
        .table-bordered thead th,
        .table-bordered td{
            border: 1px solid #000;
        }
    </style>
</head>
<body>
    <div class="container">
        <h3 class="mb-0">KLINIK CODEIGNITER</h3>
        <small>Jl. Pulau Beringin Desa Harapan Kec. Pondok Kelapa Malang</small>
        <hr>
        <h4 class="text-center">LAPORAN DATA KUNJUNGAN</h4>

        <table class="table table-bordered table-sm">
            <tr>
                <th width="80px">No.</th> 
                <th>Tgl. Kunjungan</th>
                <th>Nama Pasien</th>
                <th>L/P</th>
                <th>Umur</th>
                <th>Keluhan</th>
                <th>Diagnosa</th>
                <th>Penatalaksanaan</th>
            </tr>
            <?php $no=1; foreach($kunjungan as $r) { ?>
                <tr>
                    <td class="text-center"><?= $no; ?></td>
                    <td><?= $r['tgl_berobat']; ?></td>
                    <td><?= $r['nama_pasien']; ?></td>
                    <td><?= $r['jenis_kelamin']; ?></td>
                    <td><?= $r['umur']; ?></td>
                    <td><?= $r['keluhan_pasien']; ?></td>
                    <td><?= $r['hasil_diagnosa']; ?></td>
                    <td><?= $r['penatalaksanaan']; ?></td>
                </tr>
            <?php $no++; } ?>
        </table>
        <br>
        <table width="100%">
            <tr>
                <td></td>
                <td width="300px">
                    <p>
                    Malang <?= date('d-m-Y'); ?>
                    <br>
                    Administrator,
                    <br><br><br><br>
                    <b>________________________________</b>
                    </p>
                </td>
            </tr>
                
        </table>
    </div>
</body>
</html>