<?php
require("config.php");

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UNIBOOKSTORE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/index.css">
</head>

<body>
    <header class="header">
        <div>
            <span>UJIKOM</span>
        </div>
        <div>
            <span>Robi Nurhidayat</span>
        </div>
    </header>
    <main class="main">
        <div class="sidebar">
            <ul class="list-menu">
                <li class="list-link"><a href="index.php"> Home</a></li>
                <li class="list-link"><a href="admin.php"> Admin</a></li>
                <li class="list-link"><a href="pengadaan.php">Pengadaan</a></li>
            </ul>
        </div>
        <div class="content">

            <?php
        
        $id = $_GET['id'];
		$getBukuById = mysqli_query($conn,"SELECT * FROM t_buku WHERE id='$id'");
        while($data = mysqli_fetch_array($getBukuById)){
        
        ?>
            <form action="proses_edit_buku.php" method="post">
                <input type="hidden" class="form-control" name="id" id="id" value="<?= $data['id'] ?>">
                <div class="mb-3">
                    <label for="idBuku" class="form-label">ID Buku</label>
                    <input type="text" class="form-control" name="IdBuku" id="idBuku" value="<?= $data['IdBuku'] ?>"
                        required>
                </div>
                <div class="mb-3">
                    <label for="kategori" class="form-label">Kategori</label>
                    <input type="text" class="form-control" name="kategori" id="kategori"
                        value="<?= $data['kategori'] ?>" required>
                </div>
                <div class="mb-3">
                    <label for="namaBuku" class="form-label">Nama Buku</label>
                    <input type="text" class="form-control" name="namaBuku" id="namaBuku"
                        value="<?= $data['namaBuku'] ?>" required>
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="text" class="form-control" name="harga" id="harga" value="<?= $data['harga'] ?>"
                        required>
                </div>
                <div class="mb-3">
                    <label for="stok" class="form-label">Stok</label>
                    <input type="text" class="form-control" name="stok" id="stok" value="<?= $data['stok'] ?>" required>
                </div>
                <div class="mb-3">
                    <label for="penerbit" class="form-label">Penerbit</label>
                    <input type="text" class="form-control" name="penerbit" id="penerbit"
                        value="<?= $data['penerbit'] ?>" required>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>

            <?php }?>
        </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>