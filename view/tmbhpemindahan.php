<?php
$sq= mysqli_query($conn, "select * from tahanan WHERE idtahanan='$_GET[id]'");
$de = mysqli_fetch_array($sq);

if (isset($_POST['update'])){

    $nosrtpemindahan        = mysqli_escape_string($conn, $_POST['nosrtpemindahan']);
    $tglpemindahan       = mysqli_escape_string($conn, $_POST['tglpemindahan']);
    $status            = mysqli_escape_string($conn, $_POST['status']);

    $sql =mysqli_query($conn,"UPDATE tahanan SET nosrtpemindahan='$nosrtpemindahan',tglpemindahan='$tglpemindahan', 	status='$status' WHERE idtahanan='$_GET[id]'");
    header('location:?page=detailtahanan&id='.$_GET['id']);
}


?>


<div id="sia">
    <div class="JudulHal">Tambah Data Tahanan</div>
    <div class="content">


        <div class="itu">
            <div class="JudulHal"style="border-bottom: solid 1px #848562;">Tambah Pemindahan Tahanan</div>
            <form action="" method="POST">
                <input hidden    type="text" name="idpenghuni" value="<?php echo $idpenghun?>">
                <div class="form-grup">
                    <label for="">No Surat Pemindahan Tahanan</label>
                    <input type="text" name="nosrtpemindahan" class="panuah" placeholder="">
                </div>
                <div class="form-grup">
                    <label for="">Tanggal Surat Pemindahan Tahanan</label>
                    <input type="date" name="tglpemindahan" class="panuah" placeholder="">
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