<?php
require '../include/conn.php';
$idpelajar = $_GET['idperalatan'];
$sql = "DELETE FROM peralatan WHERE idperalatan = $idperalatan";
$conn->query($sql);

header('location:index.php?menu=product'); 