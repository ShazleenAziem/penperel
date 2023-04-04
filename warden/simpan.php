<?php
require '../include/conn.php';
$warden = $_POST['warden'];
$namapelajar = $_POST['namapelajar'];
$nokppelajar = $_POST['nokppelajar'];
$kataEncrypt = $_POST['kata'];
$kata = password_hash($kataEncrypt,PASSWORD_BCRYPT);



$sql = "INSERT INTO pelajar VALUES(null,'$warden' ,'$namapelajar', '$nokppelajar', '$kata')";
//echo $sql;
$conn->query($sql);
//echo $conn->error;
header('location:index.php?menu=product');
