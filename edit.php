<?php
include 'koneksi.php';
$id_buku = $_GET['id_buku'];
$data = mysqli_query($conn, "SELECT * FROM buku WHERE id_buku = '$id_buku'");
while ($d = mysqli_fetch_array($data)) {
    $id_buku = $d['id_buku'];
    $judul = $d['judul'];
	$pengarang = $d['pengarang'];
	$penerbit = $d['penerbit'];
	$gambar = $d['gambar'];
}

if (isset($_POST['edit'])) {
    $id_buku = $_POST['id_buku'];
    $judul = $_POST['judul'];
	$pengarang = $_POST['pengarang'];
	$penerbit = $_POST['penerbit'];
	$gambar = $_POST['gambar'];

    mysqli_query($conn, "UPDATE buku SET judul='$judul', pengarang='$pengarang', penerbit='$penerbit', gambar='$gambar' WHERE id_buku='$id_buku'");
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <title>Edit Buku</title>
</head>

<body>
    <div class="container mt-3">
        <div class="card">
            <div class="card-body">
                <form method="post" action="<?htmlspecialchars($_SERVER['PHP_SELF']);?>">
                    <input type="hidden" class="form-control" name="id_buku" value="<?= $id_buku ?>" required>
                    <div class="form-group">
                        <label for="">Judul</label>
                        <input type="text" class="form-control" name="judul" value="<?= $judul ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="">Pengarang</label>
                        <input type="text" class="form-control" name="pengarang" value="<?= $pengarang ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="">Penerbit</label>
                        <input type="text" class="form-control" name="penerbit" value="<?= $penerbit ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="">Gambar</label>
                        <input type="text" class="form-control" name="gambar" value="<?= $gambar ?>" required>
                    </div>
                    <input type="submit" value="Simpan" name="edit" class="btn btn-primary btn-sm">
                </form>
            </div>
        </div>
    </div>
</body>

</html>