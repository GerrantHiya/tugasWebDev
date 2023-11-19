<?php
include 'connector.php';

$kode = $_GET['kode'];
$sql = "DELETE FROM destinasi WHERE destinasiKODE = '$kode'";
mysqli_query($dbc, $sql);
header("Location:destDashboard.php");
