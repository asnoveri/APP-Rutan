
<html>
<head>
<title></title>
</head>
    <form action="" method="get">
        <div class="form-grup">
            <label for="">Namo Ang Sia???</label>
            <input type="text" name="nm" class="panuah" placeholder="nm">
        </div>
        <div class="form-grup">
            <label for="">Password Ang Apo???</label>
            <input type="password" name="pas" class="panuah" placeholder="pas">
        </div>
        <div class="form-grup">
            <input type="submit" value="login" name="login" class="panuah" >
        </div>
    </form>
</html>

<?php
$no=1;
if (isset($_GET['login'])){
    $nm=$_GET['nm'];
    $pas=$_GET['pas'];
    echo "
<td>
    <tr>$no</tr> 
    <tr>$nm</tr> 
    <tr>$pas</tr> 
    
    </td>";

    $no++;
}

?>