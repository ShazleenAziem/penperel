<?php
require '../include/conn.php';

$namapelajar = $_POST['namapelajar'];
$nokppelajar = $_POST['nokppelajar'];
$kata = $_POST['kata'];
//$kata = password_hash($kata,PASSWORD_BCRYPT);
$warden = $_POST['warden'];


$sql = "INSERT INTO pelajar VALUES(null, '$namapelajar', '$nokppelajar', '$kata' , '$warden')";
//echo $sql;
$conn->query($sql);
//echo $conn->error;
header('location:index.php?menu=product');
