<div class="JudulHal">DASHBORD</div>
<div id="sia">
    <div class="content">

        <div class="itu">
            <div class="JudulHal"style="border-bottom: solid 1px #848562;margin-top: -20px;margin-bottom: 12px">Tingkat Pelangaran</div>
            <canvas id="canvas" height="400" width="1130" style="background-color: "></canvas>
            <script>
                var barChartData = {
                    labels : [<?php

                        $th = date("Y");
                        for ($i=1;$i<=12;$i++){
                            $dd = sprintf("%02d", $i);
                            echo '\''.$th.'-'.$dd.'\',';
                        }
                        ?>],
                    datasets : [
                        {
                            fillColor : "rgba(9, 35, 78, 0.91)",
                            strokeColor : "rgba(9, 35, 78, 0.91)",
                            data : [<?php

                                $th = date("Y");
                                for ($i=1;$i<=12;$i++){
                                    $dd = sprintf("%02d", $i);
                                    $d = $th.'-'.$dd;
                                    $a=mysqli_query($conn,"SELECT count(idpelangr) as jml FROM pelanggaran WHERE substr(tglpengaduan,1,7)='$d'");
                                    $b=mysqli_fetch_array($a);
                                    echo $b['jml'].',';
                                }
                                ?>],
                        },

                    ]

                }

                var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Bar(barChartData);
            </script>

        </div>
            </div>
        </div>


<div id="sia">
    <div class="content">

        <div class="itu">
            <div class="JudulHal"style="border-bottom: solid 1px #848562;margin-top: -20px;margin-bottom: 12px">Penghuni</div>
            <canvas id="line" height="400" width="500"></canvas>
            <div id="os-Win-lbl">Tahanan <span></span></div>
            <div id="os-Mac-lbl">Narapidan <span></span></div>
            <script>

                var barChartData = {
                    labels : [<?php

                        $th = date("Y");
                        for ($i=1;$i<=12;$i++){
                            $dd = sprintf("%02d", $i);
                            echo '\''.$th.'-'.$dd.'\',';
                        }
                        ?>],
                    datasets : [
                        {
                            fillColor : "rgba(9, 35, 78, 0.91)",
                            strokeColor : "rgb(255, 137, 167)",
                            pointColor : "rgba(220,220,220,1)",
                            pointStrokeColor : "#fff",
                            data : [<?php

                                $th = date("Y");
                                for ($i=1;$i<=12;$i++){
                                    $dd = sprintf("%02d", $i);
                                    $d = $th.'-'.$dd;
                                    $a=mysqli_query($conn,"SELECT count(idpenghuni) as jml FROM narapidana WHERE narapidana.status='' AND substr(tglmasuk,1,7)='$d'");
                                    $b=mysqli_fetch_array($a);
                                    echo $b['jml'].',';
                                }
                                ?>],
                        },
                        {
                            fillColor : "rgba(255, 137, 167, 0.78)",
                            strokeColor : "rgba(9, 35, 78, 0.91)",
                            pointColor : "rgba(151,187,205,1)",
                            pointStrokeColor : "#fff",
                            data : [<?php

                                $th = date("Y");
                                for ($i = 1; $i <= 12; $i++) {
                                    $dd = sprintf("%02d", $i);
                                    $d = $th . '-' . $dd;
                                    $a = mysqli_query($conn, "SELECT count(idpenghuni) as jml FROM tahanan WHERE tahanan.status='' AND substr(tglmasuk,1,7)='$d'");
                                    $b = mysqli_fetch_array($a);
                                    echo $b['jml'] . ',';
                                }
                                ?>],
                        }
                    ]

                }

                var myLine = new Chart(document.getElementById("line").getContext("2d")).Bar(barChartData);

            </script>
        </div>
        </div>
    <div class="itu">
        <div class="JudulHal"style="border-bottom: solid 1px #848562;margin-top: -20px;margin-bottom: 12px">Pengunjung</div>
        <canvas id="radar" height="400" width="500"></canvas>
        <script>
            var barChartData = {
                labels : [<?php

                    $th = date("Y");
                    for ($i=1;$i<=12;$i++){
                        $dd = sprintf("%02d", $i);
                        echo '\''.$th.'-'.$dd.'\',';
                    }
                    ?>],
                datasets : [
                    {
                        fillColor : "rgba(9, 35, 78, 0.91)",
                        strokeColor : "rgba(9, 35, 78, 0.91)",
                        pointColor : "rgba(220,220,220,1)",
                        pointStrokeColor : "#fff",
                        data : [<?php

                            $th = date("Y");
                            for ($i=1;$i<=12;$i++){
                                $dd = sprintf("%02d", $i);
                                $d = $th.'-'.$dd;
                                $a=mysqli_query($conn,"SELECT count(idkunjungan) as jml FROM kunjungan WHERE substr(tglkunjungan,1,7)='$d'");
                                $b=mysqli_fetch_array($a);
                                echo $b['jml'].',';
                            }
                            ?>],
                    },

                ]

            }

            var myLine = new Chart(document.getElementById("radar").getContext("2d")).Bar(barChartData);

        </script>
    </div>
    </div>
