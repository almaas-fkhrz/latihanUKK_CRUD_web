<?php
include 'koneksi.php';

if (isset($_POST['tambah'])) {
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
	$penerbit = $_POST['penerbit'];
	$gambar = $_POST['gambar'];
    mysqli_query($conn, "INSERT INTO buku (judul, pengarang, penerbit, gambar) VALUES ('$judul', '$pengarang', '$penerbit', '$gambar')");
    header('location:index.php');
}

?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <title>Tambah Buku</title>
</head>

<body>
    <div class="container mt-3">
        <div class="card">
            <div class="card-body">
                <form method="post" action="<?htmlspecialchars($_SERVER['PHP_SELF'])?>">
                    <div class="form-group">
                        <label for="">Judul</label>
                        <input type="text" class="form-control" name="judul" required>
                    </div>
                    <div class="form-group">
                        <label for="">Pengarang</label>
                        <input type="text" class="form-control" name="pengarang" required>
                    </div>
                    <div class="form-group">
                        <label for="">Penerbit</label>
                        <input type="text" class="form-control" name="penerbit" required>
                    </div>
                    <div class="form-group">
                        <label for="">Gambar</label>
                        <input type="text" class="form-control" name="gambar" required>
                    </div>
                    <input type="submit" value="Tambahkan" name="tambah" class="btn btn-primary btn-sm">
                </form>
            </div>
        </div>
    </div>
</body>

</html>