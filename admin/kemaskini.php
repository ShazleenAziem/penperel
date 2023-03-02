<?php
require '../include/conn.php';

$idwarden = $_POST['idwarden'];
$namawarden = $_POST['namawarden'];
$nokpwarden = $_POST['nokpwarden'];
$kata = password_hash($nokpwarden,PASSWORD_BCRYPT);

$sql = "UPDATE warden 
SET namawarden = '$namawarden',nokpwarden = '$nokpwarden'
WHERE idwarden = $idwarden";
$conn -> query($sql);
header('location:index.php?menu=product');
