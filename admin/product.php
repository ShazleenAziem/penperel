<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>isi warden</title>
</head>
<body>
    <h2>Senarai warden</h2>
    <?php
    if(!isset($_GET['edit'])){
        ?>
        <form action="simpan.php"method="post">
            <fieldset>
                <legend>Daftar Warden</legend>
                <table>
                    <tr>
                        <td>Nama Warden</td>
                        <td><input type="text" name="namawarden" required></td>
                    </tr>

                    <tr>
                        <td>No. KP </td>
                        <td><input type="text" name="nokpwarden" required minlenght="12" maxlenght="12"></td>
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
        $idwarden = $_GET['edit'];
        $sql = "SELECT * FROM warden WHERE idwarden = $idwarden";
        $row = $conn->query($sql)->fetch_object();
        
        ?>
        <form action = "kemaskini.php" method="post">
            <input type="hidden" name="idwarden" value="<?php echo $row->idwarden;?>">
            <fieldset>
                <legend>Kemaskini Data Warden </legend>
                <table>
                    <tr>
                        <td>Nama Warden</td>
                        <td><input type="text" name="namawarden";?></td>
                    </tr>

                    <tr>
                        <td>No. KP</td>
                        <td><input type="text" name="nokpwarden" required value="<?php echo $row->nokpwarden; ?>"minlenght="12" maxlenght="12"></td>
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
        <th>Nama Warden</th>
        <th>No.KP</th>
        <th>Tindakan</th>
    </tr>
    <?php
    $bil = 1;
    $sql ="SELECT * FROM warden ORDER BY namawarden";
    $result =$conn->query($sql);
    while($row = $result->fetch_object()){
        ?>
        <tr>
            <td><?php echo $bil++;?></td>
            <td><?php echo $row->namawarden;?></td>
            <td><?php echo $row->nokpwarden;?></td>
            <td>
            
                <a href="index.php?menu=product&kemaskini=<?php echo $row->idwarden;?>">Edit</a>
                <a href="padam.php?idwarden=<?php echo $row->idwarden;?>"onclick="return sahkan()">Padam</a>
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