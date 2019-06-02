<?php

require_once 'DBConnect.php';

if (isset($_GET['IdPhanUng'])) {
    $idmonan = $_GET['IdPhanUng'];
} else {
    echo '<script> alert("Không có Id");<script>';
}

$conn = new DbConnect();
$name = $conn->query("set names 'utf8'");
$conn->query("DELETE from phanung where IdPhanUng=$idmonan");
header("Location: phan_ung_hoa_hoc.php");
?>


