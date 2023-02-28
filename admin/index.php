<?php
require '../include/conn.php';
$idpengguna = $_SESSION['idpengguna'];
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
        echo $idpengguna;
        ?>
    </h2>
    <table>
        <tr>
            <td>SISTEM PENDAFTARAN PERALATAN ELEKTRIK</td>
            <td>
                <a href="index.php?menu=home">Home</a>
                ::
                <a href="index.php?menu=product">Product</a>
                ::
                <a href="index.php?menu=home">About</a>

            </td>
        </tr>
    </table>
    <?php
    $menu = 'home';# default value
    if(isset($_GET['menu'])){
        $menu=$_GET['menu'];
    }
    include"$menu.php";
    ?>
</body>
</html>