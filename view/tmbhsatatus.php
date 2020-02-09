<?php
$sq= mysqli_query($conn, "select * from narapidana WHERE idnapi='$_GET[id]'");
$de = mysqli_fetch_array($sq);
if (isset($_POST['update'])){

    $status            = mysqli_escape_string($conn, $_POST['status']);
    $tglhbshukuman            = mysqli_escape_string($conn, $_POST['tglhbshukuman']);
    $sql =mysqli_query($conn,"UPDATE narapidana SET 	status='$status',tglhbshukuman='$tglhbshukuman' WHERE idnapi='$_GET[id]'");
    if ($status=="Belum Bebas"){
        header('location:?page=detailnapi&id='.$_GET['id']);
    }elseif($status=="Bebas"){
        header('location:?page=dnb');
    }
}
?>


<div id="sia">
    <div class="JudulHal">Tambah Data Narapidana</div>
    <div class="content">
        <div class="itu">
            <div class="JudulHal"style="border-bottom: solid 1px #848562;margin-bottom: 12px;">Tambah Status Narapidanan</div>
            <form action="" method="POST">
                <div class="form-grup">
                    <label for="">Tanggal Pembebasan</label>
                    <input type="date" name="tglhbshukuman" class="panuah" placeholder="">
                </div>
                <input hidden    type="text" name="idpenghuni" value="<?php echo $idpenghun?>">
                <div class="form-grup">

                    <select name="status" id="" class="form-control">
                        <option value="">Pilih Status</option>
                        <option value="Bebas">Bebas</option>
                        <option value="Belum Bebas">Belum Bebas</option>
                    </select>
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