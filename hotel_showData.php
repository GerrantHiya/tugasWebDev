<?php
include 'connector.php';

if (isset($_POST['search_button'])) {
    $cariNama = $_GET['cari_nama'];
    $cariAlamat = $_GET['cari_alamat'];

    if ($cariNama != "" && $cariAlamat == "") { // cari NAMA
        $sql_cari_nama = "SELECT * FROM gerrant WHERE hotelNAMA LIKE '%$cariNama' OR hotelNAMA LIKE '$cariNama%' OR hotelNAMA LIKE '%$cariNama%';";
        $ex = mysqli_query($dbc, $sql_cari_nama);
    } else if ($cariNama == "" && $cariAlamat != "") { // cari ALAMAT
        $sql_cari_alamat = "SELECT * FROM gerrant WHERE hotelALAMAT0147 LIKE '%$cariAlamat' OR hotelALAMAT0147 LIKE '$cariAlamat%' OR hotelALAMAT0147 LIKE '%$cariAlamat%';";
        $ex = mysqli_query($dbc, $sql_cari_alamat);
    } else if ($cariAlamat != "" && $cariNama != "") { // cari KEDUANYA
        $sql_cari_semua = "SELECT * FROM gerrant
        WHERE (hotelALAMAT0147 LIKE '%$cariAlamat' OR hotelALAMAT0147 LIKE '$cariAlamat%' OR hotelALAMAT0147 LIKE '%$cariAlamat%')
        AND (hotelNAMA LIKE '%$cariNama' OR hotelNAMA LIKE '$cariNama%' OR hotelNAMA LIKE '%$cariNama%');";
        $ex = mysqli_query($dbc, $sql_cari_semua);
    }
} else { // tidak ada pencarian spesifik
    $sql_tidak_cari = "SELECT * FROM gerrant";
    $ex = mysqli_query($dbc, $sql_tidak_cari);
}
if ($ex) {
    // Memeriksa apakah ada data yang ditemukan
    if (mysqli_num_rows($ex) > 0) {
        echo '<table class="table">';
        echo '
        <thead>
                    <tr>
                        <th scope="col">Kode Hotel</th>
                        <th scope="col">Nama Hotel</th>
                        <th scope="col">Alamat Hotel</th>
                        <th scope="col">Kode Kategori</th>
                    </tr>
                </thead>
                <tbody>
        ';

        // Mengambil dan menampilkan setiap baris data
        while ($row = mysqli_fetch_assoc($ex)) {
            echo "<tr>";
            echo "<td>" . $row['hotelKODE0147'] . "</td>";
            echo "<td>" . $row['hotelNAMA'] . "</td>";
            echo "<td>" . $row['hotelALAMAT0147'] . "</td>";
            echo "<td>" . $row['kategoriKODE'] . "</td>";
            echo "</tr>";
        }

        echo "</tbody></table>";
    } else {
        echo "<script>alert('tidak ada data');</script>";
    }
}
