<?php require 'conn.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Senarai warden</h2>

    <?php
    if(!isset($_GET['edit'])){
        ?>
        <form action="simpan.php" method="post">
            <fieldset>
                 <legend>Daftar Warden</legend>
                 <table>
                    <tr>
                        <td>Nama Warden</td>
                        <td><input type="text" name="namawarden" required minlenght="12" maxlenght="12"></td>
                    </tr>
                    <tr>

                    </tr>
                        
                 </table>
            </fieldset>
               
    }
</body>
</html>