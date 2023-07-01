<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<div class="container">
    <h1>Data Genre</h1>
    <table class="table table-bordered table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Genre</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $i=1;
                foreach ($semuagenre as $genre) : ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $genre['nama_genre'] ?></td>
                    <td>
                        <a href="#" class="btn btn-success">Update</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                    </td>      
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= $this->endSection() ?>
