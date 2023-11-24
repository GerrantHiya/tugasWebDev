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

        a {
            text-decoration: none;
            color: black;
        }
    </style>
</head>

<body>
    <div class="row">
        <div class="mb-3 row"></div>
        <div class="col-sm-1"></div>
        <div class="mb-3 row cust-post">
            <div class="d-flex">
                <h2 class="text-dark">OLEH-OLEH</h2>
                <a href="olehInputDashboard.php" style="margin-left: 300px;"><button class="btn btn-secondary">DAFTARKAN PRODUK BARU</button></a>
            </div>
        </div>
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0" method="post">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." name="cariTxt">
                <input type="submit" value="Search" name="cari" class="btn btn-primary">
            </div>
            <br>
        </form>
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
            <?php include 'oleh_show_cards.php' ?>
        </div>
    </div>
</body>

</html>