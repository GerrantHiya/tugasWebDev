<?php
include 'connector.php';

$kode = $_GET['kode'];
$delete_sql = "DELETE FROM travel WHERE pk = '$kode'";
mysqli_query($dbc, $delete_sql);
header("location:travelDashboard.php");
