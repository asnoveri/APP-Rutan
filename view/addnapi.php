<?php

if (isset($_GET['id'])){
    $dthn = mysqli_query($conn, "select * from penghuni, tahanan where penghuni.idpenghuni=tahanan.idpenghuni AND tahanan.idtahanan='$_GET[id]'");
    $thn = mysqli_fetch_array($dthn);



    $sidpenghuni    = $thn['idpenghuni'];
    $snama          = $thn['nmpenghuni'];
    $stgllahir      = $thn['tgllahir'];
    $stptlahir      = $thn['tptlahir'];
    $sjk             = $thn['jk'];
    $spekerjaan     = $thn['pekerjaan'];
    $spendidikan    = $thn['pendidikan'];
    $salamat        = $thn['alamat'];
    $sagama         = $thn['agama'];
    $sket           = $thn['ket'];

}else{

    $sidpenghuni    = "";
    $snama          = "";
    $stgllahir      = "";
    $stptlahir      = "";
    $spekerjaan     = "";
    $spendidikan    = "";
    $salamat        = "";
    $sagama         = "";
    $sket           = "";

}


if (isset($_POST['simpan'])) {
    $nmpenghuni = mysqli_escape_string($conn, $_POST['nmpenghuni']);
    $tgllahir = mysqli_escape_string($conn, $_POST['tgllahir']);
    $tptlahir = mysqli_escape_string($conn, $_POST['tptlahir']);
    $jk = mysqli_escape_string($conn, $_POST['jk']);
    $pekerjaan = mysqli_escape_string($conn, $_POST['pekerjaan']);
    $pendidikan = mysqli_escape_string($conn, $_POST['pendidikan']);
    $alamat = mysqli_escape_string($conn, $_POST['alamat']);
    $agama = mysqli_escape_string($conn, $_POST['agama']);
    $ket = mysqli_escape_string($conn, $_POST['ket']);

    $sql = mysqli_query($conn, "INSERT INTO penghuni  VALUES ('', '$nmpenghuni', '$tgllahir', '$tptlahir','$jk', '$pekerjaan', '$pendidikan', '$alamat', '$agama', '$ket')");
 if ($sql){

    $idpenghuni = mysqli_query($conn, "SELECT max(penghuni.idpenghuni) as idpenghuni FROM penghuni");
    $id = mysqli_fetch_array($idpenghuni);
}
}



if (isset($id['idpenghuni'])){
    $idpenghun = $id['idpenghuni'];
}else{
    $idpenghun ="";
}


?>
<?php echo $sidpenghuni ?>
<?php
if (isset($_POST['simpan1'])){
    $idpenghuni                 = mysqli_escape_string($conn, $_POST['idpenghuni']);
    $jenisnapi                 = mysqli_escape_string($conn, $_POST['jenisnapi']);
    $tglmasuk                   = mysqli_escape_string($conn, $_POST['tglmasuk']);
    $nosrtputusan               = mysqli_escape_string($conn, $_POST['nosrtputusan']);
    $pasal                      = mysqli_escape_string($conn, $_POST['pasal']);
    $asalpenyidik               = mysqli_escape_string($conn, $_POST['asalpenyidik']);
    $jenishukuman               = mysqli_escape_string($conn, $_POST['jenishukuman']);
    $lamahukuman                = mysqli_escape_string($conn, $_POST['lamahukuman']);
    $jenislama                 = mysqli_escape_string($conn, $_POST['jenislama']);
    $tglsrtputusan              = mysqli_escape_string($conn, $_POST['tglsrtputusan']);


    $tglblnth = explode("-","$tglmasuk");

    if ($_POST['jenislama']=='hari'){
        $tgl = $tglblnth[2]+$lamahukuman;
        $tglpembebasan = $tglblnth[0].'/'.$tglblnth[1].'/'.$tgl;
    }elseif ($_POST['jenislama']=='bulan'){
        $bln = $tglblnth[1]+$lamahukuman;
        $tglpembebasan = $tglblnth[0].'/'.$bln.'/'.$tglblnth[2];
    }elseif ($_POST['jenislama']=='tahun'){
        $th = $tglblnth[0]+$lamahukuman;
        $tglpembebasan = $th.'/'.$tglblnth[1].'/'.$tglblnth[2];
    }



    $sql1=mysqli_query($conn,"INSERT INTO narapidana(jenisnapi,tglmasuk,nosrtputusan,pasal,asalpenyidik,jenishukuman,lamahukuman,jenislama,tglsrtputusan,idpenghuni,tglpembebasan) VALUES ('$jenisnapi','$tglmasuk','$nosrtputusan','$pasal','$asalpenyidik','$jenishukuman','$lamahukuman','$jenislama','$tglsrtputusan','$idpenghuni','$tglpembebasan')");
    if ($_POST="simpan1"){
        header('location:?page=dn');
    }elseif ($_POST="simpan"){
        header('location:?');
    }
}


