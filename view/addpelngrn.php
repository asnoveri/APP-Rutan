

<?php


if (isset($_POST['simpan'])) {

    $tglpengaduan      = mysqli_escape_string($conn, $_POST['tglpengaduan']);
    $nmpengadu           = mysqli_escape_string($conn, $_POST['nmpengadu']);
    $ketpengadu             = mysqli_escape_string($conn, $_POST['ketpengadu']);
    $nmsaksi     = mysqli_escape_string($conn, $_POST['nmsaksi']);
    $ketterdakwa    = mysqli_escape_string($conn, $_POST['ketterdakwa']);
    $pelanggaran   = mysqli_escape_string($conn, $_POST['pelanggaran']);
    $jnshukuman   = mysqli_escape_string($conn, $_POST['jnshukuman']);
    $lmhukuman   = mysqli_escape_string($conn, $_POST['lmhukuman']);
    $jenislama   = mysqli_escape_string($conn, $_POST['jenislama']);
    $tglmulai   = mysqli_escape_string($conn, $_POST['tglmulai']);
    $idpenghuni         = mysqli_escape_string($conn, $_POST['idpenghuni']);

    $tglblnth = explode("-","$tglmulai");

    if ($_POST['jenislama']=='hari'){
        $tgl = $tglblnth[2]+$lmhukuman;
        $tglakhir = $tglblnth[0].'/'.$tglblnth[1].'/'.$tgl;
    }elseif ($_POST['jenislama']=='bulan'){
        $bln = $tglblnth[1]+$lmhukuman;
        $tglakhir = $tglblnth[0].'/'.$bln.'/'.$tglblnth[2];
    }elseif ($_POST['jenislama']=='tahun'){
        $th = $tglblnth[0]+$lmhukuman;
        $tglakhir = $th.'/'.$tglblnth[1].'/'.$tglblnth[2];
    }

    $sql=mysqli_query($conn,"INSERT INTO pelanggaran(tglpengaduan,nmpengadu,ketpengadu,nmsaksi,ketterdakwa,pelanggaran,jnshukuman,lmhukuman,jenislama,tglmulai,tglakhir,idpenghuni) VALUES('$tglpengaduan','$nmpengadu  ','$ketpengadu','$nmsaksi','$ketterdakwa','$pelanggaran','$jnshukuman','$lmhukuman','$jenislama','$tglmulai','$tglakhir','$idpenghuni ')");
    if ($_POST="simpan"){
        header('location:?page=dpl');
    }elseif ($_POST="simpan1"){
        header('location:?');
    }
}

?>

<div id="sia">
    <div class="JudulHal">DATA PELANGARAN PENGHUNI</div>
    <div class="content">
        <div class="itu">
            <div class="JudulHal"style="border-bottom: solid 1px #848562;">Input Data Pelangaran Penghuni</div>
            <form action="" method="POST">
                <div class="form-grup">
                    <label for="">Nama Penghuni</label>
                    <select name="idpenghuni" class="panuah">
                        <?php
                        $sql=mysqli_query($conn,"SELECT * FROM penghuni;");
                        while ($a=mysqli_fetch_assoc($sql)){
                            echo "<option value='$a[idpenghuni]'>$a[nmpenghuni]</option>";
                        }
                        ?>
                    </select>
                </div>

                <div class="form-grup">
                    <label for="">Tanggal Pengaduan</label>
                    <input type="date" name="tglpengaduan" class="panuah" placeholder="Tanggal Pengaduan">
                </div>
                <div class="form-grup">
                    <label for="">Nama Pengadu</label>
                    <input type="text" name="nmpengadu" class="panuah" placeholder="Nama Pengadu">
                </div>
                <div class="form-grup">
                    <label for="">Keterangan Pengadu</label>
                    <input type="text" name="ketpengadu" class="panuah" placeholder="Keterangan Pengadu">
                </div>
                <div class="form-grup">
                    <label for="">Nama Saksi</label>
                    <input type="text" name="nmsaksi" class="panuah" placeholder="Nama Saksi">
                </div>
                <div class="form-grup">
                    <label for="">Keterangan Terdakawa</label>
                    <input type="text" name="ketterdakwa" class="panuah" placeholder="Keterangan Terdakawa">
                </div>
                <div class="form-grup">
                    <label for="">Pelanggaran</label>
                    <input type="text" name="pelanggaran" class="panuah" placeholder="Pelanggaran">
                </div>
                <div class="form-grup">
                    <label for="">Jenis Hukuman</label>
                    <input type="text" name="jnshukuman" class="panuah" placeholder="Jenis Hukuman">
                </div>
                <div class="form-grup">
                    <label for="">Lama Hukuman </label>
                    <input type="text" name="lmhukuman"  style="float: left;width: 50%" placeholder="Lama Hukuman">
                    <select name="jenislama" class="full">
                        <option value="">Pilih </option>
                        <option value="hari">hari</option>
                        <option value="bulan">bulan</option>
                        <option value="tahun">tahun</option>
                    </select>
                </div>
                <div class="form-grup">
                    <label for="">Tanggal Mulai Hukuman</label>
                    <input type="date" name="tglmulai" class="panuah" placeholder="Tanggal Mulai Hukuman">
                </div>
                <div class="form-grup">





                <div class="form-grup">
                    <input type="submit" value="simpan"  name="simpan" class="itu">
                </div>
                <div class="form-grup">
                    <input type="reset" value="batal"  name="batal" class="itu">
                </div>
            </form>


        </div>
    </div>
    </div>
</div>