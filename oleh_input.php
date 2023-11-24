<?php
include 'connector.php';

$uploadFolder = 'images/';
$filePath = 'images/';

if (isset($_POST['Simpan'])) {
    $nama_pr = $_POST['nama_pr'];
    $harga = $_POST['harga'];
    $st_halal = $_POST['st_halal'];

    if ($st_halal == "HALAL") {
        $st_halal = 1;
    } else {
        $st_halal = 0;
    }
    $fileName = $_FILES['fileFoto']['name'];
    $tmp_fileName = $_FILES['fileFoto']['tmp_name'];

    $filePath = $uploadFolder . $fileName;
    $fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);

    move_uploaded_file($tmp_fileName, 'images/' . $fileName);
    $insert = "INSERT INTO oleh (nama_ol,harga,st_halal,fileFoto) VALUES ('$nama_pr','$harga','$st_halal','$fileName')";
    $result = mysqli_query($dbc, $insert);

    if ($result) {
        echo "<p class='form-control'>DATA BERHASIL TERSIMPAN</p>";
    } else {
        echo "<p class='form-control'>DATA GAGAL TERSIMPAN</p>";
    }
}
