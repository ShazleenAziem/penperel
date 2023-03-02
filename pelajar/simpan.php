<?php
require '../include/conn.php';
$namawarden = $_POST['namawarden'];
$nokpwarden = $_POST['nokpwarden'];
$kata = password_hash($nokpwarden,PASSWORD_BCRYPT);

$sql = "INSERT INTO warden VALUES(null,'$namawarden', '$nokpwarden','$kata')";
#echo $sql;
$conn->query($sql);
#echo $conn->error;
header('location:index.php?menu=product');