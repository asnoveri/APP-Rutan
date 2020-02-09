<?php
include "../config/conn.php";
include "../config/FuncMasaTahanan.php";
include "../config/FuncMasaHukuman.php";
?>

<html>
<head>
    <link rel="stylesheet" href="staylelaporan.css">

        <script>
        window.print();

    </script>
    <title>Laporan Penghuni </title>
</head>
<body>
<div class="container">
    <div id="headerr">
        <div id="gbr"><img src="../gambar/lambang.png" alt="" style="width: 150px; float: left;" </div>
        <div id="tex" style="width: 700px; float: left">
            <h1 style="text-align: center">LAPORAN PENGHUNI</h1>

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
                <th rowspan="2" width="2">NO</th>
                <th rowspan="2" style="text-align: center">Status</th>
                <th colspan="2"style="text-align: center">Jumlah </th>
                <th rowspan="2" style="text-align: center" width="10%">Jumlah Seluruhnya</th>
                <th rowspan="2" style="text-align: center">Keterangan</th>
            </tr>
            <tr>
                <td style="text-align: center" width="5%">P</td>
                <td style="text-align: center" width="5%">W</td>
            </tr>

            <tr>
                <td colspan='6'>A. TAHANAN </td>

            </tr>

            <?php
            $jmlAI = JmlTahanan("A.I");
            ?>
            <tr>
                <td>1</td>
                <td>A.I</td>
                <td style="text-align: right"><?php echo $jmlAI[1] ?></td>
                <td style="text-align: right"><?php echo $jmlAI[0] ?></td>
                <td style="text-align: right"><?php echo $jmlAI[2] ?></td>
                <td></td>
            </tr>
            <?php
            $jmlAII = JmlTahanan("A.II");
            ?>
            <tr>
                <td>2</td>
                <td>A.II</td>
                <td style="text-align: right"><?php echo $jmlAII[1] ?></td>
                <td style="text-align: right"><?php echo $jmlAII[0] ?></td>
                <td style="text-align: right"><?php echo $jmlAII[2] ?></td>
                <td></td>
            </tr>
            <?php
            $jmlAIII = JmlTahanan("A.III");
            ?>
            <tr>
                    <td>3</td>
                    <td>A.III</td>
                <td style="text-align: right"><?php echo $jmlAIII[1] ?></td>
                <td style="text-align: right"><?php echo $jmlAIII[0] ?></td>
                <td style="text-align: right"><?php echo $jmlAIII[2] ?></td>
                <td></td>
            </tr>
            <tr>
                <?php
                $jmlAIV = JmlTahanan("A.IV");
                ?>
                    <td>4</td>
                    <td>A.IV</td>
               <td style="text-align: right"><?php echo $jmlAIV[1] ?></td>
                <td style="text-align: right"><?php echo $jmlAIV[0] ?></td>
                <td style="text-align: right"><?php echo $jmlAIV[2] ?></td>
                <td></td>
            </tr>
            <tr>
                <?php
                $jmlAV = JmlTahanan("A.V");
                ?>
                    <td>5</td>
                    <td>A.V</td>
                <td style="text-align: right"><?php echo $jmlAV[1] ?></td>
                <td style="text-align: right"><?php echo $jmlAV[0] ?></td>
                <td style="text-align: right"><?php echo $jmlAV[2] ?></td>
                <td ></td>

            </tr>
            <?php
            $TOTAL = $jmlAI[1]+$jmlAII[1]+$jmlAIII[1]+$jmlAIV[1]+$jmlAV[1]
            ?>
            <?php
            $TOTAL1 = $jmlAI[0]+$jmlAII[0]+$jmlAIII[0]+$jmlAIV[0]+$jmlAV[0]
            ?>
            <?php
            $TOTAL2 = $jmlAI[2]+$jmlAII[2]+$jmlAIII[2]+$jmlAIV[2]+$jmlAV[2]
            ?>
            <tr>
                    <td colspan="2">JUMLAH</td>
                    <td style="text-align: right"><?php echo $TOTAL ?></td>
                    <td style="text-align: right"><?php echo $TOTAL1 ?></td>
                    <td style="text-align: right"><?php echo $TOTAL2 ?></td>
                    <td></td>
            </tr>
            <tr>
                <td colspan='6'>B. NARAPIDANA </td>

            </tr>
            <tr>
                <?php
                $jmlB1 = JmlNapi("B1");
                ?>
                    <td>6</td>
                    <td>B.I</td>
                <td style="text-align: right"><?php echo $jmlB1[1] ?></td>
                <td style="text-align: right"><?php echo $jmlB1[0] ?></td>
                <td style="text-align: right"><?php echo $jmlB1[2] ?></td>
                <td></td>
            </tr>
            <tr>
                <?php
                $jmlB2a = JmlNapi("B2a");
                ?>
                    <td>7</td>
                    <td>B.IIa</td>
                <td style="text-align: right"><?php echo $jmlB2a[1] ?></td>
                <td style="text-align: right"><?php echo $jmlB2a[0] ?></td>
                <td style="text-align: right"><?php echo $jmlB2a[2] ?></td>
                <td></td>
            </tr>
            <tr>
                <?php
                $jmlB2b = JmlNapi("B2b");
                ?>
                    <td>8</td>
                    <td>B.IIb</td>
                <td style="text-align: right"><?php echo $jmlB2b[1] ?></td>
                <td style="text-align: right"><?php echo $jmlB2b[0] ?></td>
                <td style="text-align: right"><?php echo $jmlB2b[2] ?></td>
                <td></td>
            </tr>
            <tr>
                <?php
                $jmlB3 = JmlNapi("B3");
                ?>
                    <td>9</td>
                    <td>B.III</td>
                <td style="text-align: right"><?php echo $jmlB3[1] ?></td>
                <td style="text-align: right"><?php echo $jmlB3[0] ?></td>
                <td style="text-align: right"><?php echo $jmlB3[2] ?></td>
                <td></td>
            </tr>
            <?php
            $TOTAL3 = $jmlB1[1]+$jmlB2a[1]+$jmlB2b[1]+$jmlB3[1]
            ?>
            <?php
            $TOTAL4 = $jmlB1[0]+$jmlB2a[0]+$jmlB2b[0]+$jmlB3[0]
            ?>
            <?php
            $TOTAL5 = $jmlB1[2]+$jmlB2a[2]+$jmlB2b[2]+$jmlB3[2]
            ?>
            <tr>
                <td colspan="2">JUMLAH</td>
                <td style="text-align: right"><?php echo $TOTAL3 ?></td>
                <td style="text-align: right"><?php echo $TOTAL4 ?></td>
                <td style="text-align: right"><?php echo $TOTAL5 ?></td>
                <td></td>
            </tr>
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
