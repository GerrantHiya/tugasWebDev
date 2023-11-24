<?php
include 'connector.php';

if (isset($_POST['cari'])) {
    $key = $_POST['cariTxt'];

    $sql = "SELECT pk,nama_ol,FORMAT(harga,0) AS harga,st_halal,fileFoto
    FROM oleh
    WHERE nama_ol LIKE '$key%' OR nama_ol LIKE '%$key%' OR nama_ol LIKE '%$key'";
    $result = mysqli_query($dbc, $sql);
} else {
    $sql = "SELECT pk,nama_ol,FORMAT(harga,0) AS harga,st_halal,fileFoto FROM oleh";
    $result = mysqli_query($dbc, $sql);
}

if (mysqli_num_rows($result) > 0) {
    while ($data = mysqli_fetch_assoc($result)) {

?>

        <a href="">
            <div class="card">
                <div class="card-body d-flex">
                    <img src=<?php echo "images/" . $data['fileFoto'] ?> class="" width="178px" height="100px" style="margin-right:15px"> <!-- FOTO -->
                    <div class="row">
                        <h5 class="card-title"><?php echo $data['nama_ol'] ?></h5> <!-- NAMA PRODUK -->
                        <p class="card-text"><?php echo "Rp." . $data['harga'] . "/pcs" ?></p> <!-- HARGA -->
                        <p class="card-text"><?php if ($data['st_halal'] == "1") {
                                                    echo "Halal";
                                                } else {
                                                    echo "Non Halal";
                                                } ?></p> <!-- HALAL STATUS -->
                    </div>
                </div>
            </div>
        </a>
        <br>

<?php
    }
} else {
    echo "<p style='text-align: center;'>Tidak Ada Produk</p>";
}
?>