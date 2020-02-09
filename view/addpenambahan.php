<?php
$sq= mysqli_query($conn, "select * from tahanan WHERE idtahanan='$_GET[id]'");
$de = mysqli_fetch_array($sq);

if (isset($_POST['update'])){

    $nosrtprpnjpenahann = mysqli_escape_string($conn, $_POST['nosrtprpnjpenahann']);
    $tglsrprpnjpenahanan = mysqli_escape_string($conn, $_POST['tglsrprpnjpenahanan']);
    $lama                = mysqli_escape_string($conn, $_POST['lama']);

    $tglblnth = explode("-","$de[tglpembebasan]");

    if ($_POST['jenislama']=='hari'){
        $tgl = $tglblnth[2]+$lama;
        $tglpembebasan = $tglblnth[0].'/'.$tglblnth[1].'/'.$tgl;
    }elseif ($_POST['jenislama']=='bulan'){
        $bln = $tglblnth[1]+$lama;
        $tglpembebasan = $tglblnth[0].'/'.$bln.'/'.$tglblnth[2];
    }elseif ($_POST['jenislama']=='tahun'){
        $th = $tglblnth[0]+$lama;
        $tglpembebasan = $th.'/'.$tglblnth[1].'/'.$tglblnth[2];
    }
    $sql =mysqli_query($conn,"UPDATE tahanan SET nosrtprpnjpenahann='$nosrtprpnjpenahann',tglsrprpnjpenahanan='$tglsrprpnjpenahanan', 	tglprtpnjangan='$tglpembebasan' WHERE idtahanan='$_GET[id]'");
    header('location:?page=detailtahanan&id='.$_GET['id']);
}


?>

<div id="sia">
    <div class="JudulHal">Tambah Data Tahanan</div>
    <div class="content">
        <div class="itu">
            <div class="JudulHal"style="border-bottom: solid 1px #848562;">Tambah Masa Penahanan</div>
            <form action="" method="POST">
                <input hidden    type="text" name="idpenghuni" value="<?php echo $idpenghun?>">
                <div class="form-grup">
                    <label for="">No Surat Perpanjangan Penahanan</label>
                    <input type="text" name="nosrtprpnjpenahann" class="panuah" placeholder="">
                </div>
                <div class="form-grup">
                    <label for="">Tanggal Surat Perpanjangan Penahanan</label>
                    <input type="date" name="tglsrprpnjpenahanan" class="panuah" placeholder="">
                </div>


                <div class="form-grup">
                    <label for="">Lama penahanan</label>
                    <input type="text" name="lama"  style="float: left;width: 50%" placeholder="Lama Penahanan">
                    <select name="jenislama" class="full">
                        <option value="">Pilih </option>
                        <option value="hari">hari</option>
                        <option value="bulan">bulan</option>
                        <option value="tahun">tahun</option>
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