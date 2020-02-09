<?php
$sql=mysqli_query($conn,"DELETE FROM pelanggaran WHERE idpelangr='$_GET[id]'");


if ($_POST="simpan"){
    header('location:?page=dpl');
}elseif ($_POST="simpan1"){
    header('location:?');
}


?>