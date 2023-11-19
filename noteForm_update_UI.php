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
    <style>
        body,
        .bg-color-custom {
            background-color: rgb(253, 174, 68);
        }

        .bg-color-custom {
            color: #ffff;
            border: none;
        }

        .title_ {
            font-weight: bold;
        }

        .multiline_ {
            background-color: rgb(255, 176, 70);
        }
    </style>
</head>

<body>
    <form method="POST" action="noteForm_update.php">
        <div class="row">
            <div class="mb-3 row"></div>
            <div class="col-sm-1"></div>
            <div class="mb-3 row">
                <h2>Update Note</h2>
            </div>
            <div class="mb-3 row">
                <div class="col-sm-1"></div>
                <div class="col-sm-10">
                    <div class="mb-3 row">
                        <!-- TITLE -->
                        <input type="text" class="form-control bg-color-custom title_" id="formGroupExampleInput" placeholder="TITLE" name="title" value=<?php
                                                                                                                                                            include 'connector.php';

                                                                                                                                                            $kode = $_GET['kode'];
                                                                                                                                                            $getDate_query = "SELECT * FROM catatan WHERE no = '$kode'";
                                                                                                                                                            $getDate_execute = mysqli_query($dbc, $getDate_query);

                                                                                                                                                            $row = mysqli_fetch_assoc($getDate_execute);

                                                                                                                                                            echo $row['title'];
                                                                                                                                                            ?>>
                    </div>
                </div>
            </div>
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
                <!-- CONTENT -->
                <textarea name="content" cols="120" rows="10" class="multiline_" placeholder="Write your notes here...">
                <?php echo $row['content']; ?>
                </textarea>
            </div>
            <div class="col-sm-1">
                <input type="submit" value="Save" name="update_note" class="btn btn-success">
                <a href="noteDashboard.php"><input type="button" value="Back" name="back_to_main" class="btn btn-danger"></a>
            </div>
        </div>
    </form>
</body>

</html>