<!DOCTYPE html>
<html>

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
            <h2>DAFTAR PRODUK OLEH-OLEH</h2>
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
            <form method="POST" enctype="multipart/form-data">
                <div class="mb-3 row">
                    <label for="nama_pr" class="col-sm-2 col-form-label">Nama Produk</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama_pr" id="nama_pr">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="harga" class="col-sm-2 col-form-label">Harga Rp.</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="harga" id="harga">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="st_halal" class="col-sm-2 col-form-label">Status Halal</label>
                    <div class="col-sm-10">
                        <select name="st_halal" id="st_halal" class="form-control">
                            <option value="Halal">Halal</option>
                            <option value="Non-Halal">Non-Halal</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="fileFoto" class="col-sm-2 col-form-label">File Foto</label>
                    <div class="col-sm-10">
                        <input type="file" name="fileFoto" id="fileFoto" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-2">
                    </div>
                    <div class="col-sm-10">
                        <input type="submit" name="Simpan" value="Simpan" class="btn btn-secondary">
                        <input type="reset" class="btn btn-success" value="Batal" name="Batal">
                    </div>
                </div>
            </form>
            <div class="form-group row">
                <a href="olehDashboard.php"><button class="btn btn-danger">BACK</button></a>
            </div>
            <?php include 'oleh_input.php' ?>

        </div>
    </div>
</body>

</html>