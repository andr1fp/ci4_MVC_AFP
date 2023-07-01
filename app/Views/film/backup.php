<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Tambahkan tautan ke file CSS Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Daftar Film</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Genre</th>
                    <th scope="col">Duration</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i=1;
                foreach ($films as $film) : ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $film['nama_film'] ?></td>
                    <td><?= $film['genre'] ?></td>
                    <td><?= $film['duration'] ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <!-- Tambahkan skrip JS Bootstrap jika diperlukan -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
