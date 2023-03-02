<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Senarai Pelajar</h2>
    <?php
    if (!isset($_GET['edit'])) {
        ?>
        <form action="simpan.php" method="post">
            <fieldset>
                <legend>
                    <h3>Warden</h3>
                </legend>
                <table>                    


                    <tr>
                        <td>Nama Pelajar</td>
                        <td><input type="text" name="namapelajar" required></td>
                    </tr>
                    <tr>
                        <td>No Kad Pengenalan</td>
                        <td><input type="text" name="nokppelajar" required></td>
                    </tr>
                    <tr>
                        <td>katalaluan</td>
                        <td><input type="text" name="kata" required minlength="5" maxlength="12"></td>
                    </tr>
                    <tr>
                        <td>Nama Warden</td>
                        <td><input type="text" name="warden" required></td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <button type="submit">SIMPAN</button>
                            <button type="reset">BATAL</button>
                        </td></br>
                    </tr>
                </table>
            </fieldset>
        </form>
        <?php
    } else {
        $idpelajar = $_GET['edit'];
        $sql = "SELECT * FROM pelajar WHERE idpelajar = $idpelajar";
        $row = $conn->query($sql)->fetch_object();
        ?>
        3
        <form action="kemaskini.php" method="post">
            <input type="hidden" name="idpelajar" value="<?php echo $row->idpelajar; ?>">
            <fieldset>
                <legend>Kemaskini Data Pelajar</legend>
                <table>
     
                    <tr>
                        <td>Nama Pelajar</td>
                        <td><input type="text" name="namapelajar" required value="<?php echo $row->namapelajar; ?>"></td>
                    </tr>
                    <tr>
                        <td>No Kad Pengenalan</td>
                        <td><input type="text" name="nokppelajar" required value="<?php echo $row->nokppelajar; ?>"
                                minlength="5" maxlength="12"></td>
                    </tr>
                    <tr>
                        <td>Katalaluan</td>
                        <td><input type="text" name="kata" required value="<?php echo $row->kata; ?>" minlength="5"
                                maxlength="12"></td>
                    </tr>
                    <tr>
                        <td>Nama Warden</td>
                        <td><input type="text" name="warden" required value="<?php echo $row->warden; ?>"></td>
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
    }
    ?>
    <table class="table">
        <tr>
            <th>Bil</th>
            <th>Nama Pelajar</th>
            <th>No Kad Pengenalan</th>
            <th>katalaluan</th>
            <th>Nama warden</th>
            <th>Tindakan</th>
        </tr>
        <?php
        $bil = 1;
        $sql = "SELECT * FROM pelajar ORDER BY namapelajar";
        $result = $conn->query($sql);
        while ($row = $result->fetch_object()) {
            ?>
            <tr>
                <td>
                    <?php echo $bil++; ?>
                </td>

                <td>
                    <?php echo $row->namapelajar; ?>
                </td>
                <td>
                    <?php echo $row->nokppelajar; ?>
                </td>
                <td>
                    <?php echo $row->kata; ?>
                </td>
                <td>
                    <?php echo $row->warden; ?>
                </td>
                <td>
                    <a href="index.php?menu=product&edit=<?php echo $row->idpelajar; ?>">Edit</a>
                    <a href="padam.php?idpelajar=<?php echo $row->idpelajar; ?>" onclick="return sahkan()">Padam</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
    <script>
        function sahkan() {
            return confirm('Adakah anda pasti?');
        }
    </script>
</body>

</html>