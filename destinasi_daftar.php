<!DOCTYPE html>
<html>

<?php include 'connector.php'; ?>

<head>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link href="style/body_foto.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="row">
        <div class="mb-3 row">
            <h2>DAFTAR DESTINASI</h2>
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
            <!-- CARI -->
            <form method="POST">
                <div class="form-group row mb-2">
                    <label for="cari_nama" class="col-sm-3">Nama destinasi</label>
                    <div class="col-sm-6">
                        <input type="text" name="search_nama" class="form-control" id="cari_nama" value="<?php if (isset($_POST['cari_nama'])) {
                                                                                                                echo $_POST['cari_nama'];
                                                                                                            } ?>" placeholder="Cari NAMA">
                    </div>
                    <input type="submit" name="kirim_nama" class="col-sm-1 btn btn-primary" value="Search">
                </div>
            </form>
            <table class="table table-hover table-dark">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kode Destinasi</th>
                        <th scope="col">Nama Destinasi</th>
                        <th scope="col">Nama Kategori</th>
                        <th scope="col">Foto</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (isset($_POST['kirim_nama'])) {
                        $search_nama = $_POST['search_nama'];
                        $sql_nama = "SELECT * FROM destinasi d JOIN kategoriwisata k ON d.kategoriKODE = k.kategoriKODE
                        WHERE d.destinasiNAMA LIKE '%$search_nama' OR d.destinasiNAMA LIKE '$search_nama%' OR d.destinasiNAMA LIKE '%$search_nama%'";
                        $query = mysqli_query($dbc, $sql_nama);
                    } else {
                        $query_semua = "SELECT * FROM destinasi d JOIN kategoriwisata k ON d.kategoriKODE = k.kategoriKODE";
                        $query = mysqli_query($dbc, $query_semua);
                    }

                    $nomor = 1;
                    while ($row = mysqli_fetch_array($query)) {
                    ?>
                        <tr>
                            <td><?php echo $nomor; ?></td>
                            <td><?php echo $row['destinasiKODE']; ?></td>
                            <td><?php echo $row['destinasiNAMA']; ?></td>
                            <td><?php echo $row['kategoriNAMA']; ?></td>
                            <td><img src=<?php echo "images/" . $row['fileFoto'] ?> width="72px" height="46px"></td>

                        </tr>
                        <?php $nomor = $nomor + 1; ?>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <script type="text/javascript" scr="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
</body>

</html>