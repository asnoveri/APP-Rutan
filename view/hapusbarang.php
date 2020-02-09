<?php
$sql=mysqli_query($conn,"DELETE FROM barangpenghuni WHERE idsimpan='$_GET[id]'");



if ($_POST="edit"){
    header('location:?page=bb');
}elseif ($_POST="edit1"){
    header('location:?');


}


?>