<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senarai</title>
</head>

<body>
    <h2>Senarai </h2>
    <?php
    if (!isset($_GET['edit'])) {
    ?>
        <form action="simpan.php" method="post">
            <fieldset>
                <legend>DAFTAR PERALATAN ELEKTRIK </legend>
                <table>
                    <tr>
                        <td>Jenis Peralatan : </td>
                        <td><input type="text" name="jenisperalatan" required></td>
                    </tr>

                    <tr>
                        <td>Jenama : </td>
                        <td><input type="text" name="jenama" required minlenght="12" maxlenght="12"></td>
                    </tr>
                    <tr>
                        <td>No Siri : </td>
                        <td><input type="text" name="nosiri" required minlenght="12" maxlenght="12"></td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <button type="submit">SIMPAN</button>
                            <button type="reset">BATAL</button>
                        </td>
                    </tr>
                </table>
            </fieldset>
        </form>
    <?php
    } else {
        $idperalatan = $_GET['edit'];
        $sql = "SELECT * FROM peralatan WHERE idperalatan = $idperalatan";
        $row = $conn->query($sql)->fetch_object();

    ?>
        <form action="kemaskini.php" method="post">
            <input type="hidden" name="idperalatan" value="<?php echo $row->idperalatan; ?>">
            <fieldset>
                <legend>Kemaskini Peralatan Elektrik </legend>
                <table>
                    <tr>
                        <td>Jenis Peralatan : </td>
                        <td><input type="text" name="jenisperalatan" required value="<?php echo $row->jenisperalatan; ?>"></td>
                    </tr>

                    <tr>
                        <td>Jenama : </td>
                        <td>
                            <input type="text" name="jenama" required value="<?php echo $row->jenama; ?>" minlenght="12" maxlenght="12">
                        </td>
                    </tr>
                    <tr>
                        <td>No Siri:</td>
                        <td><input type="text" name="nosiri" required value="<?php echo $row->nosiri; ?>"></td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <button type="submit">SIMPAN</button>
                            <button type="resit">BATAL</button>
                        </td>
                    </tr>
                </table>
            </fieldset>
        </form>
    <?php
    }
    ?>

    <table class="table">
        <tr>
            <th>No</th>
            <th>Jenis Peralatan</th>
            <th>Jenama</th>
            <th>No Siri</th>
        </tr>
        <?php
        $bil = 1;
        $sql = "SELECT * FROM peralatan ORDER BY idperalatan";
        $result = $conn->query($sql);
        while ($row = $result->fetch_object()) {
        ?>
            <tr>
                <td>
                    <?php echo $bil++; ?>
                </td>
                <td>
                    <?php echo $row->jenisperalatan; ?>
                </td>
                <td>
                    <?php echo $row->jenama; ?>
                </td>
                <td>
                    <?php echo $row->nosiri; ?>
                </td>
                <td>
                    <a href="index.php?menu=product&edit=<?php echo $row->idperalatan; ?>">Edit</a>
                    <a href="padam.php?idperalatan=<?php echo $row->idperalatan; ?>" onclick="return sahkan()">Padam</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>

    <script>
        function sahkan() {
            return confirm('Adakah anda pasti');
        }
    </script>
</body>

</html>