<!DOCTYPE html>
<html>

<?php include 'connector.php'; ?>

<head>
    <title>KUIS 7 NOVEMBER</title>
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
            <h2>DESTINASI UPDATE</h2>
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
            <form method="POST" action="destinasi_update.php" enctype="multipart/form-data">
                <div class="mb-3 row">
                    <label for="destinasiKODE" class="col-sm-2 col-form-label">Kode destinasi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="destinasiKODE" id="destinasiKODE" maxlength="4" value=<?php
                                                                                                                            $kode = $_GET['kode'];
                                                                                                                            echo $kode;
                                                                                                                            ?> readonly>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="destinasiNAMA" class="col-sm-2 col-form-label">Nama destinasi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="destinasiNAMA" id="destinasiNAMA">
                    </div>
                </div>


                <div class="mb-3 row">
                    <label for="fileFoto" class="col-sm-2 col-form-label">File Foto</label>
                    <div class="col-sm-10">
                        <input type="file" name="fileFoto" id="fileFoto">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="kategoriKODE" class="col-sm-2 col-form-label">Kategori KODE</label>
                    <div class="col-sm-10">
                        <input type="text" name="kategoriKODE" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-2">
                    </div>
                    <div class="col-sm-10">
                        <input type="submit" name="update" value="Simpan" class="btn btn-secondary">
                        <input type="reset" class="btn btn-success" value="Batal" name="Batal">
                        <a href="destDashboard.php"><input type="button" class="btn btn-danger" value="Back"></a>
                    </div>
                </div>
                <?php
                $kondisi = $_GET['kond'];

                if ($kondisi == "awal") {
                    echo "";
                } else if ($kondisi == "selesai") {
                    echo "<p>BERHASIL UPDATE</p>";
                    echo
                    "<a href='destinasiDashboard.php'>
                    <input type=button value=Kembali
                    </a>";
                }
                ?>
            </form>
        </div>
    </div>
</body>

</html>