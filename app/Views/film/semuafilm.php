<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semua Film</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
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
            <a class="navbar-brand" href="#">FilmAFP21</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Beranda</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="film/film">Semua Film</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="film/genre">Kategori Film</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="film/about">Tentang Kami</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </nav>

    <div class="container">
        <h1>Data Film</h1>
        <div class="row row-cols-1 row-cols-md-5 g-4">
            <?php foreach ($semuafilm as $film) : ?>
                <div class="col">
                    <div class="card">
                        <img class="card-img-top" src="/assets/cover/<?= $film['cover'] ?>" alt="Cover Film">
                        <div class="card-body">
                            <h5 class="card-title"><?= $film['nama_film'] ?></h5>
                            <p class="card-text"><strong>Genre:</strong> <?= $film['nama_genre'] ?></p>
                            <p class="card-text"><strong>Duration:</strong> <?= $film['duration'] ?></p>
                            <a href="#" class="btn btn-info">Detail</a>
                            <a href="#" class="btn btn-success">Update</a>
                            <a href="#" class="btn btn-warning">Delete</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <footer class="footer">
        <p>Andri Febriyadi Putra &copy; 2023</p>
    </footer>
    
        <script src="/assets/js/bootstrap.bundle.min.js"></script>  
</body>
</html>