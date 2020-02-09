<?php
    $sql = mysqli_query($conn, "SELECT * FROM tahanan, penghuni WHERE tahanan.idpenghuni=penghuni.idpenghuni AND tahanan.idtahanan='$_GET[id]'");
    $data = mysqli_fetch_array($sql);

?>

<div id="sia">
    <div class="JudulHal">DETAIL DATA TAHANAN</div>
    <div class="content">
        <div class="itu">
            <div class="JudulHal"style="border-bottom: solid 1px #848562;margin-bottom: 12px;">Data Diri Tahanan</div>
         <table style="padding-top: 8px;font-size: 15px;font-style: oblique">
             <tr>
                 <td>Nama Tahanan</td>
                 <td>:</td>
                 <td><?php echo $data['nmpenghuni'] ?></td>
             </tr>
             <tr>
                 <td>Tempat/ Tgl lahir</td>
                 <td>:</td>
                 <td><?php echo $data['tptlahir'] ?>/<?php $lhr=TanggalIndo($data['tgllahir']); echo $lhr  ?></td>
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
            <div class="JudulHal"style="border-bottom: solid 1px #848562;margin-bottom: 12px; margin-top: 8px">Masa Penahanan</div>
            <?php
            $masatahanan = LamaMasatahahan("$_GET[id]");
            ?>
            <table style="padding-top: 8px;font-size: 15px ;font-style: oblique">
                <tr>
                    <td>Tangal Masuk</td>
                    <td>:</td>
                    <td><?php $tglmsk= TanggalIndo($data['tglmasuk']); echo$tglmsk ?></td>
                </tr>
                <tr>
                    <td>Tanggal Pembebasan</td>
                    <td>:</td>
                    <td><?php $pbbs =TanggalIndo($data['tglpembebasan']); echo $pbbs  ?></td>
                </tr>
                <tr>
                    <td>Tangal Pembebasan Setelah Perpanjangan</td>
                    <td>:</td>
                    <td><?php $tglprtpnjangan= TanggalIndo($data['tglprtpnjangan']); echo$tglprtpnjangan ?></td>
                </tr>
                <tr>
                    <td>Penambahan Masa Penahanan</td>
                    <td>:</td>
                    <td><?php echo $masatahanan['11'].' Hari '. $masatahanan['10'].' Bulan '.$masatahanan['9'].' Tahun' ?></td>
                </tr>
                <tr>
                    <td>Lama Penahanan</td>
                    <td>:</td>
                    <td><?php echo $masatahanan['2'].' Hari '. $masatahanan['1'].' Bulan '.$masatahanan['0'].' Tahun' ?></td>
                </tr>
                <tr>
                    <td>Lama Penahanan Telah Dilewati</td>
                    <td>:</td>
                    <td><?php echo $masatahanan['5'].' Hari '. $masatahanan['4'].' Bulan '.$masatahanan['3'].' Tahun' ?></td>
                </tr>
                <tr>
                    <td>Sisa Masa Penahan</td>
                    <td>:</td>
                    <td><?php echo $masatahanan['8'].' Hari '. $masatahanan['7'].' Bulan '.$masatahanan['6'].' Tahun' ?></td>

                </tr>
            </table>
        </div>
        <div class="itu">
            <div class="JudulHal"style="border-bottom: solid 1px #848562;margin-bottom: 12px;">Data Penahan</div>
            <table style="padding-top: 8px;font-size: 15px;font-style: oblique">
                <tr>
                    <td>Jenisi Tahanan</td>
                    <td>:</td>
                    <td><?php echo $data['jnstahanan'] ?></td></a>
                </tr>
                <tr>
                    <td>Instansi</td>
                    <td>:</td>
                    <td><?php echo $data['instansi'] ?></td>
                </tr>
                <tr>
                    <td>Tanggal Surat Penahanan</td>
                    <td>:</td>
                    <td><?php $srttahanan = TanggalIndo($data['tglsrtpenahanan']); echo $srttahanan ?></td>
                </tr>
                <tr>
                    <td>No Surat Penahanan</td>
                    <td>:</td>
                    <td><?php echo $data['nosrtpenahanan'] ?></td>
                </tr>
                <tr>
                    <td>Pasal</td>
                    <td>:</td>
                    <td><?php echo $data['pasal'] ?></td>
                </tr>

                <tr>
                    <td>No Surat Perpanjangan Penahanan</td>
                    <td>:</td>
                    <td><?php echo $data['nosrtprpnjpenahann'] ?><a href='?page=addpenambahan&id=<?php echo $_GET['id'] ?>'><img style="float: right;  margin-left:250px;" src="gambar/add-icon.png" alt="tambah" width="25" height="20"> </a> </td>
                </tr>
                <tr>
                    <td>Tanggal Surat Perpanjangan</td>
                    <td>:</td>
                    <td><?php $pan = TanggalIndo($data['tglsrprpnjpenahanan']); echo $pan  ?></td>
                </tr>
                <tr>
                    <td>No Surat Pengalihan</td>
                    <td>:</td>
                    <td><?php echo $data['nosrtpengalihan'] ?><a href='?page=tmbhpnglhnth&id=<?php echo $_GET['id'] ?>'><img style="float: right " src="gambar/add-icon.png" alt="tambah" width="25" height="20"> </a> </td>
                </tr>
                <tr>
                    <td>Tanggal Pengalihan</td>
                    <td>:</td>
                    <td><?php $pengl= TanggalIndo($data['tglpengalihan']); echo $pengl  ?></td>
                </tr>
                </tr>
                <tr>
                    <td>Dialihkan Menjadi</td>
                    <td>:</td>
                    <td><?php echo $data['dialihkanke'] ?></td>
                </tr>
                <tr>
                    <td>No Surat Pemindahan</td>
                    <td>:</td>
                    <td><?php echo $data['nosrtpemindahan'] ?><a href='?page=tmbhpemindahan&id=<?php echo $_GET['id'] ?>'><img style="float: right " src="gambar/add-icon.png" alt="tambah" width="25" height="20"> </a> </td>
                </tr>
                <tr>
                    <td>Tanggal Pemindahan</td>
                    <td>:</td>
                    <td><?php $pmdhn= TanggalIndo($data['tglpemindahan']); echo $pmdhn ?></td>
                </tr>
                <tr>
                    <td>No Surat Pelimpahan</td>
                    <td>:</td>
                    <td><?php echo $data['nopelimpahan'] ?><a href='?page=tmbhpelimpahan&id=<?php echo $_GET['id'] ?>'><img style="float: right " src="gambar/add-icon.png" alt="tambah" width="25" height="20"> </a> </td></a></td>
                </tr>
                <tr>
                    <td>Tanggal Surat Pelimpahan</td>
                    <td>:</td>
                    <td><?php $pelmph=TanggalIndo($data['tglsrtpelimpahan']); echo $pelmph ?></td>
                </tr>
                <tr>
                    <td>No Surat Putusan</td>
                    <td>:</td>
                    <td><?php echo $data['nosrtputusan'] ?><a href='?page=tmbhputusan&id=<?php echo $_GET['id'] ?>'><img style="float: right " src="gambar/add-icon.png" alt="tambah" width="25" height="20"> </a> </td>
                </tr>
                <tr>
                    <td>Tanggal Surat Putusan</td>
                    <td>:</td>
                    <td><?php $pts=TanggalIndo( $data['tglsrtputusan']); echo$pts  ?></td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>:</td>
                    <td><?php echo $data['status'] ?></td>
                </tr>
            </table>
        </div>
    </div>

</div>