?>

    <div id="sia">
    <div class="JudulHal">INPUT DATA NAPI</div>
    <div class="content">
        <div class="itu">
            <div class="JudulHal"style="border-bottom: solid 1px #848562;">Data Diri Napi</div>
            <form action="" method="POST">
                <div class="form-grup">
                    <label for="">Nama</label>
                    <input type="text" name="nmpenghuni" class="panuah" value="<?php echo $snama ?>" placeholder="Username">
                </div>
                <div class="form-grup">
                    <label for="">Tanggal Lahir</label>
                    <input type="date" name="tgllahir" class="panuah" value="<?php echo $stgllahir ?>"  placeholder="Tanggal lahir">
                </div>
                <div class="form-grup">
                    <label for="">Tempat Lahir</label>
                    <input type="text" name="tptlahir" class="panuah" value="<?php echo $stptlahir ?>"  placeholder="Tempat Lahir">
                </div>
                <div class="form-group">
                    <label for="">Jenis Kelamin</label>
                    <select name="jk" class="panuah">
                        <?php

                        if (isset($_GET['id'])){
                            echo "<option value='$sjk'>$sjk</option>";
                        }else {
                            echo "
                        <option value=\"\">Pilih Jenis Kelamin</option>
                        <option value=\"Laki - laki\">Laki-laki</option>
                        <option value=\"Perempuan\">Perempuan</option>";
                        }
                        ?>
                    </select>

                </div>

                <div class="form-grup">
                    <label for="">Pekerjaan</label>
                    <input  type="text" name="pekerjaan" class="panuah" value="<?php echo $spekerjaan ?>" placeholder="Pekerjaan">
                </div>

                <div class="form-grup">
                    <label for="">Pendidikan</label>
                    <input type="text" name="pendidikan" class="panuah" value="<?php echo $spendidikan ?>" placeholder="Pendidikan">
                </div>

                <div class="form-grup">
                    <label for="">Alamat</label>
                    <input type="text" name="alamat" class="panuah" value="<?php echo $salamat ?>"  placeholder="Alamat">
                </div>

                <div class="form-group">
                    <label for="">Agama</label>

                    <select name="agama" class="panuah">
                        <?php

                        if (isset($_GET['id'])){
                            echo "<option value='$sagama'>$sagama</option>";
                        }else{
                          echo "
                        <option value=\"\">Pilih Agama</option>
                        <option value=\"Islam\">Islam</option>
                        <option value=\"Kisten\">Kisten</option>
                        <option value=\"Budha\">Budha</option>
                        <option value=\"Hindu\">Hindu</option>";
                        }
                        ?>
                    </select>
                </div>

                <div class="form-grup">
                    <label for="">Keterangan</label>
                    <input type="text" name="ket" class="panuah" value="<?php echo $sket ?>"  placeholder="Keterangan">
                </div>
                <div class="form-grup">
                    <input type="submit" value="simpan"  <?php   if (isset($_GET['id'])){ echo "disabled"; } ?> name="simpan" class="itu">
                </div>
                <div class="form-grup">
                    <input type="reset" value="batal" <?php   if (isset($_GET['id'])){ echo "disabled"; } ?>  name="batal" class="itu">
                </div>
            </form>

        </div>

        <div class="itu">
            <div class="JudulHal"style="border-bottom: solid 1px #848562;">Data Narapidanan</div>

            <form action="" method="POST">
                <input hidden    type="text" name="idpenghuni" value="<?php if(isset($_GET['id'])){
                    echo $sidpenghuni;
                }else
                echo $idpenghun;
                ?>">
                <div class="form-grup">
                    <label for="">Jenis Napi</label>
                    <select name="jenisnapi" class="panuah">
                        <option value="">Pilih Napi</option>
                        <option value="B1">B1</option>
                        <option value="B2a">B2a</option>
                        <option value="B2b">B2b</option>
                        <option value="B3">B3</option>
                    </select>
                </div>
                <div class="form-grup">
                    <label for="">Tanggal Masuk</label>
                    <input type="date" name="tglmasuk" class="panuah"  placeholder="Tanggal Masuak">
                </div>
                <div class="form-grup">
                    <label for="">No Surat Putusan</label>
                    <input type="text" name="nosrtputusan" class="panuah"  placeholder="No Surat Putusan">
                </div>
                <div class="form-grup">
                    <label for="">Pasal</label>
                    <input  type="text" name="pasal" class="panuah"  placeholder="Pasal">
                </div>

                <div class="form-grup">
                    <label for="">Asal Penyidik</label>
                    <input type="text" name="asalpenyidik" class="panuah"  placeholder="Asal Penyidik">
                </div>
                <div class="form-grup">
                    <label for="">Jenis Hukuman</label>
                    <input type="text" name="jenishukuman" class="panuah"  placeholder="Jenis Hukuman">
                </div>
                <div class="form-grup">
                    <label for="">Lama Hukuman </label>
                    <input type="text" name="lamahukuman"  style="float: left;width: 50%" placeholder="Lama Hukuman">
                    <select name="jenislama" class="full">
                        <option value="">Pilih </option>
                        <option value="hari">hari</option>
                        <option value="bulan">bulan</option>
                        <option value="tahun">tahun</option>
                    </select>
                </div>

                <div class="form-grup">
                    <label for="">Tanggal Surat Putusan</label>
                    <input type="date" name="tglsrtputusan" class="panuah"  placeholder="Tanggal Surat Putusan">
                </div>

                <div class="form-grup">
                    <input type="submit" value="simpan1"  name="simpan1" class="itu">
                </div>
                <div class="form-grup">
                    <input type="reset" value="batal"  name="batal" class="itu">
                </div>
            </form>

        </div>
    </div>

</div>

