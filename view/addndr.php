

<?php


if (isset($_POST['simpan'])) {

    $tglremisi = mysqli_escape_string($conn, $_POST['tglremisi']);
    $isiremisi = mysqli_escape_string($conn, $_POST['isiremisi']);
    $jnsremisi = mysqli_escape_string($conn, $_POST['jnsremisi']);
    $jmlremisi = mysqli_escape_string($conn, $_POST['jmlremisi']);
    $idnapi    = mysqli_escape_string($conn, $_POST['idnapi']);

    $sql=mysqli_query($conn,"INSERT INTO remisi(tglremisi,isiremisi,jnsremisi,jmlremisi,idnapi) VALUES ('$tglremisi','$isiremisi','$jnsremisi','$jmlremisi','$idnapi')");
    if ($_POST="simpan1"){
        header('location:?page=dr');
    }elseif ($_POST="simpan"){
        header('location:?');
    }
}

?>


<div id="sia">
    <div class="JudulHal">INPUT DATA REMISI</div>
    <div class="content">
        <div class="itu">
            <div class="JudulHal"style="border-bottom: solid 1px #848562;">Remisi</div>
            <form action="" method="POST">

                <div class="form-grup">
                   <label for="">Nama Narapidanan</label>
                    <select name="idnapi" class="panuah">
                        <?php
                        $sql=mysqli_query($conn,"SELECT * FROM narapidana, penghuni WHERE narapidana.idpenghuni=penghuni.idpenghuni");
                        while ($a=mysqli_fetch_assoc($sql)) {
                            if (isset($a['status']) && $a['status'] == 'Bebas') {
                                echo "";
                            } else {

                                echo "<option value='$a[idnapi]'>$a[nmpenghuni]</option>";
                            }
                        }
                        ?>
                    </select>
                </div>
                <div class="form-grup">
                <label for="">TanggaL Pemberian Remsi</label>
                <input type="date" name="tglremisi" class="panuah" placeholder="TanggaL Pemberian Remsi">
                </div>
                <div class="form-grup">
                    <label for="">Jenis Rimisi</label>
                    <select name="jnsremisi" class="panuah"><option value="">Pilih Jenis Remisi</option>
                        <option value="Umum">Umum</option>
                        <option value="Kusus">Kusus</option>
                    </select>
                </div>
                <div class="form-grup">
                    <label for="">Isi Remisi</label>
                    <input type="text" name="isiremisi" class="panuah"  placeholder="Isi Remisi">
                </div>
                <div class="form-grup">
                    <label for="">Jumlah Remisi</label>
                    <input  type="text" name="jmlremisi" class="panuah"  placeholder="Jumlah Remisi">
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