<?php
require("config.php");


if(isset($_GET['cari'])){
    $cari = $_GET['cari'];
    $hasil = mysqli_query($conn,"select * from t_buku where namaBuku like '%".$cari."%'");				
}else{
    $hasil = mysqli_query($conn,'SELECT * FROM t_buku');		
}
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

    <div class="header">
        <div>
            <span>UJIKOM</span>
        </div>
        <div>
            <span>Robi Nurhidayat</span>
        </div>
    </div>
    <main class="main">
        <div class="sidebar">
            <ul class="list-menu">
                <li class="list-link"><a href="index.php"> Home</a></li>
                <li class="list-link"><a href="admin.php"> Admin</a></li>
                <li class="list-link"><a href="pengadaan.php">Pengadaan</a></li>
            </ul>
        </div>
        <div class="content">
            <div class="tabel__container">
                <form action="index.php" method="get" class="mb-2">
                    <div class="d-flex gap-2">
                        <input type="text" class="form-control form-control-lg" name="cari" id="cari"
                            placeholder="Ketikan nama buku...">
                        <button type="submit" class="btn btn-primary">Cari</button>
                    </div>
                </form>
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>ID Buku</th>
                            <th>kategori</th>
                            <th>Nama Buku</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Penerbit</th>


                        </tr>
                    </thead>
                    <tbody>
                        <?php while($getBuku = mysqli_fetch_array($hasil)) { ?>
                        <tr>
                            <td><?php echo $getBuku['IdBuku']; ?></td>
                            <td><?php echo $getBuku['kategori']; ?></td>
                            <td><?php echo $getBuku['namaBuku']; ?></td>
                            <td><?php echo $getBuku['harga'] ?></td>
                            <td><?php echo $getBuku['stok'] ?></td>
                            <td><?php echo $getBuku['penerbit'] ?></td>

                        </tr>

                        <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>