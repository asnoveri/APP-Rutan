<div class="JudulHal">LAPORAN BULANAN</div>
<div id="sia">

    <div class="content">
        <div class="itu">
            <div class="JudulHal"style="border-bottom: solid 1px #848562;margin-top: -20px;margin-bottom: 12px;">Cetak Laporan Tahanan Bebas</div>
            <form action="./Laporan/cetakthnbebas.php" target="_blank" method="post">
                <div class="form-group col-lg-3">
                    <select name="bln" id="" class="form-control" required>
                        <option value="">Bulan</option>
                        <?php
                        $i=12;
                        for($x=1;$x<=$i;$x++){
                            $bulan = array (1 =>   'Januari',
                                'Februari',
                                'Maret',
                                'April',
                                'Mei',
                                'Juni',
                                'Juli',
                                'Agustus',
                                'September',
                                'Oktober',
                                'November',
                                'Desember'
                            );
                            echo "<option value='$x'>$bulan[$x]</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group col-lg-3">
                    <select name="thn" id="" class="form-control" required>
                        <option value="">Tahun</option>
                        <?php
                        $i=date("Y");
                        for($x=2010;$x<=$i;$x++){
                            echo "<option value='$x'>$x</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group col-lg-3">
                    <input type="submit" name="cetak" class="btn btn-primary" value="CETAK">
                </div>
            </form>

    </div>

        <div class="itu">
            <div class="JudulHal"style="border-bottom: solid 1px #848562;margin-top: -20px;margin-bottom: 12px;">Cetak Lapoaran Tahanan Berdasarkan Jenis Tahanan</div>
            <form action="./Laporan/cetakjnsthn.php" target="_blank" method="post">
                <div class="form-group col-lg-3">
                    <select name="bln" id="" class="form-control" required>
                        <option value="">Bulan</option>
                        <?php
                        $i=12;
                        for($x=1;$x<=$i;$x++){
                            $bulan = array (1 =>   'Januari',
                                'Februari',
                                'Maret',
                                'April',
                                'Mei',
                                'Juni',
                                'Juli',
                                'Agustus',
                                'September',
                                'Oktober',
                                'November',
                                'Desember'
                            );
                            echo "<option value='$x'>$bulan[$x]</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group col-lg-3">
                    <select name="thn" id="" class="form-control" required>
                        <option value="">Tahun</option>
                        <?php
                        $i=date("Y");
                        for($x=2010;$x<=$i;$x++){
                            echo "<option value='$x'>$x</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group col-lg-3">
                    <select name="jnstahanan" id="" class="form-control" required>
                        <option value="">Pilih Tahanan</option>
                        <option value="A.I">A.I</option>
                        <option value="A.II">A.II</option>
                        <option value="A.III">A.III</option>
                        <option value="A.IV">A.IV</option>
                        <option value="A.V">A.V</option>
                    </select>
                </div>
                <div class="form-group col-lg-3">
                    <input type="submit" name="cetak" class="btn btn-primary" value="CETAK">
                </div>
            </form>

        </div>

</div>
</div>
<div class="sia">
    <div class="content">
    <div class="itu">
        <div class="JudulHal"style="border-bottom: solid 1px #848562;margin-top: -20px;margin-bottom: 12px;">Cetak Laporan Napi Bebas</div>
        <form action="./Laporan/cetaknpbebas.php" target="_blank" method="post">
            <div class="form-group col-lg-3">
                <select name="bln" id="" class="form-control" required>
                    <option value="">Bulan</option>
                    <?php
                    $i=12;
                    for($x=1;$x<=$i;$x++){
                        $bulan = array (1 =>   'Januari',
                            'Februari',
                            'Maret',
                            'April',
                            'Mei',
                            'Juni',
                            'Juli',
                            'Agustus',
                            'September',
                            'Oktober',
                            'November',
                            'Desember'
                        );
                        echo "<option value='$x'>$bulan[$x]</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="form-group col-lg-3">
                <select name="thn" id="" class="form-control" required>
                    <option value="">Tahun</option>
                    <?php
                    $i=date("Y");
                    for($x=2010;$x<=$i;$x++){
                        echo "<option value='$x'>$x</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="form-group col-lg-3">
                <input type="submit" name="cetak" class="btn btn-primary" value="CETAK">
            </div>
        </form>

    </div>
    <div class="itu">
        <div class="JudulHal"style="border-bottom: solid 1px #848562;margin-top: -20px;margin-bottom: 12px;">Cetak Laporan Narapidana Berdasarkan Jenis Narapidana</div>
        <form action="./Laporan/cetakjnsnp.php" target="_blank" method="post">
            <div class="form-group col-lg-3">
                <select name="bln" id="" class="form-control" required>
                    <option value="">Bulan</option>
                    <?php
                    $i=12;
                    for($x=1;$x<=$i;$x++){
                        $bulan = array (1 =>   'Januari',
                            'Februari',
                            'Maret',
                            'April',
                            'Mei',
                            'Juni',
                            'Juli',
                            'Agustus',
                            'September',
                            'Oktober',
                            'November',
                            'Desember'
                        );
                        echo "<option value='$x'>$bulan[$x]</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="form-group col-lg-3">
                <select name="thn" id="" class="form-control" required>
                    <option value="">Tahun</option>
                    <?php
                    $i=date("Y");
                    for($x=2010;$x<=$i;$x++){
                        echo "<option value='$x'>$x</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="form-group col-lg-3">
                <select name="jenisnapi" id="" class="form-control" required>
                    <option value="">Pilih Napi</option>
                    <option value="B1">B1</option>
                    <option value="B2a">B2a</option>
                    <option value="B2b">B2b</option>
                    <option value="B3">B3</option>
                </select>
            </div>
            <div class="form-group col-lg-3">
                <input type="submit" name="cetak" class="btn btn-primary" value="CETAK">
            </div>
        </form>

    </div>
</div>
<div id="sia">

    <div class="content">
        <div class="itu">
            <div class="JudulHal"style="border-bottom: solid 1px #848562;margin-top: -20px;margin-bottom: 12px;">Cetak Laporan Data penghuni</div>
            <form action="./Laporan/cetakpenghuni.php" target="_blank" method="post">
                <div class="form-group col-lg-3">
                    <select name="bln" id="" class="form-control" required>
                        <option value="">Bulan</option>
                        <?php
                        $i=12;
                        for($x=1;$x<=$i;$x++){
                            $bulan = array (1 =>   'Januari',
                                'Februari',
                                'Maret',
                                'April',
                                'Mei',
                                'Juni',
                                'Juli',
                                'Agustus',
                                'September',
                                'Oktober',
                                'November',
                                'Desember'
                            );
                            echo "<option value='$x'>$bulan[$x]</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group col-lg-3">
                    <select name="thn" id="" class="form-control" required>
                        <option value="">Tahun</option>
                        <?php
                        $i=date("Y");
                        for($x=2010;$x<=$i;$x++){
                            echo "<option value='$x'>$x</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group col-lg-3">
                    <input type="submit" name="cetak" class="btn btn-primary" value="CETAK">
                </div>
            </form>

        </div>



    </div>
</div>