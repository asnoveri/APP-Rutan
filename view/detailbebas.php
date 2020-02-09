<?php
$sql = mysqli_query($conn, "SELECT * FROM narapidana, penghuni WHERE narapidana.idpenghuni=penghuni.idpenghuni AND narapidana.idnapi='$_GET[id]'");
$data = mysqli_fetch_array($sql);

?>

<div id="sia">
    <div class="JudulHal">DETAIL NARAPIDANA BEBAS</div>
    <div class="content">
        <div class="itu">
            <div class="JudulHal"style="border-bottom: solid 1px #848562;margin-bottom: 12px;">Data Napi Yang Sudah Bebas</div>
            <table style="padding-top: 8px;font-size: 15px;font-style: oblique">
                <tr>
                    <td>Nama Napi</td>
                    <td>:</td>
                    <td><?php echo $data['nmpenghuni'] ?></td>
                </tr>
                <tr>
                    <td>Jenisi Narapidanan</td>
                    <td>:</td>
                    <td><?php echo $data['jenisnapi'] ?></td>
                </tr>
                <tr>
                    <td>Tempat/ Tgl lahir</td>
                    <td>:</td>
                    <td><?php echo $data['tptlahir'] ?>/<?php echo $data['tgllahir'] ?></td>
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
                <?php
                $masahukuman = LamaMasaHukuman("$_GET[id]");
                ?>

                <tr>
                    <td>No Surat Putusan</td>
                    <td>:</td>
                    <td><?php echo $data['nosrtputusan'] ?></td>
                </tr>
                <tr>
                    <td>Tanggal Mulai Hukuman</td>
                    <td>:</td>
                    <td><?php echo $data['tglmasuk'] ?></td>
                </tr>
                <tr>
                    <td>Jenis Hukum</td>
                    <td>:</td>
                    <td><?php echo $data['jenishukuman'] ?></td>
                </tr>
                <tr>
                    <td>Pasal</td>
                    <td>:</td>
                    <td><?php echo $data['pasal'] ?></td>
                </tr>
                <tr>
                    <td>Lama Hukuman</td>
                    <td>:</td>
                    <td><?php echo $masahukuman['2'].' Hari '. $masahukuman['1'].' Bulan '.$masahukuman['0'].' Tahun' ?></td>
                </tr>

                <tr>
                    <td>Tanggal Pembebasan</td>
                    <td>:</td>
                    <td><?php echo $data['tglhbshukuman']?></td>
                </tr>
            </table>
    </div>
        <div class="itu">

            <table style="padding-top: 8px;font-size: 25px;font-style: oblique; border: solid 1px #848562; margin-top: 120px">
                <tr>
                    <td>Status</td>
                    <td>:</td>
                    <td><?php echo $data['status'] ?></td>
                </tr>
            </table>
        </div>


    </div>
</div>


