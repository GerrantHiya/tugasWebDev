<?php
// include 'connector.php';

$uploadFolder = 'images/';
$filePath = 'images/';

if (isset($_POST['Simpan'])) {
    $kode = $_POST['pk'];
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
    $sql = "UPDATE travel
    SET nama_tr = '$nama_tr', harga_perjam = '$hargaJam', keterangan = '$keterangan', last_update = CURRENT_DATE(), fileFoto = '$fileName', kapasitas_pax = '$jmlPax'
    WHERE pk = '$kode'";
    $result = mysqli_query($dbc, $sql);

    if ($result) {
        echo "<br><p>DATA BERHASIL UPDATE</p>";
    }
}
