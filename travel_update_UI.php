<?php
include 'connector.php';

$kode = $_GET['kode'];

$sql = "SELECT * FROM travel WHERE pk = '$kode'";
$result = mysqli_query($dbc, $sql);

$data = mysqli_fetch_assoc($result);
?>

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
            <h2>EDIT LAYANAN TRAVEl/SEWA MOBIL</h2>
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
            <form method="POST" enctype="multipart/form-data">
                <div class="mb-3 row">
                    <label for="nama_tr" class="col-sm-2 col-form-label">Nama Travel</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama_tr" id="nama_tr" value=<?php echo $data['nama_tr'] ?>>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="hargaJam" class="col-sm-2 col-form-label">Harga Per Jam</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="hargaJam" id="hargaJam" value=<?php echo $data['harga_perjam'] ?>>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="jmlPax" class="col-sm-2 col-form-label">Kapasitas Peserta</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="jmlPax" id="jmlPax" value=<?php echo $data['kapasitas_pax'] ?>>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="fileFoto" class="col-sm-2 col-form-label">File Foto</label>
                    <div class="col-sm-10">
                        <input type="file" name="fileFoto" id="fileFoto" value=<?php echo "images/" . $data['fileFoto'] ?>>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                    <div class="col-sm-10">
                        <select name="kategori" id="kategori" class="form-control">
                            <option value=<?php echo $data['kategori_travel'] ?>><?php echo $data['kategori_travel'] ?></option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="keterangan" id="keterangan" cols="100" rows="2"><?php echo $data['keterangan'] ?></textarea>
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
                <input type="hidden" name="pk" value=<?php echo $data['pk'] ?>>
            </form>
            <div class="form-group row">
                <a href="travelDashboard.php"><button class="btn btn-danger">BACK</button></a>
            </div>
            <?php include 'travel_update_data.php' ?>

        </div>
    </div>
</body>

</html>