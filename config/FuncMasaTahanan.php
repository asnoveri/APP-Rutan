<?php
function LamaMasatahahan($idtahanan){
    include "conn.php";
    $sql= mysqli_query($conn, "select * from tahanan where idtahanan ='$idtahanan' " );
    $dsql = mysqli_fetch_array($sql);

    if ($dsql['tglprtpnjangan']!='0000-00-00'){
        $tglkeluar = $dsql['tglprtpnjangan'];
        //Penambahan Masa Tahanan
        $tglmasuaktbh = date_create("$dsql[tglpembebasan]");
        $tglastbh = date_create("$dsql[tglprtpnjangan]");
        $intervaltbh = date_diff($tglmasuaktbh, $tglastbh);
        $tahuntbh   = $intervaltbh->y;
        $blntbh     = $intervaltbh->m;
        $haritbh    = $intervaltbh->d;
    }else{
        $tahuntbh   = "";
        $blntbh     = "";
        $haritbh    = "";
        $tglkeluar = $dsql['tglpembebasan'];
    }

    $date1 = date_create("$dsql[tglmasuk]");
    $date2 = date_create("$tglkeluar");
    $interval = date_diff($date1, $date2);
    $tahun = $interval->y;
    $bln = $interval->m;
    $hari = $interval->d;

    //masatahananygtelahdilewati
    $tglkini = date("Y-m-d");
    $tglmasuak = date_create("$dsql[tglmasuk]");
    $tglas = date_create("$tglkini");
    $interval1 = date_diff($tglmasuak, $tglas);
    $tahunsdh = $interval1->y;
    $blnsdh = $interval1->m;
    $harisdh = $interval1->d;

    //Sisamasatahanan

    $tgllm =date_create("$tglkini");
    $tglsdh =date_create("$tglkeluar");
    $interval2 = date_diff($tgllm,$tglsdh );
    $tahunsisa = $interval2->y;
    $blnsisa = $interval2->m;
    $harisisa = $interval2->d;

    $period = array($tahun,$bln,$hari,$tahunsdh,$blnsdh,$harisdh,$tahunsisa,$blnsisa,$harisisa,$tahuntbh,$blntbh,$haritbh);
    return $period;
}

function SisaMasatahahan($idtahanan){

}
function JenisPenghuni($idpenghuni){
    include "conn.php";
    //check status narapidana
    $nrpn = mysqli_query($conn, "select * from penghuni, narapidana where penghuni.idpenghuni = narapidana.idpenghuni AND  penghuni.idpenghuni = '$idpenghuni'");
    $dnrpn = mysqli_fetch_array($nrpn);

   if (empty($dnrpn['idnapi'])){
        $j = "TAHANAN";
   }else{
       $j= "NARAPIDANA";
   }
    return $j;
}
function JmlTahanan($jenistahanan){
    include "conn.php";
    $jmllaki='jk'=='Laki-Laki';
    $jmlperempuan='jk'=='Perempuan';
    $fzeropadded = sprintf("%02d", $_POST['bln']);
    $bln = $_POST['thn'].'-'.$fzeropadded;
    $sql = mysqli_query($conn, "SELECT penghuni.jk, COUNT(tahanan.idtahanan) AS jml FROM penghuni, tahanan WHERE tahanan.jnstahanan='$jenistahanan' and penghuni.idpenghuni=tahanan.idpenghuni AND tahanan.status='' AND substr(tglmasuk,1,7)='$bln' GROUP BY penghuni.jk");
    while ($dsql = mysqli_fetch_array($sql)){
        if ($dsql['jk']=='Perempuan'){
            $jmlperempuan = $dsql['jml'];
        }else{
            $jmllaki= $dsql['jml'];
        }
    }
    $tt = $jmlperempuan+$jmllaki;
    $JmlTahanan = array($jmlperempuan,$jmllaki, $tt);
    return $JmlTahanan;
}


function TanggalIndo($date){
    $BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
    $tahun = substr($date, 0, 4);
    $bulan = substr($date, 5, 2);
    $tgl   = substr($date, 8, 2);


    if ($tahun=="0000"){
        $result = "0000-00-00";
    }else{
        $result = $tgl . " " . $BulanIndo[(int)$bulan-1] . " ". $tahun;
    }

    return($result);
}
function TanggalIndoAngko($date){
    $BulanIndo1 = array("01", "02", "03", "04", "05", "06", "07", "08", "9", "10", "11", "12");
    $tahun1 = substr($date, 0, 4);
    $bulan1 = substr($date, 5, 2);
    $tgl1   = substr($date, 8, 2);



    if ($tahun1=="0000"){
        $result = "0000-00-00";
    }else{
        $result = $tgl1 . "-" . $BulanIndo1[(int)$bulan1-1] . "-". $tahun1;
    }

    return($result);
}
?>