<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $newThang = $_POST['thang'];
    $newThang3 = $_POST['thang3'];

    $_SESSION['thang'] = $newThang;
    $_SESSION['thang3'] = $newThang3;

}
?>