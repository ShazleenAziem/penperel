<?php
require 'conn.php';
$idpelajar = $_GET['idpelajar'];
$sql = "DELETE FROM pelajar WHERE idpelajar = $idpelajar";
$conn->query($sql);
header('location: index.php'); 