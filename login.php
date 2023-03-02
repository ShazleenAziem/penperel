<?php
require 'include/conn.php';
$idpengguna = $_POST['idpengguna'];
$kata = $_POST['kata'];

if ($idpengguna == 'admin') {
    $sql = 'SELECT * FROM admin';
    $row = $conn->query($sql)->fetch_object();

    if (password_verify($kata, $row->kata)) {
        $_SESSION['idpengguna'] = 'admin';
        header('location:admin/');
    } else {
    }
?>
    <script>
        alert('Maaf, kata laluan salah');
        window.location = './';
    </script>
    <?php
} else {
    $sql = "SELECT idwarden, kata FROM warden WHERE nokpwarden ='$idpengguna ";
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
        $row = $result->fetch_object();
        if (password_verify($kata, $row->kata)) {
            $_SESSION['idwarden'] = $row->idwarden;
            header('location:staff/');
        } else {
    ?>
            <script>
                alert('Maaf, kata laluan salah.');
                window.location = './';
            </script>
<?php
        }
    }
}
