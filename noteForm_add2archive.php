<?php
include 'connector.php';

$kode = htmlspecialchars($_GET['kode']);

$query = "UPDATE catatan SET noteStatus = 1 WHERE primKey = $kode";
mysqli_query($dbc, $query);
header("location:noteDashboard.php");
