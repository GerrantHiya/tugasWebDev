<?php
include 'connector.php';

if (isset($_POST['simpan_baru'])) {
    session_start();
    $username = $_SESSION['username_'];
    $title = htmlspecialchars($_POST['title']);
    $content = htmlspecialchars($_POST['content']);

    $insertNew_query = "INSERT INTO catatan (username_, title, content, noteStatus)
    VALUES ('gHiya','$title','$content','0')";
    $result = mysqli_query($dbc, $insertNew_query);
    if ($result) {
        header("LOCATION:noteForm_main.php");
    }
}
