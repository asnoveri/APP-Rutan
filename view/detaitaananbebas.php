<?php
$sql = mysqli_query($conn, "SELECT * FROM tahanan, penghuni WHERE tahanan.idpenghuni=penghuni.idpenghuni AND tahanan.idtahanan='$_GET[id]'");
$data = mysqli_fetch_array($sql);

?>

<div id="sia">
    <div class="JudulHal">DETAIL TAHANAN BEBAS</div>
    <div class="content">
        <div class="itu">
            <div class="JudulHal"style="border-bottom: solid 1px #848562;margin-bottom: 12px;">Data Tahanan Yang Sudah Bebas</div>
            <table style="padding-top: 8px;font-size: 16px;font-style: oblique">
                <tr>
                    <td>Nama Tahanan</td>
                    <td>:</td>
                    <td><?php echo $data['nmpenghuni'] ?></td>
                </tr>
                <tr>
                    <td>Jenisi Tahanan</td>
                    <td>:</td>
                    <td><?php echo $data['jnstahanan'] ?></td></a>
                </tr>
                <tr>
                    <td>Tempat/ Tgl lahir</td>
                    <td>:</td>
                    <td><?php echo $data['tptlahir'] ?>/<?php $aw=TanggalIndo($data['tgllahir']); echo $aw ?></td>
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
                $masatahanan = LamaMasatahahan("$_GET[id]");
                ?>
                <tr>
                    <td>No Surat Penahanan</td>
                    <td>:</td>
                    <td><?php echo $data['nosrtpenahanan'] ?></td>
                </tr>
                <tr>
                    <td>Tangal Mulai Penahanan</td>
                    <td>:</td>
                    <td><?php $variable = TanggalIndo($data['tglmasuk']); echo $variable ?></td>
                </tr>
                <tr>
                    <td>Pasal</td>
                    <td>:</td>
                    <td><?php echo $data['pasal'] ?></td>
                </tr>
                <tr>
                    <td>Lama Penahanan</td>
                    <td>:</td>
                    <td><?php echo $masatahanan['2'].' Hari '. $masatahanan['1'].' Bulan '.$masatahanan['0'].' Tahun' ?></td>
                </tr>
                <tr>
                    <td>Tanggal Pembebasan</td>
                    <td>:</td>
                    <td><?php $aq=TanggalIndo($data['tglkeluar']); echo $aq  ?></td>
                </tr>




                <tr>
                    <td>No Surat Putusan</td>
                    <td>:</td>
                    <td><?php echo $data['nosrtputusan'] ?></td>
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
