<?php
$ca=mysqli_query($conn,"SELECT * FROM penghuni,pelanggaran where penghuni.idpenghuni=pelanggaran.idpenghuni AND pelanggaran.idpelangr='$_GET[id]'");
$c=mysqli_fetch_array($ca);


if (isset($_POST['edit'])) {
    $tglpengaduan = mysqli_escape_string($conn, $_POST['tglpengaduan']);
    $nmpengadu = mysqli_escape_string($conn, $_POST['nmpengadu']);
    $ketpengadu = mysqli_escape_string($conn, $_POST['ketpengadu']);
    $nmsaksi = mysqli_escape_string($conn, $_POST['nmsaksi']);
    $ketterdakwa = mysqli_escape_string($conn, $_POST['ketterdakwa']);
    $pelanggaran = mysqli_escape_string($conn, $_POST['pelanggaran']);
    $jnshukuman = mysqli_escape_string($conn, $_POST['jnshukuman']);

    $sql = mysqli_query($conn, "update pelanggaran set tglpengaduan='$tglpengaduan',nmpengadu='$nmpengadu',ketpengadu='$ketpengadu',nmsaksi='$nmsaksi',ketterdakwa='$ketterdakwa',pelanggaran='$pelanggaran',jnshukuman='$jnshukuman' WHERE idpelangr='$c[idpelangr]' ");
    if ($_POST = "edit") {
        header('location:?page=dpl');
    } elseif ($_POST = "edit1") {
        header('location:?');
    }
}
?>


<div id="sia">
    <div class="JudulHal">EDIT DATA PELANGARAN PENGHUNI</div>
    <div class="content">
        <div class="itu">
            <div class="JudulHal"style="border-bottom: solid 1px #848562;"> Data Pelangaran Penghuni</div>
            <form action="" method="POST">
                <div class="form-grup">
                    <label for="">Nama Penghuni</label>
                    <select name="idpenghuni" class="panuah" disabled>
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
                    <input type="date" name="tglpengaduan" class="panuah" value="<?php echo $c['tglpengaduan'] ?>" >
                </div>
                <div class="form-grup">
                    <label for="">Nama Pengadu</label>
                    <input type="text" name="nmpengadu" class="panuah" value="<?php echo $c['nmpengadu'] ?>">
                </div>
                <div class="form-grup">
                    <label for="">Keterangan Pengadu</label>
                    <input type="text" name="ketpengadu" class="panuah" value="<?php echo $c['ketpengadu'] ?>">
                </div>
                <div class="form-grup">
                    <label for="">Nama Saksi</label>
                    <input type="text" name="nmsaksi" class="panuah" value="<?php echo $c['nmsaksi'] ?>"">
                </div>
                <div class="form-grup">
                    <label for="">Keterangan Terdakawa</label>
                    <input type="text" name="ketterdakwa" class="panuah" value="<?php echo $c['ketterdakwa'] ?>">
                </div>
                <div class="form-grup">
                    <label for="">Pelanggaran</label>
                    <input type="text" name="pelanggaran" class="panuah" value="<?php echo $c['pelanggaran'] ?>">
                </div>
                <div class="form-grup">
                    <label for="">Jenis Hukuman</label>
                    <input type="text" name="jnshukuman" class="panuah" value="<?php echo $c['jnshukuman'] ?>">
                </div>

                    <div class="form-grup">
                        <input type="submit" value="edit"  name="edit" class="itu">
                    </div>
                    <div class="form-grup">
                        <input type="reset" value="batal"  name="batal" class="itu">
                    </div>
            </form>


        </div>
    </div>
    </div>