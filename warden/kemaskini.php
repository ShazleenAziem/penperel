<?php
require 'conn.php';
$idpelajar = $_POST['idpelajar'];
$namapelajar = $_POST['namapelajar'];
$nomatrik = $_POST['nomatrik'];
$kelas = $_POST['kelas'];
$sql = "UPDATE pelajar
 SET namapelajar = '$namapelajar', nomatrik = '$nomatrik', kelas = '$kelas'
 WHERE idpelajar = $idpelajar";
$conn->query($sql);
header('location: index.php');