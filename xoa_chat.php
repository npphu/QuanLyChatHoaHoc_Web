<?php

require_once 'DBConnect.php';

if (isset($_GET['IdChat'])) {
    $idmonan = $_GET['IdChat'];
} else {
    echo '<script> alert("Không có mã chất");<script>';
}

$conn = new DbConnect();
$name = $conn->query("set names 'utf8'");
$conn->query("DELETE from chathoahoc where IdChat=$idmonan");
header("Location: chat_hoa_hoc.php");
?>




