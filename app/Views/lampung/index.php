<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kabupaten/Kota di Lampung</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .container {
            margin-top: 50px;
        }
        table {
            margin: 0 auto;
            width: 100%;
            max-width: 1000px;
        }
        th, td {
            text-align: center;
        }
        .footer {
            text-align: center;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 align="center">Daftar Kabupaten/Kota di Lampung</h1>
        <br/>
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Kabupaten/Kota</th>
                    <th>Ibu Kota</th>
                    <th>Bupati/Wali Kota</th>
                    <th>Luas Wilayah</th>
                    <th>Jumlah Penduduk</th>
                    <th>Jumlah Kecamatan</th>
                    <th>Jumlah Kelurahan/Desa</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                foreach ($kabupaten as $kab) : ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $kab['kabupaten_kota'] ?></td>
                        <td><?= $kab['ibu_kota'] ?></td>
                        <td><?= $kab['bupati_wali_kota'] ?></td>
                        <td><?= $kab['luas_wilayah'] ?></td>
                        <td><?= $kab['jumlah_penduduk'] ?></td>
                        <td><?= $kab['kecamatan'] ?></td>
                        <td><?= $kab['kelurahan_desa'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <p align="center">Sumber: <a href="https://www.wikiwand.com/id/Daftar_kabupaten_dan_kota_di_Lampung">wikiwand.com</a></p>
    </div>
    <div class="footer">
        <p>Andri Febriyadi Putra &copy; 2023</p>
    </div>
</body>
</html>