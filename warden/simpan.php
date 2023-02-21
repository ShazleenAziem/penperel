<?php
require 'conn.php';
$namapelajar = $_POST['namapelajar'];
$nomatrik = $_POST['nomatrik'];
$kelas = $_POST['kelas'];
$sql = "INSERT INTO pelajar VALUES(null, '$namapelajar', '$nomatrik', '$kelas')";
$conn->query($sql);
header('location: index.php');