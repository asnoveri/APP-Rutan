<?php
$sql = mysqli_query($conn, "SELECT * FROM narapidana, penghuni WHERE narapidana.idpenghuni=penghuni.idpenghuni AND narapidana.idnapi='$_GET[id]'");
$data = mysqli_fetch_array($sql);

?>

<div id="sia">
    <div class="JudulHal">DETAIL DATA NAPI</div>
    <div class="content">
        <div class="itu">
            <div class="JudulHal"style="border-bottom: solid 1px #848562;margin-bottom: 12px;">Data Diri Napi</div>
            <table style="padding-top: 8px;font-size: 15px;font-style: oblique">
                <tr>
                    <td>Nama Napi</td>
                    <td>:</td>
                    <td><?php echo $data['nmpenghuni'] ?></td>
                </tr>
                <tr>
                    <td>Tempat/ Tgl lahir</td>
                    <td>:</td>
                    <td><?php echo $data['tptlahir'] ?>/<?php $tlhr =TanggalIndo($data['tgllahir']); echo $tlhr  ?></td>
                </tr>
                <tr>
                    <td>Pekerjaan</td>
                    <td>:</td>
                    <td><?php echo $data['pekerjaan'] ?></td>
                </tr>
                <tr>
                    <td>Pendidikan</td>
                    <td>:</td>
                    <td><?php echo $data['pendidikan'] ?></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><?php echo $data['alamat'] ?></td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td><?php echo $data['agama'] ?></td>
                </tr>
                <tr>
                    <td>Keterangan</td>
                    <td>:</td>
                    <td><?php echo $data['ket'] ?></td>
                </tr>
            </table>
            <div class="JudulHal"style="border-bottom: solid 1px #848562;margin-bottom: 12px; margin-top: 8px">Masa Hukuman</div>
                <?php
                $masahukuman = LamaMasaHukuman("$_GET[id]");
                ?>
            <table style="padding-top: 8px;font-size: 15px;font-style: oblique">
                <tr>
                    <td>Tanggal Masuk</td>
                    <td>:</td>
                    <td><?php $msk=TanggalIndo($data['tglmasuk']); echo $msk  ?></td>
                </tr>
                <tr>
                    <td>Tanggal Habis Hukuman</td>
                    <td>:</td>
                    <td><?php $hbs=TanggalIndo($data['tglpembebasan']); echo $hbs ?></td>
                </tr>

                <tr>
                    <td>Lama Hukuman</td>
                    <td>:</td>
                    <td><?php echo $masahukuman['2'].' Hari '. $masahukuman['1'].' Bulan '.$masahukuman['0'].' Tahun' ?></td>
                </tr>
                <tr>
                    <td>Lama Hukuman Telah Dilewati</td>
                    <td>:</td>
                    <td><?php echo $masahukuman['5'].' Hari '. $masahukuman['4'].' Bulan '.$masahukuman['3'].' Tahun' ?></td>
                </tr>
                <tr>
                    <td>Sisa Masa Hukuman Penahan</td>
                    <td>:</td>
                    <td><?php echo $masahukuman['8'].' Hari '. $masahukuman['7'].' Bulan '.$masahukuman['6'].' Tahun' ?></td>

                </tr>
            </table>
        </div>

        </div>
        <div class="itu">
            <div class="JudulHal"style="border-bottom: solid 1px #848562;margin-bottom: 12px;">Data Narapidana</div>
            <table style="padding-top: 8px;font-size: 15px;font-style: oblique">
                <tr>
                    <td>Jenisi Narapidanan</td>
                    <td>:</td>
                    <td><?php echo $data['jenisnapi'] ?></td>
                </tr>

                <tr>
                    <td>No Surat Putusan</td>
                    <td>:</td>
                    <td><?php echo $data['nosrtputusan'] ?></td>
                </tr>
                <tr>
                    <td>Pasal</td>
                    <td>:</td>
                    <td><?php echo $data['pasal'] ?></td>
                </tr>
                <tr>
                    <td>Asal Penyidik</td>
                    <td>:</td>
                    <td><?php echo $data['asalpenyidik'] ?></td>
                </tr>
                <tr>
                    <td>Jenis Hukum</td>
                    <td>:</td>
                    <td><?php echo $data['jenishukuman'] ?></td>
                </tr>

                <tr>
                    <td>Status</td>
                    <td>:</td>
                    <td><?php echo $data['status'] ?><a href='?page=tmbhsatatus&id=<?php echo $_GET['id'] ?>'><img style="float: right " src="gambar/add-icon.png" alt="tambah" width="25" height="20"> </a></td>
                </tr>
            </table>
            <div class="JudulHal"style="border-bottom: solid 1px #848562;margin-bottom: 12px; margin-top: 24px">Remisi</div>

            <table class="table table-bordered" style="margin-top: 5px;font-style: oblique">
                <tr>
                    <td>Tanggal Remisi</td>
                    <td>Isi Remisi</td>
                    <td>Jenis Remisi</td>
                    <td>Jumlah Hari</td>
                </tr>
                <?php
                $crem = mysqli_query($conn, "select * from remisi, narapidana WHERE narapidana.idnapi=remisi.idnapi and remisi.idnapi='$data[idnapi]'");
                while ($dcrem = mysqli_fetch_array($crem)){
                    $a=TanggalIndoAngko($dcrem['tglremisi']);
                    echo "
                    <tr>
                        <td>$a</td>
                        <td>$dcrem[isiremisi]</td>
                        <td>$dcrem[jnsremisi]</td>
                        <td>$dcrem[jmlremisi]</td>
                    </tr>
                    ";
                }
                ?>
            </table>
        </div>
    </div>

</div>
