<?php
include 'connector.php';

if (isset($_POST['cari_namaTravel'])) {
    $keyword = $_POST['nama_tr_search'];
    if (isset($_POST['travel'])) {
        $select_travel_query = "SELECT pk,nama_tr,FORMAT(harga_perjam,0) AS harga_perjam,keterangan,last_update,fileFoto,kapasitas_pax,kategori_travel
                                FROM travel
                                WHERE (kategori_travel = 'travel') AND ";
    } else if (isset($_POST['sewa_mobil'])) {
        $select_travel_query = "SELECT pk,nama_tr,FORMAT(harga_perjam,0) AS harga_perjam,keterangan,last_update,fileFoto,kapasitas_pax,kategori_travel
                                FROM travel
                                WHERE (kategori_travel = 'sewa mobil') AND ";
    } else {
        $select_travel_query = "SELECT pk,nama_tr,FORMAT(harga_perjam,0) AS harga_perjam,keterangan,last_update,fileFoto,kapasitas_pax,kategori_travel
                                FROM travel
                                WHERE ";
    }
    $select_travel_query .= "(nama_tr LIKE '$keyword%' OR nama_tr LIKE '%$keyword%' OR nama_tr LIKE '%$keyword')
                            ORDER BY pk DESC";
    $execution = mysqli_query($dbc, $select_travel_query);
} else {
    $select_all_travel_query = "SELECT pk,nama_tr,FORMAT(harga_perjam,0) AS harga_perjam,keterangan,last_update,fileFoto,kapasitas_pax,kategori_travel FROM travel ORDER BY pk DESC";
    $execution = mysqli_query($dbc, $select_all_travel_query);
}

if (mysqli_num_rows($execution) > 0) {
    while ($data = mysqli_fetch_assoc($execution)) {

?>
        <!-- CARD -->
        <div class="card clickable-card" onclick="location.href='#'" style="width: 400;">
            <div class="card-body">
                <div class="d-flex">
                    <div class="flex-shrink-0">
                        <img src=<?php echo 'images/' . $data['fileFoto'] ?> width="178px" height="100px">
                    </div>
                    <div class="ms-3 flex-grow-1">
                        <h5><?php echo $data['nama_tr'] ?></h5> <!-- KENDARAAN YANG DIGUNAKAN -->
                        <p><?php echo "Rp." . $data['harga_perjam'] . "/jam" ?></p> <!-- Harga Per Jam -->
                        <p><?php echo "Keterangan: " . $data['keterangan'] ?></p> <!-- KETERANGAN TAMBAHAN (sopir,bensin,tol,dll) -->
                    </div>
                    <div class="ms-3 flex-shrink-1">
                        <p><?php echo "Kapasitas: " . $data['kapasitas_pax'] ?></p> <!-- KAPASITAS SEWA TRAVEL -->
                        <div class="d-flex">
                            <a href=<?php echo "travel_upDashboard.php?kode=" . $data['pk'] ?>>
                                <button class="btn btn-warning" style="width: 50px; height: 50px; margin-right: 25px">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                    </svg></button> <!-- EDIT -->
                            </a>
                            <a href=<?php echo "travel_delete.php?kode=" . $data['pk'] ?>>
                                <button class="btn btn-danger" style="width: 50px; height: 50px">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                                        <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                                    </svg></button> <!-- DELETE -->
                            </a>
                        </div>
                    </div>
                </div>
                <?php echo "Last Update: " . $data['last_update'] ?> <!-- LAST UPDATE -->
            </div>
        </div>
        <br>

<?php
    }
} else {
    echo "<p style='text-align: center;'>Tidak Ada Layanan</p>";
}
?>