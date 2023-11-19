<?php
include 'connector.php';

$uploadFolder = 'images/';
$filePath = 'images/'; // Perhatikan bahwa variabel $filePath telah dideklarasikan di atas, jadi tidak perlu diinisialisasi kembali di sini.

if (isset($_POST['Simpan'])) {
    $destinasiKODE = $_POST['destinasiKODE'];
    $destinasiNAMA = $_POST['destinasiNAMA'];
    $kategoriKODE = $_POST['kategoriKODE'];

    $fileName = $_FILES['fileFoto']['name'];
    $tmp_fileName = $_FILES['fileFoto']['tmp_name'];

    $filePath = $uploadFolder . $fileName;
    $ekstensifile = pathinfo($fileName, PATHINFO_EXTENSION);

    if (($ekstensifile == "jpg") or ($ekstensifile == "JPG") or ($ekstensifile == "png")) {
        move_uploaded_file($tmp_fileName, 'images/' . $fileName);
        $insert_query = "INSERT INTO destinasi
        VALUES ('$destinasiKODE', '$destinasiNAMA', '$fileName', '$kategoriKODE')";
        $rest = mysqli_query($dbc, $insert_query);
        if ($rest) {
            header("location:destDashboard.php");
        } else {
            echo "Error: " . $insert_query . "<br>" . mysqli_error($dbc);
        }
    }
}

$select_all = "SELECT * FROM destinasi";
$datakategori = mysqli_query($dbc, $select_all);
