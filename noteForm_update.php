<?php
include 'connector.php';

if (isset($_POST['update_note'])) {
    $no = htmlspecialchars($_POST['no']);
    $title = htmlspecialchars($_POST['title']);
    $content = htmlspecialchars($_POST['content']);

    $update_query = "UPDATE catatan 
    SET title = '$title', content = '$content', last_update = CURRENT_DATE 
    WHERE no = '$no';";
    $execution = mysqli_query($dbc, $update_query);

    if ($execution) {
        echo "Berhasil Update<br>
        <input type='button' value='BACK' href='noteDashboard.php' class='btn btn-secondary'>";
        header("location:noteUpdateDashboard.php");
    }
}
