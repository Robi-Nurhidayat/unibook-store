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
		$getPenerbitById = mysqli_query($conn,"SELECT * FROM t_penerbit WHERE id='$id'");
        while($data = mysqli_fetch_array($getPenerbitById)){
        
        ?>
            <form action="proses_edit_penerbit.php" method="post">
                <input type="hidden" class="form-control" name="id" id="id" value="<?= $data['id'] ?>">
                <div class="mb-3">
                    <label for="idPenerbit" class="form-label">ID Penerbit</label>
                    <input type="text" class="form-control" name="IdPenerbit" id="idPenerbit"
                        value="<?= $data['IdPenerbit'] ?>" required>
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama" value="<?= $data['nama'] ?>" required>
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" name="alamat" id="alamat" value="<?= $data['alamat'] ?>"
                        required>
                </div>
                <div class="mb-3">
                    <label for="kota" class="form-label">Kota</label>
                    <input type="text" class="form-control" name="kota" id="kota" value="<?= $data['kota'] ?>" required>
                </div>
                <div class="mb-3">
                    <label for="telepon" class="form-label">Telepon</label>
                    <input type="text" class="form-control" name="telepon" id="telepon" value="<?= $data['telepon'] ?>"
                        required>
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