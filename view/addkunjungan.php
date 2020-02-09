<?php
if(isset($_POST['simpan'])) {
    $nmpengunjung = mysqli_escape_string($conn, $_POST['nmpengunjung']);
    $barangbawaan = mysqli_escape_string($conn, $_POST['barangbawaan']);
    $tglkunjungan = mysqli_escape_string($conn, $_POST['tglkunjungan']);
    $tahanan = mysqli_escape_string($conn, $_POST['tahanan']);
    $narapidana = mysqli_escape_string($conn, $_POST['narapidana']);
    if(!empty($tahanan)) {
        $id = $tahanan;
    }elseif (!empty($narapidana)){
        $id=$narapidana;
    }
    $sql = mysqli_query($conn, "INSERT INTO kunjungan(nmpengunjung,barangbawaan,tglkunjungan,idpenghuni) VALUES('$nmpengunjung','$barangbawaan','$tglkunjungan','$id')");
    if ($sql) {
        header('location:?page=dp');
    }
}
?>


<div id="sia">
    <div class="JudulHal">Data Kunjungan</div>
    <div class="content">
        <div class="itu">
            <div class="JudulHal"style="border-bottom: solid 1px #848562;">Input Data Pengunjung</div>
            <form action="" method="POST">
                <div class="form-grup">
                    <label for="">Kunjungan Untuk Tahanan</label>
                    <select name="tahanan" class="panuah">
                        <option value="">Pilih Tahanan</option>
                        <?php
                        $sql=mysqli_query($conn,"SELECT * FROM tahanan, penghuni WHERE tahanan.idpenghuni=penghuni.idpenghuni AND tahanan.status=''");
                        while ($a=mysqli_fetch_assoc($sql)){
                            echo "<option value='$a[idpenghuni]'>$a[nmpenghuni]</option>";
                        }
                        ?>
                    </select>
                </div>

                <div class="form-grup">
                <label for="">Kunjungan Untuk Narapidana</label>
                <select name="narapidana" class="panuah">
                    <option value="">Pilih Narapidana</option>
                    <?php
                    $sql=mysqli_query($conn,"SELECT * FROM narapidana, penghuni WHERE narapidana.idpenghuni=penghuni.idpenghuni AND narapidana.status=''");
                    while ($b=mysqli_fetch_assoc($sql)){
                        echo "<option value='$b[idpenghuni]'>$b[nmpenghuni]</option>";
                    }
                    ?>
                </select>
                </div>

                <div class="form-grup">
                    <label for="">Nama Pengunjung</label>
                    <input type="text" name="nmpengunjung" class="panuah" placeholder="Nama Pengunjunng">
                </div>

                <div class="form-grup">
                    <label for="">Barang Bawaan</label>
                    <input type="text" name="barangbawaan" class="panuah" placeholder="Barang bawaan">
                </div>

                <div class="form-grup">
                    <label for="">Tanggal Kunjungan</label>
                    <input type="date" name="tglkunjungan" class="panuah"  placeholder="Tanggal Kunjungan">
                </div>

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