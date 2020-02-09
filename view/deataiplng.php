<?php
$sql = mysqli_query($conn, "SELECT * FROM pelanggaran, penghuni WHERE pelanggaran.idpenghuni=penghuni.idpenghuni AND pelanggaran.idpelangr='$_GET[id]'");
$data = mysqli_fetch_array($sql);

?>

<div id="sia">
    <div class="JudulHal">DETAIL PELANGARAN</div>
    <div class="content">
        <div class="itu">
            <div class="JudulHal"style="border-bottom: solid 1px #848562;margin-bottom: 12px;">Data Diri Pelangar</div>
            <table style="padding-top: 8px;font-size: 15px;font-style: oblique">
                <tr>
                    <td>Nama Tahanan</td>
                    <td>:</td>
                    <td><?php echo $data['nmpenghuni'] ?></td>
                </tr>
                <tr>
                    <td>Tempat/ Tgl lahir</td>
                    <td>:</td>
                    <td><?php echo $data['tptlahir'] ?>/<?php $pl=TanggalIndo($data['tgllahir']); echo $pl ?></td>
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

        </div>
        <div class="itu">
            <div class="JudulHal"style="border-bottom: solid 1px #848562;margin-bottom: 12px;">Data Pelangaran</div>
            <?php
            $masapel = Lamapel("$_GET[id]");
            ?>
            <table style="padding-top: 8px;font-size: 15px;font-style: oblique">
                <tr>
                    <td>Tanggal Pengaduan</td>
                    <td>:</td>
                    <td><?php $pga=TanggalIndo($data['tglpengaduan']); echo $pga  ?></td>
                </tr>
                <tr>
                    <td>Nama Pengadu</td>
                    <td>:</td>
                    <td><?php echo $data['nmpengadu'] ?></td>
                </tr>
                <tr>
                    <td>Nama Saksi</td>
                    <td>:</td>
                    <td><?php echo $data['nmsaksi'] ?></td>
                </tr>
                <tr>
                    <td>Keterangan Terdakwa</td>
                    <td>:</td>
                    <td><?php echo $data['ketterdakwa'] ?></td>
                </tr>
                <tr>
                    <td>Pelangaran</td>
                    <td>:</td>
                    <td><?php echo $data['pelanggaran'] ?></td>
                </tr>
                <tr>
                    <td>Jenis Hukum</td>
                    <td>:</td>
                    <td><?php echo $data['jnshukuman'] ?></td>
                </tr>
                <tr>
                    <td>Tanggal Mulai Hukuman</td>
                    <td>:</td>
                    <td><?php $mul=TanggalIndo($data['tglmulai']); echo $mul  ?></td>
                </tr>
                <tr>
                    <td>Tanggal Habis Hukuman</td>
                    <td>:</td>
                    <td><?php $akhr=TanggalIndo($data['tglakhir']); echo $akhr ?></td>
                </tr>
                <tr>
                    <td>Lama Hukuman</td>
                    <td>:</td>
                    <td><?php echo $masapel['2'].' Hari '. $masapel['1'].' Bulan '.$masapel['0'].' Tahun' ?></td>
                </tr>
                <tr>
                    <td>Hukuman Dilewati</td>
                    <td>:</td>
                    <td><?php echo $masapel['5'].' Hari '. $masapel['4'].' Bulan '.$masapel['3'].' Tahun' ?></td>
                </tr>
                <tr>
                    <td>Sisa Hukuman</td>
                    <td>:</td>
                    <td><?php echo $masapel['8'].' Hari '. $masapel['7'].' Bulan '.$masapel['6'].' Tahun' ?></td>
                </tr>

        </div>
    </div>

</div>
