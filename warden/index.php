<?php
require '../include/conn.php';
if (!isset($_SESSION['idwarden'])) header('location:../'); {
    $idwarden = $_SESSION['idwarden'];
    $sql = "SELECT * FROM warden WHERE idwarden = $idwarden";
    $row = $conn->query($sql)->fetch_object();
    $namawarden = $row->namawarden;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warden</title>
</head>
<h2>nama :
        <?php
        echo $namawarden;
        ?>
    </h2>
<body>
<table>
        <tr>
            <td>SISTEM PENDAFTARAN PERALATAN ELEKTRIK</td>
            <td>
                <a href="index.php?menu=home">Home</a>
                ::
                <a href="index.php?menu=product">Product</a>
                ::
                <a href="index.php?menu=home">About</a>
                ::
                <a href="../logout.php">Logout</a>
                ::

            </td>
        </tr>
    </table>
    <?php
    $menu = 'home'; # default value
    if (isset($_GET['menu'])) {
        $menu = $_GET['menu'];
    }
    include "$menu.php";
    ?>
    
</body>

</html>

