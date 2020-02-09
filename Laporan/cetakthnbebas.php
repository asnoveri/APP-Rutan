<?php
include "../config/conn.php";
include "../config/FuncMasaTahanan.php";
?>

<html>
<head>
    <link rel="stylesheet" href="staylelaporan.css">
    <script>
        window.print();
    </script>
    <title>Laporan Tahanan Bebas </title>
</head>
<body>
<div class="container">
    <div id="headerr">
        <div id="gbr"><img src="../gambar/lambang.png" alt="" style="width: 150px; float: left;" </div>
        <div id="tex" style="width: 700px; float: left">
            <h1 style="text-align: center">LAPORAN TAHANAN BEBAS</h1>

            <?php
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
            $bl = $bulan[$_POST['bln']];
            ?>
            <h2  style="text-align: center">Periode : <?php echo $bl.' '.$_POST['thn'] ?></h2>
        </div>
        <div id="tex" style="width: 2200px; float: left">
            <h5 style="text-align: left">KEMENTRIAN HUKUM DAN HAM REPUBLIK INDONESIA</h5>
            <h5 style="text-align: left">KANTOR WILAYAH SUMATERA BARAT</h5>
            <h5 style="text-align: left">RUMAH TAHANAN KELAS II B BATUSANGKAR</h5>
            <h5 style="text-align: left">Jalam Hamka No. 24 Batusangkar Telp.(0752) 71032.Fax (0752) 71027</h5>
            <h5 style="text-align: left">e-mail : rutan.batusangkar@yahoo.co.id</h5>
        </div>
        </div>
        <div class="sia">
            <table class="list" border="1">

                <tr>
                    <td>No</td>
                    <td>Nama</td>
                    <td>Jenis Kelamin</td>
                    <td>Perkara</td>
                    <td>Tanggal Bebas</td>
                    <td>Tingkat Pemerikasaan</td>
                    <td>Tanggal Penahanan</td>
                    <td>Keterangan</td>
                </tr>
                <?php
                $fzeropadded = sprintf("%02d", $_POST['bln']);
                $bln = $_POST['thn'].'-'.$fzeropadded;
                $no=1;
                $sql =mysqli_query($conn,"SELECT * FROM penghuni, tahanan WHERE penghuni.idpenghuni=tahanan.idpenghuni AND tahanan.status='Bebas' and  substr(tglkeluar,1,7)='$bln' ORDER by tglkeluar ASC ");
                while ($as =mysqli_fetch_array($sql)){
                    $aq=TanggalIndoAngko($as['tglkeluar']);
                    $aq1=TanggalIndoAngko($as['tglsrtpenahanan']);
                    echo "
                    <tr>
                    <td>$no</td>
                    <td>$as[nmpenghuni]</td>
                    <td>$as[jk]</td>
                    <td>$as[pasal]</td>
                    <td>$aq</td>
                    <td>$as[instansi]</td>
                    <td>$aq1</td>
                    <td >$as[status]</td>
                    </tr>
                    ";
                    $no++;
                }

                ?>


            </table>
        </div>
    <table style="width: 30%; float: right">
    <tr>
        <td>Batusangkar, <?php echo date("d-m-Y") ?></td>

    </tr>
    <tr>
        <td style="float: left">Kepala Lapas</td>
    </tr>
    <tr>
        <td> </td>
    </tr><tr>
        <td> </td>
    </tr>
        <tr>
            <td> </td>
        </tr><tr>
            <td> </td>
        </tr>
    <tr>
        <td style="border-bottom: solid black 1px">WIWID FERYANTO RAHADIAN Amd.IP,S.H</td>
    </tr>
    <tr>
        <td>NIP. 19740213 199703 1 001</td>
    </tr>
    </table>






</div>


</body>

</html>
