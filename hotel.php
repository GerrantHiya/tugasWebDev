<!DOCTYPE html>
<html>

<?php
include 'connector.php';
if (isset($_POST['Simpan'])) {
    $hotelKODE = $_POST['hotelKODE0147'];
    $hotelNAMA = $_POST['hotelNAMA'];
    $hotelALAMAT0147 = $_POST['hotelALAMAT0147'];
    $kategoriKODE = $_POST['kategoriKODE'];



    mysqli_query($dbc, "insert into gerrant values ('$hotelKODE0147','$hotelNAMA', '$hotelALAMAT0147', '$kategoriKODE')");
    header("location:hotel.php");
}
$datakategori = mysqli_query($dbc, "select * from gerrant");



?>



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
    <!-- <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="homePage.html">
                <h4>November 7th</h4>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h4 class="offcanvas-title" id="offcanvasDarkNavbarLabel">November 7th</h4>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="destinasi.php">Home</a>
                        </li>
                </div>
            </div>
        </div>
    </nav> -->


    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
            <form method="POST">
                <div class="mb-3 row">
                    <label for="hotelKODE0147" class="col-sm-2 col-form-label">Kode Hotel</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="hotelKODE0147" id="hotelKODE0147" maxlength="4">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="hotelNAMA" class="col-sm-2 col-form-label">Nama Hotel</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="hotelNAMA" id="hotelNAMA">
                    </div>
                </div>


                <div class="mb-3 row">
                    <label for="hotelALAMAT0147" class="col-sm-2 col-form-label">Alamat Hotel</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="hotelALAMAT0147" id="hotelALAMAT0147">
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
                        <input type="submit" name="Simpan" value="Simpan" class="btn btn-secondary">
                        <input type="reset" class="btn btn-success" value="Batal" name="Batal">
                    </div>
                </div>
            </form>

            <form method="POST">
                <div class="form-group row mb-2">
                    <label for="search_alamat" class="col-sm-3">Alamat Hotel</label>
                    <div class="col-sm-6">
                        <input type="text" name="search_alamat" class="form-control" id="search_alamat" value="<?php if (isset($_POST['search_alamat'])) {
                                                                                                                    echo $_POST['search_alamat'];
                                                                                                                } ?>" placeholder="Cari ALAMAT">
                    </div>
                    <input type="submit" name="kirim_alamat" class="col-sm-1 btn btn-primary" value="Search">
                </div>
            </form>
            <form method="POST">
                <div class="form-group row mb-2">
                    <label for="cari_nama" class="col-sm-3">Alamat Hotel</label>
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
                        <th scope="col">Kode Kategori</th>

                        <th colspan="3" style="text-align: center">Aksi</th>

                    </tr>
                </thead>
                <tbody>

                    <!-- menerima kiriman dari form untuk pencarian pada tabel -->
                    <?php
                    if (isset($_POST["kirim_alamat"])) {
                        $search_alamat = $_POST['search_alamat'];
                        $sql_alamat = "SELECT * FROM gerrant WHERE hotelALAMAT0147 LIKE '%$search_alamat' OR hotelALAMAT0147 LIKE '$search_alamat%' OR hotelALAMAT0147 LIKE '%$search_alamat%'";
                        $query = mysqli_query($dbc, $sql_alamat);
                    } else if (isset($_POST['kirim_nama'])) {
                        $search_nama = $_POST['search_nama'];
                        $sql_nama = "SELECT * FROM gerrant WHERE hotelNAMA LIKE '%$search_nama' OR hotelNAMA LIKE '$search_nama%' OR hotelNAMA LIKE '%$search_nama%'";
                        $query = mysqli_query($dbc, $sql_nama);
                    } else {
                        $query = mysqli_query($dbc, "select * from gerrant");
                    }

                    $nomor = 1;
                    while ($row = mysqli_fetch_array($query)) {
                    ?>
                        <tr>
                            <td><?php echo $nomor; ?></td>
                            <td><?php echo $row['hotelNAMA']; ?></td>
                            <td><?php echo $row['hotelALAMAT0147']; ?></td>
                            <td><?php echo $row['kategoriKODE']; ?></td>

                            <td width="5px">
                            <td width="5px"><a href="#" title="edit" class="btn btn-success btn-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                    </svg></a>
                            </td>
                            <td width="5px"><a href="<?php
                                                        $kode = $row['hotelKODE0147'];
                                                        echo "delete.php?kode=" . "$kode";
                                                        ?>" title="delete" class="btn btn-danger btn-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                                        <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                                    </svg></a>
                            </td>
                        </tr>
                        <?php $nomor = $nomor + 1; ?>
                    <?php } ?>
                </tbody>
            </table>



        </div> <!-- penutup clas=col-sm-10 -->
    </div> <!-- penutup clas=row -->
    <script type="text/javascript" scr="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#kategoriKODE').select2({
                closeOnSelect: true,
                allowClear: true,
                placeholder: 'Pilih Kategori Wisata'
            });
        });
    </script>
</body>

</html>