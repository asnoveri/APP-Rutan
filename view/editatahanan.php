<?php
$ac=mysqli_query($conn,"SELECT * FROM penghuni,tahanan WHERE penghuni.idpenghuni= tahanan.idpenghuni and tahanan.idtahanan='$_GET[id]'");
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

    $jnstahanan          = mysqli_escape_string($conn, $_POST['jnstahanan']);
    $idpenghuni          = mysqli_escape_string($conn, $_POST['idpenghuni']);
    $instansi            = mysqli_escape_string($conn, $_POST['instansi']);
    $tglsrtpenahanan     = mysqli_escape_string($conn, $_POST['tglsrtpenahanan']);
    $nosrtpenahanan      = mysqli_escape_string($conn, $_POST['nosrtpenahanan']);
    $pasal               = mysqli_escape_string($conn, $_POST['pasal']);


  $sql1=mysqli_query($conn,"UPDATE tahanan
                                    set jnstahanan='$jnstahanan'
                                    ,instansi='$instansi'
                                    ,tglsrtpenahanan='$tglsrtpenahanan'
                                    ,nosrtpenahanan='$nosrtpenahanan'
                                    ,pasal='$pasal'WHERE idpenghuni='$p[idpenghuni]'
                                   ");
    if ($_POST="edit1"){
        header('location:?page=dt');
    }elseif ($_POST="edit"){
        header('location:?');
    }
}
?>

<div id="sia">
    <div class="JudulHal">EDIT TAHANAN</div>
    <div class="content">
        <div class="itu">
            <div class="JudulHal"style="border-bottom: solid 1px #848562;">Data Diri Tahanan</div>
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
            <div class="JudulHal"style="border-bottom: solid 1px #848562;">Data Penahanan</div>
            <form action="" method="POST">
                <input hidden    type="text" name="idpenghuni" value="<?php echo  $p['idpenghuni'] ?>">
                <div class="form-grup">
                    <label for="">Jenis Tahanan</label>
                    <select name="jnstahanan" class="panuah">
                        <option value=" <?php echo $p['jnstahanan']?>"><?php echo $p['jnstahanan']?></option>
                        <option value="A.I">A.I</option>
                        <option value="A.II">A.II</option>
                        <option value="A.III">A.III</option>
                        <option value="A.IV">A.IV</option>
                        <option value="A.V">A.V</option>
                    </select>
                </div>
                <div class="form-grup">
                    <label for="">Instansi</label>
                    <input type="text" name="instansi" class="panuah" value="<?php echo $p['instansi']?>">
                </div>
                <div class="form-grup">
                    <label for="">Tanggal Surat Penahanan</label>
                    <input type="date" name="tglsrtpenahanan" class="panuah"  value="<?php echo $p['tglsrtpenahanan']?>">
                </div>
                <div class="form-grup">
                    <label for="">No Surat Penahanan</label>
                    <input type="text" name="nosrtpenahanan" class="panuah"  value="<?php echo $p['nosrtpenahanan']?>">
                </div>

                <div class="form-grup">
                    <label for="">Pasal</label>
                    <input  type="text" name="pasal" class="panuah"  value="<?php echo $p['pasal']?>">
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

