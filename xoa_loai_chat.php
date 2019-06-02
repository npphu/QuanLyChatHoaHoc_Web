<?php

require_once 'DBConnect.php';

if (isset($_GET['IdLoai'])) {
    $idmonan = $_GET['IdLoai'];
} else {
    echo '<script> alert("Không có Id");<script>';
}

$conn = new DbConnect();
$name = $conn->query("set names 'utf8'");
$conn->query("DELETE from loaichathoahoc where IdLoai=$idmonan");
header("Location: loai_chat_hoa_hoc.php");
?>



