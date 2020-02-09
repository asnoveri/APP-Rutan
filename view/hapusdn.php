<?php
$sql=mysqli_query($conn,"DELETE FROM narapidana WHERE idnapi='$_GET[id]'");



if ($sql){
    echo "<div class='pesaneror'><h8>DATA BERHASIL TERHAPUS</h8></div>";
    header('location:?page=dn');

}
else {
    echo "<div class='pesaneror'><h8>GAGAL MENGHAPUS DATA </h8></div>";
    header('location:?page=');
}


?>