<?php
$ac=mysqli_query($conn,"SELECT * FROM penghuni,narapidana WHERE penghuni.idpenghuni= narapidana.idpenghuni and narapidana.idnapi='$_GET[id]'");
$p=mysqli_fetch_array($ac);


if (isset($_POST['edit'])) {

    $nmpenghuni = mysqli_escape_string($conn, $_POST['nmpenghuni']);
    $tgllahir = mysqli_escape_string($conn, $_POST['tgllahir']);
    $tptlahir = mysqli_escape_string($conn, $_POST['tptlahir']);
    $jk = mysqli_escape_string($conn, $_POST['jk']);
    $pekerjaan = mysqli_escape_string($conn, $_POST['pekerjaan']);
    $pendidikan = mysqli_escape_string($conn, $_POST['pendidikan']);
    $alamat = mysqli_escape_string($conn, $_POST['alamat']);
    $agama = mysqli_escape_string($conn, $_POST['agama']);
    $ket = mysqli_escape_string($conn, $_POST['ket']);

    $sql = mysqli_query($conn, "UPDATE  penghuni  set nmpenghuni='$nmpenghuni',tgllahir='$tgllahir',tptlahir='$tptlahir',jk='$jk',pekerjaan='$pekerjaan', pendidikan='$pendidikan',alamat= '$alamat', agama='$agama', ket='$ket'WHERE idpenghuni='$p[idpenghuni]'");
}
?>

<?php
if (isset($_POST['edit1'])){

    $jenisnapi           = mysqli_escape_string($conn, $_POST['jenisnapi']);
    $idpenghuni          = mysqli_escape_string($conn, $_POST['idpenghuni']);
    $nosrtputusan        = mysqli_escape_string($conn, $_POST['nosrtputusan']);
    $pasal               = mysqli_escape_string($conn, $_POST['pasal']);
    $asalpenyidik        = mysqli_escape_string($conn, $_POST['asalpenyidik']);
    $jenishukuman        = mysqli_escape_string($conn, $_POST['jenishukuman']);
    $tglsrtputusan       = mysqli_escape_string($conn, $_POST['tglsrtputusan']);



    $sql1=mysqli_query($conn,"UPDATE narapidana
                                    set jenisnapi='$jenisnapi'
                                    ,idpenghuni='$idpenghuni'
                                    ,nosrtputusan='$nosrtputusan'
                                    ,pasal='$pasal'
                                    ,asalpenyidik='$asalpenyidik'
                                    ,jenishukuman='$jenishukuman'
                                    ,tglsrtputusan='$tglsrtputusan'WHERE idpenghuni='$p[idpenghuni]'
                                   ");
    if ($_POST="edit1"){
        header('location:?page=dn');
    }elseif ($_POST="edit"){
        header('location:?');
    }
}
?>

<div id="sia">
    <div class="JudulHal">EDIT DATA NARAPIDANA</div>
    <div class="content">
        <div class="itu">
            <div class="JudulHal"style="border-bottom: solid 1px #848562;">Data Diri Narapidana</div>
            <form action="" method="POST">

                <div class="form-grup">
                    <label for="">Nama</label>
                    <input type="text" name="nmpenghuni" class="panuah" value=" <?php echo $p['nmpenghuni']?>">
                </div>
                <div class="form-grup">
                    <label for="">Tanggal Lahir</label>
                    <input type="date" name="tgllahir" class="panuah"  value=" ">
                </div>
                <div class="form-grup">
                    <label for="">Tempat Lahir</label>
                    <input type="text" name="tptlahir" class="panuah"  value=" <?php echo $p['tptlahir']?>">
                </div>

                <div class="form-grup">
                    <label for="">Jenis Kelamin</label>
                    <select name="jk" class="panuah">
                        <option value="<?php echo $p['jk']?>"><?php echo $p['jk']?></option>
                        <option value="laki-laki">laki-laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                </div>

                <div class="form-grup">
                    <label for="">Pekerjaan</label>
                    <input  type="text" name="pekerjaan" class="panuah" value=" <?php echo $p['pekerjaan']?>">
                </div>

                <div class="form-grup">
                    <label for="">Pendidikan</label>
                    <input type="text" name="pendidikan" class="panuah" value=" <?php echo $p['pendidikan']?>">
                </div>

                <div class="form-grup">
                    <label for="">Alamat</label>
                    <input type="text" name="alamat" class="panuah" value=" <?php echo $p['alamat']?>">
                </div>

                <div class="form-group">
                    <label for="">Agama</label>
                    <select name="agama" class="panuah">
                        <option value="<?php echo $p['agama']?>"><?php echo $p['agama']?></option>
                        <option value="Islam">Islam</option>
                        <option value="Kisten">Kisten</option>
                        <option value="Budha">Budha</option>
                        <option value="Hindu">Hindu</option>
                    </select>

                </div>

                <div class="form-grup">
                    <label for="">Keterangan</label>
                    <input type="text" name="ket" class="panuah" value=" <?php echo $p['ket']?>">
                </div>
                <div class="form-grup">
                    <input type="submit" value="edit"  name="edit" class="itu">
                </div>
                <div class="form-grup">
                    <input type="reset" value="batal"  name="batal" class="itu">
                </div>
            </form>

        </div>
        <div class="itu">
            <div class="JudulHal"style="border-bottom: solid 1px #848562;">Data Narapidana</div>
            <form action="" method="POST">
                <input hidden    type="text" name="idpenghuni" value="<?php echo  $p['idpenghuni'] ?>">
                <div class="form-grup">
                    <label for="">Jenis Napi</label>
                    <select name="jenisnapi" class="panuah">
                        <option value=" <?php echo $p['jenisnapi']?>"><?php echo $p['jenisnapi']?></option>
                        <option value="B1">B1</option>
                        <option value="B2a">B2a</option>
                        <option value="B2b">B2b</option>
                        <option value="B3">B3</option>
                    </select>
                </div>

                <div class="form-grup">
                    <label for="">No Surat Putusan</label>
                    <input type="text" name="nosrtputusan" class="panuah"  value="<?php echo $p['nosrtputusan']?>">
                </div>
                <div class="form-grup">
                    <label for="">Pasal</label>
                    <input type="text" name="pasal" class="panuah"  value="<?php echo $p['pasal']?>">
                </div>
                <div class="form-grup">
                    <label for="">Asal Penyidik</label>
                    <input  type="text" name="asalpenyidik" class="panuah"  value="<?php echo $p['asalpenyidik']?>">
                </div>
                <div class="form-grup">
                    <label for="">Jenis Hukuman</label>
                    <input  type="text" name="jenishukuman" class="panuah"  value="<?php echo $p['jenishukuman']?>">
                </div>

                <div class="form-grup">
                    <input type="submit" value="edit1"  name="edit1" class="itu">
                </div>
                <div class="form-grup">
                    <input type="reset" value="batal"  name="batal" class="itu">
                </div>
            </form>

        </div>
    </div>

</div>

