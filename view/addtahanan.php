<?php

if (isset($_POST['simpan'])){


    $nmpenghuni = mysqli_escape_string($conn, $_POST['nmpenghuni']);
    $tgllahir = mysqli_escape_string($conn, $_POST['tgllahir']);
    $tptlahir = mysqli_escape_string($conn, $_POST['tptlahir']);
    $jk = mysqli_escape_string($conn, $_POST['jk']);
    $pekerjaan = mysqli_escape_string($conn, $_POST['pekerjaan']);
    $pendidikan = mysqli_escape_string($conn, $_POST['pendidikan']);
    $alamat = mysqli_escape_string($conn, $_POST['alamat']);
    $agama = mysqli_escape_string($conn, $_POST['agama']);
    $ket= mysqli_escape_string($conn, $_POST['ket']);

   $sql =mysqli_query($conn,"INSERT INTO penghuni  VALUES ('', '$nmpenghuni', '$tgllahir', '$tptlahir','$jk',  '$pekerjaan', '$pendidikan', '$alamat', '$agama', '$ket')");
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



<?php
if (isset($_POST['simpan1'])){


    $idpenghuni          = mysqli_escape_string($conn, $_POST['idpenghuni']);
    $jnstahanan          = mysqli_escape_string($conn, $_POST['jnstahanan']);
    $instansi            = mysqli_escape_string($conn, $_POST['instansi']);
    $tglsrtpenahanan     = mysqli_escape_string($conn, $_POST['tglsrtpenahanan']);
    $nosrtpenahanan      = mysqli_escape_string($conn, $_POST['nosrtpenahanan']);
    $pasal               = mysqli_escape_string($conn, $_POST['pasal']);
    $tglmasuk            = mysqli_escape_string($conn, $_POST['tglmasuk']);
    $lama                = mysqli_escape_string($conn, $_POST['lama']);




    $tglblnth = explode("-","$tglmasuk");

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



    $sql1=mysqli_query($conn,"INSERT INTO tahanan (jnstahanan,instansi,tglsrtpenahanan,nosrtpenahanan,pasal,tglmasuk, idpenghuni, tglpembebasan) VALUES('$jnstahanan','$instansi','$tglsrtpenahanan','$nosrtpenahanan','$pasal','$tglmasuk','$idpenghuni','$tglpembebasan')");
    if ($_POST="simpan1"){
        header('location:?page=dt');
    }elseif ($_POST="simpan"){
        header('location:?');
    }
}
?>

<div id="sia">
    <div class="JudulHal">INPUT DATA TAHANAN</div>
    <div class="content">
        <div class="itu">
            <div class="JudulHal"style="border-bottom: solid 1px #848562;">Data Diri Tahanan</div>
            <form action="" method="POST">

                <div class="form-grup">
                    <label for="">Nama</label>
                    <input type="text" name="nmpenghuni" class="panuah" placeholder="Username">
                </div>
                <div class="form-grup">
                    <label for="">Tanggal Lahir</label>
                    <input type="date" name="tgllahir" class="panuah"  placeholder="Tanggal lahir">
                </div>
                <div class="form-grup">
                    <label for="">Tempat Lahir</label>
                    <input type="text" name="tptlahir" class="panuah"  placeholder="Tempat Lahir">
                </div>
                <div class="form-group">
                    <label for="">Jenis Kelamin</label>
                    <select name="jk" class="panuah">
                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>

                </div>


                <div class="form-grup">
                    <label for="">Pekerjaan</label>
                    <input  type="text" name="pekerjaan" class="panuah"  placeholder="Pekerjaan">
                </div>

                <div class="form-grup">
                    <label for="">Pendidikan</label>
                    <input type="text" name="pendidikan" class="panuah"  placeholder="Pendidikan">
                </div>

                <div class="form-grup">
                    <label for="">Alamat</label>
                    <input type="text" name="alamat" class="panuah"  placeholder="Alamat">
                </div>

                <div class="form-group">
                    <label for="">Agama</label>
                    <select name="agama" class="panuah">
                        <option value="">Pilih Agama</option>
                        <option value="Islam">Islam</option>
                        <option value="Kisten">Kisten</option>
                        <option value="Budha">Budha</option>
                        <option value="Hindu">Hindu</option>
                    </select>

                </div>

                <div class="form-grup">
                    <label for="">Keterangan</label>
                    <input type="text" name="ket" class="panuah"  placeholder="Keterangan">
                </div>
                <div class="form-grup">
                    <input type="submit" value="simpan"  name="simpan" class="itu">
                </div>
                <div class="form-grup">
                    <input type="reset" value="batal"  name="batal" class="itu">
                </div>
            </form>

        </div>
        <div class="itu">
            <div class="JudulHal"style="border-bottom: solid 1px #848562;">Data Penahanan</div>
            <form action="" method="POST">
                <input hidden    type="text" name="idpenghuni" value="<?php echo $idpenghun?>">
                <div class="form-grup">
                    <label for="">Jenis Tahanan</label>
                    <select name="jnstahanan" class="panuah">
                        <option value="">Pilih Tahanan</option>
                        <option value="A.I">A.I</option>
                        <option value="A.II">A.II</option>
                        <option value="A.III">A.III</option>
                        <option value="A.VI">A.IV</option>
                        <option value="A.V">A.V</option>
                    </select>
                </div>
                <div class="form-grup">
                    <label for="">Instansi</label>
                    <input type="text" name="instansi" class="panuah"  placeholder="Instansi">
                </div>
                <div class="form-grup">
                    <label for="">Tanggal Surat Penahanan</label>
                    <input type="date" name="tglsrtpenahanan" class="panuah"  placeholder="Tanggal Surat Penahanan">
                </div>
                <div class="form-grup">
                    <label for="">No Surat Penahanan</label>
                    <input type="text" name="nosrtpenahanan" class="panuah"  placeholder="No Surat Penahanan">
                </div>

                <div class="form-grup">
                    <label for="">Pasal</label>
                    <input  type="text" name="pasal" class="panuah"  placeholder="Pasal">
                </div>

                <div class="form-grup">
                    <label for="">Tangal Masuk</label>
                    <input type="date" name="tglmasuk" class="panuah"  placeholder="Tangal Masuk">
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
                    <input type="submit" value="simpan1"  name="simpan1" class="itu">
                </div>
                <div class="form-grup">
                    <input type="reset" value="batal"  name="batal" class="itu">
                </div>
            </form>

        </div>
    </div>

</div>

