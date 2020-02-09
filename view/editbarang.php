<?php
$az=mysqli_query($conn,"SELECT * FROM penghuni,barangpenghuni WHERE penghuni.idpenghuni=barangpenghuni.idpenghuni AND barangpenghuni.idsimpan='$_GET[id]'");
$b=mysqli_fetch_array($az);

if (isset($_POST['edit'])){
    $tglmaskbarang      = mysqli_escape_string($conn, $_POST['tglmaskbarang']);
    $nmbarang           = mysqli_escape_string($conn, $_POST['nmbarang']);
    $jumlah             = mysqli_escape_string($conn, $_POST['jumlah']);
    $tglsrtditerima     = mysqli_escape_string($conn, $_POST['tglsrtditerima']);


    $sql=mysqli_query($conn,"UPDATE barangpenghuni set tglmaskbarang='$tglmaskbarang',nmbarang='$nmbarang',jumlah='$jumlah',tglsrtditerima='$tglsrtditerima' WHERE idsimpan='$b[idsimpan]'");
    if ($_POST="edit"){
        header('location:?page=bb');
    }elseif ($_POST="edit1"){
        header('location:?');
    }
}
?>


<div id="sia">
    <div class="JudulHal">EDIT DATA BARANG BAWAAN PENGHUNI</div>
    <div class="content">
        <div class="itu">
            <div class="JudulHal"style="border-bottom: solid 1px #848562;"> Data Barang Bawaan Penghuni</div>
            <form action="" method="POST">
                <div class="form-grup">
                    <label for="">Nama Penghuni</label>
                    <select name="idpenghuni" class="panuah" >
                        <?php
                            echo "<option value='$b[idpenghuni]'>$b[nmpenghuni]</option>";

                        ?>
                    </select>
                </div>
                <div class="form-grup">
                    <label for="">Nama Barang</label>
                    <input type="text" name="nmbarang" class="panuah" value="<?php echo $b['nmbarang'] ?>">
                </div>

                <div class="form-grup">
                    <label for="">TanggaL Masuk Barang</label>
                    <input type="date" name="tglmaskbarang" class="panuah" value="<?php echo $b['tglmaskbarang'] ?>">
                </div>

                <div class="form-grup">
                    <label for="">Tanggal Surat Tanda Terima</label>
                    <input type="date" name="tglsrtditerima" class="panuah"  value="<?php echo $b['tglsrtditerima']?>">
                </div>
                <div class="form-grup">
                    <label for="">Jumlah</label>
                    <input type="text" name="jumlah" class="panuah"  value="<?php echo $b['jumlah'] ?>">
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