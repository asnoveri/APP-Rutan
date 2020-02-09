<?php
if (isset($_POST['simpan'])) {
    $tglmaskbarang      = mysqli_escape_string($conn, $_POST['tglmaskbarang']);
    $nmbarang           = mysqli_escape_string($conn, $_POST['nmbarang']);
    $jumlah             = mysqli_escape_string($conn, $_POST['jumlah']);
    $tglsrtditerima     = mysqli_escape_string($conn, $_POST['tglsrtditerima']);
    $tahanan         = mysqli_escape_string($conn, $_POST['tahanan']);
    $narapidana         = mysqli_escape_string($conn, $_POST['narapidana']);
    if(!empty($tahanan)){
        $id=$tahanan;
    }elseif(!empty($narapidana)){
        $id=$narapidana;
    }
    $sql=mysqli_query($conn,"INSERT INTO barangpenghuni(tglmaskbarang,nmbarang,jumlah,tglsrtditerima,idpenghuni) VALUES('$tglmaskbarang','$nmbarang','$jumlah','$tglsrtditerima','$id')");
    if($sql){
        header('location:?page=bb');
    }
}
?>

<div id="sia">
    <div class="JudulHal">DATA BARANG BAWAAN PENGHUNI</div>
    <div class="content">
        <div class="itu">
            <div class="JudulHal"style="border-bottom: solid 1px #848562;">Input Data Barang Bawaan Penghuni</div>
            <form action="" method="POST">
                <div class="form-grup">
                    <label for="">Nama Tahanan</label>
                    <select name="tahanan" class="panuah">
                        <option value="">Pilih Tahanan</option>
                        <?php
                        $sql=mysqli_query($conn,"SELECT * FROM tahanan, penghuni WHERE tahanan.idpenghuni=penghuni.idpenghuni AND tahanan.status=''");
                        while ($a=mysqli_fetch_assoc($sql)){
                            echo
                            "<option value='$a[idpenghuni]'>$a[nmpenghuni]</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-grup">
                    <label for="">Nama Narapidana</label>
                    <select name="narapidana" class="panuah">
                        <option value="">Pilih Narapidana</option>
                        <?php
                        $sql=mysqli_query($conn,"SELECT * FROM narapidana, penghuni WHERE narapidana.idpenghuni=penghuni.idpenghuni AND narapidana.status=''");
                        while ($b=mysqli_fetch_assoc($sql)){
                            echo "  <option value='$b[idpenghuni]'>$b[nmpenghuni]</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-grup">
                    <label for="">Nama Barang</label>
                    <input type="text" name="nmbarang" class="panuah" placeholder="Nama Barang">
                </div>

                <div class="form-grup">
                    <label for="">TanggaL Masuk Barang</label>
                    <input type="date" name="tglmaskbarang" class="panuah" placeholder="TanggaL Masuak Baran">
                </div>

                <div class="form-grup">
                    <label for="">Tanggal Surat Tanda Terima</label>
                    <input type="date" name="tglsrtditerima" class="panuah"  placeholder="Tanggal Surat Tanda Terima">
                </div>
                <div class="form-grup">
                    <label for="">Jumlah</label>
                    <input type="text" name="jumlah" class="panuah"  placeholder="Jumlah">
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