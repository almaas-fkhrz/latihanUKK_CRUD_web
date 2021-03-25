<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <title>Buku</title>
</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container justify-content-center">
            <span class="navbar-brand mb-0 h1">Pencarian Buku</span>
        </div>
    </nav>
    <div class="container mt-3">
        <div class="d-flex align-items-center justify-content-between mb-3">
            <a href="index.php" type="button" class="btn btn-primary">Home</a>
        </div>

        <div class="row">
            <?php
                include 'koneksi.php';
                $cari_judul = $_GET['cari_judul'];
                $data = mysqli_query($conn, "SELECT * FROM buku WHERE judul LIKE '%$cari_judul%'");
                while ($d = mysqli_fetch_array($data)) {
            ?>
            <div class="col-3">

                <div class="card mt-2">

                    <div class="card-body">
                        <h5 class="card-title"><?= $d['judul'];?></h5>
                        <img src="maas.jpg" class="card-img mb-2" alt="...">
                        <a href="edit.php?id_buku=<?= $d['id_buku'];?>" class="btn btn-secondary btn-sm">Edit</a>
                        <a href="hapus.php?id_buku=<?= $d['id_buku'];?>"
                            onclick="return confirm('Apakah kamu yakin ingin menghapus data ini?')"
                            class="btn btn-danger btn-sm">Hapus</a>
                    </div>
                </div>

            </div>
            <?php
                }
            ?>
        </div>



    </div>


</body>

</html>