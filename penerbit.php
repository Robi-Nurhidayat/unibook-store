<?php
require("config.php");



    $hasil = mysqli_query($conn,'SELECT * FROM t_penerbit');		

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
            <div class="tabel__container">
                <h2>Data Penerbit</h2>
                <a href="tambah_penerbit.php" class="btn btn-primary mb-3">Tambah Data</a>

                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>ID Penerbit</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Kota</th>
                            <th>Telepon</th>
                            <th>Aksi</th>


                        </tr>
                    </thead>
                    <tbody>
                        <?php while($getData = mysqli_fetch_array($hasil)) { ?>
                        <tr>
                            <td><?php echo $getData['IdPenerbit']; ?></td>
                            <td><?php echo $getData['nama']; ?></td>
                            <td><?php echo $getData['alamat']; ?></td>
                            <td><?php echo $getData['kota'] ?></td>
                            <td><?php echo $getData['telepon'] ?></td>
                            <td class="d-flex gap-3">
                                <a href="edit_penerbit_form.php?id=<?php echo $getData['id'] ?>"
                                    class="btn btn-success">Edit</a>
                                <a href="proses_delete_penerbit.php?id=<?php echo $getData['id'] ?>"
                                    class="btn btn-danger" onclick="return confirm('Yakin ?')">Delete</a>
                            </td>

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