<div id="sia">
    <div class="content">
        <div class="itu">
            <div class="JudulHal"style="border-bottom: solid 1px #848562;margin-top: -20px;margin-bottom: 12px;">Notifikasi Masa Habis Tahanan</div>
            <table class="table table-striped table-bordered data">
                <thead>
                <tr>
                    <td>No</td>
                    <td>Nama Tahanan</td>
                    <td>Habis Penahanan Dalam / Hari</td>
                    <td>action</td>
                </tr>
                </thead>
                <tbody>
                <?php
                $no =1;
                $sql =mysqli_query($conn,"SELECT * FROM tahanan, penghuni WHERE tahanan.idpenghuni=penghuni.idpenghuni AND tahanan.idtahanan AND tahanan.status='' ORDER by nmpenghuni ASC");
                while ($a =mysqli_fetch_array($sql)) {
                    $masatahanan = LamaMasatahahan("$a[idtahanan]");
                    if ($masatahanan['8'] <= 4 && $masatahanan['7'] == 0 && $masatahanan['6'] == 0) {

                            echo "
            <tr>
                <td>$no</td>
                <td>$a[nmpenghuni]</td>
                <td>$masatahanan[8] Hari</td>
                <td><a href='?page=detailtahanan&id=$a[idtahanan]'>[DETAIL]</a>   
            </tr>
            ";
                        $no++;
                        }


                }
                ?>

                </tbody>
            </table>
        </div>
        <div class="itu">
            <div class="JudulHal"style="border-bottom: solid 1px #848562;margin-top: -20px;margin-bottom: 12px;">Notifikasi Masa Habis Hukuman</div>
            <table class="table table-striped table-bordered data">
                <thead>
                <tr>
                    <td>No</td>
                    <td>Nama Narapidana</td>
                    <td>Keluar Dalam / Hari</td>
                    <td>action</td>
                </tr>
                </thead>
                <tbody>
                <?php
                $no =1;
                $sql =mysqli_query($conn,"SELECT narapidana.idnapi,penghuni.nmpenghuni,tgllahir,tptlahir, narapidana.jenisnapi,tglmasuk, jenishukuman,lamahukuman,jenislama,tglhbshukuman,status FROM penghuni,narapidana WHERE penghuni.idpenghuni= narapidana.idpenghuni ORDER by nmpenghuni ASC");
                while ($a =mysqli_fetch_array($sql)) {
                    $masahukuman = LamaMasaHukuman("$a[idnapi]");
                    if ($masahukuman['8']<=4 && $masahukuman['7']==0 && $masahukuman['6']==0 ) {
                        if (isset($a['status']) && $a['status'] == 'Bebas') {
                            echo "";
                        } else {
                            echo "<tr>
                <td>$no</td>
                <td>$a[nmpenghuni]</td>
                <td>$masahukuman[8] Hari</td>
                 <td><a href='?page=detailnapi&id=$a[idnapi]'>[DETAIL]</a>   
            </tr>";
                            $no++;
                        }
                    }

                        }

                ?>

                </tbody>
            </table>
        </div>

    </div>
</div>
</div>

