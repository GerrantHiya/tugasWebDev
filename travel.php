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
    <link rel="stylesheet" href="css/custom.style.css">
    <style>
        body {
            background-color: whitesmoke;
        }

        .cust-post {
            margin: auto;
        }
    </style>
</head>

<body>
    <div class="row">
        <div class="mb-3 row"></div>
        <div class="col-sm-1"></div>
        <div class="mb-3 row cust-post">
            <div class="d-flex">
                <h2 class="text-dark">TRAVEL</h2>
                <a href="travelInputDashboard.php" style="margin-left: 300px;"><button class="btn btn-secondary">DAFTARKAN LAYANAN BARU</button></a>
            </div>
            <div class="d-flex">
                <form method="post">
                    <div class="flex-grow-1 card-body">
                        <Label><input type="checkbox" name="travel" style="width: 45px;">Travel</Label>
                        <Label><input type="checkbox" name="sewa_mobil" style="width: 45px;">Sewa Mobil</Label>
                        <input type="text" name="nama_tr_search" style="width: 545px; margin-left: 150px">
                        <input type="submit" class="btn btn-primary" value="Search" name="cari_namaTravel">
                    </div>
                </form>
            </div>
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
            <?php
            include 'travel_show_cards.php';
            ?>
        </div>
    </div>
</body>

</html>