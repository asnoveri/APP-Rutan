<?php
$sql=mysqli_query($conn,"DELETE FROM remisi WHERE idremisi='$_GET[id]'");


if ($_POST="edit"){
    header('location:?page=dr');
}elseif ($_POST="edit1"){
    header('location:?');
}

?>