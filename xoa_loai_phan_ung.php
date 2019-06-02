<?php

require_once 'DBConnect.php';

if (isset($_GET['IdLoaiPhanUng'])) {
    $idmonan = $_GET['IdLoaiPhanUng'];
} else {
    echo '<script> alert("Không có Id");<script>';
}

$conn = new DbConnect();
$name = $conn->query("set names 'utf8'");
$conn->query("DELETE from loaiphanung where IdLoaiPhanUng=$idmonan");
header("Location: loai_phan_ung.php");
?>


