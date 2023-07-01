<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Film21AFP</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <script src="/assets/js/unpkg.com_sweetalert@2.1.2_dist_sweetalert.min.js"></script> <!-- tambahkan ini -->

    <style>
        .card {
            margin-bottom: 20px;
            height: 100%;
        }
        .card-body {
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .card-text {
            margin-bottom: 10px;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            padding: 10px;
            background-color: #f8f9fa;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container">
                    <a class="navbar-brand" href="<?= base_url('/') ?>">FilmAFP21</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="<?= base_url('/') ?>">Beranda</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('film/film') ?>">Semua Film</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('film/genre') ?>">Kategori Film</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('film/about') ?>">Tentang Kami</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </nav>

    <?= $this->renderSection('content') ?> 

    <footer class="footer">
        <p>Andri Febriyadi Putra &copy; 2023</p>
    </footer>
    
        <script src="/assets/js/bootstrap.bundle.min.js"></script> 

        <?php if (session()->getFlashdata('success')) : ?>
        <script>
            swal({
                title: "Informasi",
                text: "<?= session()->getFlashdata('success') ?>",
                icon: "success",
                button: "OK",
            });
        </script>

        <?php endif; ?>
</body>
</html>