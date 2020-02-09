<?php
$sq= mysqli_query($conn, "select * from tahanan WHERE idtahanan='$_GET[id]'");
$de = mysqli_fetch_array($sq);
if (isset($_POST['update'])){
    $nosrtputusan       = mysqli_escape_string($conn, $_POST['nosrtputusan']);
    $tglsrtputusan       = mysqli_escape_string($conn, $_POST['tglsrtputusan']);
    $status            = mysqli_escape_string($conn, $_POST['status']);
    $tglkeluar           = mysqli_escape_string($conn, $_POST['tglkeluar']);
    $sql =mysqli_query($conn,"UPDATE tahanan SET nosrtputusan='$nosrtputusan ',tglsrtputusan='$tglsrtputusan', 	status='$status', tglkeluar='$tglkeluar' WHERE idtahanan='$_GET[id]'");
    if ($status=="Narapidana"){
        header('location:?page=addnapi&id='.$_GET['id']);
    }elseif($status=="Bebas"){
        header('location:?page=mhk');
    }
}
?>
<div id="sia">
    <div class="JudulHal">Tambah Data Tahanan</div>

    <div class="content">


        <div class="itu">
            <div class="JudulHal"style="border-bottom: solid 1px #848562;">Tambah Putusan Tahanan</div>
            <form action="" method="POST">
                <input hidden    type="text" name="idpenghuni" value="<?php echo $idpenghun?>">
                <div class="form-grup">
                    <label for="">No Surat Putusan Tahanan</label>
                    <input type="text" name="nosrtputusan" class="panuah" placeholder="">
                </div>
                <div class="form-grup">
                    <label for="">Tanggal Surat Putusan Tahanan</label>
                    <input type="date" name="tglsrtputusan" class="panuah" placeholder="">
                </div>
                <div class="form-grup">
                    <label for="">Isi Keputusan</label>
                    <select name="status" id="" class="form-control">
                        <option value="">Pilih Putusan</option>
                        <option value="Narapidana">Narapidana</option>
                        <option value="Bebas">Bebas</option>
                    </select>
                </div>
                <div class="form-grup">
                    <label for="">Tanggal Keluar</label>
                    <input type="date" name="tglkeluar" class="panuah" placeholder="">
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