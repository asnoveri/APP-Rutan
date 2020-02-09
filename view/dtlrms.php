<?php
$sql = mysqli_query($conn, "SELECT * FROM remisi,narapidana,penghuni WHERE remisi.idnapi=narapidana.idnapi AND narapidana.idpenghuni=penghuni.idpenghuni AND remisi.idnapi='$_GET[id]'");
$data = mysqli_fetch_array($sql);

?>

<div id="sia">
    <div class="JudulHal">DETAIL NARAPIDANA YANG MENDAPATKAN REMISI</div>
    <div class="content">
        <div class="itu">
            <div class="JudulHal"style="border-bottom: solid 1px #848562;margin-bottom: 12px;">Data Napi Yang Mendapatkan Remisi</div>
            <table style="padding-top: 8px;font-size: 15px;font-style: oblique">
                <tr>
                    <td>Nama Napi</td>
                    <td>:</td>
                    <td><?php echo $data['nmpenghuni'] ?></td>
                </tr>
                <tr>
                    <td>Jenisi Napi</td>
                    <td>:</td>
                    <td><?php echo $data['jenisnapi'] ?></td>
                </tr>

                <tr>
                    <td>Tempat/ Tgl lahir</td>
                    <td>:</td>
                    <td><?php echo $data['tptlahir'] ?>/<?php $aw=TanggalIndo($data['tgllahir']); echo$aw  ?></td>
                </tr>
                <tr>
                    <td>Pekerjaan</td>
                    <td>:</td>
                    <td><?php echo $data['pekerjaan'] ?></td>
                </tr>
                <tr>
                    <td>Pendidikan Terakhir</td>
                    <td>:</td>
                    <td><?php echo $data['pendidikan'] ?></td>
                </tr>
                <tr>
                    <td>Alamat Terakhir</td>
                    <td>:</td>
                    <td><?php echo $data['alamat'] ?></td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td><?php echo $data['agama'] ?></td>
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
                    <td>Jenis Hukum</td>
                    <td>:</td>
                    <td><?php echo $data['jenishukuman'] ?></td>
                </tr>
            </table>
            <div class="JudulHal"style="border-bottom: solid 1px #848562;margin-bottom: 12px;">Masa Hukuman</div>
            <?php
            $masahukuman = LamaMasaHukuman("$_GET[id]");
            ?>
            <table style="padding-top: 8px;font-size: 15px;font-style: oblique">
                <tr>
                    <td>Tanggal Masuk</td>
                    <td>:</td>
                    <td><?php $aq=TanggalIndo($data['tglmasuk']); echo$aq  ?></td>
                </tr>
                <tr>
                    <td>Tanggal Habis Hukuman</td>
                    <td>:</td>
                    <td><?php $aquo=TanggalIndo($data['tglpembebasan']); echo$aquo ?></td>
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

        <div class="JudulHal"style="border-bottom: solid 1px #848562;margin-bottom: 12px; margin-top: 0px;margin-top: 2px">Remisi </div>

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
                $aji=TanggalIndoAngko($dcrem['tglremisi']);
                echo "
                    <tr>
                        <td>$aji</td>
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
