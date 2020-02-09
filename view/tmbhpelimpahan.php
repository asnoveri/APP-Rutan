<?php
$sq= mysqli_query($conn, "select * from tahanan WHERE idtahanan='$_GET[id]'");
$de = mysqli_fetch_array($sq);

if (isset($_POST['update'])){

    $nopelimpahan        = mysqli_escape_string($conn, $_POST['nopelimpahan']);
    $tglsrtpelimpahan       = mysqli_escape_string($conn, $_POST['tglsrtpelimpahan']);
    $status            = mysqli_escape_string($conn, $_POST['status']);

    $sql =mysqli_query($conn,"UPDATE tahanan SET nopelimpahan='$nopelimpahan',tglsrtpelimpahan='$tglsrtpelimpahan', 	status='$status' WHERE idtahanan='$_GET[id]'");
    header('location:?page=detailtahanan&id='.$_GET['id']);
}


?>


<div id="sia">
    <div class="JudulHal">Tambah Data Tahanan</div>
    <div class="content">


        <div class="itu">
            <div class="JudulHal"style="border-bottom: solid 1px #848562;">Tambah Pelimpahan Tahanan</div>
            <form action="" method="POST">
                <input hidden    type="text" name="idpenghuni" value="<?php echo $idpenghun?>">
                <div class="form-grup">
                    <label for="">No Surat Pelimpahan Tahanan</label>
                    <input type="text" name="nopelimpahan" class="panuah" placeholder="">
                </div>
                <div class="form-grup">
                    <label for="">Tanggal Surat Pelimpahan Tahanan</label>
                    <input type="date" name="tglsrtpelimpahan" class="panuah" placeholder="">
                </div>
                <div class="form-grup">
                    <label for="">Status</label>
                    <input type="text" name="status" class="panuah" placeholder="">
                </div>

                <div class="form-grup">
                    <input type="submit" value="TAMBAH"  name="update" class="itu">
                </div>
                <div class="form-grup">
                    <input type="reset" value="BATAL"  name="batal" class="itu">
                </div>
            </form>
        </div>
    </div>
</div>