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
            background-color: rgb(253, 174, 68);
        }
    </style>
</head>

<body>
    <div class="row">
        <div class="mb-3 row"></div>
        <div class="col-sm-1"></div>
        <div class="mb-3 row">
            <h2>TO-DO LIST</h2>
            <p>ARCHIVE</p>
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
            <?php
            include 'noteForm_showArchive_cards.php'; // MENAMPILKAN LIST CATATAN
            ?>
        </div>
        <div class="col-sm-1">
            <h1 class="mb-0">
                <a href="noteDashboard.php" style="list-style: none; text-decoration:none; color:black" title="new note">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-backspace-fill" viewBox="0 0 16 16">
                        <path d="M15.683 3a2 2 0 0 0-2-2h-7.08a2 2 0 0 0-1.519.698L.241 7.35a1 1 0 0 0 0 1.302l4.843 5.65A2 2 0 0 0 6.603 15h7.08a2 2 0 0 0 2-2V3zM5.829 5.854a.5.5 0 1 1 .707-.708l2.147 2.147 2.146-2.147a.5.5 0 1 1 .707.708L9.39 8l2.146 2.146a.5.5 0 0 1-.707.708L8.683 8.707l-2.147 2.147a.5.5 0 0 1-.707-.708L7.976 8 5.829 5.854z" />
                    </svg>
                </a>
            </h1>
        </div>
    </div>
</body>

</html>