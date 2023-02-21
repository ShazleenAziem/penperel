<?php
require 'conn.php' ;

$namapelajar = $_POST ['namapelajar'];
$jenisperalatan = $_POST ['jenisperalatan'] ;
$jenama = $_POST ['jenama'];
$nosiri = $_POST ['nosiri'];

$sql= 'SELECT * FROM admin' ;
$row = $conn->query ($sql)-> fetch_object () ;

if($namapelajar == 'admin'){
    $sql ='SELECT * FROM admin';
    $row =$conn->query($sql)->fetch_object();
    if(password_verify($katalaluan,$row->katalaluan)){
        $_SESSION['namapelajar']='admin';
        header('location:admin/');
    } else{
        ?>
        <script>
            alert('Maaf, kata laluan salah.');
            window.location ='./';
        </script>
        <?php
    }
    }else{
        #jika bukan admin, cari dalam table staff
        $sql = "SELECT namapelajar, jenisperalatan FROM jenama WHERE nosiri ='$nosiri'";
        $result =$conn->query($sql);
        if($result->num_rows ==1){
            $row =$result->fetch_object();
            if(password_verify($jenisperalatan,$row->jenisperalatan)){
                $_SESSION['namapelajar']=$row->namapelajar;
                header('location:staff/');
            }else{
                ?>
                <script>
                alert('Maaf,kata laluan salah.');
                window.location ='./';
                </script>
                <?php
            }
            }else{
                #jika bukan staff, cari dalam table customer
                $sql ="SELECT idcustomer,katalaluan FROM customer WHERE nric='$idpengguna'";
                $result=$conn->query($sql);
                if($result->num_rows ==1){
                    $row = $result->fetch_object();
                    if(password_verify($katalaluan,$row->katalaluan)){
                        $_SESSION['idcustomer']=$row->idcustomer;
                        header('location:customer/');
                    }else{
                        ?>
                        <script>
                        alert('Maaf,kata laluan salah.');
                        window.location ='./';
                        </script>
                        <?php
                    }
                }else{
                    ?>
                    <script>
                        alert('Maaf,kata laluan salah.');
                        window.location ='./';
                        </script>
                        <?php
                }
            }
        }