<?php
$sq= mysqli_query($conn, "select * from tahanan WHERE idtahanan='$_GET[id]'");
$de = mysqli_fetch_array($sq);

if (isset($_POST['update'])){

    $nosrtpengalihan        = mysqli_escape_string($conn, $_POST['nosrtpengalihan']);
    $tglpengalihan          = mysqli_escape_string($conn, $_POST['tglpengalihan']);
    $dialihkanke            = mysqli_escape_string($conn, $_POST['dialihkanke']);
    $status            = mysqli_escape_string($conn, $_POST['status']);

$sql =mysqli_query($conn,"UPDATE tahanan SET nosrtpengalihan='$nosrtpengalihan',tglpengalihan='$tglpengalihan', 	dialihkanke='$dialihkanke',status='$status' WHERE idtahanan='$_GET[id]'");
    header('location:?page=detailtahanan&id='.$_GET['id']);
}


?>


<div id="sia">
    <div class="JudulHal">Tambah Data Tahanan</div>
    <div class="content">


    <div class="itu">
        <div class="JudulHal"style="border-bottom: solid 1px #848562;">Tambah Pengalihan Tahanan</div>
        <form action="" method="POST">
            <input hidden    type="text" name="idpenghuni" value="<?php echo $idpenghun?>">
            <div class="form-grup">
                <label for="">No Surat Pengalihan Tahanan</label>
                <input type="text" name="nosrtpengalihan" class="panuah" placeholder="">
            </div>
            <div class="form-grup">
                <label for="">Tanggal Surat Pengalihan Tahanan</label>
                <input type="date" name="tglpengalihan" class="panuah" placeholder="">
            </div>
            <div class="form-grup">
                <label for="">Pengalihan Tahanan</label>
                <select name="dialihkanke" class="panuah">
                    <option value="">Pilih Pengalihan Tahanan</option>
                    <option value="Tahanan Rumah">Tahanan Rumah</option>
                    <option value="Tahanan Kota">Tahanan Kota</option>
                    <option value="Tahanan Rutan">Tahanan Rutan</option>
                </select>
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
