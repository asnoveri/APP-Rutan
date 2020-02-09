<?php
$sql=mysqli_query($conn,"DELETE FROM tahanan WHERE idtahanan='$_GET[id]'");



if ($sql){
     echo "<div class='pesaneror'><h8>DATA BERHASIL TERHAPUS</h8></div>";
    header('location:?page=dt');
}
else {
    echo "<div class='pesaneror'><h8>GAGAL MENGHAPUS DATA </h8></div>";
    header('location');
}


?>