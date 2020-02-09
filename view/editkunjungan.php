<?php
    $s=mysqli_query($conn,"SELECT * FROM penghuni,kunjungan WHERE penghuni.idpenghuni=kunjungan.idpenghuni AND kunjungan.idkunjungan='$_GET[id]'");
    $i=mysqli_fetch_array($s);
    if(isset($_POST['edit'])){
        $nmpengunjung = mysqli_escape_string($conn, $_POST['nmpengunjung']);
        $barangbawaan = mysqli_escape_string($conn, $_POST['barangbawaan']);
        $tglkunjungan = mysqli_escape_string($conn, $_POST['tglkunjungan']);

        $sql=mysqli_query($conn,"UPDATE kunjungan SET nmpengunjung='$nmpengunjung',barangbawaan='$barangbawaan',tglkunjungan='$tglkunjungan' where idkunjungan='$i[idkunjungan]'");
        if ($_POST="edit"){
            header('location:?page=dp');
        }elseif ($_POST="edit1"){
            header('location:?');
        }
    }

    ?>


<div id="sia">
    <div class="JudulHal">Data Kunjungan</div>
    <div class="content">
        <div class="itu">
            <div class="JudulHal"style="border-bottom: solid 1px #848562;">Edit Data Pengunjung</div>
            <form action="" method="POST">
                <div class="form-grup">
                    <label for="">Kunjungan Untuk</label>
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
                    <label for="">Nama Pengunjung</label>
                    <input type="text" name="nmpengunjung" class="panuah" value="<?php echo $i['nmpengunjung']?>" >
                </div>

                <div class="form-grup">
                    <label for="">Barang Bawaan</label>
                    <input type="text" name="barangbawaan" class="panuah" value="<?php echo $i['barangbawaan']?>">
                </div>

                <div class="form-grup">
                    <label for="">Tanggal Kunjungan</label>
                    <input type="date" name="tglkunjungan" class="panuah" value="<?php echo $i['tglkunjungan']?>">
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