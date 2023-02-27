<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelajar</title>
    <link rel= "stylesheet"href="style.css">
</head>

<body>
    <h2>Senarai Peralatan</h2>

    <?php
    if(!isset($_GET['edit'])){
        ?>
        <form action="simpan.php"method="post">
            <fieldset>
                <legend>Senarai Peralatan</legend>
                <table>
                    <tr>
                        <td>Nama Pelajar</td>
                        <td><input type="text" name="namapelajar" required></td>
                    </tr>

                    <tr>
                        <td>Jenis Peralatan </td>
                        <td><input type="text" name="jenisperalatan" required></td>
                    </tr>

                    <tr>
                         <td>Jenama</td>
                         <td><input type="text" name="jenama" required></td>
                    </tr>

                    <tr>
                         <td>No siri</td>
                         <td><input type="text" name="nosiri" required></td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <button type="submit">SIMPAN</button>
                            <button type="reset" >BATAL</button>
                        </td>
                    </tr>
                </table> 
             </fieldset>
    </form>
    <?php
    }else{
        $idpelajar = $_GET['edit'];
        $sql = "SELECT * FROM pelajar WHERE idpelajar = $idpelajar";
        $row = $conn->query($sql)->fetch_object();
        ?>
        <form action = "kemaskini.php" method="post">
            <input type="hidden" name="idpelajar" value="<?php echo $row->idpelajar;?>">
            <fieldset>
                <legend>Senarai Peralatan</legend>
                <table>
                    <tr>
                        <td>Nama Pelajar</td>
                        <td><input type="text" name="namapelajar";?></td>
                    </tr>

                    <tr>
                        <td>Jenis Peralatan</td>
                        <td><input type="text" name="jenisperalatan" required value="<?php echo $row->nomatrik; ?>"minlenght="12" maxlenght="12"></td>
                    </tr>

                    <tr>
                        <td>Jenama</td>
                        <td><input type="text" name="jenama" required value="<?php echo $row->kelas; ?>"minlenght="5" maxlenght="5"></td>
                    </tr>
                    <tr>
                        <td>No Sirir</td>
                        <td><input type="text" name="nosiri";?></td>
                    </tr>

                    <tr>
                        <td colspan ="2">
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
        <th>Bil</th>
        <th>Nama Pelajar</th>
        <th>Jenis Peralatan</th>
        <th>Jenama</th>
        <th>No siri</th>
    </tr>
    <?php
    $bil = 1;
    $sql ="SELECT * FROM pelajar ORDER BY namapelajar";
    $result =$conn->query($sql);
    while($row = $result->fetch_object()){
        ?>
        <tr>
            <td><?php echo $bil++;?></td>
            <td><?php echo $row->namapelajar;?></td>
            <td><?php echo $row->jenisperalatan;?></td>
            <td><?php echo $row->jenama;?></td>
            <td><?php echo $row->nosiri;?></td>
            <td>
                <a href="index.php?edit=<?php echo $row->idpelajar;?>">Edit</a>
                <a href="padam.php?idpelajar=<?php echo $row->idpelajar;?>"onclick="return sahkan()">Padam</a>
            </td>
            </tr>
            <?php
    }
    ?>
    </table>

    <script>
    function sahkan(){
        return confirm('Adakah anda pasti');
    }
    
    </script>
    </body>
    </html>
