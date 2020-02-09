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
    <title>Laporan Perjenis Tahanan </title>
</head>
<body>
<div class="container">
    <div id="headerr">
        <div id="gbr"><img src="../gambar/lambang.png" alt="" style="width: 150px; float: left;" </div>
        <div id="tex" style="width: 700px; float: left">
            <h1 style="text-align: center">LAPORAN PERJENIS TAHANAN</h1>

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



            <p>Jenis Tahanan : <?php  echo $_POST['jnstahanan'] ?>
                <?php if ($_POST['jnstahanan']=='A.I'){
                    echo 'Tahanan Kepolisian';
                }elseif ($_POST['jnstahanan']=='A.II'){
                    echo'Tahanan Kejaksaan';
                }elseif ($_POST['jnstahanan']=='A.III') {
                    echo 'Tahanan Pengadilan Negeri';
                }elseif ($_POST['jnstahanan']=='A.IV') {
                    echo 'Tahanan Pengadilan Tinggi';
                }elseif ($_POST['jnstahanan']=='A.V'){
                    echo 'Tahanan Mahkamah Agung';
                }?>
            </p>
        </div>
    </div>
    <div class="sia">

        <table class="list" border="1">

            <tr>
                <td>No</td>
                <td>Nama</td>
                <td>Instansi</td>
                <td>Tanggal Lahir</td>
                <td>Alamat</td>
                <td>Tanggal Masuk</td>
                <td>Tanggal Surat Penahan</td>
                <td>Pasal</td>
            </tr>
            <?php
            $fzeropadded = sprintf("%02d", $_POST['bln']);
            $bln = $_POST['thn'].'-'.$fzeropadded;
            $jnstahanan= $_POST['jnstahanan'];
            $no=1;
            $sql =mysqli_query($conn,"SELECT * FROM penghuni, tahanan WHERE penghuni.idpenghuni=tahanan.idpenghuni AND tahanan.jnstahanan='$jnstahanan' and  substr(tglmasuk,1,7)='$bln' ORDER by tglmasuk ASC ");
            while ($as =mysqli_fetch_array($sql)){
                $aw=TanggalIndoAngko($as['tgllahir']);
                $aw1=TanggalIndoAngko($as['tglmasuk']);
                $aw2=TanggalIndoAngko($as['tglsrtpenahanan']);
                echo "
                    <tr>
                    <td>$no</td>
                    <td>$as[nmpenghuni]</td>
                    <td>$as[instansi]</td>
                    <td>$aw</td>
                    <td>$as[alamat]</td>
                    <td>$aw1</td>
                    <td>$aw2</td>
                    <td >$as[pasal]</td>
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
            <td> </td>
        </tr>
        <tr>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
        </tr>
        <tr>
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
