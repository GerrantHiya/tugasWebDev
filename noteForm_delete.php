<?php
include 'connector.php';

$kode = htmlspecialchars($_GET['kode']);

$delete_q = "DELETE FROM catatan WHERE primKey = '$kode'";
mysqli_query($dbc, $delete_q);
header("location:noteDashboard.php");
