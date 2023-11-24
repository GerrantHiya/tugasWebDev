<?php
include 'connector.php';

$user = $_SESSION['username_'];

$select_all_notes_query =
    "SELECT primKey, username_, last_update, title, CONCAT(LEFT(content, 20), IF(CHAR_LENGTH(content) > 20, '...', '')) AS content, noteStatus FROM catatan WHERE username_ = '$user' AND noteStatus = 1
            ORDER BY last_update DESC;";
$execution = mysqli_query($dbc, $select_all_notes_query);

if (mysqli_num_rows($execution) > 0) {
    while ($data = mysqli_fetch_assoc($execution)) {

?>
        <a href=<?php
                echo "'noteUpdateDashboard.php?kode=" . $data["primKey"] . "'";
                ?> style="text-decoration: none; color:black">
            <div class="card" style="width: 400;">
                <div class="card-body">
                    <h5 class="card-title">
                        <?php echo $data["title"]; ?></h5>
                    </h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">
                        <?php echo $data["username_"] . "<br>"; ?>
                    </h6>
                    <p class="card-text">
                        <?php echo $data["content"]; ?>
                    </p>
                    <p class="card-text" style="font-size: 12px;">
                        Last Update :<?php echo date("d/m/Y", strtotime($data["last_update"])); ?>
                    </p>
                    <div class="col-sm-10 row">
                        <h5 class="mb-0">
                            <div class="col">
                                <a href=<?php echo "noteForm_delete.php?kode=" . $data['primKey']; ?> style="text-decoration: none;"> <!-- HAPUS -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eraser-fill text-danger" viewBox="0 0 16 16">
                                        <path d="M8.086 2.207a2 2 0 0 1 2.828 0l3.879 3.879a2 2 0 0 1 0 2.828l-5.5 5.5A2 2 0 0 1 7.879 15H5.12a2 2 0 0 1-1.414-.586l-2.5-2.5a2 2 0 0 1 0-2.828l6.879-6.879zm.66 11.34L3.453 8.254 1.914 9.793a1 1 0 0 0 0 1.414l2.5 2.5a1 1 0 0 0 .707.293H7.88a1 1 0 0 0 .707-.293l.16-.16z" />
                                    </svg>
                                </a>
                                <input type="hidden" name="pk" value=<?php echo $data['primKey']; ?>>
                            </div>
                        </h5>
                    </div>

                </div>
            </div>
            <br>
        </a>
<?php
    }
} else {
    echo "<p style='text-align: center;'>Anda Tidak Memiliki Catatan</p>";
}
?>