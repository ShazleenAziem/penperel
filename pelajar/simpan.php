<?php
require '../include/conn.php';
$jenisperalatan = $_POST['jenisperalatan'];
$jenama = $_POST['jenama'];
$nosiri = $_POST['nosiri'];

$sql = "INSERT INTO peralatan VALUES(null,'$jenisperalatan', '$jenama','$nosiri')";
#echo $sql;
$conn->query($sql);
#echo $conn->error;
header('location:index.php?menu=product');