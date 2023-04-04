
<?php
require '../include/conn.php';
if (!isset($_SESSION['idpelajar'])) header('location:../'); {
    $idpelajar = $_SESSION['idpelajar'];
    $sql = "SELECT * FROM pelajar WHERE idpelajar = $idpelajar";
    $row = $conn->query($sql)->fetch_object();
    $namapelajar = $row->namapelajar;
}



?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>nama :
        <?php
        echo $namapelajar;
        ?>
    </h2>
    <table>
        <tr>
            <td>SISTEM PENDAFTARAN PERALATAN ELEKTRIK</td>
            <td>
                <a href="index.php?menu=home">Home</a>
                ::
                <a href="index.php?menu=product">DAFTAR</a>
                ::
                <a href="index.php?menu=home">SENARAI PERALATAN</a>
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