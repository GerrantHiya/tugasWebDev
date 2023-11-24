<?php
include 'connector.php';

$uploadFolder = 'images/';
$filePath = 'images/';

if (isset($_POST['Simpan'])) {
    $nama_tr = $_POST['nama_tr'];
    $hargaJam = $_POST['hargaJam'];
    $jmlPax = $_POST['jmlPax'];
    $kategori = $_POST['kategori'];
    $keterangan = $_POST['keterangan'];

    $fileName = $_FILES['fileFoto']['name'];
    $tmp_fileName = $_FILES['fileFoto']['tmp_name'];

    $filePath = $uploadFolder . $fileName;
    $fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);

    move_uploaded_file($tmp_fileName, 'images/' . $fileName);
    $insert_query = "INSERT INTO travel (nama_tr, harga_perjam, keterangan, fileFoto, kapasitas_pax, kategori_travel) VALUES ('$nama_tr','$hargaJam','$keterangan','$fileName','$jmlPax','$kategori')";
    $result = mysqli_query($dbc, $insert_query);

    if ($result) {
        echo "<a href='travelDashboard.php'><button>Data berhasil disimpan! Kembali</button></a>";
    }
}
