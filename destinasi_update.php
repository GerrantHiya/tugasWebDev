<?php
include 'connector.php';
$uploadFolder = 'images/';
$kode = $_GET['kode'];

if (isset($_POST['update'])) {
    $destinasiKODE = $_POST['destinasiKODE'];
    $destinasiNAMA = $_POST['destinasiNAMA'];
    $kategoriKODE = $_POST['kategoriKODE'];

    $fileName = $_FILES['fileFoto']['name'];
    $tmp_fileName = $_FILES['fileFoto']['tmp_name'];

    $filePath = $uploadFolder . $fileName;

    if ($destinasiNAMA != "") {
        // kondisi update nama
        $update_nama = "UPDATE destinasi
        SET destinasiNAMA = ?
        WHERE destinasiKODE = ?";
        $stmt = mysqli_prepare($dbc, $update_nama);
        mysqli_stmt_bind_param($stmt, "ss", $destinasiNAMA, $destinasiKODE);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("Location:destinasi_update.php?kode=$kode&kond=selesai");
    } elseif ($kategoriKODE != "") {
        // kondisi update kategori kode
        $update_ktgKode = "UPDATE destinasi
        SET kategoriKODE = ?
        WHERE destinasiKODE = ?";
        $stmt = mysqli_prepare($dbc, $update_ktgKode);
        mysqli_stmt_bind_param($stmt, "ss", $kategoriKODE, $destinasiKODE);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("Location:destinasi_update.php?kode=$kode&kond=selesai");
    } elseif ($fileName != "") {
        // kondisi update foto
        if (move_uploaded_file($tmp_fileName, $uploadFolder . $fileName)) {
            $update_foto = "UPDATE destinasi
            SET fileFoto = ?
            WHERE destinasiKODE = ?";
            $stmt = mysqli_prepare($dbc, $update_foto);
            mysqli_stmt_bind_param($stmt, "ss", $fileName, $destinasiKODE);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
            header("Location:destinasi_update.php?kode=$kode&kond=selesai");
        } else {
            echo "Gagal mengunggah file.";
        }
    } else {
        header("Location:destinasiDashboard.php");
    }
}
