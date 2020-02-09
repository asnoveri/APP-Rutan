<?php
$a=mysqli_query($conn,"SELECT * FROM narapidana,remisi WHERE narapidana.idnapi=remisi.idnapi AND remisi.idremisi='$_GET[id]'");
$ac=mysqli_fetch_array($a);

if (isset($_POST['edit'])) {

    $tglremisi = mysqli_escape_string($conn, $_POST['tglremisi']);
    $isiremisi = mysqli_escape_string($conn, $_POST['isiremisi']);
    $jnsremisi = mysqli_escape_string($conn, $_POST['jnsremisi']);
    $jmlremisi = mysqli_escape_string($conn, $_POST['jmlremisi']);


    $sql=mysqli_query($conn,"UPDATE remisi set tglremisi='$tglremisi',isiremisi='$isiremisi',jnsremisi='$jnsremisi',jmlremisi='$jmlremisi' WHERE idremisi='$ac[idremisi]'");
    if ($_POST="edit"){
        header('location:?page=dr');
    }elseif ($_POST="edit1"){
        header('location:?');
    }
}


?>

<div id="sia">
    <div class="JudulHal">EDIT DATA REMISI</div>
    <div class="content">
        <div class="itu">
            <div class="JudulHal"style="border-bottom: solid 1px #848562;">Remisi</div>
            <form action="" method="POST">

                <div class="form-grup">
                    <label for="">Nama Narapidanan</label>
                    <select name="idnapi" class="panuah" disabled>
                        <?php
                        $sql=mysqli_query($conn,"SELECT * FROM narapidana, penghuni WHERE narapidana.idpenghuni=penghuni.idpenghuni");
                        while ($ab=mysqli_fetch_assoc($sql)){
                            echo "<option value='$ab[idnapi]'>$ab[nmpenghuni]</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-grup">
                    <label for="">TanggaL Pemberian Remsi</label>
                    <input type="date" name="tglremisi" class="panuah" value="<?php echo $ac['tglremisi']?>">
                </div>
                <div class="form-grup">
                    <label for="">Isi Remisi</label>
                    <input type="text" name="isiremisi" class="panuah"  value="<?php echo $ac['isiremisi']?>">
                </div>
                <div class="form-grup">
                    <label for="">Jenis Rimisi</label>
                    <input type="text" name="jnsremisi" class="panuah"  value="<?php echo $ac['jnsremisi']?>">
                </div>

                <div class="form-grup">
                    <label for="">Jumlah Remisi</label>
                    <input  type="text" name="jmlremisi" class="panuah" value="<?php echo $ac['jmlremisi']?>">
                </div>
                <div class="form-grup">
                    <input type="submit" value="edit"  name="edit" class="itu">
                </div>
                <div class="form-grup">
                    <input type="reset" value="batal"  name="batal" class="itu">
                </div>
            </form>


        </div>

    </div>
</div>