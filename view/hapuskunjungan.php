<?php
$sql=mysqli_query($conn,"DELETE FROM kunjungan WHERE idkunjungan='$_GET[id]'");



if ($sql){
    echo "<div class='pesaneror'><h8>DATA BERHASIL TERHAPUS</h8></div>";
    header('location:?page=dp');

}
else {
    echo "<div class='pesaneror'><h8>GAGAL MENGHAPUS DATA </h8></div>";
    header('location:?page=');
}


?>